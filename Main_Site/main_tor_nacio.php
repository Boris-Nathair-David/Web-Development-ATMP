<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Torneos Nacionales</title>
    <?php include('Main_inc/main_common_inclu.php'); ?>
    
</head>
<body>
    <div id="wrapper">
        <?php include('Main_inc/main_header.php'); ?>	<!-- inclusion del archivo comun header.php -->

        <div class="container-fluid media-group">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 option-list menu ">
                    
                <form id="combo" name="combo" action="" method="POST">
                        <div class = "box-img ">
                            <div class="gal-title">
                                <h1>Torneos Nacionales</h1>
                            </div>
                             <select type="button" name="cbx_temp" id="cbx_temp" class="btn btn-outline-primary" onchange="showDiv('sho', this)">
                                
                                <option value="0"><p>Todos</p></option>
                                
                                <?php while($row = $resultado->fetch_assoc()) { ?>
                                <option value="<?php echo $row['id_tempo']; ?>"><?php echo $row['anios']; ?></option>
                                
                                
                                <?php } ?>

                            </select>
                        </div>
                     
                            <div name='cbx_vids' id='cbx_vids' class="vids-gal" >
                                
                                <?=$showVids?>
                                <!--<select name="cbx_vids" id="cbx_vids">
                                    

                                </select>-->
                            </div>
                        
                        <div id="sho" name="sho" class="vids-gal">
                            <?=$showVids?>
                        </div>
                    </form>
                    
                    
                </div>    
            </div>
        </div>
        </div>
        <?php include('Main_inc/main_footer.php'); ?> <!-- inclusion del archivo comun footer.php -->
        <script>
            function showDiv(divId, element){
document.getElementById(divId).style.display = element.value == 0 ? 'flex' : 'none';
}	
        </script>
</body>
</html>
<!--<div class="box-img 2018">
                        <a href="#"><img src="../Images/Galeria/2018/Didimo Broce vs Marco Atencio.png" alt=""></a>
                        <h4>Torneo Nacional 2018</h4>
                        <p>Categoria: Mayor<br> 
                        Didimo Broce vs Marco Atencio</p>
                    </div>
                    <div class="box-img 2017">
                        <a href="#"><img src="../Images/Galeria/2019/Jose Guerra.jpg" alt=""></a>
                        <h4>Torneo Nacional 2017</h4>
                        <p>Categoria: Mayor <br> 
                        Jose Guerra vs Frixon Athanaziadi</p>
                    </div>
                    <div class="box-img 2016">
                        <a href="#"><img src="../Images/Galeria/2019/Sophia Osorio vs Wendy Rodriguez.png" alt=""></a>
                        <h4>Torneo Nacional 2016</h4>
                        <p>Categoria: Mayor<br>
                        Sophia Osorio vs Wendy Rodriguez</p>
                    </div>

                    <div class="box-img 2019">
                        <a href="#"><img src="../Images/Galeria/2019/David Dimas.jpg" alt=""></a>
                        <h4>Torneo Nacional 2019</h4>
                        <p>Categoria: Mayor <br> 
                        David Dimas vs Kevin Cheng</p>
                    </div>
                    <div class="box-img 2018">
                        <a href="#"><img src="../Images/Galeria/2019/E. Suarez.jpg" alt=""></a>
                        <h4>Torneo Nacional 2018</h4>
                        <p>Categoria: Mayor <br/> 
                        Felix Jaen vs E. Suarez</p>
                    </div>
                    <div class="box-img 2017">
                        <a href="#"><img src="../Images/Galeria/2017/Josue Tunon vs Aiven Ng.png" alt=""></a>
                        <h4>Torneo Nacional 2017</h4>
                        <p>Categoria: Mayor <br/> 
                        Josue Tunon vs Aiven Ng</p>
                        
                    </div>-->
                    
                    <!--<div class="box-img 2016"></div>-->

                    <!--<div class="box-img 2019">
                        <a href="#"><img src="../Images/Galeria/2019/David Dimas.jpg" alt=""></a>
                        <h4>Torneo Nacional 2019</h4>
                        <p>Categoria: Mayor <br/>
                        David Dimas vs Alexandro Endico</p>
                        
                    </div>
                    <div class="box-img 2018">
                        <a href="#"><img src="../Images/Galeria/2019/Jahir Chock.jpg" alt=""></a>
                        <h4>Torneo Nacional 2018</h4>
                        <p>Categoria: Mayor<br/>
                        Jahir Chock vs Gabriel Lewis</p>
                    </div>-->
