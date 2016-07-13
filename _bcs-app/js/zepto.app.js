$(document).ready(function(){
	
	$base_url = $(this).contains("design.backcountry.com") ? 'http://design.backcountry.com/mobile/' : 'http://localhost:8888/_sites/_bcs-app/';

	if($(this).contains("plp")){
		$(this).views({
			search: true
		});
	}
		
	$(document).on('touchstart touchend','a',function(e){ $(this).speedTap(e); });
	$(document).on('touchstart touchend','.menu-overlay',function(e){ $(this).speedTap(e); });
	$(document).on('touchstart touchend','input[type="checkbox"] + label',function(e){ $(this).speedTap(e); });
	
	/* Global - Open Menu	*/
	$('.branding').on('click',function(e){
		e.preventDefault();
		$search = ($tracking.length) ? $tracking[$tracking.length - 1].menu : false;
		$(this).views({ 
			menu: true,
			search: $search
		});
	});
	
	/* Global - Close Menu	*/
	$('.menu-overlay').on('click',function(){
		$search = ($tracking.length) ? $tracking[$tracking.length - 1].menu : false;
		$(this).views({ 
			menu:false,
			search: $search
		});
	});
	
	/* Global - Rebuild taxonomy and product listing based on what taxonomy item is tapped. */
	$('menu').on('click','a.hasChild', function(e){
		e.preventDefault();
		$el = $(this);
		$name = $el.html();
		$('.menu-container').addClass('expanded').removeClass('scroll');
		$('.navigation-head').append($el);
		$el.addClass('loading active').removeClass('hasChild');
		$('.navigation-body').views({
			cache: false,
			fade: 300,
			menu: true,
			search: true,
			url: $el.attr('data')
		},function(){
			$('a.active').removeClass('loading');
		});
		
		if($name != "Brands" && $name != "Activities"){
			$('.main-container').views({
				cache: true,
				clear: true,
				menu: true,
				search: true,
				url: 'categories/'+$el.attr('data')
			},function(){
				$('body').addClass('search-open');
			});
		}

		if($name == "Brands"){
			$('.alphabet').show();
		}
	});
	
	$(document).on('click','.more-btn',function(e){
		e.preventDefault();
		$el = $(this);
		$('.menu-container').addClass('expanded').removeClass('scroll');
		$link = $('<a href="#">More...</a>').css({
			'background':'#ededed',
			'border-bottom':'solid 1px #ccc'
		});
		$('.navigation-head').append($link);
		$('.navigation-body').views({
			cache: false,
			fade: 300,
			menu: true,
			search: true,
			url: $el.attr('data')
		},function(){
			$('a.active').removeClass('loading');
		});
	});
	
	$(document).on('click','.profile-bubble',function(e){
		e.preventDefault();
		$el = $(this);
		$('.menu-container').addClass('semi-expanded');
		$('.navigation-body').views({
			cache: false,
			fade: 300,
			menu: true,
			url: $el.attr('data')
		},function(){
			$('a.active').removeClass('loading');
		});
	});
	
	/* Global - Build product listing based on which taxonomy is selected */
	$('.menu-container').on('click','.navigation a.only',function(e){
		e.preventDefault();
		$el = $(this);
		$el.addClass('loading');
		$('.main-container').views({
			cache: true,
			clear: true,
			history: 'categories/'+$el.attr('data'),
			menu: false,
			search: true,
			url: 'categories/'+$el.attr('data')
		},function(){
			$el.removeClass('loading');
		});
	});
	
	/* Global - Restore the homepage & the origonal navigation when the Main Menu navigation item is tapped. */
	$('.menu-container').on('click','.nav-back',function(e){
		e.preventDefault();
		$('.alphabet').hide();
		$('.menu-container').removeClass('expanded semi-expanded').addClass('scroll');
		$('.navigation-head a').not('.nav-back').remove();
		$('.navigation-body').views({ cache:false, url:'categories', fade:300 });
		$('.main-container').views({ clear:true, menu:true, search: false, url: 'home' });
	});
	
	/* Global - Rebuild taxonomy and product listing when a user steps back up through a breadcrumb */
	$('menu').on('click','.navigation-head a.active', function(e){
		e.preventDefault();
		$('.alphabet').hide();
		$el = $(this);
		$.each($('.navigation-head a'),function(index){
			if($el.index() < index) {
				$(this).remove();
				$('.main-container').views({
					cache: true,
					clear: true,
					menu: true,
					search: true,
					url: 'categories/'+$el.attr('data')
				});
				$('.navigation-body').views({
					cache: false,
					fade: 300,
					menu: true,
					search: true,
					url: $el.attr('data')
				});
			}
		});
	});
	
	/* Global - Perform a search against the api */
	$('.search-form').on('submit',function(e){
		e.preventDefault();
		$term = ($('.search-form').serialize()).replace('search=','').toLowerCase();
		if($term == "oru" || $term == "oru "){
			$('.main-container').views({
				cache: true,
				enviroment:$base_url,
				search: false,
				toolbar: {
					back: true,
					share: true
				},
				url: 'brand .main-container'
			})
		}else{
			$multiple = ($tracking.length) ? {
				back: true,
				share: false
			} : false;
			$('.main-container').views({ 
				cache: true,
				search:true,
				toolbar: $multiple,
				url: 'search/'+$term
			});
		}

		$('search input').blur();
	});
	
	$(document).on('click','.local',function(e){
		e.preventDefault();
		$('.main-container').views({
			url: 'local',
			fade: 300,
			cache: true,
			toolbar: {
				back:true,
				share:true
			},
			html: $(this).attr('local')
		});
	})
	
	$(document).on('click','.direct-search',function(e){
		e.preventDefault();
		$multiple = ($tracking.length) ? {
			back: true,
			share: false
		} : false;
		$('.main-container').views({ 
			cache: true,
			search:true,
			toolbar: $multiple,
			url: 'search/'+$(this).attr('term')
		});
	});
	
	/* Global - Directly connects any link with the class name direct to ajax its href into the main view */
	$(document).on('click','.direct', function(e){
		e.preventDefault();
		$('.main-container').views({
			cache:true,
			enviroment: $base_url,
			menu: false,
			url: $(this).attr('href')+' .main-container'
		},function(){
			$('input[type="time"]').css('appearance','normal');
		});
	});
	
	/* Global - Directly connects any link with the class name direct to ajax its href into the main view */
	$(document).on('click','.direct-product', function(e){
		e.preventDefault();
		$('.main-container').views({
			cache:true,
			collections: false,
			enviroment: $base_url,
			menu: false,
			toolbar: {
				back: true,
				share: true
			},
			url: 'pdp/'+$(this).attr('href')+' .pdp'
		});
	});
	
	/* Global - Directly connects any link with the class name direct to ajax its href into the main view */
	$(document).on('click','.direct-share', function(e){
		e.preventDefault();
		$('.main-container').views({
			cache:true,
			fade:300,
			enviroment: $base_url,
			menu: false,
			toolbar: {
				back: false,
				share: true
			},
			url: $(this).attr('href')+' .main-container'
		});
	});
	
	/* Global - Directly connects to any editable page */
	$(document).on('click','.direct-edit', function(e){
		e.preventDefault();
		$('.main-container').views({
			cache:true,
			clear:false,
			editing:{
				left: "Cancel",
				title: $(this).attr('title'),
				right: "Save"
			},
			fade:300,
			enviroment: $base_url,
			menu:false,
			url: $(this).attr('href')+' .main-container'
		});
	});
	
	$(document).on({
		click:function(e){
			e.preventDefault();
		}
	},'.nav a');
	
	/* Global - Directly connects to any editable page */
	$(document).on('click','.collect', function(e){
		e.preventDefault();
		$('.main-container').views({
			cache:true,
			clear:false,
			collections:true,
			fade:300,
			enviroment: $base_url,
			menu:false,
			toolbar: {
				back: true,
				share: true
			},
			url: $(this).attr('href')+' .main-container'
		});
	});
	
	/* Global - Directly connects to any editable page */
	$(document).on('click','.direct-back', function(e){
		e.preventDefault();
		$('.main-container').views({
			cache:true,
			clear:false,
			fade:300,
			enviroment: $base_url,
			menu:false,
			toolbar: {
				back: true,
				share: false
			},
			url: $(this).attr('href')+' .main-container'
		});
	});
	
	/* Global - If the user swipes up the toolbar is display */
	$('main').swipeUp(function(){
		if($toolbar){
			$('body').addClass('toolbar-show');
		}
	})
	
	/* Global - If the user swipes down the toolbar is hidden */
	$('main').swipeDown(function(){
		$('body').removeClass('toolbar-show');
	});
	
	/* Global - Hide the modal view */
	$(document).on('click','.modal-close',function(e){
		e.preventDefault();
		$(this).views({
			modal: false,
			menu: false
		});
	});
	$count = 0;
	
	/* Global - Execute Back Button */
	$(document).on('click','.back-arrow, .editing a',function(e){
		e.preventDefault();	
		// There are somethings you don't want to redo when going backwards
		$.each($tracking, function(index, item){
			item.menu = false;
			item.cache = false;
			item.clear = false;
		});
		if($tracking.length){
			$tracking.pop();
			if($tracking.length){
				$('.main-container').views($tracking[$tracking.length - 1],function(){	
					locked = false;
				});
			}else{
				$('.main-container').views({
					clear:true,
					enviroment: $base_url,
					fade: 300,
					url: "home .main-container"
				});
			}
		}
	});
	
	/* Listing - Load and transition from listing page to Product Detail Page */
	$(document).on('click','.listing',function(e){
		e.preventDefault();
		$('.main-container').views({
			cache: true,
			clear: false,
			enviroment: $base_url,
			search: false,
			toolbar:{
				share: true,
				back: true
			},
			url: 'pdp/'+$(this).attr('data')+' .pdp'
		});
	});
	
	/* PDP - Display share widget */
	$(document).on('click','.share-btn',function(e){
		e.preventDefault();
		$(this).views({ share:true });
	});
	
	/* PDP - Hide share widget */
	$(document).on('click','.share-overlay, .share a',function(e){
		e.preventDefault();
		$back = ($tracking.length) ? $tracking[$tracking.length - 1].toolbar.back : false;
		$(this).views({
			share:false,
			toolbar:{
				share: true,
				back: $back
			}
		});
	});
	
	/* PDP - Opens product variat selector */
	$(document).on('click','.selector',function(e){
		e.preventDefault();
		if($(this).contains("gift")){
			$('.selector-overflow').views({
				enviroment: $base_url,
				fade:0,
				select: true,
				url:'amounts .tableview'
			});
		}else{
			$('.selector-overflow').views({
				enviroment: $base_url,
				fade:0,
				select: true,
				url:'options/'+$(this).attr('data')+' .tableview'
			});
		}
	});
	
	/* PDP - Hides product variant selector */
	$(document).on('click','.selector-overlay, .selector-titlebar a',function(e){
		$(this).views({ 
			select: false, 
			toolbar:{
				share: true,
				back: true
			}
		});
	});
	
	/* PDP - Checks the variant selected */
	$(document).on('click','.selector-overflow a',function(e){
		e.preventDefault();
		$('.selector-overflow li').removeClass('selected');
		$(this).parent().addClass('selected');
		$('.selector label').html($(this).find('label').text());
	});
	
	/* PDP - Display Mini-Cart when a user adds to cart */
	$(document).on('click','.mini',function(e){
		e.preventDefault();
		$('.mini-cart .name').html($(this).attr('data'));
		$(this).views({ cart:true });
	});
	
	/* PDP - Close Mini-Cart when a user taps either button */
	$(document).on('click','.mini-cart .button',function(e){
		e.preventDefault();
		$(this).views({ 
			cart:false, 
			toolbar:{
				share: true,
				back: true
			}
		});
	});
	
	$(document).on('click','.message',function(){
		//$(this).hide();
		//$('.message-block').show();
	});
	
	/* My Brands - Brand Select */
	$(document).on('click','.mybrand',function(e){
		e.preventDefault();
		e.stopPropagation();
		$el = $(this);
		if($el.hasClass('white-outline')){
			$el.addClass('grow');
			$el.removeClass('white-outline');
			$el.addClass('white');
		}else{
			$el.addClass('grow');
			$el.removeClass('white');
			$el.addClass('white-outline');
		}
		window.setTimeout(function(){
			$el.removeClass('grow');
		},300);
	});
	
	/* Onboarding - Initialize carousel widget */
	$('.carousel').carousel({
		url:'',
		slides: 0,
		width:$('.carousel').width()
	});
	
	$(document).on('touchend','.picto',function(){
		$source = $(this).find('img').attr('src');
		$('.insta-main').css('height','auto');
		$('.insta-main img').attr('src',$source);
	});
	
	$(document).on('touchstart dragstart','.touchswipe',function(){
		$touchLock = !$touchLock;
	});
	
	$(document).on('touchend touchcancel dragend','.touchswipe',function(){
		$touchLock = !$touchLock;
	});
	
	/* Onboarding - Passion Select */
	$(document).on('click','.passion',function(e){
		e.preventDefault();
		e.stopPropagation();
		$el = $(this);
		if($el.hasClass('white-outline')){
			$el.addClass('grow');
			$el.removeClass('white-outline');
			$el.addClass('white');
		}else{
			$el.addClass('grow');
			$el.removeClass('white');
			$el.addClass('white-outline');
		}
		window.setTimeout(function(){
			$el.removeClass('grow');
		},300);
	});
	
	/* Onboarding - Gender Selection */
	$('.gender').on('click',function(e){
		e.preventDefault();
		$index = $(this).index();
		if($index == 1){
			$('.gender').eq(0).css('width','100%');
			$('.gender').eq(1).css('width','0%');
			$('.text-overlay .button').eq(0).removeClass('black-outline').addClass('black');
		}else if($index == 2){
			$('.gender').eq(1).css('width','100%');
			$('.gender').eq(0).css('width','0%');
			$('.text-overlay .button').eq(1).removeClass('black-outline').addClass('black');
		}
	});
	
	/* Onboarding - Add active class to passions button on onboarding */
	$('.text-overlay .button').on('click',function(e){
		e.preventDefault();
		$index = $(this).index();
		$('.text-overlay .button').removeClass('black').addClass('black-outline');
		if($index == 1){
			$('.gender').eq(0).css('width','100%');
			$('.gender').eq(1).css('width','0%');
			$('.text-overlay .button').eq(0).removeClass('black-outline').addClass('black');
		}else if($index == 2){
			$('.gender').eq(1).css('width','100%');
			$('.gender').eq(0).css('width','0%');
			$('.text-overlay .button').eq(1).removeClass('black-outline').addClass('black');
		}
	});
	
	
	/* Profile - Display the location icon when user focuses on this input */
	$(document).on('focus','.get_location_input',function(){
		$(this).next().show();
	}).on('blur','.get_location_input',function(){
		$el = $(this);
		window.setTimeout(function(){
			$el.next().hide();
		},3000);
	}).on('click','.get_location_input',function(e){
		e.preventDefault();
	});
	
	/* Profile - Change cover photo selection */
	$(document).on('click','.cover-container .grid_2', function(e){
		e.preventDefault();
		$('.cover-container .grid_2').removeClass('selected');
		$(this).addClass('selected');
	});
	
	/* Cart - Toggle saved cards & new card entry */
	$(document).on('click','.card-select',function(e){
		$index = $(this).attr('data');
		$('.card').hide();
		$('.card').eq($index).show();
	});
	
	$(document).on('click','.scan-card',function(e){
		e.preventDefault();
		alert("working");
	});
	
	if($(this).contains("orders")){
		$('.main-container').views({
			background:true
		});
	}
	
	if($(this).contains("rma")){
		$('.main-container').views({
			editing:{
				left: "Help?",
				title: "Shipping Return Method",
				right: "Done"
			},
			toolbar: {
				back:true,
				share:false
			}
		});
	}
	
	if($(this).contains("signin")){
		$('.modal-body').views({
			modal: true,
			url: 'signin .main-container'
		});
	}
	
	$(document).on('click','.fqa',function(){
		$('.modal-body').views({
			enviroment: $base_url,
			fade:200,
			modal: true,
			url: 'fqa .main-container'
		});
	});
	
	
	/* Order History - Shows Product Options Selector */
	$(document).on('click','.returns',function(e){
		e.preventDefault(); 
		$('.options-overflow').views({ 
			option: {
				buttons: {
					primary: "Accept Return Policy"
				},
				title: "Return Policy"
			},
			scroll: true,
			url: 'agreement'
		});
		$('.options-overflow').attr({
			order: $(this).attr('data'),
			sku: $(this).attr('sku'),
			qty: $(this).attr('qty')
		});
	});
	
	/* Order History - Hides Product Options Selector */
	$(document).on('click','.options-overlay',function(e){
		$(this).views({ 
			option: false,
			scroll: true
		});
	});
	
	/* Order History - Checks the variant selected */
	$(document).on('click','.options-overflow a',function(e){
		e.preventDefault();
		$('.options-overflow li').removeClass('selected');
		$(this).parent().addClass('selected');
		$('.selector label').html($(this).find('label').text());
	});
	
	$(document).on({
		click: function(e){
			if(!$(e.target).hasClass('icons')){
				$input = $(this).find('input');
				if($input.is(':checked')){
					$input.removeAttr('checked');
					$(this).find('.button-tiny').addClass('hide');
				}else{
					$input.attr("checked",true);
					$(this).find('.button-tiny').removeClass('hide');
				}	
			}
		}
	}, '.notification');
	
	$(document).on({
		click: function(e){
			e.preventDefault();
			$('.options-overflow').views({ 
				option: {
					title: "Select an Item",
					buttons: {
						primary: "Back to Reasons"
					}
				},
				fade:300,
				scroll: true,
				url: 'returnlist/'+$('.options-overflow').attr('order')+'/'+$('.options-overflow').attr('sku')
			});
		}
	},'.return-another');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$('.options-overflow').views({ 
				option: {
					buttons: {
						primary: "Return Item(s)"
					},
					title: "Select a Reason"
				},
				fade:300,
				scroll: true,
				url: 'returns'
			});
		}
	},'.options-overflow .product');
	
	$(document).on('click','.return-submit',function(e){
		e.preventDefault();
		if($(this).html() == "Return Item(s)"){
			$('.main-container').views({
				cache: true,
				fade:300,
				editing:{
					left: "Help?",
					title: "Shipping Return Method",
					right: "Done"
				},
				enviroment: $base_url,
				url:'rma .main-container'
			});
		}else{
			if($('.options-overflow').attr('qty') > 1){
				$('.options-overflow').attr('qty', $('.options-overflow').attr('qty') - 1);
				$('.options-overflow').views({ 
					option: {
						buttons: {
							primary: "Return Number Selected"
						},
						title: "Number to Reason"
					},
					fade:300,
					scroll: true,
					url: 'returnqty'
				});
			}else{
				$('.options-overflow').views({ 
					option: {
						buttons: {
							primary: "Return Item(s)",
							secondary: "Return Another Item"
						},
						title: "Select a Reason"
					},
					fade:300,
					scroll: true,
					url: 'returns'
				});
			}
		}
	});
	
	$(document).on('click','.toggle-tab',function(e){
		e.preventDefault();
		if(!$(this).hasClass('toggle-selected')){
			$ind = $(this).index();
			$('.content').hide();
			$('.content').eq($ind).show();
			$('.toggle-tab').removeClass('toggle-selected');
			$(this).addClass('toggle-selected');
		}
	});
	
	$(document).on('click','.order-cards .button-tiny', function(e){
		e.preventDefault();
		$order = $(this).parent().parent().find('.order-tracking');
		if($order.css('display') == 'none'){
			$order.show();
		}else{
			$order.hide();
		}
		
	});
	
	$(document).on("focus","#signin-form input", function(){
		$(this).parent().parent().prev().animate({
			height:0,
			opacity:0
		},200)
	});
	
	$(document).on("blur","#signin-form input", function(){
		$(this).parent().parent().prev().animate({
			height:90,
			opacity:1
		},200)
	});
	
	$(document).on({
		scroll: function(e){
			console.log("scrolling");
		}
	},'main')
	
});