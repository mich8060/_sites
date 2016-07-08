$(document).ready(function(){

	$.fn.view = function(url){  
		$el = $(this);
		$el.animate({
			opacity:0
		},500,function(){
  			$el.load(url+' .main-container', function(){          
	 			$el.animate({
					opacity:1
				},500);
			});
		});   
	}
	
	var hash = window.location.hash;
	
	if(hash == '#ads'){
		$('.adsense').show();
	}else{
		$('.extras').show();
	}

});