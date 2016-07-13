var overviewTop, overviewBottom, stickScrollState, recomendationCarousel;

$(document).ready(function(){
  if ($(window).width() >= 1100) {
    $('.details').addClass('active');
  };
  
	$(".drawer").click(function() {
	    if($(this).hasClass('active')) {
	      $(".drawer.active").animate({
            height: 40
        }, 600,'easeOutQuad').removeClass('active');
	    }else{
	      $(".drawer.active").animate({
            height: 40
        }, 600,'easeOutQuad').removeClass('active');
        
        var height = $(this).outerHeight(true) + $(this).find('.content').outerHeight(true);
        
	      $(this).addClass('active');
        
	      $(this).animate({height: height}, 600,'easeOutQuad');
	    }
	});

	$('.detail-pics li').click(function() {
	  var imgSrc = $(this).find('img').attr('src');
	  $('.detail-pics li.active').removeClass('active');
	  $(this).addClass('active');
	  $('.big-image img').attr('src', imgSrc);
	});

	$('.swatches li').click(function() {
	  if ($(this).hasClass('active') == true) {
	    return true
	  } else {
	    var imgSrc = $(this).find('img').attr('src');
	    var thisClass = $(this).attr('class');
	    $('.detail-pics li.active').removeClass('active');
	    $('.swatches li.active').removeClass('active');
	    $(this).addClass('active');
	    $('.detail-pics li.selected-color').addClass('active').find('img').attr('src', imgSrc);
	    $('.big-image img').attr('src', imgSrc);
  	  $("#color").val(thisClass).change();
	  }
	});

	$('#color').change(function() {
	  var thisValue = $("#color option:selected").attr('value');
	  if ($('.swatches li.'+thisValue).hasClass('active') == true) {
	    return true
	  } else {
	    var thisClass = thisValue;
	    var defaultPic = $('.swatches li.'+thisClass).find('img').attr('class');
	    $('#detail-pics .active').removeClass('active');
	    $('#detail-pics').find('#'+thisClass).addClass('active');
	    $('#'+thisClass+' .big-image img').attr('src', 'img/pdp/'+defaultPic+'.jpg');
	    $('.swatches li.'+thisClass).addClass('active');
	    $("#color").val(thisClass).change();
	  }

	});
	
	$('.big-image').click(function() {
	  toggleZoom();
	});
	
	$('.zoom-image').click(function() {
	  toggleZoom();
	});
	
	function toggleZoom() {
	  $('.overview').toggleClass('zoom');
	  loadCanvasZoom($('.big-image'));
	  setTimeout(setScrollSpyPositions, 500);
	  checkStickyNav();
	}
	
	function loadCanvasZoom(imageEl) {
	  var imgURL = imageEl.find("img").attr("src");
	  //console.log(imgURL);
	  /*
	  var gesturableImg = new ImgTouchCanvas({
        canvas: document.getElementById('image-zoom-canvas'),
        path: imgURL
    });
    */
    var img = $('<img>');
    img.attr('src', imgURL);
    var leftScroll = (imageEl.width() - 900) / 2;
    $('.zoom-image').html(img).scrollLeft(-leftScroll);
	}
	
	function updateAfterResize() {
	  setScrollSpyPositions();
	  updateCarousel();
	}
	
	function setScrollSpyPositions() {
	  var stickyEl = $('.sticky-nav');
	  if(!stickyEl[0]) return;
	  overviewTop = stickyEl.offset().top;
	  overviewBottom = $('.listing-wall').offset().top;
	  //console.log(overviewTop + ":" + overviewBottom);
	}
	
	recomendationCarousel = $(".recommendation-slider .list-wrapper");
	function updateCarousel() {
	  /*
    if($(window).width() >= 600) {
      recomendationCarousel.owlCarousel({
          items : 4,
          itemsDesktop : [1400,4],
          itemsTablet : [1100, 3],
          itemsMobile: [900, 2],
          slideSpeed : 600,
          pagination: false,
          paginationSpeed : 600,
          addClassActive: true,
          navigation : true,
          scrollPerPage : true
      });

    } else {
      recomendationCarousel.data('owlCarousel') ? recomendationCarousel.data('owlCarousel').destroy() : true;
    }
    */
  }
	
	$(window).resize(updateAfterResize);
	updateAfterResize();
	
	function setStickScrollState() {
	  var newStickScrollState;
	  var curPos = $(window).scrollTop();
	  //console.log(curPos);
	  
	  if(curPos < overviewTop) {
	    newStickScrollState = "top";
	  } else if(curPos < overviewBottom) {
	    newStickScrollState = "overview";
	  } else {
	    newStickScrollState = "bottom";
	  }
	  
	  if(stickScrollState != newStickScrollState) {
  	  stickScrollState = newStickScrollState;
	    checkStickyNav();
    }
	}
	
	$(window).scroll(setStickScrollState);
	setStickScrollState();
	
	function checkStickyNav() {
	  if($('.overview').hasClass('zoom')) {
	    $('.sticky-nav').addClass('active');
	    
	    if(stickScrollState != "top") {
  	    $('.sticky-nav').addClass('stuck');
	    } else {
	      $('.sticky-nav').removeClass('stuck');
	    }
	  } else {
	    if(stickScrollState == "bottom") {
  	    $('.sticky-nav').addClass('stuck');
  	    $('.sticky-nav').addClass('active');
	    } else {
	      $('.sticky-nav').removeClass('stuck');
	      $('.sticky-nav').removeClass('active');
	    }
	  }
	}
	
	$(".sticky-cart").on("click", function() {
    $(document).scrollTo(".overview", 600, {offset:-50});
    $('.overview').removeClass('zoom');
    setTimeout(setScrollSpyPositions, 500);
    checkStickyNav();
  });
  
  $(".sticky-reviews").on("click", function() {
    $(document).scrollTo(".long-form-reviews", 600, {offset:-50});
  });
  
  $(".sticky-specs").on("click", function() {
    $(document).scrollTo(".long-form-specs", 600, {offset:-50});
  });
	
  $(".read-long-description, .sticky-details").on("click", function() {
    $(document).scrollTo(".long-form", 600, {offset:-50});
  });
  
	var tabSet = $(".long-form-tab-label");
  var tabWrapper = $(".long-form-tab-content-wrapper");
  tab(tabSet, tabWrapper);
  
  
  swatchCarouselInit();
  function swatchCarouselInit(){
    var heroCarousel = $(".swatches-list");
    heroCarousel.owlCarousel({
        itemsCustom: [[0, 7], [1400, 10]],
        scrollPerPage: true,
        slideSpeed : 600,
        paginationSpeed : 600,
        navigation : true,
        pagination: false
    });
  }
  
});