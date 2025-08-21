<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contáctenos</title>
    <?php include('Inc/common_inclu.php'); ?> <!-- inclusion del archivo comun common_inclu.php -->
</head>
<body>
<?php include('Inc/header.php'); ?>	<!-- inclusion del archivo comun header.php -->

    <section id="wrapper" class="main-contact">
        <div class="container jumbotron">
            <div class="row contact-group">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 left-side">
                    <h1>Contáctanos</h1>
                    <p class="lead">Saludos, Si tiene alguna consulta o desea contáctarnos, Escriba un mensaje y responderemos lo mas pronto posible. Tambien 
                    nos puede contáctar por: </p>
                    <ul>
                        <li><a href="https://www.google.com/maps/place/Sinagoga+Shevet+Ahim/@8.975352,-79.5328188,17z/data=!3m1!4b1!4m5!3m4!1s0x8faca8e9c2983069:0xbc1afd5036059bb0!8m2!3d8.975352!4d-79.5306301" target="_blank"><i class="fas fa-map-marker-alt"></i> Oficinas</a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i> 6224-6979</a></li>
                    </ul>
                    <div class="fb-page" data-href="https://www.facebook.com/Asociaci%C3%B3n-de-Tenis-de-Mesa-de-Panam%C3%A1-ATMP-158947301461128/" data-tabs="timeline" data-width="" data-height="410" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Asociaci%C3%B3n-de-Tenis-de-Mesa-de-Panam%C3%A1-ATMP-158947301461128/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Asociaci%C3%B3n-de-Tenis-de-Mesa-de-Panam%C3%A1-ATMP-158947301461128/">Asociación de Tenis de Mesa de Panamá ATMP</a></blockquote></div>                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="formu-desig form-style-5">
                        <div class="form-group">
                            <form action="mailto:">
                                <fieldset>
                                <img src="Images/Logos/mesa-de-ping-pong.png"/>
                                <h2>Escribanos</h2>
                                <label for="nombre"> 
                                    <input class="text-in" type="text" id="nombre" name="nombre" placeholder="Nombre">
                                </label>
    
                                <label for="correo_electronico"> 
                                    <input class="text-in" type="text" id="correo_electronico" name="correo_electronico" placeholder="Correo Electrónico">
                                </label>

                                <label for="asunto">
                                    <textarea name="asunto" id="" cols="30" rows="10" placeholder="Asunto......."></textarea>
                                </label>
                            
                                <input type="submit" value="Enviar" name="Enviar">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('Inc/footer.php'); ?> <!-- inclusion del archivo comun footer.php -->
</body>
</html>