$('body > button').on('click', function(event) {
	event.preventDefault();
	$(this).toggleClass('active-btn');
	$('body > nav').toggleClass('active-nav');
});

$('.item-nav').on('click', function(event) {
	event.preventDefault();
	let Item = $(this).attr('href');
	$('body, html').stop(true, true).animate({
		scrollTop: $(Item).offset().top
	}, 1000);
	$('body > nav').removeClass('active-nav');
	$('body > button').removeClass('active-btn');
});

$('#productos > div > form > div:first-of-type > label').on('click', function(event) {
	$('#productos > div > form > div:first-of-type > label').removeClass('active');
	$(this).addClass('active');
});