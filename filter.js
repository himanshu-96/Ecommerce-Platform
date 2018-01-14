var checked1, checkedValues1 = new Array();
var checked2, checkedValues2 = new Array();
var checked3, checkedValues3 = new Array();
var checked4, checkedValues4 = new Array();
if(window.location.href.indexOf("Women") > -1){
	var gender = 0;	
}
else if(window.location.href.indexOf("Men") > -1){
	var gender = 1;
}
else{
	var gender = null;
}
if(window.location.href.indexOf("Apparel") > -1){
	var value = 0;
}
else if(window.location.href.indexOf("Accessories") > -1){
	var value = 1;
}
else{
	var value = null;
}
		
$(document).on("change", "input[name=brand],input[name=category],input[name=description],input[name=gender]", function(e) {
			
	checked1 = $('input[name=brand]:checked');
	checkedValues1 = checked1.map(function(i) { return $(this).val() }).get();
	
	checked2 = $('input[name=category]:checked');
	checkedValues2 = checked2.map(function(i) { return $(this).val() }).get();
		
	checked3 = $('input[name=description]:checked');
	checkedValues3 = checked3.map(function(i) { return $(this).val() }).get();
	
	checked4 = $('input[name=gender]:checked');
	checkedValues4 = checked4.map(function(i) { return $(this).val() }).get();
		
	if(checkedValues1 != '' || checkedValues2 != '' || checkedValues3 != ''){
		var JsonString1 = JSON.stringify(checkedValues1);
		var JsonString2 = JSON.stringify(checkedValues2);
		var JsonString3 = JSON.stringify(checkedValues3);
		var JsonString4 = JSON.stringify(checkedValues4);		
				
		$.ajax({
			method:"POST",
			url:"phpscripts/displayajax.php",
			data:{pdesc:JsonString3,brand:JsonString1,category:JsonString2,value:value,gender:gender},
			success: function(data){
				$('.container-fluid #mainContent').html(data);
			}
		});
	}
	if(checkedValues1 == '' && checkedValues2 == '' && checkedValues3 == ''){
		var page = 1;
		$.ajax({
			method:"POST",
			url:"phpscripts/displayajax.php",
			data:{page:page,value:value,gender:gender},
			success: function(data){
				$('.container-fluid #mainContent').html(data);
			}
		});
	}	
});
		
$(document).ready(function() {
	load_data();
	function load_data(page){

		if(checkedValues1 != '' || checkedValues2 != '' || checkedValues3 != ''){
			var JsonString1 = JSON.stringify(checkedValues1);
			var JsonString2 = JSON.stringify(checkedValues2);
			var JsonString3 = JSON.stringify(checkedValues3);
					
			$.ajax({
				method:"POST",
				url:"phpscripts/displayajax.php",
				data:{page:page,brand:JsonString1,category:JsonString2,pdesc:JsonString3,value:value,gender:gender},
				success: function(data){
					$('.container-fluid #mainContent').html(data);
				}
			});
		}	
		else{
			$.ajax({
				method:"POST",
				url:"phpscripts/displayajax.php",
				data:{page:page,value:value,gender:gender},
				success: function(data){
					$('.container-fluid #mainContent').html(data);
				}
			});
		}
	}
			
		
	$(document).on('click','.container-fluid #mainContent .pagination_link',function(){
		var page = $(this).attr("id");
		load_data(page);
	});
});


