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
							            <li class="active"><a href="historia.php" >Historia</a></li>
							            <li ><a href="mision.php">Misi&oacute;n</a></li>
							            <li ><a href="vision.php">Visi&oacute;n</a></li>
							            <li ><a href="equipo.php">Equipo de Trabajo</a></li>
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
							            <li class="active"><a href="historia.php" >Historia</a></li>
							            <li ><a href="mision.php">Misi&oacute;n</a></li>
							            <li ><a href="vision.php">Visi&oacute;n</a></li>
							            <li ><a href="equipo.php">Equipo de Trabajo</a></li>
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
<li><a href="http://aulavirtual.fundapar.org/">Aula Virtual</a></li>
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
		 <div class="container col-sm-7  container-main">
		 <br>
		 

		 	<div class="row" id="resultadoBusqueda" >

<div class="panel panel-default">
<div class="panel-body">
		 		<h3>Historia</h3>
				 <p style="text-align: justify;">Somos una entidad sin ánimo de lucro con 10 años de trayectoria social, beneficiando a las
				 comunidades más vulnerables a través del desarrollo de programas enmarcados en valores
				 a través de 4 líneas estratégicas enfocadas en educación, bienestar social, productividad y
				 medio ambiente ubicados en la ciudad de Cartagena en el departamento de Bolívar.</p>

				 <h3>Ayudas que ofrecemos</h3>
				 <h3>Objetivo</h3>
				 <p style="text-align: justify;">Asistir de manera colectiva a comunidades vulnerables supliendo necesidades básicas por
				 medio de donaciones masivas en especie, atendiendo de manera efectiva y oportuna las
				 necesidades más apremiantes.</p>

				 <h3>Nuestra razón de ser</h3>
				 <p style="text-align: justify;">En la actualidad a pesar que la ciudad de Cartagena se posiciona como la ciudad número
				 en turismo del país, contrasta con una realidad triste que no se puede ocultar, como lo son
				 la falta de oportunidad, pobreza entre otras que traducen en cifras del 33,4% en relación
				 con el total de la población. La falta de un acompañamiento responsable y de orientación
				 por parte de los padres de familia de los niños que están bajo su cuidado se enfrentan a un
				 sin número de amenazas que ´pueden incidir en su desarrollo y realización de un proyecto
				 de vida; por ello la <strong>FUNDAPAR</strong> ha creado un programa para brindar acompañamiento a las
				 personas que en situaciones necesidad, reciban ayuda sin distinción por nacionalidad,
				 creencia religiosa o condición social, como también orientación psicológica, asesorías
				 educativas, actividades de recreación y deporte.</p>

				 <h3>A través de</h3>
				 <p style="text-align: justify;">Articulación con entidades privadas o públicas para conformar redes de apoyo y crear
				 				 				 alianzas para la gestión de recursos, equipos, suministros y talento humano hacia el
				 				 				 patrocinio de jornadas que generen bienestar en poblaciones más necesitadas.</p>

				 <h3>Aporte</h3>
				 <p style="text-align: justify;">Generar bienestar supliendo necesidades básicas de comunidades vulnerables.</p>
 </div>
</div>
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