<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria Nacional</title>
    <?php include('Main_inc/main_common_inclu.php'); ?> <!-- inclusion del archivo comun common_inclu.php -->
</head>
<body>
<?php include('Main_inc/main_header.php'); ?>	<!-- inclusion del archivo comun header.php -->

 <!-- Container for the image gallery -->
 <div class="container galery-desig">
    <h1>Galeria Torneo Nacional 2019</h1>
<!-- Full-width images with number text -->

<?=$mainGal?>


<!-- Next and previous buttons -->
<a class="ant" onclick="plusSlides(-1)"><i class="fas fa-arrow-circle-left"></i></a>
<a class="sig" onclick="plusSlides(1)"><i class="fas fa-arrow-circle-right"></i></a>

<!-- Image text -->
<!--<div class="caption-container">
  <p id="caption"></p>
</div>-->

<!-- Thumbnail images -->
<div class="row">
  <?=$mainSubGal?>
 

</div>
</div> 

<?php include('Main_inc/main_footer.php'); ?> <!-- inclusion del archivo comun footer.php -->
</body>
</html>

<!--<div class="mySlides">
  <div class="numbertext">1 / 15</div>
    <img src="../Images/Galeria/2019/Luis ramirez.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 15</div>
    <img src="../Images/Galeria/2019/Calvin-Jahir.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 15</div>
    <img src="../Images/Galeria/2019/Jc.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 15</div>
    <img src="../Images/Galeria/2019/Justo Altamiranda.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 15</div>
    <img src="../Images/Galeria/2019/Calvin Shi vs David Dimas.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 15</div>
    <img src="../Images/Galeria/2019/Jahir Chole.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">7 / 15</div>
    <img src="../Images/Galeria/2019/Ricardo Cuevas 2.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">8 / 15</div>
    <img src="../Images/Galeria/2019/Calvin Shi vs Jahir Chock.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">9 / 15</div>
    <img src="../Images/Galeria/2019/David Lay.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">10 / 15</div>
    <img src="../Images/Galeria/2019/David Dimas.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">11 / 15</div>
    <img src="../Images/Galeria/2019/Jose Guerra 2.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">12 / 15</div>
    <img src="../Images/Galeria/2019/Lay Velarde.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">13 / 15</div>
    <img src="../Images/Galeria/2019/Justo Campeon.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">14 / 15</div>
    <img src="../Images/Galeria/2019/Calvin Shi 3.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">15 / 15</div>
    <img src="../Images/Galeria/2019/Publico 2.jpg" style="width:100%">
</div>-->

 <!--<div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Luis ramirez.jpg" style="width:100%" onclick="currentSlide(1)" alt="Coaching">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Calvin-Jahir.jpg" style="width:100%" onclick="currentSlide(2)" alt="Contrincantes">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Jc.jpg" style="width:100%" onclick="currentSlide(3)" alt="Aplausos">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Justo Altamiranda.jpg" style="width:100%" onclick="currentSlide(4)" alt="Justo Altamarinda">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Calvin Shi vs David Dimas.jpg" style="width:100%" onclick="currentSlide(5)" alt="Calentamiento">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Jahir Chole.jpg" style="width:100%" onclick="currentSlide(6)" alt="Celebración">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Ricardo Cuevas 2.jpg" style="width:100%" onclick="currentSlide(7)" alt="Ricardo Cuevas">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Calvin Shi vs Jahir Chock.jpg" style="width:100%" onclick="currentSlide(8)" alt="Final de juego">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/David Lay.jpg" style="width:100%" onclick="currentSlide(9)" alt="David Lay">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/David Dimas.jpg" style="width:100%" onclick="currentSlide(10)" alt="David Dimas">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Jose Guerra 2.jpg" style="width:100%" onclick="currentSlide(11)" alt="Jose Manuel Guerra">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Lay Velarde.jpg" style="width:100%" onclick="currentSlide(12)" alt="Compañerismo">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Justo Campeon.jpg" style="width:100%" onclick="currentSlide(13)" alt="Campeon">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Calvin Shi 3.jpg" style="width:100%" onclick="currentSlide(14)" alt="¡Disculpa!">
  </div>
  <div class="column">
    <img class="demo cursor" src="../Images/Galeria/2019/Publico 2.jpg" style="width:100%" onclick="currentSlide(15)" alt="Público">
  </div>-->