$(document).ready(function(){

	
	$(document).on({
		click:function(e){
			$el = $(this);
			if($el.attr('load')){
				e.preventDefault();
				$load = $el.attr('load');
				$d = $el.find('span').html();
				$el.toggleClass('loading');
				$el.css('width',$el.css('width'));
				window.setTimeout(function(){
					$el.find('span').html($load);
					$el.toggleClass('loading');
					window.setTimeout(function(){
						$el.find('span').html($d);
					},3000);
				},3000);
			}
		}
	},'.btn');
	

});