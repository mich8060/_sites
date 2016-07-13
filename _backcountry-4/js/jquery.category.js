$(window).load(function() {
  /*
  $(".js-radio-toggle").click(function() {
    var currentEl = $(this).parent().find(".active");
    currentEl.removeClass("active");
    if($(this).is(currentEl)) return;
    $(this).addClass("active");
  });
  
  $(".js-radio-toggle").each(function() {
    var heightCount = $(this).find("li").length;
    $(this).addClass("height-" + heightCount);
  })
  */      
  storyBrandInit();
  function storyBrandInit(){
    var heroCarousel = $(".lookbook-slider");
    heroCarousel.owlCarousel({
        singleItem: true,
        slideSpeed : 600,
        paginationSpeed : 600,
        navigation : true
    });
  }
});