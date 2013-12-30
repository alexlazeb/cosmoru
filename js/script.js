function include(jsFile){document.write('<script type="text/javascript" src="js/' + jsFile + '"></script>');}

include("jquery.easing.1.3.min.js");
include("jquery.flexslider-min.js");

function initialise(content) {

    var OSName="Unknown OS";
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
    else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
    else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
    else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
    $('html').addClass(OSName);

    $('.sortable-btn a').click(function(){
        $('.sortable-btn a').removeClass('active');
        $(this).addClass('active');
    });
    $('#main-slider').flexslider({
        animation: 'slide',
        easing: "swing",
        slideshowSpeed: 4000,
        controlNav: true,
        directionNav: false,
        pauseOnHover: true,
        touch: true
    });

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
