$(function () {
	var austDay = new Date();
	austDay = new Date(2013 , 5 - 1, 10, 17);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
});