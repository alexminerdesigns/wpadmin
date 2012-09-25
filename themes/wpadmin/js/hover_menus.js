jQuery(document).ready(function(){
	jQuery('#adminmenu li.level-2.expanded:not(.active-trail)').hover(
		function(){
			jQuery(this).find('ul').css('display', 'block');
		},
		function(){
			jQuery(this).find('ul').css('display', 'none');
		}
	);
});