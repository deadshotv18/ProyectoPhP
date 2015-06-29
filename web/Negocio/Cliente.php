<?php
  require_once("../Conexion/Conexion.php");//Establece enlace tipo libreria
 // include("../Datos/Conexion.php");
  
  class Cliente{
       private $rut;
	   private $nombre;
	   private $id_membresia;
	   
	   
	   public function __construct() {   }
	   
	   public function Cliente($rut,$nombre,$id_membresia)
	   { $this->rut=$rut;
	     $this->nombre=$nombre;
	   $this->id_membresia=$id_membresia;}
		
	   //ACCESADORES
	   public function   getRut()           {return $this->rut;}
	   public function   getNombre()        {return $this->nombre;}
       public function   getId_membresia()          {return $this->id_membresia;}
	   
	   //MUTANTES
	   public function   setRut($rut)       {$this->rut=$rut;}
	   public function   setNombre($nombre) {$this->nombre=$nombre;}
	   public function   setId_membresia($id_membresia)     {$this->id_membresia=$id_membresia;}
	   
	   
	   //CUSTOMIZED//TRANSACCIONALES
	   public function registrarCliente()
	   {  //Acciones o eventos de URL
	      $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql=$sql = "INSERT INTO `bdgimnasio`.`clientes` (`rut`, `nombre`, `id_membresia`) VALUES ('".$this->rut."', '".$this->nombre."', '".$this->id_membresia."');";
		  $clie=$objConex->ejecutarTransaccion($sql);
		  return $clie;	   
	   }
	   
	  public function eliminarCliente($id_membresia)
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="DELETE FROM MEMBRESIAS WHERE(ID_MEMBRESIA='".$id_membresia."')";		  
		  $clie=$objConex->ejecutarTransaccion($sql);
		  $sql="DELETE FROM CLIENTES WHERE(ID_MEMBRESIA='".$id_membresia."')";		  
		  $clie=$objConex->ejecutarTransaccion($sql);
		}

	   public function listarCliente()
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="SELECT * FROM CLIENTES C JOIN MEMBRESIAS M ON C.ID_MEMBRESIA=M.ID_MEMBRESIA ";		  
		  $matrix=$objConex->ejecutarTransaccion($sql);
		  
		  echo "<form action=../Control/clienteControl.php method=POST>";
		  echo "<table class=table border=1>";
		  echo"<th>rut</th><th>nombre</th><th>membresia</th><th>inicio membresia</th><th>edicion</th>";
		  
		  while($aux=mysql_fetch_row($matrix)){
			  			  echo "<tr><td>".$aux[0]."</td><td>".$aux[1]."</td><td><input type=text name=txtMembresia value=".$aux[3]." readonly><td>".$aux[4]."</td><td><input type=submit name=Eliminar class=button value=Eliminar></td></tr>";
			}
		  echo "</table>";
		  echo "</form>";
		}    
  }
?>
