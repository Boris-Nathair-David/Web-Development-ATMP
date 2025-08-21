<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arbitraje</title>
    <?php include('Inc/common_inclu.php'); ?> <!-- inclusion del archivo comun common_inclu.php -->
</head>
<body>

<?php include('Inc/header.php'); ?>	<!-- inclusion del archivo comun header.php -->

<div id="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 rank-clb">
				<table id="artTable" class="stripe hover cell-border">
					<thead>
						<tr>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Pais</th>
							<th>Sexo</th>
						</tr>
					</thead>
					<tbody>
						<?=$artRank?>
					</tbody>
				</table>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clb-right">
				<h2>Lista completa de Arbitros Internacionales</h2> <a href="https://ultm.org/listado-de-arbitros-y-jueces-generales/" target="_blank">Listado de Arbitros ULTM</a>
			</div>
		</div>
	</div>
</div>

<?php include('Inc/footer.php'); ?> <!-- inclusion del archivo comun footer.php -->
</body>
</html>

