<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Asociación Nacional de Tenis de Mesa de Panamá</title>	
	<?php include('Inc/common_inclu.php'); ?> <!-- inclusion del archivo comun common_inclu.php -->
</head>
<body>
	<div id="wrapper">
		<?php include('Inc/header.php'); ?>	<!-- inclusion del archivo comun header.php -->

		<section class="banner2 container-fluid"> <!-- Banner o sección demostrativo de partidos y videos nacionales  -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 top-ban">
					<h1>Revive Nuestros Eventos Nacionales</h1>
				</div><!-- Cierre de las columnas del comentario h1 -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 bot-ban">
					<!--<video id="videoplayer" muted autoplay loop >
						<source src="https://www.youtube.com/embed/GAD1kVVWSiM">
					</video>-->
					<iframe  src="https://www.youtube.com/embed/GAD1kVVWSiM?autoplay=1&loop=1&mute=1&controls=0;" 
					frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" >
					</iframe>
				</div><!-- Cierre de las columnas del video -->
			</div><!-- Cierre del div Row -->
		</section><!-- Cierre del segundo banner2 -->

		<section class="banner3 container-fluid"> <!-- Banner o sección con la insercion de el calendario con full calendar -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 top-ban">
					<h1>Consulta nuestro calendario con distintos Eventos Nacionales</h1>
				</div><!-- Cierre de las columnas del comentario h1 -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bot-ban">
					<div id="calendar" class="cal-desig"></div>
				</div><!-- Cierre de las columnas del calendario -->
			</div><!-- Cierre del div row del banner 3 -->
		</section><!-- Cierre del segundo banner3 -->

		<section class="banner4 container-fluid"> <!--  Banner o sección para la descripcion del ranking nacional y lista del top 10 nacional. -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 top-ban">
					<h1>Ranking Nacional al dia</h1>
				</div><!-- Cierre de las columnas del comentario h1 -->
			</div>
			
			<div class="row bot-ban">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-6 col-xl-6 tex-l">
					<h1>Rankings Actualizados</h1>
					<p class="lead">Siempre consulte el ranking cuando lo necesite y el de los rivales. Utilizamos un sistema de puntos asociados a la cantidad de eventos nacionales jugados y posición alcanzada en dichos torneos.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-6 col-xl-6 rank-r">
					<table id="iniTable" class="stripe hover cell-border"> <!-- Creación de la tabla con la adaptación de DataTable -->
						<thead>
						<tr>
							<th>Ranking</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Club</th>
						</tr>
						</thead>
						<tbody>
					
							<?= $iniRank ?> <!-- Llamado de la funcion iniRank para cargar los datos de los ranking masculinos en la pagina inicial -->
					
						</tbody>
					</table>
				</div>
			</div>
			
			
		</section><!-- Cierre del segundo banner4 -->

		<?php include('Inc/footer.php'); ?> <!-- inclusion del archivo comun footer.php -->
	</div><!-- Cierre del contenedor(wrapper) -->
	
</body>

</html>