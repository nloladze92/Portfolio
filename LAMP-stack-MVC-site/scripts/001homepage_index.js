/* the navigation jquery code */

	
	$(".menu-toggle").on('click', function() {
		$(this).toggleClass("on");
		$('.menu-section').toggleClass("on");
		$(".close").toggleClass('disappear');
		$("nav ul").toggleClass('hidden');
	});
	
	
	
	$(".nextpage").on('click', function(moveonce) {
		moveonce.stopPropagation();
		$(".container").removeClass('off');
		$(".menu-section").removeClass('changeoff');
		$('.container').toggleClass("on");
		//this is the dark menu item, it is moved to the right for some reason
		$('.menu-section').toggleClass("change");
		
		//2/10/17 - add-ons to fix the nav menu sticking
		//$('nav').toggle("on");
		
	});
	
	
	$(".burgerbutton").on('click', function() {
		
		$('.container').removeClass("on");
		$('.menu-section').removeClass("change");
		$('.container').toggleClass("off");
		$('.menu-section').toggleClass("changeoff");
		//$('nav').toggle("changeoff")
	});
	

		
	var $input = $('.registerinput');

$input.blur(function (e) {
  $(this).toggleClass('filled', !!$(this).val());
});