
jQuery(window).load(function() {
function toggleIcon(e) {
jQuery(e.target)
    .prev('.panel-heading')
    .find(".more-less")
    .toggleClass('glyphicon-plus glyphicon-minus');
}
jQuery('.panel-group').on('hidden.bs.collapse', toggleIcon);
jQuery('.panel-group').on('shown.bs.collapse', toggleIcon);

});

// Tooltips Initialization
jQuery(document).ready(function(){
    jQuery('[data-toggle="tooltip"]').tooltip();   
});
// Popover Initialization
jQuery(document).ready(function(){
    jQuery('[data-toggle="popover"]').popover();   

        popup = {
          init: function(){
            jQuery('.weblizar_gallery_shortcode figure').click(function(){
              popup.open(jQuery(this));
            });
            
            jQuery(document).on('click', '.popup img', function(){
              return false;
            }).on('click', '.popup', function(){
              popup.close();
            })
          },
          open: function($figure) {
            jQuery('.weblizar_gallery_shortcode').addClass('pop');
            $popup = jQuery('<div class="popup weblizar_gallery_popup" />').appendTo(jQuery('body'));
            $fig = $figure.clone().appendTo(jQuery('.popup'));
            $bg = jQuery('<div class="bg" />').appendTo(jQuery('.popup'));
            $close = jQuery('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
            $shadow = jQuery('<div class="shadow" />').appendTo($fig);
            src = jQuery('img', $fig).attr('src');
            $shadow.css({backgroundImage: 'url(' + src + ')'});
            $bg.css({backgroundImage: 'url(' + src + ')'});
            setTimeout(function(){
              jQuery('.popup').addClass('pop');
            }, 10);
          },
          close: function(){
            jQuery('.gallery, .popup').removeClass('pop');
            setTimeout(function(){
              jQuery('.popup').remove()
            }, 100);
          }
        }

        popup.init()
});
