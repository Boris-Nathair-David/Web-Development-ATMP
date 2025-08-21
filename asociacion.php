<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociacion</title>
    <?php include('Inc/common_inclu.php'); ?> <!-- inclusion del archivo comun common_inclu.php -->
</head>
<body>
    <div id="wrapper">
        <?php include('Inc/header.php'); ?>	<!-- inclusion del archivo comun header.php -->

        <div id="my-group" class="container-fluid">
            <div class="row boton-ban">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 boton-desig">
                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#mis-tar" aria-expanded="false" aria-controls="mis-tar">Misión</button>
                </div><!-- Cierre del boton Mision -->
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 boton-desig">
                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#vis-tar" aria-expanded="false" aria-controls="vis-tar">Visión</button>
                </div><!-- Cierre del boton Vision -->
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 boton-desig">
                    <button  class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#jun-tar" aria-expanded="false" aria-controls="jun-tar">Directiva</button>
                </div><!-- Cierre del boton Equipo -->
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 boton-desig">
                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#est-tar" aria-expanded="false" aria-controls="est-tar">Estatuto</button>
                </div><!-- Cierre del boton Equipo -->
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 boton-desig">
                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#com-tar" aria-expanded="false" aria-controls="com-tar">Comisiones</button>
                </div><!-- Cierre del boton Equipo -->
            </div>

            <div class="descrip-desig collapse" id="mis-tar" data-parent="#my-group">
				<div class="box-des">
					<div class="left-des">
						<h2>Aumentando la participación y crecimiento del deporte</h2>
						<img src="Images/Backgrounds/Hugo1-586904252-1024x768.jpg" alt="">
						<p class="lead">La Misión de la Asociación de Tenis de Mesa es Desarrollar el tenis de mesa en nuestro país para los atletas, entrenadores y clubes nacionales asociados.</p>
						<br>		
					</div><!-- Cierre de left-des de la seccion Mision-->
				</div><!-- Cierre de la clase box-des de la seccion Mision -->
			</div><!-- Cierre de la clase descrip-desig de la seccion Mision -->

            <div class="descrip-desig collapse" id="vis-tar" data-parent="#my-group">
				<div class="box-des">		
                        <div class="left-des">
                            <h2>Logrando metas internacionalmente</h2>
                            <img src="Images/Backgrounds/oxford_players.jpeg" alt="">
							<p class="lead">La Visión de la Asociación de Tenis de Mesa es Ser reconocidos en la región como una federación, sólida y confiable, incrementando la participación de nuestros atletas en competencias internacionales.</p>
							<br>
                        </div><!-- Cierre de left-des de la seccion Vision -->
					</div><!-- Cierre de la clase box-des de la seccion Vision -->
			</div><!-- Cierre de la clase descrip-desig de la seccion Vision -->

                <div class="sld-desig collapse" id="jun-tar" data-parent="#my-group">
				
				<div class="w3-container">
				  <h1>Nuestra Junta Directiva</h1>
				</div>
				
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="Images/Backgrounds/Team_usma2.png" class="d-block w-100" alt="...">
				    </div><!-- Cierre de la primera imagen del slideshow -->
				    <div class="carousel-item">
				      <img src="Images/Backgrounds/Team_chicas2.png" class="d-block w-100" alt="...">
				    </div><!-- Cierre de la segunda imagen del slideshow -->
				    <div class="carousel-item">
				      <img src="Images/Backgrounds/usma_family2.png" class="d-block w-100" alt="...">
				    </div><!-- Cierre de la tercera imagen del slideshow -->
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				  <br>
				  <br>
				</div><!-- Cierre del slideshow del boton equipo -->
			</div><!-- Cierre de la clase row -->
			<div class="descrip-desig collapse" id="est-tar" data-parent="#my-group">
				<div class="box-des">
					<div class="left-des">
						<h2>Manteniendo la mayor transparencia posible</h2>
						<a href="Recordatorios/Estatutos Oficiales de ATMP12-30 pag..pdf" target="_blank"><img src="Images/Logos/book.png" alt="" ></a>
						<p class="lead">Con el fin de mantener la mayor claridad y transparencia como institución compartimos el estatuto para cumplir el compromiso
							que tiene como objetivo la Asociación de Tenis de Mesa de Panamá.</p>
						<br>		
					</div><!-- Cierre de left-des de la seccion Mision-->
				</div><!-- Cierre de la clase box-des de la seccion Mision -->
			</div><!-- Cierre de la clase descrip-desig de la seccion Mision -->

        </div><!-- Cierre del container-fluid -->
		




		
			<?php include('Inc/footer.php'); ?> <!-- inclusion del archivo comun footer.php -->
	</div>
	
</body>
</html>