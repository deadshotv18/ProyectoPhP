<?php
  require_once("../Conexion/Conexion.php");//Establece enlace tipo libreria
 // include("../Datos/Conexion.php");
  
  class Membresia{
       private $id_membresia;
	   private $inicio;
	   private $rut;
	   private $descripcion;
	   
	   public function __construct() {   }
	   
	   public function Membresia($id_membresia,$inicio,$rut,$descripcion)
	   { $this->id_membresia=$id_membresia;
	     $this->inicio=$inicio;
		 $this->rut=$rut;
		 $this->descripcion=$descripcion;	   
	   }
	   //ACCESADORES
	   public function   getId_membresia()           {return $this->id_membresia;}
	   public function   getiIicio()        {return $this->inicio;}
       public function   getRut()          {return $this->rut;}
	   public function   getDescripcion()          {return $this->descripcion;}
	   //MUTANTES
	   public function   setId_membresia($id_membresia)       {$this->id_membresia=$id_membresia;}
	   public function   setInicio($inicio) {$this->inicio=$inicio;}
	   public function   setRut($rut)     {$this->rut=$rut;}
	   public function   setDescripcion($descripcion)     {$this->descripcion=$descripcion;}
	   
	   //CUSTOMIZED//TRANSACCIONALES
	   public function registrarMembresia()
	   {  //Acciones o eventos de URL
	      $objConex=new Conexion();
	      $objConex->abrirConexion();
          $sql = "INSERT INTO `bdgimnasio`.`membresias` VALUES ('".$this->id_membresia."', '".$this->inicio."', '".$this->rut."','".$this->descripcion."');";
		  $clie=$objConex->ejecutarTransaccion($sql);
		  return $clie;	   
	   }
	   
	   public function modificarMembresia()
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="UPDATE membresia SET inicio='".$this->inicio."',rut='".$this->rut."',descripcion='".$this->descripcion."' WHERE(id_membresia='".$this->id_membresia."')";		  
		  $clie=$objConex->ejecutarTransaccion($sql);
		  return $clie;		   
	   }
	   
	   public function eliminarmembresia($id_membresia)
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="DELETE FROM membresia WHERE(id_membresia='".$id_membresia."')";		  
		  $clie=$objConex->ejecutarTransaccion($sql);
		  return $clie;	   
	   }

       public function consultarmembresia($id_membresia)
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="SELECT * FROM membresia WHERE(id_membresia='".$id_membresia."')";		  
		  $vector=$objConex->ejecutarTransaccion($sql);
		  return $vector;  
	   }
	   
	   public function listarMembresias()
	   {  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="SELECT * FROM membresias";		  
		  $matrix=$objConex->ejecutarTransaccion($sql);
		  return $matrix; 	   
	   }    
  }
?>
