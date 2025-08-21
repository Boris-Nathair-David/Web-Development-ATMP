555555555555555555555555555555<?php 


/* ------------------ Funcion para realizar el acceso a la base de datos (antmp) ------------------------------ */

    function dataBas(){

       
        
        
    }


/* ------------------ Esta funcion almacena y procesa el contenido de la barra de navegacion con bootstrap ---------------- */

 function headerNav(){
     $headerNav = ' <div class="container-fluid bar-header">
     <a class="navbar-brand" href="index.php"><img src="Images/Logos/logo atmp(sin_fondo1).png" alt="Logotipo de la Asociación Nacional de Tenis de Mesa de Panamá"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
         <span style=""><i id="bar-button" class="fas fa-bars"></i></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
         
             <li class="nav-item active">
                 <a class="nav-link" href="index.php">Inicio</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" href="#calendar">Calendario</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" href="noticias.php">Noticias</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="asociacion.php">Asociación</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="tor_nacio.php">Torneos</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="ranking.php">Ranking</a>
             </li>
             <li class="nav-item active">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="drop-c" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clubes</a>

                    <div class="dropdown-menu" aria-labelldby="drop-c">
                        <a class="dropdown-item" href="entrenadores.php">Entrenadores</a>
                        <a class="dropdown-item" href="arbitraje.php">Arbitraje</a>
                        <a class="dropdown-item disabled" href="clubes.php">Clubes</a>
                    </div>
                </div>
             </li>
    
             <li class="nav-item">
                 <a class="nav-link" href="login.php">Iniciar Sesión</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="sign_up.php">Registrarse</a>
             </li>
         
         </ul>
     </div>
 </div>';

    return $headerNav;
 }

 function mainHeaderNav(){
    $mainHeaderNav = ' <div class="container-fluid main-bar-header">
    <a class="navbar-brand" href="main_index.php"><img src="../Images/Logos/logo atmp(sin_fondo1).png" alt="Logotipo de la Asociación Nacional de Tenis de Mesa de Panamá"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span style="color:tomato;"><i id="bar-button"class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        
            <li class="nav-item active">
                <a class="nav-link" href="main_index.php">Inicio</a>
            </li>
            <li class="nav-item active">
                 <a class="nav-link" href="#calendar">Calendario</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" href="main_noticias.php">Noticias</a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="main_asociacion.php">Asociación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="main_tor_nacio.php">Torneos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="main_ranking.php">Ranking</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="main_galeria.php">Galería</a>
            </li>
            <li class="nav-item active">
                 <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="drop-c" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clubes</a>

                    <div class="dropdown-menu" aria-labelldby="drop-c">
                        <a class="dropdown-item" href="main_entrenadores.php">Entrenadores</a>
                        <a class="dropdown-item" href="main_arbitraje.php">Arbitraje</a>
                        <a class="dropdown-item" href="main_clubes.php">Clubes</a>
                    </div>
                </div>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="perfil.php">Perfil</a>
            </li>
       
            <li class="nav-item">
                <a class="nav-link" href="Main_inc/cerrar_sesion.php">Cerrar</a>
            </li>
        </ul>
    </div>
</div>';

return $mainHeaderNav;

 }