/*
else{
	if(window.location.href.indexOf("Apparel") > -1){
		var checked1, checkedValues1 = new Array();
		var checked2, checkedValues2 = new Array();
		var checked3, checkedValues3 = new Array();
		var gender, genderValues = new Array();
		var value = 0;
		
		$(document).on("change", "input[name=brand],input[name=category],input[name=description],input[name=gender]", function(e) {
			
			checked1 = $('input[name=brand]:checked');
			checkedValues1 = checked1.map(function(i) { return $(this).val() }).get();
			
			checked2 = $('input[name=category]:checked');
			checkedValues2 = checked2.map(function(i) { return $(this).val() }).get();
			
			checked3 = $('input[name=description]:checked');
			checkedValues3 = checked3.map(function(i) { return $(this).val() }).get();
			
			gender = $('input[name=gender]:checked');
			genderValues = gender.map(function(i) { return $(this).val() }).get();
		
			if(checkedValues1 != '' || checkedValues2 != '' || checkedValues3 != ''){
				var JsonString1 = JSON.stringify(checkedValues1);
				var JsonString2 = JSON.stringify(checkedValues2);
				var JsonString3 = JSON.stringify(checkedValues3);
						
				$.ajax({
					method:"POST",
					url:"phpscripts/displayajax.php",
					data:{pdesc:JsonString3,brand:JsonString1,category:JsonString2,value:value,gender:gender},
					success: function(data){
						$('.container-fluid #mainContent').html(data);
					}
				});
			}
			if(checkedValues1 == '' && checkedValues2 == '' && checkedValues3 == ''){
					var page = 1;
					$.ajax({
						method:"POST",
						url:"phpscripts/displayajax.php",
						data:{page:page,value:value,gender:gender},
						success: function(data){
							$('.container-fluid #mainContent').html(data);
						}
					});
			}	
		});
		
		$(document).ready(function() {
			load_data();
			function load_data(page){
		
				if(checkedValues1 != '' || checkedValues2 != '' || checkedValues3 != ''){
					var JsonString1 = JSON.stringify(checkedValues1);
					var JsonString2 = JSON.stringify(checkedValues2);
					var JsonString3 = JSON.stringify(checkedValues3);
					
					$.ajax({
						method:"POST",
						url:"phpscripts/displayajax.php",
						data:{page:page,brand:JsonString1,category:JsonString2,pdesc:JsonString3,value:value,gender:gender},
						success: function(data){
							$('.container-fluid #mainContent').html(data);
						}
					});
				}	
				else{
					$.ajax({
						method:"POST",
						url:"phpscripts/displayajax.php",
						data:{page:page,value:value,gender:gender},
						success: function(data){
							$('.container-fluid #mainContent').html(data);
						}
					});
				}
			}
			
		
			$(document).on('click','.container-fluid #mainContent .pagination_link',function(){
				var page = $(this).attr("id");
				load_data(page);
			});
		});
	}
	/*-------------------------------------------------------------------------------------------------------------------------------------------------*/
/*
	if(window.location.href.indexOf("Accessories") > -1){
		var checked1, checkedValues1 = new Array();
		var checked2, checkedValues2 = new Array();
		var checked3, checkedValues3 = new Array();
		var value = 1;
		var gender = 1;
		
		$(document).on("change", "input[name=brand],input[name=category],input[name=description]", function(e) {
			
			checked1 = $('input[name=brand]:checked');
			checkedValues1 = checked1.map(function(i) { return $(this).val() }).get();
			
			checked2 = $('input[name=category]:checked');
			checkedValues2 = checked2.map(function(i) { return $(this).val() }).get();
			
			checked3 = $('input[name=description]:checked');
			checkedValues3 = checked3.map(function(i) { return $(this).val() }).get();
		
			if(checkedValues1 != '' || checkedValues2 != '' || checkedValues3 != ''){
				var JsonString1 = JSON.stringify(checkedValues1);
				var JsonString2 = JSON.stringify(checkedValues2);
				var JsonString3 = JSON.stringify(checkedValues3);
						
				$.ajax({
					method:"POST",
					url:"phpscripts/displayajax.php",
					data:{pdesc:JsonString3,brand:JsonString1,category:JsonString2,value:value,gender:gender},
					success: function(data){
						$('.container-fluid #mainContent').html(data);
					}
				});
			}
			if(checkedValues1 == '' && checkedValues2 == '' && checkedValues3 == ''){
					var page = 1;
					$.ajax({
						method:"POST",
						url:"phpscripts/displayajax.php",
						data:{page:page,value:value,gender:gender},
						success: function(data){
							$('.container-fluid #mainContent').html(data);
						}
					});
			}	
		});
		
		$(document).ready(function() {
			load_data();
			function load_data(page){
		
				if(checkedValues1 != '' || checkedValues2 != '' || checkedValues3 != ''){
					var JsonString1 = JSON.stringify(checkedValues1);
					var JsonString2 = JSON.stringify(checkedValues2);
					var JsonString3 = JSON.stringify(checkedValues3);
					
					$.ajax({
						method:"POST",
						url:"phpscripts/displayajax.php",
						data:{page:page,brand:JsonString1,category:JsonString2,pdesc:JsonString3,value:value,gender:gender},
						success: function(data){
							$('.container-fluid #mainContent').html(data);
						}
					});
				}	
				else{
					$.ajax({
						method:"POST",
						url:"phpscripts/displayajax.php",
						data:{page:page,value:value,gender:gender},
						success: function(data){
							$('.container-fluid #mainContent').html(data);
						}
					});
				}
			}
			
		
			$(document).on('click','.container-fluid #mainContent .pagination_link',function(){
				var page = $(this).attr("id");
				load_data(page);
			});
		});
	}	
}*/