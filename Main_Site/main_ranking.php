<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ranking Nacional</title>
    <?php include('Main_inc/main_common_inclu.php'); ?>
</head>
<body>
    <?php include('Main_inc/main_header.php'); ?>

    <section id="wrapper" class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-6 col-xl-6 rank-tab">
					<h1>Ranking Masculino</h1>
					<table id="manTable" class="stripe hover cell-border">
						<thead>
						<tr>
						<th>Ranking</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Club</th>
						</tr>
						</thead>	
						<tbody>
						<?= $mascRank ?>
						</tbody>
					</table>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-6 col-xl-6 rank-tab">
					<h1>Ranking Femenino</h1>
					<table id="womTable" class="stripe hover cell-border">
						<thead>
						<tr>
						<th>Ranking</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Club</th>
						</thead>
						</tr>
						<tbody>
						<?= $womanRank ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>


    <?php include('Main_inc/main_footer.php'); ?> <!-- inclusion del archivo comun footer.php -->

</body>
</html>