/* ------------- Esta funcion sirve para cambiar el mensaje de presentación del primer banner de bienvenida (ejemplo: bienvenidos a la asociacion nacional de tenis de mesa) ---------------*/

 function mensajePre(){
     $urlIn = $_SERVER['REQUEST_URI'];
     $mensajePre = '';

     if ($urlIn == '/ATMP/' ) {
        # Mensaje a mostrar en el inicio de la pagina principal.
        $mensajePre = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Bienvenidos a la Asociación de Tenis de Mesa de Panamá</h1>
                </div>
            </div>
        </div>';
        return $mensajePre;

    }else if ($urlIn == '/ATMP/index.php' ) {
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mensajePre = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Bienvenidos a la Asociación de Tenis de Mesa de Panamá</h1>
                </div>
            </div>
        </div>';
        return $mensajePre;

    }else if($urlIn == '/ATMP/noticias.php'){
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mensajePre = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Infórmate con nuestra sección de noticias</h1>
                </div>
            </div>
        </div>';
        return $mensajePre;
    }else if($urlIn == '/ATMP/asociacion.php' ){
        # Mensaje descriptivo de la asociación.
        $mensajePre = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>¡Conoce nuestro equipo de trabajo!</h1>
                            </div>
                        </div>
                    </div>';
        return $mensajePre;

    }else if($urlIn == '/ATMP/entrenadores.php'){
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mensajePre = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Entrenadores certificados</h1>
                </div>
            </div>
        </div>';
        return $mensajePre;
    }else if($urlIn == '/ATMP/arbitraje.php'){
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mensajePre = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Arbitros internacionales y nacionales</h1>
                </div>
            </div>
        </div>';
        return $mensajePre;
    }else if($urlIn == '/ATMP/clubes.php'){
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mensajePre = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Clubes formales de Panamá</h1>
                </div>
            </div>
        </div>';
        return $mensajePre;
    }else if($urlIn == '/ATMP/tor_nacio.php'){
        # Mensaje de aviso de inicio o registro para observar los torneos en la sección Torneos.
        $mensajePre = '<div class="container inside-ban1">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <div class="container url_torN">
                            <div class="row">
                                <div class="col-12">
                                <h1><img src="Images/Logos/warning.png"/> Aviso Importante <img src="Images/Logos/warning.png"/></h1>
                                <p class="lead">Saludos, Por favor <a href="login.php">Inicie Sesión</a> o realice un <a href="sign_up.php">Registro</a> en nuestro sitio web para poder observar los partidos 
                                Nacionales. Gracias por la atención.</a></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>';
        return $mensajePre;

    }
    else if($urlIn == '/ATMP/ranking.php'){
        # Mensaje de aviso de inicio o registro para observar el ranking de los jugadores en la sección Ranking.
        $mensajePre = '<div class="container inside-ban1">
                            <div class="row jumbotron">
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                    <div class="container url_torN">
                                            <div class="row">
                                                <div class="col-12">
                                                <h1><img src="Images/Logos/warning.png"/> Aviso Importante <img src="Images/Logos/warning.png"/></h1>
                                                <p class="lead">Saludos, Por favor <a href="login.php">Inicie Sesión</a> o realice un <a href="sign_up.php">Registro</a> en nuestro sitio web para poder observar 
                                                el Ranking Nacional. Gracias por la atención.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
        return $mensajePre;

    }else if($urlIn == '/ATMP/contactenos.php'){
        # Mensaje descriptivo de Contactenos.
        $mensajePre = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>¡Contáctanos nos interesa tu opinion!</h1>
                            </div>
                        </div>
                    </div>';
        return $mensajePre;

    }else if($urlIn == '/ATMP/galeria.php'){
        # Mensaje de aviso de inicio o registro para observar la galeria de imagenes tomadas en los torneos nacionales.
        $mensajePre = '<div class="container inside-ban1">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <div class="container url_torN">
                        <div class="row">
                            <div class="col-12">
                            <h1><img src="Images/Logos/warning.png"/> Aviso Importante <img src="Images/Logos/warning.png"/></h1>
                            <p class="lead">Saludos, Por favor <a href="login.php">Inicie Sesión</a> o realice un <a href="sign_up.php">Registro</a> en nuestro sitio web para poder observar 
                            las fotos tomadas en Galerias. Gracias por la atención.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        return $mensajePre;

    }else if($urlIn == '/ATMP/login.php'){
        # Formulario de inicio de sesión.
        $mensajePre = '<section class="form-banner  ">
        <div class="in-banner2 inside-ban1 login-ban container-fluid">
                    <div class="formu-desig form-style-5  row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <form action="Main_Site/Querys_site/comprobacion_login.php" method="post">
                            <img src="Images/Logos/mesa-de-ping-pong.png"/>
                                <h2>Inicio de Sesión</h2>
                                <label for="correo"> 
                                <input class="text-in" type="text" id="correo" name="correo_electronico" placeholder="Correo Electrónico" required>
                                </label>
                                <br>
                                <label for="password">
                                <input class="text-in" type="password" id="password" name="password" placeholder="Contraseña" required>
                                 </label>
                                <br>
                                <input class="btn btn-primary" type="submit" value="Iniciar Sesión">
                            </form>
                        </div>
                    </div>	
        </div><!-- cierre del in-banner1 -->
    </section><!-- Cierre del primer banner1 -->';
        return $mensajePre;

    }else if($urlIn == '/ATMP/sign_up.php'){
        # Formulario de registro de Usuario.
        $mensajePre = '<section class="form-banner">
        <div class="in-banner2 inside-ban1">
                    <div class="formu-desig form-style-5">
                        <div class="form-group">
                            <form action="registro_de_usuario.php" method="post">
                            <fieldset>
                                <img src="Images/Logos/mesa-de-ping-pong.png"/>
                                <h2>Formulario de Registro</h2>
                                <label for="nombre"> 
                                <input class="text-in" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                                </label>
                                
                                <label for="apellido"> 
                                <input class="text-in" type="text" id="apellido" name="apellido" placeholder="Apellido">
                                </label>
                                
                                <label for="pais"> 
                                <input class="text-in" type="text" id="pais" name="pais" placeholder="País" required>
                                </label>
                                
                                <label for="correo_electronico"> 
                                <input class="text-in" type="text" id="correo_electronico" name="correo_electronico" placeholder="Correo Electrónico" required>
                                </label>
                                
                                <label for="edad"> 
                                <input class="text-in" type="text" id="edad" name="edad" placeholder="Edad" >
                                </label>

                                <label for="password">
                                <input class="text-in" type="password" id="password" name="password" placeholder="Introduzca una contraseña" required>
                                 </label>

                                 <label for="re_password">
                                <input class="text-in" type="password" id="re_password" name="re_password" placeholder="Repita la contraseña" required>
                                 </label>
        
                                <br>
                                <input class="btn btn-primary" type="submit" value="Registrar" name="Registrar">
                                </fieldset>
                            </form>
                        </div>
                    </div>
        </div><!-- cierre del in-banner1 -->
    </section><!-- Cierre del primer banner1 -->';
        return $mensajePre;

    }else if($urlIn == '/ATMP/comprobacion_registro.php'){
        # Mensaje de comprobación de registro.
        $mensajePre = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <div class="container url_torN">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="Images/Logos/mesa-de-ping-pong.png"/>
                                            <h1> ¡A creado su cuenta! </h1>
                                                <p class="lead" style="text-align:center">Se ha registrado satisfactoriamente.<br> Pulse aqui para <a href="login.php">Iniciar Sesion</a> <br>
                                                    O pulse aqui para regresar a la pagina principal <a href="index.php">Inicio</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
    return $mensajePre;

    }
}

