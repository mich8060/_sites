function cycleImages(){
	$el = $('.group-gallery-images');
	$images = $el.find('.image');
	$active = $el.find('.active');

	if($active.prev().length){
		$active.fadeOut('slow',function(){
			$(this).removeClass('active');
		});
		$active.prev().addClass('active');
	}else{
		$active.removeClass('active');
		$('.group-gallery-images').each(function(){
			$image = $(this).find('.image');
			$image.fadeIn('slow');
			$image.last().addClass('active');
		});
	}
	
}

$(document).ready(function(){
	
	setInterval('cycleImages()', 5000);
	
	if($('.brands-nav').length){
		$offset = $('.brands-nav').offset().top;
		
		$sectionLinks = [];
		$subLinks = [];
		
		$('.brands-section-link').each(function(index){
			$top = $(this).offset().top - 50;
			$sectionLinks.push([
			    $top
			]);
		});
		
		for(x = 0;x < $sectionLinks.length;x++){ if(x) { $sectionLinks[x - 1].push($sectionLinks[x] - 1); } }
		
		$sectionLinks[$sectionLinks.length - 1].push($(document).height());
		
		$('.brands-section-sublink').each(function(index){
			$top = Math.round($(this).offset().top - 50);
			$subLinks.push([
			    $top
			]);
		});
		
		for(x = 0;x < $subLinks.length;x++){ if(x) { $subLinks[x - 1].push($subLinks[x] - 1); } }
		$subLinks[$subLinks.length - 1].push($('.stories-one').height() + $('.stories-one').offset().top);

	}
	
	if($('subnav').length){
		$brand_subnav = $('subnav').offset().top;
	}
	
	$(document).on({
		scroll:function(){
			
			$scrolltop = $(window).scrollTop();
/*
			if($scrolltop > 200){
				$('.fixnav').addClass('active');
			}else{
				$('.fixnav').removeClass('active');
			}

			if($('subnav').length){
				if($scrolltop >= $brand_subnav){
					$('subnav').css({
						position:'fixed',
						top: 0
					});
				}else{
					$('subnav').css({
						position:'absolute',
						top: 'auto'
					});
				}
			}
			
*/			
			if($('.brands-nav').length){
				for(x = 0;x < $sectionLinks.length;x++){
					if($scrolltop >= $sectionLinks[x][0] && $scrolltop <= $sectionLinks[x][1]){
						$current = $('.brands-nav a').eq(x);
						if(!$current.hasClass('selected')){
							$('.brands-nav a').removeClass('selected');
							$current.addClass('selected');
						}
					}
				}
				
				for(y = 0; y < $subLinks.length;y++){
					if($scrolltop >= $subLinks[y][0] && $scrolltop <= $subLinks[y][1]){
						$current = $('.stories-tabs a').eq(y);
						if(!$current.hasClass('selected')){
							$('.stories-tabs a').removeClass('selected');
							$current.addClass('selected');
							
						}
					}
				}
				
				// Main Brand Navigation
				if($scrolltop >= $offset){
					$('.brands-nav').css({
						'border-bottom': 'solid 1px #efefef',
						position:'fixed',
						top: 0
					});
				}else{
					$('.brands-nav').css({
						'border-bottom': 'solid 1px #fff',
						position:'absolute',
						top: 'auto'
					});
				}
				
				if($scrolltop >= $sectionLinks[1][0] && $scrolltop <= ($sectionLinks[1][1] - 200)){
					$('.alpha-brands-subnav').addClass('active');
				}else{
					$('.alpha-brands-subnav').removeClass('active');
				}
				
				if($scrolltop >= ($sectionLinks[2][0] + 120) && $scrolltop <= ($sectionLinks[2][1])){
					$('.stories-tabs').css({
						background:'#fff',
						'border-bottom': 'solid 1px #efefef',
						position:'fixed',
						top: '50px'
					});
				}else if($scrolltop >= $sectionLinks[2][1] - 60){
					$('.stories-tabs').css({
						background:'#fff',
						'border-bottom': 'solid 1px #efefef',
						position:'absolute',
						top: $('.second-story').offset().top - 110,
						'z-index':'2147483637'
					});
				}else{
					$('.stories-tabs').css({
						background:'transparent',
						'border-bottom': 'none',
						position:'absolute',
						top: 'auto'
					});
				}
				
				if($scrolltop >= ($sectionLinks[3][0] + 120) && $scrolltop <= ($sectionLinks[3][1])){
					$('.stories-tabs-two').css({
						background:'#fff',
						'border-bottom': 'solid 1px #efefef',
						position:'fixed',
						top: '50px'
					});
				}else{
					$('.stories-tabs-two').css({
						background:'transparent',
						'border-bottom': 'none',
						position:'absolute',
						top: 'auto'
					});
				}
			}
		}
	});
	
	$(document).on({
		click:function(e){
			href = $(this).attr('href').split("#");
			href = href[1];
			tag = $("a[name='"+ href +"']").offset().top;
			$("html, body").stop().animate({scrollTop:tag},'500','swing');
		}
	},'.alpha-brands a');
	
	$(document).on({
		click:function(e){
			href = $(this).attr('href').split("#");
			href = href[1];
			tag = $("a[name='"+ href +"']").offset().top - 75;
			$("html, body").stop().animate({scrollTop:tag},'500','swing');
		}
	},'.alpha-brands-subnav a');
	
	$(document).on({
		click:function(e){
			href = $(this).attr('href').split("#");
			href = href[1];
			tag = $("a[name='"+ href +"']").offset().top;
			$("html, body").stop().animate({scrollTop:tag},'700','swing');
		}
	},'.brands-nav a');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$iframe = $('<iframe />').css({
				position: 'absolute',
				left: 0,
				right: 0,
				top:0,
				height: '100%',
				bottom:0,
				width: '100%',
				'z-index': '2147483640'
			}).attr({
				src: 'https://www.youtube.com/embed/pHnqrKT-tRc?rel=0&autoplay=1&showinfo=0',
				frameborder: 0,
				allowfullscreen: 'allowfullscreen'
			});
			$('.video-container').prepend($iframe);
			
			$close = $('<div />').css({
				color: '#fff',
				'font-family': 'Entypo',
				position:'absolute',
				'font-size':'45px',
				'line-height':'45px',
				height:'45px',
				width:'45px',
				right: 0,
				top:0,
				'text-align':'center',
				'z-index': '2147483647',
				'-webkit-transform':'rotate(45deg)'
			}).html('&#10133;');
			
			
			$('.video-container').prepend($close);
			
			$close.on({
				click:function(e){
					e.preventDefault();
					e.stopPropagation();
					$iframe.remove();
					$(this).remove();
				}
			});
		}
	},'.video-container');
	
	$(document).on({
		keyup: function(e){
			$term = $(this).val();
			if($term.length){
				$('.alpha-results').show().html('');
				$matches = $("a.alpha-links:contains('"+$term+"')");
				$matches.each(function(){
					$clone = $(this).clone();
					$('.alpha-results').append($clone);
				});
			}else{
				$('.alpha-results').hide().html('');
			}
		}
	},'.brand-search input[type="search"]');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$body = $('body');
			if($(window).width() > 600){
				
			}else{
				$body.toggleClass('filter-open');
			}

			if($(window).scrollTop() < $('.toolbar').offset().top){
				$('.wall-container').animate({
					opacity:0
				},300);
				$('body').animate({
					scrollTop: $('.toolbar').offset().top
				},700,function(){
					$body.toggleClass('filter-open');
					$('.wall-container').delay(300).animate({
						opacity:1
					},300);
				});
			}else{
				$('.wall-container').animate({
					opacity:0
				},300,function(){
					$body.toggleClass('filter-open');
					$('.wall-container').delay(300).animate({
						opacity:1
					},300);
				});
				
			}
		}
	},'.filter-btn');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$body = $('body');
			$body.toggleClass('filter-open');
		}
	},'.facets-title .done');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$body = $('body');
			$body.toggleClass('filter-open');
		},
		mousewheel:function(e){
			$body = $('body');
			$body.toggleClass('filter-open');
		}
	},'.facets-overlay');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$el = $(this);
			$el.addClass('active');
			$index = $el.index();
			$subcats = Array('Jackets','Tops','Performance Clothing');
			y = 0;
			$('.facets .category a').slowEach(function(){
				if($(this).index() > $index){
					if(y < 3){
						$(this).html($subcats[y]);
						$(this).addClass('subcat');
					}else{
						$(this).addClass('subcat hide');
					}
					y++;
				}
			},100);
			$('.wall-container').delay(400).animate({
				opacity:0
			},700,function(){
				$('.wall-container').animate({
					opacity:1
				},300);
			});
			$('.facets .category').delay(500).animate({
				height:150
			},300);
		}
	},'.facets .category a');
	
	$(document).on({
		click:function(e){
			$el = $(e.target);
			if($el.hasClass('overlay')){
				e.preventDefault();
				$('body').toggleClass('filter-open');
			}
			if($el.hasClass('action')){
				e.preventDefault();
				$el.toggleClass('expanded');
				if($el.next().hasClass('brands')){
					$el.next().find('input').focus();
				}
			}
		}
	},'.facets');

	$(document).on({
		keyup: function(e){
			$term = $(this).val();
			$(".facets .brands label").hide();
			$(".facets .brands label:contains('"+$term+"')" ).show();
		}
	},'.facets input[type="search"]');
	
	$(document).on({
		click: function(e){
			$el = $(e.target);
			$parent = $el.parents('.listing');
			if($el.hasClass('right')){
				e.preventDefault();
				$parent.rotateGallery($el , 'right');
			}else if($el.hasClass('left')){
				e.preventDefault();
				$parent.rotateGallery($el, 'left');
			}else if($el.hasClass('favorite')){
				e.preventDefault();
			}else if($el.hasClass('swatch')){
				e.preventDefault();
			}
			
			console.log($el.attr('class'));
			
			if($el.hasClass('swatch')){
				$current = $parent.find('.gallery li.selected').css('background-image');
				$parent.find('.gallery li.selected').css('background-image',$el.css('background-image'));
			}
			
			if($el.hasClass('favorite')){
				if($el.hasClass('active')){
					$el.removeClass('active');
				}else{
					$el.addClass('active');
				}
			}
		},
		mouseover: function(e){
			$el = $(e.target);
			$gallery = $(this).find('.gallery-container');
			if($el.hasClass('right')){
				$gallery.addClass('focus-on-right');
			}else if($el.hasClass('left')){
				$gallery.addClass('focus-on-left');
			}else if($el.hasClass('selected')){
				$gallery.addClass('focus-on-selected');
			}else{
				$gallery.removeClass('focus-on-right focus-on-left focus-on-selected');
			}
		}
	},'.listing');
	
	if($('.listing').length){
		if(!$(this).attr('loaded')){
			$(this).loadListings();
		}
	}
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			if(!$(this).hasClass('more')){
				$('.sort a').removeClass('selected');
				$(this).addClass('selected');
			}
			
			console.log($(this).parents('.sort-menu').length);
			
			if($(this).parents('.sort-menu').length > 0){
				$(this).parents('.sort-menu').prev().addClass('selected');
			}
			
			$('.wall-container').animate({
				opacity:0
			},300,function(){
				$('.wall-container').delay(300).animate({
					opacity:1
				},300);
			});
		}
	},'.sort a');
	
	$(document).on({
		click: function(e){
			e.preventDefault();
			$('.main-container').views({
				fade:300,
				push: $(this).attr('href'),
				url: $(this).attr('href')+' .main-container'
			});
			
			$aside = $('aside');
			$subnav = $('aside').offset().top;
		}
	},'.direct');	


	$(document).on({
		mouseover:function(e){
			$dropmenu = $(this).find('dropmenu').outerHeight();
			$('drop').animate({
				height:$dropmenu
			},200);
			if(!$(this).find('.primary').hasClass('no-menu')){
				$('.drop-overlay').removeClass('hide');
			}
		}
	},'nav li');
	
	$(document).on({
		mouseover:function(){
			$(this).addClass('hide');
			$('drop').animate({
				height:0
			},200);
		}
	},'.drop-overlay');
	
	$(document).on({
		mouseover:function(){
			$('.drop-overlay').addClass('hide');
			$('drop').animate({
				height:0
			},200);
		}
	},'header');
	
	$(document).on({
		focus: function(e){
			$('body').addClass('show-search');
			if($(this).val().length > 0){
				$('.suggest').hide();
			}
		},
		keyup:function(e){
			$term = encodeURIComponent($(this).val()).replace(/[!'()*]/g, escape);
			if($term.length >= 3){
				$('.suggest').show();
				$('.suggest .dynamic').show();
				$('.suggest .default').hide();
				$.ajax({
				  	type: 'GET',
				  	url: 'http://localhost:8888/app_api/suggest/'+$term,
				  	success: function(data){
						// Build Suggestion Terms
						$title= $('<div />').addClass('title').html('Suggested Searches');
						$links = $('<div />').addClass('links');
						$.each(data, function(index, item){
							$link = $('<a href="#"><strong>'+item.queryValue.text+'</strong>'+item.suggestedValue.text+'</a>');
						  	$links.append($link);
						});
						$suggest = $('.suggest .dynamic');
						$suggest.html('');
						$suggest.append($title);
						$suggest.append($links);
				  	},
				  	error: function(xhr, type){
				    	console.log(type);
				  	}
				});
			}else{
				$('.suggest .dynamic').hide();
				$('.suggest .default').show();
			}
		},
		blur: function(e){
			$('body').removeClass('show-search');
			$('.suggest .dynamic').hide();
			$('.suggest .default').show();
		}
	},'search input');
	
	$(document).on({
		click:function(e){
			$sizes = $(this).attr('data');
			$(this).ajaxLoad();
		}
	},'.s-sizes');
	
	$(document).on({
		click:function(e){
			$sizes = $(this).attr('data');
			$(this).ajaxLoad();
		}
	},'.c-colors');

});
