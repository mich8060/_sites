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
	  
	$(document).on({
	    keydown:function(e){   
	        if($(this).val().length > 0){
                $('.toolbar').addClass('search-active');
	        }else{
                $('.toolbar').removeClass('search-active');  
	        }
	    }
	},'.toolbar-search input');
	
	$(document).on({
        click:function(e){
            e.preventDefault();
            $('.toolbar-search input').val('');
            $('body').focus();    
            $('.toolbar').removeClass('search-active');
        }
	},'.toolbar-cancel');
	

	
	$(document).on({
	    click:function(e){
	        e.preventDefault();
	        $(this).toggleClass('active');
	    }
	},'.listing-alert'); 
	
	
	/* Look Module */
	$(document).on({
		click:function(e){
			e.preventDefault();
			$item = $(this);
			$target = $(e.target);
			$item.addClass('open-dialog');
			$('body').addClass('no-scroll');
			if($target[0] == $item[0]){
				$item.removeClass('open-dialog');
				$('body').removeClass('no-scroll');
			}
			if($target.hasClass('look-dialog-close')){
				$item.removeClass('open-dialog');
				$('body').removeClass('no-scroll');
			}
			if($target.hasClass('btn')){
				console.log('btn');
			}
			
		}
	},'.look');
	
	if($('.shop-navigation').length){
		$shop_nav = $('.shop-navigation').offset().top;
		$(document).on({
			scroll:function(e){
				if($(window).scrollTop() >= $shop_nav){
					$('.shop-navigation').addClass('fixed');
				}else{
					$('.shop-navigation').removeClass('fixed');
				}
			}
		});
	}
	


	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$(this).parent().find('.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	},'.listing-options-blocks');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$(this).parents('.newlook-dialog').addClass('expanded');
		}
	},'.newlook-dialog .listing');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$(this).parents('.newlook-dialog').removeClass('expanded');
		}
	},'.newlook-dialog .newlook-dialog-mini-close');
	

});