/* ----------------------------- Funcion para el cambio de mensaje de presentación de la sección principal del sitio web ---------------------------------- */

function mainMensa(){
    $mainUrl = $_SERVER['REQUEST_URI'];
    $mainMensa = '';

    if ($mainUrl == '/ATMP/Main_Site/main_index.php' ) {
        # Mensaje a mostrar en el inicio de la pagina principal.
        $mainMensa = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>Bienvenidos a la Asociación de Tenis de Mesa de Panamá</h1>
                            </div>
                        </div>
                    </div>';
        return $mainMensa;

    }else if($mainUrl == '/ATMP/Main_Site/main_noticias.php'){
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mainMensa = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Infórmate con nuestra sección de noticias</h1>
                </div>
            </div>
        </div>';
        return $mainMensa;
    }else if($mainUrl == '/ATMP/Main_Site/main_asociacion.php' ){
        # Mensaje descriptivo de la asociación.
        $mainMensa = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>¡Conoce nuestro equipo de trabajo!</h1>
                            </div>
                        </div>
                    </div>';
        return $mainMensa;

    }else if($mainUrl == '/ATMP/Main_Site/main_entrenadores.php'){
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mainMensa = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Entrenadores certificados</h1>
                </div>
            </div>
        </div>';
        return $mainMensa;
    }else if($mainUrl == '/ATMP/Main_Site/main_arbitraje.php'){
        # Mensaje a mostrar en el inicio de la pagina principal cuando selecciona el index del sitio web.
        $mainMensa = '<div class="container inside-ban1 ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                     <h1>Arbitros internacionales y nacionales</h1>
                </div>
            </div>
        </div>';
        return $mainMensa;
    }else if($mainUrl == '/ATMP/Main_Site/main_tor_nacio.php'){
        # Mensaje descriptivo de Torneos Nacionales.
        $mainMensa = '<div class="container inside-ban1">
                            <div class="row jumbotron">
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                    <h1>Torneos Nacionales y Juegos en todo momento</h1>
                                </div>
                            </div>
                        </div>';
        return $mainMensa;

    }else if($mainUrl == '/ATMP/Main_Site/main_ranking.php'){
        # Mensaje descriptivo del Ranking Nacional.
        $mainMensa = '<div class="container inside-ban1">
                            <div class="row jumbotron">
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                    <h1>¡Ranking de los jugadores Nacionales Actualizados!</h1>
                                </div>
                            </div>
                        </div>';
        return $mainMensa;

    }else if($mainUrl == '/ATMP/Main_Site/main_galeria.php'){
        # Mensaje descriptivo de la galeria.
        $mainMensa = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>¡Disfruta de los momentos captados en Torneos!</h1>
                            </div>
                        </div>
                    </div>';
        return $mainMensa;

    }else if($mainUrl == '/ATMP/Main_Site/main_contactenos.php'){
        # Mensaje descriptivo de contactenos.
        $mainMensa = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>¡Contáctanos nos interesa tu opinion!</h1>
                            </div>
                        </div>
                    </div>';
        return $mainMensa;

    }else if($mainUrl == '/ATMP/Main_Site/perfil.php'){
        # Mensaje descriptivo del perfil de usuario.
        $mainMensa = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>Cambia tu información personal</h1>
                            </div>
                        </div>
                    </div>';
        return $mainMensa;

    }else if($mainUrl == '/ATMP/Main_Site/edit_perfil.php'){
        # Mensaje descriptivo del perfil de usuario.
        $mainMensa = '<div class="container inside-ban1">
                        <div class="row jumbotron">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                                <h1>Cambia tu información personal</h1>
                            </div>
                        </div>
                    </div>';
        return $mainMensa;
    }
}

