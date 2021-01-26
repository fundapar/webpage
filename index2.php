		<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Cartagena con Parques" />
		<meta property="og:image" content="http://fundapar.comli.com/img/logo.png" />
		<!--Twitter-->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@randyzm">
		<meta name="twitter:title" content="Fundapar">
		<meta name="twitter:description" content="Cartagena Con Parques">
		<meta name="twitter:creator" content="@morelosandres">
		<meta name="twitter:image" content=" <a href='http://fundapar.comli.com/img/logo.png'</a>">
		<title>:: Fundapar ::</title>
		<link rel="icon" href="/img/Logo.png">
		<link rel="stylesheet" href="css/page.css">
		<link rel="stylesheet" href="css/font.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				$.get("recursos/partespag/pubnew.php",function(mesaje){
				$("#pubnew").html(mesaje);
				})
			});
		</script>

	<script src="https://use.fontawesome.com/9a5740dd20.js"></script>

	</head>

	<body>
	<div class="social">
		<?php 
			require_once 'recursos/partespag/social.php';

		 ?>
	</div>


</div>
	
	<div class="container tamaño-body">
	
			
		
			

	
	 


		

	<div class="container-fluid main">
		<?php 
		session_start();
			if (isset($_SESSION['username'],$_SESSION['role']) && !empty($_SESSION['username']) && !empty($_SESSION['role'])) {
				echo '
			 	<br>
					<nav class="navbar nav-main  ">
					  <div class="container-fluid">
					    
					     <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
					      </button>
					      <a class="navbar-brand hidden-xs" href="/"><img alt="Brand" src="img/Logo.png" width=""></a>
					       <a class="navbar-brand hidden-sm  hidden-lg hidden-md" href="/"><img alt="Brand" src="img/logo.png" width=""></a>
					       <a href="/" class="navbar-brand hidden-sm hidden-lg hidden-md"><h4>Matematicas con Randy</h4></a>
					    </div>


					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					           <li class="active"><a href="/">Inicio</a></li>

					          

							        

								 <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">La Fundación<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="historia.php">Historia</a></li>
							            <li ><a href="mision.php">Misi&oacute;n</a></li>
							            <li ><a href="vision.php">Visi&oacute;n</a></li>
							            <li ><a href="equipo.php">Equipo</a></li>
							          </ul>
							        </li>

							        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Qué hacemos<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="#">Proyectos</a></li>
							           	<li ><a href="#">Conservación de Parques</a></li>
							           	<li ><a href="#">Campañas vigentes</a></li>
							          </ul>
							        </li>
									
									<li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Multimedia<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="/videos.php">Canal de Youtube</a></li>
							           	<li ><a href="#">Descarga de Cartillas</a></li>
							          </ul>
							        </li>

							         <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Educación e Investigación<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="#">Eventos</a></li>
							           	<li ><a href="#">Formación</a></li>
							           	<li ><a href="#">Centro de estudios</a></li>
							          </ul>
							        </li>

					            <li ><a href="/cms.php">CMS</a></li>
					         
					          </ul>
					           <ul class="nav navbar-nav navbar-right">
					              <li class="dropdown">
					                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['nombre'].'<span class="caret"></span></a>
					                <ul class="dropdown-menu">
					                  <li><a href="profile">Profile</a></li>
					                  <li role="separator" class="divider"></li>
					                  <li><a href="recursos/sesion.php?a=cerrar">Cerrar Sesión</a></li>
					                  <li role="separator" class="divider"></li>
					                </ul>
					              </li>
					            </ul>
					          
					            
					    </div>
					  </div>
					</nav>
			 	';
			}else{
				echo '
			 	<br>
					<nav class="navbar nav-main ">
					  <div class="container-fluid">
					    
					      <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
					      </button>
					      <a class="navbar-brand hidden-xs" href="/"><img alt="Brand" src="img/Logo.png" width=""></a>
					       <a class="navbar-brand hidden-sm  hidden-lg hidden-md" href="/"><img alt="Brand" src="img/Logo.png" width=""></a>
					       <a href="/" class="navbar-brand hidden-sm hidden-lg hidden-md"><h4>Fundapar</h4></a>
					    </div>

					    
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
						        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
					        	<li class="active"><a href="/">Inicio</a></li>

					          

							        

								 <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">La Fundación<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="historia.php">Historia</a></li>
							            <li ><a href="mision.php">Misi&oacute;n</a></li>
							            <li ><a href="vision.php">Visi&oacute;n</a></li>
							            <li ><a href="equipo.php">Equipo de Trabajo</a></li>
							          </ul>
							        </li>

							        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Qué hacemos<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="#">Proyectos</a></li>
							           	<li ><a href="#">Conservación de Parques</a></li>
							           	<li ><a href="#">Campañas vigentes</a></li>
							          </ul>
							        </li>
									
									<li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Multimedia<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="/videos.php">Canal de Youtube</a></li>
							           	<li ><a href="#">Descarga de Cartillas</a></li>
							          </ul>
							        </li>

							         <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Educación e Investigación<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="#">Eventos</a></li>
							           	<li ><a href="#">Formación</a></li>
							           	<li ><a href="#">Centro de estudios</a></li>
							          </ul>
							        </li>

					         
					          </ul>
					          
					    </div>
					  </div>
					</nav>
			 	';
			}

	  ?>
	   <div  id="carousel-example-generic" class="carousel slide " data-ride="carousel">
			<div class="carousel-inner banner" role="listbox">
					<?php require_once 'recursos/partespag/carousel-banner.php'; ?>
                            </div>
			 		 <!-- Controls -->
			 	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				 
			</div>
			<br>


		<div class="col-sm-7  container-main container-aling">
				
			<div class="row" id="resultadoBusqueda" >
		
					<?php 

						require_once 'recursos/pubs.php';
					 ?>
			</div>
	</div>
		



		<div class="container  col-sm-4 col-sm-offset-1 container-main container-side-bar">
			 
			<?php require_once 'recursos/partespag/side-bar.php' ?>
		</div>
	
	</div>

	<footer class="footer">

		<?php require_once 'recursos/partespag/footer.php' ?>
		
	</footer>
</div>
	
	

</body>
	</html>