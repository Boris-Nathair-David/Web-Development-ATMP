$(document).ready(function(){
	$("#cbx_temp").change(function () {
		
		//$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
		
		$("#cbx_temp option:selected").each(function () {
			id_tempo = $(this).val();
			$.post("../Main_site/Querys_site/getVids.php", { id_tempo: id_tempo }, function(data){
				$("#cbx_vids").html(data);
			});
		
		});
	})
});



/*(function(){
	$(document).ready(function(){
		$(".btn-outline-primary").click(function(e){
			e.preventDefault();
			var filtro = $(this).attr("data-filter");
			
			if(filtro == "todos"){
				$(".box-img").show(500);
			}else{
				$(".box-img").not("." + filtro).hide(500);
				$(".box-img").filter("." + filtro).show(500);
			}
		});
		$("ul li").click(function(){
			$(this).addClass("activo").siblings().removeClass("activo");
		});
	});
}())*/

/*$(document).ready(function(){

	// AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// FILTRANDO PRODUCTOS  ============================================

	$('.category_item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// OCULTANDO PRODUCTOS =========================
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);

		// MOSTRANDO PRODUCTOS =========================
		function showProduct(){
			$('.product-item[category="'+catProduct+'"]').show();
			$('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	// MOSTRANDO TODOS LOS PRODUCTOS =======================

	$('.category_item[category="all"]').click(function(){
		function showAll(){
			$('.product-item').show();
			$('.product-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});*/