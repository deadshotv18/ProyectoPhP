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
	   
	   public function modificarCliente()
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="UPDATE CLIENTE SET NOMBRE='".$this->nombre."',id_membresia='".$this->id_membresia."',FONO='".$this->fono."' WHERE(RUT='".$this->rut."')";		  
		  $clie=$objConex->ejecutarTransaccion($sql);
		  return $clie;		   
	   }
	   
	   public function eliminarCliente($rut)
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="DELETE FROM CLIENTE WHERE(RUT='".$rut."')";		  
		  $clie=$objConex->ejecutarTransaccion($sql);
		  return $clie;	   
	   }

       public function consultarCliente($rut)
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="SELECT * FROM CLIENTE WHERE(RUT='".$rut."')";		  
		  $vector=$objConex->ejecutarTransaccion($sql);
		  return $vector;  
	   }
	   
	   public function listarCliente()
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="SELECT * FROM CLIENTES C JOIN MEMBRESIAS M ON C.ID_MEMBRESIA=M.ID_MEMBRESIA ";		  
		  $matrix=$objConex->ejecutarTransaccion($sql);
		  echo "<html>";
		  echo "<table class=table border=1>";
		  while($aux=mysql_fetch_row($matrix)){
			  echo"<th>rut</th><th>nombre</th><th>membresia</th><th>inicio membresia</th><th>edicion</th>";
			  echo "<tr><td>".$aux[0]."</td><td>".$aux[1]."</td><td>".$aux[2]."</td><td>".$aux[4]."</td><td><input type=submit name=Eliminar class=button value=Eliminar><input type=submit name=Editar class=button value=Editar></td></tr>";
			  
			}
		  echo "</table>";
		  echo "</html>";
		   	   
	   }    
  }
?>