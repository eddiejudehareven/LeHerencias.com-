jQuery( document ).ready(function() {
    jQuery(".menu-item").hover(function() {
        jQuery(this).find('.sub-menu').toggleClass("visible");
    });
});

// jQuery( document ).ready(function() {
//     jQuery(".menu-item li").hover(function() {
//         jQuery(this).find('.sub-menu ul > li').toggleClass(".child");
//     });
// });

// if .menu-item-has-children has a li then we want to add its own visible class which floats 
//child sub menu item to the right 

// jQuery( document ).ready(function() {
//     jQuery(".sub-menu").hover(function() {
//         jQuery(this).find('ul > li > ul > li').toggleClass(".sub-menu.grand-child");
//     });
// });