/* --------------------------------------- Funcion Query para registrar usuarios a la base de datos ---------------------------------- */

function regUsua(){
    if(isset($_POST['Registrar'])){

        require('BaseDeDatos/conexion.php');

        mysqli_set_charset($conexion, "utf8");
    
            $nombre= strip_tags(addslashes($_POST['nombre']));
            $apellido= strip_tags(addslashes($_POST['apellido']));
            $pais= strip_tags(addslashes($_POST['pais']));
            $edad= strip_tags(addslashes($_POST['edad']));
            $correo_electronico= strip_tags(addslashes($_POST['correo_electronico']));
            $password= strip_tags(addslashes($_POST['password']));
            
            $consulta = "INSERT INTO usuarios (nombre,apellido,pais,edad,correo_electronico,password) VALUES 
            ('$nombre','$apellido','$pais','$edad','$correo_electronico','$password')";
            
            $valor=$mysqli->query($consulta);
            
            header('location:comprobacion_registro.php');
          
        }
        
    }

/*------------------------------------------ Funcion para carga de noticias --------------------------- */

function iniNoti(){

    require('BaseDeDatos/conexion.php');
    
    $consulta = "SELECT not_img, not_titulo, not_autor, not_fecha, not_descrip FROM noticias
     ORDER BY not_fecha DESC LIMIT 5";

    $valor=$mysqli->query($consulta);

    $iniNoti='';
    $notImg;

    while($res = $valor->fetch_assoc() ){
        $notImg='Images/Noticias/Torneos_Nacionales/'.$res['not_img'].'.png';
        $iniNoti .= "<div class='not-cont'>
                        <div class='not-img col-6 '>
                            <h6><a href=''>Torneos Nacionales</a></h6>
                            <a href=''><img src='$notImg' alt=''></a>
                        </div>
                        <div class='not col-6 '>
                            <h3><a href=''>".$res['not_titulo']."</a></h3>
                            <h6>".$res['not_autor']." | ".$res['not_fecha']."</h6>
                            <p>".$res['not_descrip']."</p>
                        </div>
                    </div>";
    }

    return $iniNoti;
}

function mainIniNoti(){

    require('../BaseDeDatos/conexion.php');
    
    $consulta = "SELECT not_img, not_titulo, not_autor, not_fecha, not_descrip FROM noticias
     ORDER BY not_fecha DESC LIMIT 5";

    $valor=$mysqli->query($consulta);

    $mainIniNoti='';
    $notImg;

    while($res = $valor->fetch_assoc() ){
        $notImg='../Images/Noticias/Torneos_Nacionales/'.$res['not_img'].'.png';
        $mainIniNoti .= "<div class='not-cont'>
                        <div class='not-img col-6 '>
                            <h6><a href=''>Torneos Nacionales</a></h6>
                            <a href=''><img src='$notImg' alt=''></a>
                        </div>
                        <div class='not col-6 '>
                            <h3><a href=''>".$res['not_titulo']."</a></h3>
                            <h6>".$res['not_autor']." | ".$res['not_fecha']."</h6>
                            <p>".$res['not_descrip']."</p>
                        </div>
                    </div>";
    }

    return $mainIniNoti;
}




