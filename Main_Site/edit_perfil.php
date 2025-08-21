<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <?php include('Main_inc/main_common_inclu.php'); ?> <!-- inclusion del archivo comun common_inclu.php -->
</head>
<body>
<?php include('Main_inc/main_header.php'); ?>	<!-- inclusion del archivo comun header.php -->

<section id="wrapper">
    <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="jumbotron perf-cont">
                        <h1>Información General</h1>
                        <p>Cambie la información que desea corregir</p>
                        <div class="per-form form-style-5">
                            <div class="form-group">
                                <form name="log" id="log" action="Querys_site/update_perfil.php" method="GET">
                                    <?=$editPerf?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</section>

<?php include('Main_inc/main_footer.php'); ?> <!-- inclusion del archivo comun footer.php -->
</body>
</html>

<!--<fieldset>
                                        <label for="nombre">
                                            <h4>Nombre</h4> <input type="text" name="nombre" id="nombre" placeholder="Boris" disabled><a href="#"><i class="far fa-edit"></i></a>
                                        </label>
                                        <label for="apellido">
                                            <h4>apellido</h4> <input type="text" name="apellido" id="apellido" placeholder="Ladera"><a href="#"><i class="far fa-edit"></i></a>
                                        </label>
                                        <label for="pais">
                                        <h4>Pais</h4> <input type="text" name="pais" id="pais" placeholder="Venezuela"><a href="#"><i class="far fa-edit"></i></a>
                                        </label>
                                        <label for="edad">
                                        <h4>edad</h4> <input type="text" name="edad" id="edad" placeholder="edad"><a href="#"><i class="far fa-edit"></i></a>
                                        </label>
                                        <label for="correo_electronico">
                                            <h4>Correo electronico</h4> <input type="text" name="correo_electronico" id="correo_electronico" placeholder="boris.ladera@gmail.com"><a href="#"><i class="far fa-edit"></i></a>
                                        </label>
                                        <label for="password">
                                        <h4>Contraseña</h4> <input type="password" name="password" id="password"><a href="#"><i class="far fa-edit"></i></a>
                                        </label>
                                    </fieldset>-->