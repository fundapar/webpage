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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="ckeditor/ckeditor.js" ></script>
		<script src="ckeditor/config.js"></script>
</head>
<body>
<div class="social">
		<ul>
			<li>
				<a target="_blank" href="https://www.facebook.com/fundaparcartagena" class="icon icon-facebook"></a>
			</li>
			<li>
				<a target="_blank" href="https://twitter.com/fundaparctg" class="icon icon-twitter"></a>
			</li>
			<li>
				<a target="_blank" href="https://www.youtube.com/channel/UC00aJUTAuWXs2_gQqzsxpwQ" class="icon icon-youtube"></a>
			</li>
		</ul>
	</div>
	
	<br><br>
	 <div class="container">
		  <div  id="carousel-example-generic" class="carousel slide " data-ride="carousel">
			<div class="carousel-inner banner" role="listbox">
					<!--Item1-->
				 		<div class="item active ">
					     <a href="/">
					      <img src="img/images-slider/imagen.jpg" alt="imagen" class="carusel2 img-responsive ">
					      </a>
					    </div>	

				    <!--Item2-->
					    <div class="item ">
					     <a href="/" target="_blank">
					      <img src="img/images-slider/imagen1.png" alt="imagen" class="carusel2  img-responsive ">
					      
					       </a>
					    </div>	
                                     <!--Item3-->
				 		<div class="item ">
					     <a href="/">
					      <img src="img/images-slider/imagen2.png" alt="imagen" class="carusel2 img-responsive ">
					      </a>
					    </div>	
                                      <!--Item4-->
				 		<div class="item  ">
					     <a href="/">
					      <img src="img/images-slider/imagen3.png" alt="imagen" class="carusel2 img-responsive ">
					      </a>
					    </div>	
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
	</div>
	 <div class="container-fluid">
	 <?php 
			session_start();
			if (isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['username'] == "Admin") {
				echo '
			 	<br>
					<nav class="navbar nav-main navbar-fixed-top">
					  <div class="container-fluid">
					    
					     <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
					      </button>
					      <a class="navbar-brand hidden-xs" href="/"><img alt="Brand" src="img/Logo.png" width=""></a>
					       <a class="navbar-brand hidden-sm  hidden-lg hidden-md" href="/"><img alt="Brand" src="img/logo.png" width=""></a>
					       <a href="/" class="navbar-brand hidden-sm hidden-lg hidden-md"><h4>Fundapar</h4></a>
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
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Educación e Investigacion<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="#">Eventos</a></li>
							           	<li ><a href="#">Formacion</a></li>
							           	<li ><a href="#">Centro de estudios</a></li>
							          </ul>
							        </li>
					            <li class="active"><a href="/cms.php">CMS</a></li>
					           
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
					           <ul class="nav navbar-nav navbar-right">
					            
					              <li class="dropdown">
					                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notificaciones <span class="caret"></span></a>
					                <ul class="dropdown-menu">
					                  <li><a href="#">Publicacion Nueva</a></li>
					                  <li role="separator" class="divider"></li>
					                </ul>
					              </li>

					            </ul>
					            
					    </div>
					  </div>
					</nav>
			 	';
			}else{
				header("location: /");
			}

	  ?>

		  <div class="container">
		  <br>
			<!--FORM CMS-->
			 <form class="form-horizontal" action="recursos/publicar.php" method="POST">
				  <div class="form-group">
				    <label for="name" class="col-sm-1 control-label">Nombre:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" autocomplete="off">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="body" class="col-sm-1 control-label">Cuerpo:</label>
				    <div class="col-sm-10">
				      <textarea name="body" id="body" cols="30" rows="10" placeholder="Texto" class="form-control"></textarea>
				      <script>
				      	 CKEDITOR.replace('body');
				      </script>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="resource" class="col-sm-1 control-label">Recursos:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="resource" name="resource" placeholder="Recursos (Si son varios separar por coma )" autocomplete="off">
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="resource" class="col-sm-1 control-label">Tags:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="tags" name="tags" placeholder="Separarlos por comas (Calculo Diferencial, Derivada, etc..)." autocomplete="off">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-1 col-sm-10">
				      <button type="submit" class="btn btn-default">Publicar</button>
				    </div>
				  </div>
			</form>


		  </div>
		
	  </div>
	 
	<footer>
		<?php 
			require_once 'recursos/partespag/footer.php';
		 ?>
	</footer>

<?php require_once 'recursos/partespag/finalscript.php' ?>
</body>
</html>