/* ------------------------------------------------ Funcion para filtrado de los torneos nacionales ------------------------------------------- */

function showVids(){

    require('../BaseDeDatos/conexion.php');

    $queryV= "SELECT id_images, direccion_images,id_tempo1, id_medias1, id_media,direccion_media, anios, descripcion FROM images
    INNER JOIN images_medias ON images.id_images = images_medias.id_medias1 
    INNER JOIN medias ON images_medias.id_medias1 = medias.id_media
    INNER JOIN temporadas ON images.id_tempo1 = temporadas.id_tempo ORDER BY direccion_images ASC ";
    $resultados = $mysqli->query($queryV);

    $showVids ='';
    $vids_tempV;
    $imag_tempV;
    $an_tempV;
    while($row = $resultados->fetch_assoc()){
        $vids_tempV = $row['direccion_media'];
        $imag_tempV ='../Images/Galeria/2019/'.$row['direccion_images'].'.jpg';
        $an_tempV = $row['anios'];
        $showVids .= "<div class='box-img'>
    <a href='#' data-toggle='modal' data-target='#modal-".$row['id_media']."'><img src='$imag_tempV' alt=''></a>

    <div id='modal-".$row['id_media']."' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered modal-xl' role='document'>
                            <div class='modal-content'>
  
                                <div class='modal-body'>
                                    <iframe  src='$vids_tempV' 
                                        frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>
                                    </iframe>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <h4>Torneo Nacional $an_tempV</h4>
                    <p>Categoria: Mayor <br> 
                    ".$row['descripcion']."</p>

                    <!--<video src='$vids_tempV' controls></video>--></div>";
    }
    return $showVids;
}
/* -------------------- Funcion para obtener los datos del ranking a mostrar en la pagina inicial -------------------- */

function iniRank(){

    require('BaseDeDatos/conexion.php');
    
    $consulta = "SELECT id_gen1, nombre, apellido, club, ranking, id_gen, gen FROM jugadores
    INNER JOIN genero ON jugadores.id_gen1 = genero.id_gen WHERE id_gen1 = 1 ORDER BY ranking ASC LIMIT 10";

    $valor=$mysqli->query($consulta);

    $iniRank='';
    
    while($res = $valor->fetch_assoc() ){
        $iniRank .= '<tr>';
        $iniRank .= '<td>'.$res['ranking'].'</td>';
        $iniRank .= '<td>'.$res['nombre'].'</td>';
        $iniRank .= '<td>'.$res['apellido'].'</td>';
        $iniRank .= '<td>'.$res['club'].'</td>';
        $iniRank .= '</tr>';
    }

    return $iniRank;
}


/* -------------------- Funcion para obtener los datos del ranking a mostrar en la pagina inicial -------------------- */

function mainIniRank(){

    require('../BaseDeDatos/conexion.php');
    
    $consulta = "SELECT id_gen1, nombre, apellido, club, ranking, id_gen, gen FROM jugadores
    INNER JOIN genero ON jugadores.id_gen1 = genero.id_gen WHERE id_gen1 = 1 ORDER BY ranking ASC LIMIT 10";

    $valor=$mysqli->query($consulta);

    $mainIniRank='';
    
    while($res = $valor->fetch_assoc() ){
        $mainIniRank .= '<tr>';
        $mainIniRank .= '<td>'.$res['ranking'].'</td>';
        $mainIniRank .= '<td>'.$res['nombre'].'</td>';
        $mainIniRank .= '<td>'.$res['apellido'].'</td>';
        $mainIniRank .= '<td>'.$res['club'].'</td>';
        $mainIniRank .= '</tr>';
    }

    return $mainIniRank;
}

/* -------------------- Funcion para obtener los datos del ranking masculino en la pagina del ranking -------------------- */

