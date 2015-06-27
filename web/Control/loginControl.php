<?php
  //include("../Negocio/Login.php");
  require_once("../Negocio/Login.php");//Establece enlace tipo libreria
  
  if (isset($_POST["usuario"]) && $_POST["usuario"]!="")
   { $usuario=$_POST["usuario"];}
  if (isset($_POST["clave"]) && $_POST["clave"]!="")
   { $clave=$_POST["clave"];}
  
  if (isset($_POST["logear"]))
   {  $login=new Login();//Solicitar memoria al SO del servidor
      $login->Login($usuario,$clave);
	  $valid=$login->identificar($usuario,$clave);
   if($valid)
	   echo "login valido";
   else
		echo "login invalido";
   }
?>
