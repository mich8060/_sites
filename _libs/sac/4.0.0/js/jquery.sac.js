$(document).ready(function(){

	$.fn.view = function(url){  
		$el = $(this);
		$el.animate({
			opacity:0
		},300,function(){
  			$el.load(url+' main', function(){          
	 			$el.animate({
					opacity:1
				},300);
			});
		});   
	}
	
	$('main').view('upcoming');

});