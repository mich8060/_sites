$(document).ready(function(){
	
	var frame = $('#frame');
	
	/* Chances the class that sizes the iframe */
	$(document).on('click','.preview-nav a',function(e){
		$('.preview-nav a').removeClass('selected');
		$(this).addClass('selected');
		$('body').attr('class',"preview-body scroll");
		$('body').addClass($(this).attr('data'));
		setTimeout(function(){
			$width = $('iframe').css('width');
			$('.device-width').html($width);
		},400);
		$('body').scrollTop(0);
		e.preventDefault();
	});
	
	$(document).on('click','iframe',function(){
		console.log('clicked');
	});
	
	$.fn.clock = function(){
		$el = $(this);
		window.setInterval(function(){
			options = {
				hours: new Date().getHours(),
				minutes: new Date().getMinutes(),
				meridiem: "AM"
			}

			if(options.hours > 12){
				options.meridiem = "PM";
				options.hours = options.hours - 12;
			}
			if(options.minutes < 10){
				options.minutes = "0"+options.minutes;
			}
			$el.html(options.hours+":"+options.minutes+" "+options.meridiem);
		},1000)
	}
	
	$('.clock').clock();
	
	/* Reloads the iframe only */
	$('.reload').on('click',function(e){
		e.preventDefault();
		$('#frame').attr('src', $('#frame').attr('src'));	
	});
});