<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Login :: w3layouts</title>
<link href="../fw/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../fw/css/style.css" rel='stylesheet' type='text/css' />
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
</head>
<body>
	<!-- start menu -->
    <div class="menu">
	  <div class="container">
		 
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="adminIndex.php">Home</a></li>
			   <li class="active"><a href="agregarCliente.php">Agregar Cliente</a></li>
			   <li><a href="agregarSuscripcion.php">Agregar Suscripcion</a></li>
			   <li><a href="../GUI/index.html">Salir</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
    <div class="main">
			<div class="register-top-grid">
				<form action="controlCliente.php" method="POST">
				<h3>INFORMACION DEL CLIENTE</h3>
					<span>RUT<label>*</label></span>
					<input type="text" name="rut"> 
					<span>nombre<label>*</label></span>
					<input type="text" name="nombre"> 
					<span>membresia<label>*</label></span>
					<select>
					<option value="gratis">gratis</option>
					<option value="30_b">30_basico</option>
					<option value="30_p">30_premium</option>
					</select> 
					<span>Fecha inicio<label>*</label></span>
					 <script>
                     $(function() {
                      $( "#datepicker" ).datepicker();
                      });
                     </script>
					<p>Date: <input type="text" id="datepicker" name="fecha"></p>					 
					<input type="submit" name="logear" class="button" value="Login">
			   </form>
			</div>
	  </div>
       <div class="clear"></div> 
        <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		    </div>
			<div class="clear"></div>
		  </div>
	   </div>
</body>
</html>