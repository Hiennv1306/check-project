
jQuery.noConflict();
jQuery(function() {

   //show cart mini
 	jQuery('.widget_shopping_cart').hide();
 	jQuery('.shopping_cart').click(function() {
 		jQuery(this).addClass('current');
 		jQuery('.widget_shopping_cart').slideToggle('slow');
 	});

 	jQuery('.shopping_cart a').click(function(event) {
 		event.preventDefault();
 	});

   //click out side hide cart
    jQuery(document).mouseup(function (e) {
        var container = jQuery(".header-cart");

        if (!container.is(e.target) 
            && container.has(e.target).length === 0) {
            jQuery('.widget_shopping_cart').fadeOut('slow');
        }
    });

   //scroll back to top and fix mene bar when sroll down
    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop()!=0 ) {
            jQuery('#dk-backtotop').css('bottom', '30px');
        } else {
            jQuery('#dk-backtotop').css('bottom', '-100px');
        }

        if(jQuery(this).scrollTop() > 120 ) {
            jQuery('.menu-container').addClass('fixed');
        } else {
            jQuery('.menu-container').removeClass('fixed');
        }
    });
    jQuery('#dk-backtotop').click(function() {
        jQuery('body,html').animate({scrollTop:0},800);
    });

    //menu hover
    jQuery( ".dropmenu" ).hover(
        function() {
            jQuery('.site-content').addClass( "hover" );
        }, function() {
            jQuery('.site-content').removeClass( "hover" );
        }
    );

    //menu responsive
    jQuery('.menu_mobile i.icons-show').click(function(){
        if(jQuery('.menu_mobile').css('left') == '0px'){
            jQuery('.menu_mobile').animate({
                left: -250
            }, 1000, function(){  });
        }else{
            jQuery('.menu_mobile').animate({
                left: 0
            }, 1000, function(){  });
        }
    });

    jQuery('.menu_mobile a').click(function(){
        if(jQuery(this).parent().find('ul').html() != '' && jQuery(this).parent().find('ul').html() != undefined){
            jQuery(this).parent().find('ul').first().toggleClass('show');
            return false;
        }
    });

    //hover menu
      jQuery('ul.nav li.dropdown').hover(function(e) {
         jQuery('.dropdown-menu', this).stop(true, true).slideDown('slow');
      }, function() {
         jQuery('.dropdown-menu', this).stop(true, true).fadeOut('fast');
      });

});

