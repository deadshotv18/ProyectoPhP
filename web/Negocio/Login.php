<?php
  require_once("../Conexion/Conexion.php");//Establece enlace tipo libreria
 // include("../Conexion/Conexion.php");
  
  class Login{
       private $usuario;
	   private $clave;
	   private $rol;
	   
	   public function __construct() {   }
	   
	   public function Login($usuario,$clave)
	   { $this->usuario=$usuario;
	     $this->clave=$clave;
	   }
	   //ACCESADORES
	   public function   getUsuario()           {return $this->usuario;}
	   public function   getClave()        {return $this->clave;}
       public function   getRol()          {return $this->rol;}
	   //MUTANTES
	   public function   setUsuario($usuario)       {$this->usuario=$usuario;}
	   public function   setClave($clave) {$this->clave=$clave;}
	   public function   setRol($rol)     {$this->rol=$rol;}
	
	   
	   //CUSTOMIZED//TRANSACCIONALES
		public function identificar($usuario,$clave)
	   {  
		  $valid=false;
		  $objConex=new Conexion();
	      $objConex->abrirConexion();
		  $sql="SELECT * FROM USUARIOS WHERE(usuario='".$usuario."')";		  
		  $vector=$objConex->ejecutarTransaccion($sql);
		  if($vector!=null){
			  $resul=mysql_fetch_row($vector);
			  $userName=$resul[0];
			  $password=$resul[1];
		      $perfil=$resul[2];
			if($usuario==$userName&&$clave==$password){
			 $valid=true;
			 $this->setRol($perfil);
			 }
		  }
		  return $valid;  
	   }
	}
?>