function mascRank(){
    
    require('../BaseDeDatos/conexion.php');

    $consulta = "SELECT id_gen1, nombre, apellido, club, ranking, id_gen, gen FROM jugadores
    INNER JOIN genero ON jugadores.id_gen1 = genero.id_gen WHERE id_gen1 = 1 ORDER BY ranking ASC";

    $valor=$mysqli->query($consulta);

    $mascRank='';
    
    while($res = $valor->fetch_assoc() ){
        $mascRank .= '<tr>';
        $mascRank .= '<td>'.$res['ranking'].'</td>';
        $mascRank .= '<td>'.$res['nombre'].'</td>';
        $mascRank .= '<td>'.$res['apellido'].'</td>';
        $mascRank .= '<td>'.$res['club'].'</td>';
        $mascRank .= '</tr>';
    }

    return $mascRank;
}

/* -------------------- Funcion para obtener los datos del ranking femenino en la pagina del ranking -------------------- */


function womanRank(){
    require('../BaseDeDatos/conexion.php');

    $consulta = "SELECT id_gen1, nombre, apellido, club, ranking, id_gen, gen FROM jugadores
    INNER JOIN genero ON jugadores.id_gen1 = genero.id_gen WHERE id_gen1 = 2 ORDER BY ranking ASC";

    $valor=$mysqli->query($consulta);

    $womanRank='';
    
    while($res = $valor->fetch_assoc() ){
        $womanRank .= '<tr>';
        $womanRank .= '<td>'.$res['ranking'].'</td>';
        $womanRank .= '<td>'.$res['nombre'].'</td>';
        $womanRank .= '<td>'.$res['apellido'].'</td>';
        $womanRank .= '<td>'.$res['club'].'</td>';
        $womanRank .= '</tr>';
    }

    return $womanRank;
}

/* ------------------------------------ Funcion para la lista de entrenadores ---------------------------------------*/
function entRank(){

    require('BaseDeDatos/conexion.php');
    
    $consulta = "SELECT ent_acreditados, ent_year, ent_pais FROM entrenadores";

    $valor=$mysqli->query($consulta);

    $entRank='';
    
    while($res = $valor->fetch_assoc() ){
        $entRank .= '<tr>';
        $entRank .= '<td>'.$res['ent_acreditados'].'</td>';
        $entRank .= '<td>'.$res['ent_year'].'</td>';
        $entRank .= '<td>'.$res['ent_pais'].'</td>';
        $entRank .= '</tr>';
    }

    return $entRank;
}

function mainEntRank(){

    require('../BaseDeDatos/conexion.php');
    
    $consulta = "SELECT ent_acreditados, ent_year, ent_pais FROM entrenadores";

    $valor=$mysqli->query($consulta);

    $mainEntRank='';
    
    while($res = $valor->fetch_assoc() ){
        $mainEntRank .= '<tr>';
        $mainEntRank .= '<td>'.$res['ent_acreditados'].'</td>';
        $mainEntRank .= '<td>'.$res['ent_year'].'</td>';
        $mainEntRank .= '<td>'.$res['ent_pais'].'</td>';
        $mainEntRank .= '</tr>';
    }

    return $mainEntRank;
}

/* ------------------------------------ Funcion para la lista de arbitros ---------------------------------------*/

function artRank(){

    require('BaseDeDatos/conexion.php');
    
    $consulta = "SELECT arbt_apellido, arbt_nombre, arbt_pais, id_gen1, id_gen, gen FROM arbitros
    INNER JOIN genero ON arbitros.id_gen1 = genero.id_gen";

    $valor=$mysqli->query($consulta);

    $artRank='';
    
    while($res = $valor->fetch_assoc() ){
        $artRank .= '<tr>';
        $artRank .= '<td>'.$res['arbt_apellido'].'</td>';
        $artRank .= '<td>'.$res['arbt_nombre'].'</td>';
        $artRank .= '<td>'.$res['arbt_pais'].'</td>';
        $artRank .= '<td>'.$res['gen'].'</td>';
        $artRank .= '</tr>';
    }

    return $artRank;
}

function mainArtRank(){

    require('../BaseDeDatos/conexion.php');
    
    $consulta = "SELECT arbt_apellido, arbt_nombre, arbt_pais, id_gen1, id_gen, gen FROM arbitros
    INNER JOIN genero ON arbitros.id_gen1 = genero.id_gen";

    $valor=$mysqli->query($consulta);

    $mainArtRank='';
    
    while($res = $valor->fetch_assoc() ){
        $mainArtRank .= '<tr>';
        $mainArtRank .= '<td>'.$res['arbt_apellido'].'</td>';
        $mainArtRank .= '<td>'.$res['arbt_nombre'].'</td>';
        $mainArtRank .= '<td>'.$res['arbt_pais'].'</td>';
        $mainArtRank .= '<td>'.$res['gen'].'</td>';
        $mainArtRank .= '</tr>';
    }

    return $mainArtRank;
}




