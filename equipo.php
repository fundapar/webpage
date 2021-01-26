	<?php require_once 'recursos/partespag/head.php'; ?>
	<body>
	<div class="social">
		<?php 
			require_once 'recursos/partespag/social.php';

		 ?>
	</div>


</div>
	<div class="container tamano-body">

	<div class="container-fluid main">
		<?php 
			require_once 'recursos/partespag/banner-navbar.php';

		 ?>
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
					           <li class="dropdown"><a href="/">Inicio</a></li>

					          

							        

								 <li class="active">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">La Fundación<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="historia.php">Historia</a></li>
							            <li ><a href="mision.php">Misi&oacute;n</a></li>
							            <li ><a href="vision.php">Visi&oacute;n</a></li>
							            <li class="active"><a href="equipo.php">Equipo de Trabajo</a></li>
							          </ul>
							        </li>

							        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Qué hacemos<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="proyectos.php">Proyectos</a></li>
							           	<li ><a href="conservacion.php">Conservación de Parques</a></li>
							           	<li ><a href="campanas.php">Campañas vigentes</a></li>
							          </ul>
							        </li>
									
									<li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Multimedia<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="/videos.php">Canal de Youtube</a></li>
							           	<li ><a href="descarga.php">Descarga de Cartillas</a></li>
							          </ul>
							        </li>

							         <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Educación e Investigación<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="eventos.php">Eventos</a></li>
							           	<li ><a href="formacion.php">Formación</a></li>
							           	<li ><a href="centro.php">Centro de estudios</a></li>
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
					           <ul class="nav navbar-nav navbar-right">
					              <li class="dropdown">
					                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notificaciones <span class="caret"></span></a>
					                <ul class="dropdown-menu">
					                  <li><a href="#">Publicacion Nueva</a></li>
					                  <li role="separator" class="divider"></li>
					                  	<div id="pubnew">
					                  		
					                  	</div>
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
					        	<li class="dropdown"><a href="/">Inicio</a></li>

					          

							        

								 <li class="active">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">La Fundación<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="historia.php">Historia</a></li>
							            <li ><a href="mision.php">Misi&oacute;n</a></li>
							            <li ><a href="vision.php">Visi&oacute;n</a></li>
							            <li class="active"><a href="equipo.php">Equipo de Trabajo</a></li>
							          </ul>
							        </li>

							        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Qué hacemos<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							           	<li ><a href="proyectos.php">Proyectos</a></li>
							           	<li ><a href="conservacion.php">Conservación de Parques</a></li>
							           	<li ><a href="campanas.php">Campañas vigentes</a></li>
							          </ul>
							        </li>
									
									<li class="dropdown">
							          <a tabindex="0" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" aria-expanded="false" data-submenu>Educación e Investigación<span class="caret"></span></a>
							          


					        <ul class="dropdown-menu">
							  <li><a href="eventos.php">Eventos</a></li>
								
							<li class="dropdown-submenu">
							    <a tabindex="0">Formación</a>
								    <ul class="dropdown-menu">
									     <li><a tabindex="0" href="#">Cursos PreUniversitaros</a></li>
										 <li><a tabindex="0" href="#">Cursos Nivelatorios Matematicas Basicas</a></li>
										 <li><a tabindex="0" href="#">Cursos Nivelatorios Calculo Diferencial</a></li>
										 <li><a tabindex="0" href="#">Cursos Nivelatorios Calculo Integral</a></li>
										 <li><a tabindex="0" href="#">Cursos Nivelatorios Calculo Vectorial</a></li>
										 <li><a tabindex="0" href="#">Cursos Nivelatorios Algebra Lineal</a></li>
										 <li><a tabindex="0" href="#">Diplomados</a></li>
										 <li ><a tabindex="0" href="taller.php">Talleres</a></li>
								    </ul>
						  </li>
				<li class="active"><a href="centro.php">Centro de Estudios</a></li>



</ul>
							        </li>
					         
					         <li><a href="http://aulavirtual.fundapar.org/">Aula Virtual</a></li>
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

		 <div class="container col-sm-7  container-main">
		 <br>

		 		<h3>Equipo de Trabajo</h3>
				
				 
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Randy.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
							<b>Randy Zabaleta Mesino</b> <br>
						<!--Cargo-->
							Director General <br>
						<!--Correo-->
						<a mailto="rzabaletam@fundapar.org">rzabaletam@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Romay_Zabaleta.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
						<b>Romay Zabaleta Mesino</b>  <br>
						<!--Cargo-->
						Asesora Juridica <br>
						<!--Correo-->
						<a mailto="romayzabaleta@fundapar.org">romayzabaleta@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Roberto.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
						<b>Roberto C. Rhenals Jimenez</b> <br>
						<!--Cargo-->
						Coordinador de Bienestar y Deportes <br>
						<!--Correo-->
						<a mailto="robertorhenals@fundapar.org">robertorhenals@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Rony.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
						 <b>Rony Zabaleta Mesino</b><br>
						<!--Cargo-->
						Coordinador de Cultural y Biblioteca. <br>
						<!--Correo-->
						<a mailto="ronyzabaleta@fundapar.org">ronyzabaleta@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Luis_Miguel.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
						<b>Luis Miguel Torres Orozco </b><br>
						<!--Cargo-->
						 Director Financiero<br>
						<!--Correo-->
						<a mailto="luistorres@fundapar.org">luistorres@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Gregoria.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
						<b>Gregoria Ruiz Manjarrez</b><br>
						<!--Cargo-->
						Coordinadora de Emprendimiento <br>
						<!--Correo-->
						<a mailto="gruizm@fundapar.org">gruizm@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Andres_Morelos.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
						<b>Andres Camilo Morelos Negrette</b> <br>
						<!--Cargo-->
						Coodinador de Tics<br>
						<!--Correo-->
						<a mailto="amorelos@fundapar.org">amorelos@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Guillermo.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center">
						<!--Nombre-->
						<b>Guillermo  Antonio Arreola España</b><br>
						<!--Cargo-->
						Soporte de Sistemas <br>
						<!--Correo-->
						<a mailto="garreola@fundapar.org">garreola@fundapar.org</a>
					</p>
				</div>
				<div class="col-md-6">
					<!--Image Perfil-->
					<img src="img/equipo/Agustin_Olano.jpg" class="img-circle photo-profile-equip center-block" alt="">
					<p class="text-center"> 
						<!--Nombre-->
						<b>Agustín Olano Herrera </b><br>
						<!--Cargo-->
						Coordinador  Proyectos  Ambientales <br>
						<!--Correo-->
						<a mailto="aolano@fundapar.org">aolano@fundapar.org</a>
					</p>
				</div>





		</div>



		<div class="container  col-sm-4 col-sm-offset-1 container-main container-side-bar">
			 
			<?php require_once 'recursos/partespag/side-bar.php' ?>
		</div>
<footer class="footer">

		<?php require_once 'recursos/partespag/footer.php' ?>
		
	</footer>
	
	</div>
	
</div>
	
	
<?php require_once 'recursos/partespag/finalscript.php' ?>
</body>
	</html>