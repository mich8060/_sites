(function($){
	
	$.expr[":"].contains = $.expr.createPseudo(function(arg) {
	    return function( elem ) {
	        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
	    };
	});
	
	$.fn.urlcontains = function(str){
		url = document.URL;
		return (url.search(str) > 0)? true : false;
	}
	
	$.fn.ajaxLoad = function() {
		$body = $('body');
		$('.wall-container').animate({
			opacity:0
		},500,function(){
			$('listing').css('height','auto');
			$('.wall-container').animate({
				opacity:1
			},500);
		});
	}
	
	$.fn.loadListings = function(){
		$('.listing').each(function(){
			// Ajax load other colorways
			$sku = $(this).attr('sku');
			if(!$(this).attr('loaded')){
				$(this).attr('loaded',true);
				$(this).find('.lazyload').load("http://design.backcountry.com/mobile/services/colorways/"+$sku);
			}
		});
	}
	
	$.fn.rotateGallery = function(element, direction){
		$gallery = $el.parents('.gallery');
		$list = $gallery.find('li');
		$swatch = $(this).find('.swatches');
		$swatches = $(this).find('.swatch');

		// Adjust classes based on which item is featured
		if($list.length > 3){
			$list.each(function(index){
				$el = $(this);
				$el.removeClass('selected left right hide');
				if(index == (element.index() - 2)){
					$el.addClass('hide');
				}else if(index == (element.index() - 1)){
					$el.addClass('left');
				}else if(index == element.index()){	
					$el.addClass('selected');
				}else if(index == (element.index() + 1)){
					$el.addClass('right');
				}
			});
		}else if($list.length == 3){
			$list.each(function(index){
				$el = $(this);
				$el.removeClass('selected left right hide');
				if(direction == "right"){
					console.log("right");
					if(index == (element.index() - 1)){
						$el.addClass('left');
					}else if(index == element.index()){	
						$el.addClass('selected');
					}else if(index == (element.index() - 2)){
						$el.addClass('hide');
					}
				}else if(direction == "left"){
					console.log("left");
					if(index == element.index()){	
						$el.addClass('selected');
					}else if(index == (element.index() + 1)){
						$el.addClass('right');
					}
				}
			});
		}else if($list.length == 2){
			$list.each(function(index){
				$el = $(this);
				$el.removeClass('selected left right hide');
				if(direction == "right"){
					if(index == element.index()){
						$el.addClass('selected');
					}else{
						$el.addClass('left');
					}
				}else{
					if(index == element.index()){
						$el.addClass('selected');
					}else{
						$el.addClass('right');
					}
				}
			});
		}

		$list.each(function(index){
			$el = $(this);
			if(direction == "left"){
				num = index + 1;
			}else{
				num = index - 1;	
			}
			$swatches.eq(num).css('background-image',$el.css('background-image'));
		});

		$swatches.css('transition-duration','0.3s');

		// Allows for unlimited scrolling
		if($list.length > 3){
			switch(direction) {
				case 'left':
					$list.eq($list.length - 1).clone().addClass('hide').prependTo($gallery);
					window.setTimeout(function(){
						$list.eq($list.length - 1).remove();
					},300);
					break;
				case 'right':
					$list.eq(0).removeClass('hide');
					$list.eq(0).clone().appendTo($gallery);
					$list = $gallery.find('li');
					$list.eq(4).addClass('right');
					console.log($list);
					window.setTimeout(function(){
						$list.eq(0).remove();
					},300);
					break;
			}
		}else if($list.length == 3){
			switch(direction) {
				case 'left':
					$list.eq($list.length - 1).clone().addClass('hide').prependTo($gallery);
					$list = $gallery.find('li');
					console.log($list);
					window.setTimeout(function(){
						$list.first().removeClass('hide').addClass("left");
						$list.last().remove();
					},10);
					break;
				case 'right':	
					$list.eq(0).clone().appendTo($gallery);
					$list = $gallery.find('li');
					$list.last().removeClass("hide");
					window.setTimeout(function(){
						$list.last().addClass('right')
						window.setTimeout(function(){
							$list.eq(0).remove();
						},300);
					},10);
					break;
			}
		}

		// Applies "On Sale" styling to the block
		if(element.attr('sale')){
			$(this).addClass('on-sale');
		}else{
			$(this).removeClass('on-sale');
		}
	}
	
	$.fn.slowEach = function(callback, interval){
        var array = this;
        if(!array.length) return;
        var i = 0;
        next();
        function next(){
            if( callback.call( array[i], i, array[i] ) !== false ){
                if( ++i < array.length ){
                    setTimeout( next, interval );
                }
            }
        }
    };
	
	$.fn.views = function(options, callback){
		
		var options = {
			fade: options.fade || 0,
			html: options.html || false,
			push: options.push || '',
			title: options.title || '',
			url: options.url || false
		}
		
		$body = $('body');
		
		if(options.url){
			$(this).animate({
				opacity:0
			},options.fade,function(){
				$('.progress .bar').css({
					opacity:1,
					width:'0%'
				});
				$('.progress .bar').animate({
				    width:'75%'
				}, 300);
				if(options.html){
					console.log('Locally Loaded');
					$(this).html(options.html).animate({
						opacity:1
					},options.fade);
				}else{
					console.log(options.url);
					history.pushState({}, options.title, options.push);
					$(this).load(options.url, function(){
						callback ? callback() : false;
						$(this).animate({
							opacity:1
						},options.fade,function(){
							$('.progress .bar').animate({
							    width:'100%'
							}, 300, function(){
								$(this).animate({
									opacity: 0
								},500);
							});
							if($('.listing').length > 1){
								$(this).loadListings();
							}
							if($('.main-container').length > 1){
								$('.main-container').eq(1).unwrap();
							}
						});
					});
				}
			});
		};
		
	}

})(jQuery);