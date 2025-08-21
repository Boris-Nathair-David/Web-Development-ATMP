<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociacion de Tenis de Mesa de Panama</title>
    <?php include('Main_inc/main_common_inclu.php'); ?> <!-- inclusion del archivo comun main_common_inclu.php -->
</head>
<body>

    
    <div id="wrapper">
    <?php include('Main_inc/main_header.php'); ?> <!-- inclusion del archivo comun main_header.php -->

    <section class="main_banner2 container-fluid"> <!-- Banner o sección demostrativo de partidos y videos nacionales  -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 top-ban">
					<h1>Revive Nuestros Eventos Nacionales</h1>
				</div><!-- Cierre de las columnas del comentario h1 -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 bot-ban">
					<!--<video id="videoplayer" muted autoplay loop >
						<source src="../Videos/Nacional_2019/Calvin Shi vs David.mp4">
					</video>-->
					<iframe src="https://www.youtube.com/embed/GAD1kVVWSiM?autoplay=1&mute=1&loop=1;" 
					frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" >
					</iframe>
				</div><!-- Cierre de las columnas del video -->
			</div><!-- Cierre del div Row -->
        </section><!-- Cierre del segundo banner2 -->
        
        <section class="main_banner3 container-fluid"> <!-- Banner o sección con la insercion de el calendario con full calendar -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 top-ban">
					<h1>Consulta nuestro calendario con distintos Eventos Nacionales</h1>
				</div><!-- Cierre de las columnas del comentario h1 -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bot-ban">
					<div id="calendar" class="cal-desig"></div>
				</div><!-- Cierre de las columnas del calendario -->
			</div><!-- Cierre del div row del banner 3 -->
		</section><!-- Cierre del segundo banner3 -->

		<section class="main_banner4 container-fluid"> <!--  Banner o sección para la descripcion del ranking nacional y lista del top 10 nacional. -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 top-ban">
					<h1>Ranking Nacional al dia</h1>
				</div><!-- Cierre de las columnas del comentario h1 -->
			</div>
			
			<div class="row bot-ban">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tex-l">
					<h1>Rankings Actualizados</h1>
					<p class="lead">Siempre consulte el ranking cuando lo necesite y el de los rivales. Utilizamos un sistema de puntos asociados a la cantidad de eventos nacionales jugados y posicion alcanzada en dichos torneos.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-6 col-xl-6 rank-r">
					<table id="iniTable" class="stripe hover cell-border">
						<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Edad</th>
							<th>Club</th>
						</tr>
						</thead>
						<tbody>
					
							<?= $mainIniRank ?> <!-- Llamado de la funcion iniRank para cargar los datos de los ranking masculinos en la pagina inicial -->
					
						</tbody>
					</table>
				</div>
			</div>
			
			
		</section><!-- Cierre del segundo banner4 -->

		<?php include('Main_inc/main_footer.php'); ?> <!-- inclusion del archivo comun footer.php -->

    </div>
</body>
</html>