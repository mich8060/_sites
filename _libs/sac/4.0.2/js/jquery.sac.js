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
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$el = $(this);
			$('.product-content-toggle a').removeClass('selected');
			$el.addClass('selected');
			$tab = $el.attr('data');
			$('.product-content-tab').hide();
			$('.'+$tab).show();
		}
	},'.product-content-toggle a'); 

});