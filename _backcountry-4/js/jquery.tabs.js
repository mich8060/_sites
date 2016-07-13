function tab(set, contentWrapper) {
  $(contentWrapper).data('tab-set', set);
  
  set.each(function() {
    $(this).data('set', set);
    var targetEl = $($(this).data('target'));
    $(this).data('target-el', targetEl);
    
    if(!$(this).hasClass("active")) {
      targetEl.hide();
    }
    
    $(this).click(function() {
      set.removeClass("active");
      $(this).addClass("active");
      var newContentEl = $(this).data('target-el');
      
      set.each(function() {
        $(this).data('target-el').hide();
      });
      
      newContentEl.show();
      contentWrapper.animate({height: newContentEl.height()});
    })
  });
  
  $(window).resize(function() {
    setTabHeight(contentWrapper);
  })
  setTabHeight(contentWrapper);
}

function setTabHeight(contentWrapper) {
  var set = $(contentWrapper).data('tab-set');

	if (typeof set != 'undefined'){
	  set.each(function() {
	    if($(this).hasClass("active")) {
	      var targetEl = $(this).data('target-el');
	      contentWrapper.height(targetEl.height());
	    }
	  })
	}
}
