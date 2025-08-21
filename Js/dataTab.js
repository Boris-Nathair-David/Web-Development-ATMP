$(document).ready( function () {
		    $('#iniTable').DataTable({
		    	"info":false,
		    	"ordering":false,
		    	"searching":false,
		    	"paging":false
		    });
		} );

		$(document).ready(function(){
			$('#manTable').DataTable({
				"info":false,
		    	"pagingType":"simple_numbers",
		    	
		    	"stateSave":true,
		    	"dom": '<"top"i>rt<"bottom"flp><"clear">'
			});

		});

		$(document).ready(function(){
			$('#womTable').DataTable({
				"info":false,
		    	
		    	stateSave:true,
		    	"dom": '<"top"i>rt<"bottom"flp><"clear">'
			});
		});

		$(document).ready(function(){
			$('#entTable').DataTable({
				"info":false,
		    	"pagingType":"simple_numbers",
		    	
		    	"stateSave":true,
		    	"dom": '<"top"i>rt<"bottom"flp><"clear">'
			});

		});

		$(document).ready(function(){
			$('#artTable').DataTable({
				"info":false,
		    	"pagingType":"simple_numbers",
		    	
		    	"stateSave":true,
		    	"dom": '<"top"i>rt<"bottom"flp><"clear">'
			});

		});

		

