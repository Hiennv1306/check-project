
   jQuery.noConflict();
         jQuery(function() {
             var raido = jQuery(".wrap").attr("data-toggle");
             if (raido == 1) {
                 jQuery(".vnk-tuvan").css("display", "none");
                 jQuery(".x").click(function() {
                     jQuery(".wrap").slideToggle();
                     jQuery(".vnk-tuvan").slideToggle();
                 });
                 jQuery(".vnk-tuvan").click(function() {
                     jQuery(".wrap").slideToggle();
                     jQuery(this).slideToggle();
                 });
             } else {
                 jQuery(".wrap").css("display", "none");
                 jQuery(".x").click(function() {
                     jQuery(".wrap").slideToggle();
                     jQuery(".vnk-tuvan").slideToggle();
                 });
                 jQuery(".vnk-tuvan").click(function() {
                     jQuery(".wrap").slideToggle();
                     jQuery(this).slideToggle();
                 });
             }
         });