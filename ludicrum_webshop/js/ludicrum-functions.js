/*
 * Ludicrum Theme / Retailer child scripts
 */

//Equalheighting
jQuery('.selector').matchHeight();


jQuery(document).ready(function (jQuery) {
	//WCAG: show text size adjustments when hovering size icon
    jQuery("#textsize").mouseover(function() {
		jQuery("#text-enlargen-info").show();
	}).mouseout(function() {
		jQuery("#text-enlargen-info").hide();
	});
});