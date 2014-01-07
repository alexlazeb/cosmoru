function include(jsFile){document.write('<script type="text/javascript" src="js/' + jsFile + '"></script>');}

include("jquery.easing.1.3.min.js");
include("jquery.mousewheel-3.0.6.pack.js");
include("jquery.easytabs.min.js");
include("autocomplete/jquery.autocomplete.js");
include("autocomplete/jquery.autocomplete.config.js");
//include("jquery.isotope.min.js");
include("jquery.flexslider-min.js");

function initialise(content) {

    var OSName="Unknown OS";
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
    else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
    else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
    else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
    $('html').addClass(OSName);

    $('.sortable-btn a,.choose_btn,.module-sortable li a').click(function(){
        $('.sortable-btn a, .choose_btn,.module-sortable li a').removeClass('active');
        $(this).addClass('active');
    });
    $('#main-slider').flexslider({
        animation: 'slide',
        easing: "swing",
//        direction: "horizontal",
        slideshowSpeed: 4000,
        mousewheel: true,
        controlNav: false,
        directionNav: true,
        pauseOnHover: true,
        touch: true
    });
    $('#checkout-container').easytabs();
    //Вход
    $(".show_link").click(function(){
        $(this).parent().children('div').removeClass('hide');
        $(this).parent().parent().children('div.top-panel-tel').addClass('hide');
        $(this).addClass('hide');
        return false;
    });

//    var $container = $('#sortable-product');
//    $container.imagesLoaded( function(){
//        $container.isotope({
//            itemSelector : 'li',
//            filter: '',
////            resizable: false,
////            animationEngine: 'jquery',
////            name : function ( $elem ) {
////                return $elem.find('.name').text();
////            },
//            animationOptions: {
//                duration: 750,
//                easing: 'linear',
//                queue: false
//            }
//        });
//    });
//    $('table.hovered tr').hover(function(){
//        var t= $('.btn_close');
//        if(t.size()==0){
//        $('table.hovered tr td:last-child').append('<a class="btn_close" href="#">X</a>');
//        }
//    });
    if($.browser.msie){
        $('input[placeholder]').each(function(){
            var input = $(this);
            $(input).val(input.attr('placeholder'));
            $(input).focus(function(){
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });
            $(input).blur(function(){
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.val(input.attr('placeholder'));
                }
            });
        });
    }

    Modernizr.load({
        test: Modernizr.borderradius || Modernizr.boxshadow,
        nope: 'js/PIE_IE678.js',
        callback: function () {
            var rrr = function(){
                if(!window.PIE){
                    setTimeout(rrr,50);
                }else{
                    $('.pie').each(function () {
                        window.PIE.attach(this);
                    });
                }
            };
            rrr();
        }
    });

} // END function initialise()

$(document).ready(function() {
	initialise('body'); // call function
});

$(document).on('click', 'a[href="#"]', function(e){ e.preventDefault(); });
// Flipping stuff
$(document).on('click', '.flipper_link', function(e){
    $(this).parent().children('.flipper--click').toggleClass('flipper--flipped');
    $(this).parent().toggleClass('flipper--flipped--back');
});
//$(document).tooltip({ selector: '[data-toggle="tooltip"]' });