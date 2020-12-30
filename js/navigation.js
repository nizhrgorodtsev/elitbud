function menuToggle(x) {
	x.classList.toggle("change");
	if (x.classList.contains('change')) {
		openNav();
	} else {
		closeNav()
	}

}
function openNav() {
	jQuery('#primary-menu').css('width', '300px');
	jQuery('#over').css({
		'opacity' : '1',
		'z-index' : '6',
	});
	jQuery('body').css('overflow', 'hidden');
}

function closeNav() {
	jQuery('#primary-menu').css('width', '0');
	jQuery('#over').css({
		'opacity' : '0',
		'z-index' : '-1',
	});
	jQuery('body').css('overflow', 'unset');
}