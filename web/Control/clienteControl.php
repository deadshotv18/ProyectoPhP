<?php
  //include("../Negocio/Cliente.php");
  require_once("../Negocio/Cliente.php");//Establece enlace tipo libreria
  require_once("../Negocio/Membresia.php");
  if (isset($_POST["rut"]) && $_POST["rut"]!="")
   { $rut=$_POST["rut"];}
  if (isset($_POST["nombre"]) && $_POST["nombre"]!="")
   { $nombre=$_POST["nombre"];}
  if (isset($_POST["fecha"]) && $_POST["fecha"]!="")
   { $fecha=$_POST["fecha"];}
  if (isset($_POST["tipoMembresia"]) && $_POST["tipoMembresia"]!="")
   { $tipoMembresia=$_POST["tipoMembresia"];} 
  
  if (isset($_POST["Agregar"]) && $_POST["Agregar"]=="Agregar")
 {
	  $cliente=new Cliente();//Solicitar memoria al SO del servidor
      $membresia=new Membresia();
	  $idMembresia=rand(1,1000).$tipoMembresia;
	  $cliente->Cliente($rut,$nombre,$idMembresia);
	  $membresia->Membresia($idMembresia,$fecha,$rut,$tipoMembresia);
	  $clie=$cliente->registrarCliente();
	  $membresia->registrarMembresia();
	  if ($clie!="")  header("Location:../Vista/aviso.html");
	  //echo "Transaccion Correcta";
	  else           echo "Transaccion Fallada....";	     
   }
?>
