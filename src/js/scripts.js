$(document).ready(function() {
	$('.about_nav_ul_li_a').click(function() {
		$('.about_nav_ul_li').removeClass('about_nav_ul_li_active');
		$(this).closest('.about_nav_ul_li').addClass('about_nav_ul_li_active');
	});
});

$(window).load(function() {

});