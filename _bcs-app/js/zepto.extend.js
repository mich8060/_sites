(function($){
	
	$toolbar = false;
	$tracking = [];
	$tap = {};
	$modified = null;
	$touchLock = false;
	
	$.fn.speedTap = function(e) {			
		switch(e.type){
			case 'touchstart':
				$tap.x1 = e.touches[0].pageX;
				$tap.y1 = e.touches[0].pageY;
				break;
			case 'touchend':
				$tap.x2 = e.pageX;
				$tap.y2 = e.pageY;
				$tap.x3 = Math.abs($tap.x1 - $tap.x2);
				$tap.y3 = Math.abs($tap.y1 - $tap.y2);
				
				if(($tap.x3 <= 20) && ($tap.y3 <= 20)){
					$(this).trigger('click');
					e.preventDefault();
				}
				break;
		}
	}
	$.fn.contains = function(str){
		url = document.URL;
		return (url.search(str) > 0)? true : false;
	}
	$service = $(this).contains("localhost:8888") ? 'http://localhost:8888/_sites/_bcs-app-api/' : 'http://design.backcountry.com/mobile/services/';
	$.fn.carousel = function(settings){
		settings = {
			clicks: settings.clicks || true,
			enviroment: settings.enviroment || 'http://bcs.michael-stevens.me/',
			url: settings.url || null,
			list: settings.list || $('.slide'),
			slides: settings.slides || 0,
			build: settings.build || false,
			width: settings.width || $(document).width()
		}
		
		settings.current = -(settings.slides*settings.width);
		
		if(settings.build){
			$container = $('<div class="carousel-container" />');
			settings.element.append($container);
			$.each(settings.list, function(index, item){
	 			$slide = $('<div class="slide" draggable="true" unselectable="off" />').html('Slide '+index+'<p><a href="#" class="next-slide">Next</a> | <a href="#" class="prev-slide">Prev</a></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>');
				$container.append($slide);
			});
		}
		
		disabled = false;
		
		$('.slide').css('width',settings.width).each(function(index){
			if(!($(this)[0].offsetHeight < $(this)[0].scrollHeight)){
				
				$(this).on('touchstart dragstart',function(){
					disabled = !disabled;
				});
				$(this).on('touchend dragend',function(){
					disabled = !disabled;
				});
			}
		  	$(this).css({
				left: settings.width * index,
				width: settings.width
			});
		});
		
		$container = (typeof $container != 'undefined') ? $container : $('.carousel-container');
		$container.css({
			'width': settings.list.length * settings.width+'px'
		})
		$container.translate3d(settings.current+'px');
		$container.transitionDuration('0.3s');
		

		coors = {};
			
		$(document).on('touchstart dragstart',this,function(e){

			var tapped = e.target.classList;
			for(key in tapped) {
			    if(tapped[key] == "carousel-action"){
					disabled = false;
				}
			}
			if(disabled){
				e.preventDefault();
			}
		});

		$(document).on('touchstart dragstart',this,function(e){
			e.stopPropagation();
			switch(e.type){
				case 'touchstart':
					coors.x1 = e.touches[0].pageX;
					coors.y1 = e.touches[0].pageY;
					break;
				case 'dragstart':
					coors.x1 = e.clientX;
					coors.y1 = e.clientY;
					break;
			}
		});
		
		$(document).on('touchmove drag',this,function(e){
			e.stopPropagation();
			switch(e.type){
				case 'touchmove':
					coors.x2 = e.touches[0].pageX;
					coors.y2 = e.touches[0].pageY;
					break;
				case 'drag':
					coors.x2 = e.clientX;
					coors.y2 = e.clientY;
					break;
			}
			if(!$touchLock){
				if(Math.abs(coors.y1 - coors.y2) < Math.abs(coors.x1 - coors.x2)){
					if(Math.abs(coors.x1 - coors.x2) > 50){
						$container.transitionDuration('0s');
						$container.translate3d((-(coors.x1 - coors.x2) + settings.current)+'px');
					}
				}
			}
		});

		$(document).on('touchend touchcancel dragend',this,function(e){
			$container.transitionDuration('0.3s');
			$movement = Math.abs(coors.x1 - coors.x2);	
			if(!$touchLock){
				if($movement > 100){
					if(coors.x1 > coors.x2){
						// Swipe Left
						if(settings.slides < (settings.list.length - 1)){
							settings.slides++;	
						}
					}else{
						// Swipe Right
						if(settings.slides > 0){
							settings.slides--;	
						}
					}
					settings.current = -(settings.slides*settings.width);
					$container.translate3d(settings.current+'px');
				}else{
					// Return to previous state
					$container.translate3d(settings.current+'px');
				}
			}

		});
		
		
		$(document).on('click','.next-slide',function(e){
			e.preventDefault();
			settings.slides++;
			settings.current = -(settings.slides*settings.width);
			$container.translate3d(settings.current+'px');
		});
		
		$(document).on('click','.prev-slide',function(e){
			e.preventDefault();
			settings.slides--;
			settings.current = -(settings.slides*settings.width);
			$container.translate3d(settings.current+'px');
		});
		
		$(document).on('click','.carousel-action',function(e){
			disabled = true;
		});
		
		$(window).resize(function(){
			$container = $('.carousel-container');
			
			$container.transitionDuration('0s');
			settings.current = -(settings.slides*settings.width);
			$container.translate3d(settings.current+'px');
			$container.transitionDuration('0.3s');
			
			settings.width = $(document).width();
			$container.css({
				'width': settings.list.length * settings.width+'px'
			});
			$('.slide').each(function(index){
				$(this).css({
					'left': (index * settings.width)+'px',
					'width': settings.width+'px'
				});
			});
		});
	};
	$.fn.views = function(options, callback){

		var options = {
			background: options.background || false,
			cache: options.cache || false,
			cart: options.cart || false,
			clear: options.clear || false,
			collections: options.collections || false,
			editing: options.editing || false,
			enviroment: options.enviroment || $service,
			fade: options.fade || 0,
			html: options.html || false,
			menu: options.menu || false,
			modal: options.modal || false,
			option: options.option || false,
			scroll: options.scroll || false,
			search: options.search || false,
			select: options.select || false,
			share: options.share || false,
			toolbar: options.toolbar || false,
			url: options.url || false
		}
		
		console.log(options);
				
		$body = $('body');
		if(options.background) { $('main').css('background','#ededed'); }else{ $('main').css('background','#fff'); }		
		if(options.cart){ $body.addClass('show-mini-cart'); }else{ $body.removeClass('show-mini-cart'); }
		if(options.clear){ $tracking = []; }
		if(options.editing){ 
			$body.addClass('editing-open');
			data = options.editing;
			if(data.left){ $('.editing a').eq(1).html(data.left); }
			if(data.title){ $('.editing .title').html(data.title); }
			if(data.right){ $('.editing a').eq(0).html(data.right); }
		}else{
			$body.removeClass('editing-open');
		}
		if(options.collections){ $('.nav').addClass('show'); }else{ $('.nav').removeClass('show'); }
		if(options.menu){ $body.addClass('menu-open'); }else{ $body.removeClass('menu-open'); }
		if(options.modal){ $body.addClass('modal-open'); }else{ $body.removeClass('modal-open'); }
		if(options.option){ 
			$body.addClass('options-open');
			if(options.option.title) { $('.options-titlebar strong').html(options.option.title); }
			if(options.option.text) { $('.options-overflow').html(options.option.text); }
			if(options.option.buttons){
				$('.options-footer .text-center').show();
				if(options.option.buttons.primary){ $('.options-footer .pri').html(options.option.buttons.primary); }else{ $('.options-footer .pri').hide(); }
				if(options.option.buttons.secondary){ $('.options-footer .sec').html(options.option.buttons.secondary).show(); }else{ $('.options-footer .sec').hide(); }
			}else{
				$('.options-footer .text-center').hide();
			}
		}else{ 
			$body.removeClass('options-open');
		}
		if(options.search){ $body.addClass('search-open'); }else{ $body.removeClass('search-open'); }
		if(options.select){ $body.addClass('select'); $('.selector-overlay').show(); }else{ $body.removeClass('select'); $('.selector-overlay').hide(); }
		if(options.share){ $body.addClass('share-active'); $('.share-overlay').show(); }else{ $body.removeClass('share-active'); $('.share-overlay').hide(); }
		if(options.toolbar){ 
			$toolbar = true;
			$body.addClass('toolbar-show');
			data = options.toolbar;
			if(data.back){ $('.toolbar a').eq(0).show(); }else{ $('.toolbar a').eq(0).hide(); }
			if(data.share){ $('.toolbar a').eq(1).show(); }else{ $('.toolbar a').eq(1).hide(); }
		}else{
			$toolbar = false;
			$body.removeClass('toolbar-show');
		}
		if(options.url){
			$(this).animate({
				opacity:0
			},options.fade,function(){
				if(!options.scroll){
					$('main').scrollTop(0);
				}
				if(options.html){
					console.log('Locally Loaded');
					$(this).html(options.html).animate({
						opacity:1
					},options.fade);
				}else{
					console.log(options.enviroment+options.url);
					$(this).load(options.enviroment+options.url, function(){
						callback ? callback() : false;
						$(this).animate({
							opacity:1
						},options.fade);
						if($('.main-container').length > 1){
							if(!options.modal){
								$('.main-container').eq(1).unwrap();
							}
						}
					});
				}
			});
		};
		

		
		
		if(options.cache){ $tracking.push(options); console.log($tracking); }
	};
	$.fn.swipeLeft = function(callback){
		var start, end = null;
		$(this).on('touchstart', function(e){ start = e.touches[0].clientX; });
		$(this).on('touchend', function(e){ 
			end = e.changedTouches[0].clientX 
			if(start > end){ callback(); }
		});
		$(this).on('mousedown', function(e){
			e.preventDefault();
			start = e.x;
		});
		$(this).on('mouseup', function(e){
			e.preventDefault();
			end = e.x;
			if(start > end){ callback(); }
		});
	}
	$.fn.swipeRight = function(callback){
		var start, end = null;
		$(this).on('touchstart', function(e){ start = e.touches[0].clientX; });
		$(this).on('touchend', function(e){ 
			end = e.changedTouches[0].clientX 
			if(start < end){
				callback();
			}
		});
		$(document).on('mousedown', function(e){
			e.preventDefault();
			start = e.x;
		});
		$(document).on('mouseup', function(e){
			e.preventDefault();
			end = e.x;
			if(start < end){
				callback();
			}
		});
	}
	$.fn.swipeUp = function(callback){
		var coordinates = { x1: 0, x2: 0, y1: 0, y2: 0 }	
		$(this).on('touchstart', function(e){
			coordinates.x1 = e.touches[0].clientX;
			coordinates.y1 = e.touches[0].clientY;
		});
		$(this).on('touchmove', function(e){
			coordinates.x2 = e.touches[0].clientX;
			coordinates.y2 = e.touches[0].clientY;
			if(Math.abs(coordinates.x1 - coordinates.x2) < 40 && Math.abs(coordinates.y1 - coordinates.y2) > 40){
				if(coordinates.y1 < coordinates.y2){ callback(); }
			}
		});
	}
	$.fn.swipeDown = function(callback){
		var coordinates = { x1: 0, x2: 0, y1: 0, y2: 0 }	
		$(this).on('touchstart', function(e){
			coordinates.x1 = e.touches[0].clientX;
			coordinates.y1 = e.touches[0].clientY;
		});
		$(this).on('touchmove', function(e){
			coordinates.x2 = e.touches[0].clientX;
			coordinates.y2 = e.touches[0].clientY;
			if(Math.abs(coordinates.x1 - coordinates.x2) < 40 && Math.abs(coordinates.y1 - coordinates.y2) > 40){
				if(coordinates.y1 > coordinates.y2){ callback(); }
			}
		});
	}
	$.fn.translate3d = function(x, y, z) {
		var x = x || 0;
		var y = y || 0;
		var z = z || 0;
        $(this).css({ 
            '-webkit-transform': 'translate3d('+x+','+y+','+z+')',
	           '-moz-transform': 'translate3d('+x+','+y+','+z+')',
		         '-o-transform': 'translate3d('+x+','+y+','+z+')',
			    '-ms-transform': 'translate3d('+x+','+y+','+z+')',
					'transform': 'translate3d('+x+','+y+','+z+')'
        });
    };
	$.fn.transitionDuration = function(speed){
		$(this).css({ 
            '-webkit-transition-duration': speed,
	           '-moz-transition-duration': speed,
		         '-o-transition-duration': speed,
			    '-ms-transition-duration': speed,
					'transition-duration': speed
        });
	}
	$.fn.slowEach = function(interval, callback, complete){
		var array = this;
		if(!array.length) return;
		var i = 0;
		next();
		function next(){
			if( callback.call( array[i], i, array[i] ) !== false ){
				if( ++i < array.length ){
					setTimeout(next, interval);
				}else{
					if(complete){
						complete();
					}
				}
			}
		}
	};
	$.fn.eventReport = function() {
		$(document).on('abort activate afterprint beforeactivate beforecopy beforecut beforedeactivate beforepaste beforeprint beforeunload blur bounce change CheckboxStateChange click contextmenu copy cut dblclick deactivate DOMActivate DOMAttrModified DOMCharacterDataModified DOMFocusIn DOMFocusOut DOMMouseScroll DOMNodeInserted DOMNodeInsertedIntoDocument DOMNodeRemoved DOMNodeRemovedFromDocument DOMSubtreeModified drag dragdrop dragend dragenter dragexit draggesture dragleave dragover dragstart drop error finish focus focusin focusout hashchange help input keydown keypress keyup load message mousedown mouseenter mouseleave mousemove mouseout mouseover mouseup mousewheel offline online overflow overflowchanged paste RadioStateChange readystatechange readystatechange readystatechange reset resize scroll search select selectionchange selectstart start stop submit textInput underflow unload', function(event){
		    console.log(event.type);
		});
	}
	$.fn.touch_device = function() {
	 	return (('ontouchstart' in window) || (navigator.MaxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0));
	}
	$.fn.ArraytoObject = function(arr) {
	  	var rv = {};
	  	for (var i = 0; i < arr.length; ++i)
	    	rv[i] = arr[i];
	  		return rv;
	}	
})(Zepto);