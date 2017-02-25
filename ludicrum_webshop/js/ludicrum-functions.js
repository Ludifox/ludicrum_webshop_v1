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

	jQuery("#sidetrack-menu-tab").easyResponsiveTabs({
      tabidentify: 'tab-menu-sidetrack',
      activetab_bg: '#0A0F0F',
      inactivetab_bg: '#51545D'
    });


});