/* ---------------------------------------------- Funcion para gestion de galeria de imagenes -------------------------------------------- */

function mainGal(){

    require('../BaseDeDatos/conexion.php');

    $query = "SELECT id_images, direccion_images FROM images";

    $valor = $mysqli->query($query);

    $mainGal = '';
    
    $imag_dir;
    while($row = $valor->fetch_assoc()){
        $imag_dir ='../Images/Galeria/2019/'.$row['direccion_images'].'.jpg';
        $mainGal .= "<div class='mySlides'>
        <div class='numbertext'>".$row['id_images']." / 15</div>
          <img src='$imag_dir' style='width:100%'>
      </div>";
    }
    return $mainGal;
}

function mainSubGal(){

    require('../BaseDeDatos/conexion.php');

    $query = "SELECT id_images, direccion_images FROM images";

    $valor = $mysqli->query($query);

    $mainSubGal = '';
    
    $imag_dir;
    while($row = $valor->fetch_assoc()){
        $imag_dir ='../Images/Galeria/2019/'.$row['direccion_images'].'.jpg';
        $mainSubGal .= "<div class='column'>
        <img class='demo cursor' src='$imag_dir' style='width:100%' onclick='currentSlide(".$row['id_images'].")' alt='Coaching'>
      </div>";
    }
    return $mainSubGal;
}

function mainPerf(){

    require('../BaseDeDatos/conexion.php');

    $query = "SELECT * FROM usuarios WHERE correo_electronico = '$_SESSION[usuario]'";

    $valor = $mysqli->query($query);

    $mainPerf = '';
    
    while($row = $valor->fetch_assoc()){
        $mainPerf .= "<fieldset>
        <label for='nombre'>
            <h4>Nombre</h4> <input type='text' name='nombre' id='nombre' value='".$row['nombre']."' disabled>
        </label>
        <label for='apellido'>
            <h4>apellido</h4> <input type='text' name='apellido' id='apellido' value='".$row['apellido']."'disabled>
        </label>
        <label for='pais'>
        <h4>Pais</h4> <input type='text' name='pais' id='pais' value='".$row['pais']."'disabled>
        </label>
        <label for='edad'>
        <h4>edad</h4> <input type='text' name='edad' id='edad' value='".$row['edad']."'disabled>
        </label>
        <label for='correo_electronico'>
            <h4>Correo electronico</h4> <input type='text' name='correo_electronico' id='correo_electronico' value='".$row['correo_electronico']."'disabled>
        </label>
        <label for='password'>
        <h4>Contraseña</h4> <input type='password' name='password' id='password' value='".$row['password']."'disabled>
        </label>
        <a class='btn btn-primary' href='edit_perfil.php'>Editar Información</a>
    </fieldset>";
    }
    return $mainPerf;

}

function editPerf(){

    require('../BaseDeDatos/conexion.php');

    $query = "SELECT * FROM usuarios WHERE correo_electronico = '$_SESSION[usuario]'";

    $valor = $mysqli->query($query);

    $editPerf = '';
    
    while($row = $valor->fetch_assoc()){
        $editPerf .= "<fieldset>
        <input type='hidden' name='id_usuario' id='id_usuario' value='".$row['id_usuario']."' >
        <label for='nombre'>
            <h4>Nombre</h4> <input type='text' name='nombre' id='nombre' value='".$row['nombre']."' >
        </label>
        <label for='apellido'>
            <h4>apellido</h4> <input type='text' name='apellido' id='apellido' value='".$row['apellido']."'>
        </label>
        <label for='pais'>
        <h4>Pais</h4> <input type='text' name='pais' id='pais' value='".$row['pais']."'>
        </label>
        <label for='edad'>
        <h4>edad</h4> <input type='text' name='edad' id='edad' value='".$row['edad']."'>
        </label>
        <label for='correo_electronico'>
            <h4>Correo electronico</h4> <input type='text' name='correo_electronico' id='correo_electronico' value='".$row['correo_electronico']."'>
        </label>
        <label for='password'>
        <h4>Contraseña</h4> <input type='password' name='password' id='password' value='".$row['password']."'>
        </label>
        <br>
        <input class='btn btn-primary' type='submit' value='Editar'>
    </fieldset>";
    }
    return $editPerf;

}


?>