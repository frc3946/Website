jQuery(".responsive-text-low").fitText(0.5);
jQuery(".responsive-text").fitText();
jQuery(".responsive-text-high").fitText(2.0);

/*
 * NAME: Bootstrap 3 Nested Sub-Menus
 * This script will active N-level multi drop-down menus in Bootstrap 3.#
 */
$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
	// Avoid following the href location when clicking
	event.preventDefault(); 
	// Avoid having the menu to close when clicking
	event.stopPropagation(); 
	// Re-add .open to parent sub-menu item

	$(this).parent().toggleClass('open');
	$(this).parent().find("ul").parent().find("li.dropdown").toggleClass('open');
});


/*
 * NAME: Album Image Maximizer
 * This script will apply a class to make the image full size.
 */
$('img.album_photo').on('click', function(event)
{
	$(this).toggleClass('maxed');
});