$(document).ready(function(){

	$.fn.slowEach = function(callback, interval){
        var array = this;
        if(!array.length) return;
        var i = 0;
        next();
        function next(){
            if( callback.call( array[i], i, array[i] ) !== false ){
                if( ++i < array.length ){
                    setTimeout(next, interval);
                }
            }
        }
    };

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
	
	$target = $(".page-loader").offset().top;
	$set = $(".lazyload").innerHeight();
	$('.lazyload').css('height','0');
	console.log($set);
	$(document).on({
		scroll:function(e){
			$load = $('.lazy-load');
			$distance = $(window).scrollTop();
			$screen_height = $(window).height();
			if(($distance + $screen_height) >= $target){
				window.setTimeout(function(){
					$('.lazyload').animate({
						height:$set
					},1000);
				},3000);
			}
		}
	});

});