<!--<script>
    $(document).ready(function(){
        filtradoCategorias();

        $('#categorias').change(function(){
            filtradoCategorias();
        });
    })
</script>
<script>
    function filtradoCategorias(){
        $.ajax({
            type:"POST",
            url:"../Funciones/Funciones.php",
            data:"cat=" + $('categorias').val(),
            success:function(r){
                $('#select2lista').html(r);
            }
        });
    }
</script>-->

    <!--<form action="">
                        <select name="categorias" id="categorias" placeholder="Categorias">
                            
                                <option value="">Categorias</option>
                                <?=$selecCat?>
                          
                        </select>
                        <select name="temporadas" id="temporadas" placeholder="Temporadas">
                            
                                <option value="">Temporadas</option>
                                <?=$selecTemp?>
                            
                        </select>
                        <select name="tipo" id="tipo" placeholder="Tipo de juegos">
                            
                                <option value="">Tipos de juegos</option>
                                <?=$selecTip?>
                            
                        </select>
                        <select name="modalidad" id="modalidad" placeholder="Modalidad">
                            
                                <option value="">Modalidad</option>
                                <?=$selecMod?>
                            
                        </select>
                    </form>
                </div>
                <div id="select2lista" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 option-vids">

                <?= $mainMediaSite; ?>
                </div>
            </div>
        </div>-->

<!--<div class="wrap">
		<h1>Todos los partidos nacionales disponibles</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="ordenadores">Ordenadores</a>
				<a href="#" class="category_item" category="laptops">Laptops</a>
				<a href="#" class="category_item" category="smartphones">Smartphones</a>
				<a href="#" class="category_item" category="monitores">Monitores</a>
				<a href="#" class="category_item" category="audifonos">Audifonos</a>
                <form action="">
                <select name='smartphones' id='' placeholder='smartphones'>
                <optgroup label='Categorias'>
                <option value='' class='category_item' category='all' >Elige una categoria</option>
                <?= $selecTab ?>
                </optgroup>
                </select>
                <select name="smartphones" id="" placeholder="smartphones">
                    <optgroup label="Temporada">
                    <option value="" class="category_item" category='all' >Elige una temporada</option>
                    <option value="" class="category_item" category='2019'>2019</option>
                    <option value="" class="category_item" category='2018'>2018</option>
                    <option value="" class="category_item" category='2017'>2017</option>
                    <option value="" class="category_item" category='2016'>2016</option>
                    </optgroup>
                </select>
                <select name="smartphones" id="" placeholder="smartphones">
                    <optgroup label="Tipo de juego">
                    <option value="" class="category_item" category='all'>Elige un tipo de juego</option>
                    <option value="" class="category_item" category='Masculino'>Masculino</option>
                    <option value="" class="category_item" category='Femenino'>Femenino</option>
                    <option value="" class="category_item" category='Mixto'>Mixto</option>
                    </optgroup>
                </select>
                <select name="smartphones" id="" placeholder="smartphones">
                    <optgroup label="Modalidad">
                    <option value="" class="category_item" category='all' >Elige una modalidad</option>
                    <option value="" class="category_item" category='Individuales'>Individuales</option>
                    <option value="" class="category_item" category='Dobles'>Dobles</option>
                    <option value="" class="category_item" category='Equipo'>Equipo</option>
                    </optgroup>
                </select>
                </form>
			</div>
			<section class="products-list">
				<?= $mainMediaSite; ?>
			</section>
		</div>
	</div>-->