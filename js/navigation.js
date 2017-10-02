jQuery( document ).ready(function() {
    jQuery(".menu-item-has-children").hover(function() {
        jQuery(this).find('.sub-menu').toggleClass("visible");
    });
});