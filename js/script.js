function include(jsFile){document.write('<script type="text/javascript" src="js/' + jsFile + '"></script>');}

include("jquery.easing.1.3.min.js");
include("jquery.mousewheel-3.0.6.pack.js");
include("jquery-ui-1.10.3.custom.min.js");
include("jquery.easytabs.min.js");
include("qtip/jquery.qtip.min.js");
include("autocomplete/jquery.autocomplete.js");
include("autocomplete/jquery.autocomplete.config.js");
include("jquery.spinner.js");
//include("jquery.isotope.min.js");
include("jquery.flexslider-min.js");
include("jcarousellite_1.0.1.pack.js");

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
    $('.item_spinner').spinner();
    $('#main-slider').flexslider({
        animation: 'slide',
        easing: "swing",
        slideshow: false,
//        direction: "horizontal",
        slideshowSpeed: 4000,
        mousewheel: true,
        controlNav: false,
        directionNav: true,
        pauseOnHover: true,
        touch: true
    });
    $('#watched-product-slider .slider-wrap').jCarouselLite({
        btnNext: ".btn-control .btn-v-next",
        btnPrev: ".btn-control .btn-v-prev",
        start: 0,
        vertical: true,
        visible: 3,
        speed: 333,
        scroll: 1,
        circular: false,
        mousewheel: true
    });
    var countSliderClick = 1;
    var countSliderElement = $("#sideRight .watched-product-list li").length-3;
    $("#sideRight .module .btn-control a").click(function(){
        countSliderClick++;
        if ((countSliderClick)%(countSliderElement*2+1) <= countSliderElement){
            $("#sideRight .module .btn-control a.btn-v-prev").addClass('disabled');
            $("#sideRight .module .btn-control a.btn-v-next").removeClass("disabled");
        }
        if ((countSliderClick)%(countSliderElement*2+1) > countSliderElement){
            $("#sideRight .module .btn-control a.btn-v-next").addClass('disabled');
            $("#sideRight .module .btn-control a.btn-v-prev").removeClass("disabled");
        }
        if (countSliderClick == (countSliderElement*2)){
            countSliderClick = 0;
        }
    });
    // The slider being synced must be initialized first
    $('#carousel-item').flexslider({
        animation: "slide",
        mousewheel: true,
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 30,
        itemMargin: 5,
        asNavFor: '#slider-item'
    });
    $('#slider-item').flexslider({
        itemWidth: 246,
        animation: "slide",
        mousewheel: true,
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-item"
    });
    $('#checkout-container').easytabs();
    // discount slider
    $( ".slider_amount_range" ).slider({
        value:2200,
        min: 0,
        max: 10000,
        step: 200,
        slide: function( event, ui ) {
            $( ".slider_amount" ).val( ui.value + " рублей");
        }
    });
    $( ".slider_amount" ).val( $( ".slider_amount_range" ).slider( "value" ) + " рублей");
    // Tooltip
    $('.tooltip_link').each(function() { // Notice the .each() loop, discussed below
        $(this).qtip({
            content: {
                text: $(this).next('.tooltiptext') // Use the "div" element next to this for the content
            },
            position: {
                my: 'top center',  // Position my top left...
                at: 'bottom center' // at the bottom right of...
//                target: $('.tooltip_link') // my target
            },
            style: {
                classes: 'qtip-bootstrap qtip-shadow qtip-rounded',
                tip: {
                    border: 1,
                    width: 12,
                    height: 6
                }
            },
            hide: {
                fixed: true,
                delay: 300
//                event: false,
//                inactive: 2000
            },
            show: {
                delay: 200
            }
        });
    });
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


    $('.drop-down-menu li.sub').hover(function () {
        clearTimeout($.data(this,'timer'));
        $('ul',this).stop(true,true).fadeIn(222);
    }, function () {
        $.data(this,'timer', setTimeout($.proxy(function() {
            $('ul',this).stop(true,true).fadeOut(333);
        }, this), 100));
    });
    $(".table-cart-items").delegate("tr","mouseover",function(){
        $(this).children("td:last-child").children("a").removeClass("hide");
    });
    $(".table-cart-items").delegate("tr","mouseout",function(){
        $(this).children("td:last-child").children("a").addClass("hide");
    });

//    if($.browser.msie){
    if (navigator.userAgent.indexOf('MSIE') > -1) {
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
