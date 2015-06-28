<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Login :: w3layouts</title>
<link href="../fw/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../fw/css/style.css" rel='stylesheet' type='text/css' />
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
					<span>First Name<label>*</label></span>
					<input type="text"> 
					<span>Last Name<label>*</label></span>
					<input type="text"> 
					<span>Email Address<label>*</label></span>
					<input type="text"> 
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