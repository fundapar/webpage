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
		<link rel="icon" href="../img/Logo.png">
		<link rel="stylesheet" href="../css/page.css">
		<link rel="stylesheet" href="../css/font.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
		
		<script>
		   
		function buscar() {
		    var textoBusqueda = $("#user").val();
		     if (textoBusqueda != "" && textoBusqueda.length>=6 && textoBusqueda.length<10) {
		        $.post("recursos/busqueda.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
		            if(mensaje === "Valido"){
		            	
		            	$("#user2").removeClass("has-success");
		            	$("#user2").addClass("has-error");
		            }else{
		            	$("#regis").removeAttr("disabled");
		            	$("#user2").removeClass("has-error");
		            	$("#user2").addClass("has-success");
		            }
		        }); 
		    }else{
		    	$("#regis").attr("disabled","disabled");
		    	$("#user2").removeClass("has-success");
		         $("#user2").addClass("has-error");
		    }
		};

		
		</script>
		
	</head>
	<body>
	<br><br>
	<div class="container">
		  <div  id="carousel-example-generic" class="carousel slide " data-ride="carousel">
			<div class="carousel-inner banner" role="listbox">
					<!--Item1-->
				 		<div class="item active ">
					     <a href="/">
					      <img src="../img/images-slider/imagen.jpg" alt="imagen" class="carusel2 img-responsive ">
					      </a>
					    </div>	

				    <!--Item2-->
					    <div class="item ">
					     <a href="/" target="_blank">
					      <img src="../img/images-slider/imagen1.png" alt="imagen" class="carusel2  img-responsive ">
					      
					       </a>
					    </div>	
                                     <!--Item3-->
				 		<div class="item ">
					     <a href="/">
					      <img src="../img/images-slider/imagen2.png" alt="imagen" class="carusel2 img-responsive ">
					      </a>
					    </div>	
                                      <!--Item4-->
				 		<div class="item  ">
					     <a href="/">
					      <img src="../img/images-slider/imagen3.png" alt="imagen" class="carusel2 img-responsive ">
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
			

		

	<div class="container-fluid main">
		<?php 
		session_start();
			 if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
				header("location: /");

			}else{
				echo '
			 	<br>
					<nav class="navbar nav-main navbar-fixed-top">
					  <div class="container-fluid">
					    
					      <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
					      </button>
					      <a class="navbar-brand hidden-xs" href="/"><img alt="Brand" src="../img/Logo.png" width=""></a>
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
					            <li><a href="/videos.php">Videos</a></li>
					            
								 <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Quienes Somos<span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li class="dropdown"><a href="historia.php">Historia</a></li>
							            <li class="dropdown"><a href="mision.php">Misi&oacute;n</a></li>
							            <li class="dropdown"><a href="vision.php">Visi&oacute;n</a></li>
							          </ul>
							        </li>
					         
					          </ul>
					           <ul class="nav navbar-nav navbar-right">
					           
					              <li class="dropdown">
					                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notificaciones <span class="caret"></span></a>
					                <ul class="dropdown-menu">
					                  <li role="presentation" class="dropdown-header">Publicacion Nueva</li>
					                  <li role="separator" class="divider"></li>
					                  <div id="pubnew">
					                  		
					                  	</div>
					                </ul>
					              </li>
					            
					              
					            </ul>
					    </div>
					  </div>
					</nav>
			 	';}

	  ?>


		 
		<div class="container col-sm-7  container-main">
		 	<div class="row">
		 	<br>
			<?php 
				echo '
					<form class="form-horizontal" action="/recursos/sesion.php" method="POST">
			  				<div class="form-group">
			   					 <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
			    				<div class="col-sm-10">
				      				<input type="text" class="form-control" id="inputEmail3" name="name" autocomplete="off" placeholder="Email o Usuario" required>
				    			</div>
				  			</div>
								 <div class="form-group">
											<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
											<div class="col-sm-10">
													<input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="Password" required>
											</div>
									</div>
									<input type="hidden" name="url" value="/">
							 <div class="form-group">
									 <div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-primary">Entrar</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
									 </div>
							 </div>
							 <p class="col-sm-offset-2">No tengo Cuenta <a href="registro.php" >Registrame</a>.</p>
					</form>
				';
			 ?>
			 </div>
		</div>




		<div class="container  col-sm-4 col-sm-offset-1 container-main">
		
			<h3>Anuncios</h3>
			<div class="row">
			  <div class="col-xs-12 col-md-12">
			    <a href="#" class="thumbnail">
			      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU0MzE4MDUyNDQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTQzMTgwNTI0NCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI1Ni40NjY2NjcxNzUyOTI5NyIgeT0iOTQuNjg5OTk5OTYxODUzMDMiPjE3MXgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="...">
			    </a>
			  </div>
			  <div class="col-xs-12 col-md-12">
			    <a href="#" class="thumbnail">
			      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU0MzE4MDUyNDQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTQzMTgwNTI0NCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI1Ni40NjY2NjcxNzUyOTI5NyIgeT0iOTQuNjg5OTk5OTYxODUzMDMiPjE3MXgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="...">
			    </a>
			  </div>
			  <div class="col-xs-12 col-md-12">
			    <a href="#" class="thumbnail">
			      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU0MzE4MDUyNDQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTQzMTgwNTI0NCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI1Ni40NjY2NjcxNzUyOTI5NyIgeT0iOTQuNjg5OTk5OTYxODUzMDMiPjE3MXgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="...">
			    </a>
			  </div>
			  
			</div>
		</div>
	
	</div>
	<footer class="footer">
		
			<?php 
				require_once '../recursos/partespag/footer_extern.php';
			 ?>
	
		
	</footer>
	 
	</body>
	
	</html>