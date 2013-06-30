
/*Partner scroller effect*/
$(function() {
	$("#scroller").simplyScroll({
		autoMode: 'loop'
	});
});

/*News slider effect*/
$(function() {
	$('#foo3').carouFredSel({
		width: 940,
		height: 'auto',
		prev: '#prev3',
		next: '#next3',
		auto: false,
		
	});
});

/*Left Category effect - toggle*/
$(function() {
	$( "#accordion" ).accordion();
});

