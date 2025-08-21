<?php 
	



	require('../../BaseDeDatos/conexion.php');

	$id_tempo = $_POST['id_tempo'];

	$queryM = "SELECT id_images, direccion_images,id_tempo1, id_medias1, id_media,direccion_media,anios FROM images
	INNER JOIN images_medias ON images.id_images = images_medias.id_medias1 
	INNER JOIN medias ON images_medias.id_medias1 = medias.id_media 
	INNER JOIN temporadas ON images.id_tempo1 = temporadas.id_tempo WHERE id_tempo1 = '$id_tempo' ORDER BY direccion_images ASC";
	$resultadoM = $mysqli->query($queryM);

	$html = "";
	$vids_temp;
	$imag_temp;
	while($rowM = $resultadoM->fetch_assoc()){
		$vids_temp = '../Videos/Nacional_2019/'.$rowM['direccion_media'].'.mp4';
		$imag_temp ='../Images/Galeria/2019/'.$rowM['direccion_images'].'.jpg';
		$html .= " 
		<div class='box-img'>
		<a href='#' data-toggle='modal' data-target='#modal-".$rowM['id_media']."'><img src='$imag_temp' alt=''></a>

		<div id='modal-".$rowM['id_media']."' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered modal-xl' role='document'>
                                <div class='modal-content'>
                                    
                                      
                                    <div class='modal-body'>
									<video controls>
                                        <source src='$vids_temp'>
                                    </video>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <h4>Torneo Nacional ".$rowM['anios']."</h4>
                        <p>Categoria: Mayor <br> 
                        ".$rowM['direccion_media']."</p>
		<!--<video src='$vids_temp' controls></video>--></div>";
	}
	
	echo $html;

 ?>