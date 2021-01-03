jQuery(document).ready(function ($) {

    $('.hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        cssEase: 'linear',
        prevArrow: '.custom-slick-prev',
        nextArrow: '.custom-slick-next',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                }
            },
        ]
    });

    $('.projects-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 375,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 940,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                }
            },
        ]
    });

    $('#info .gallery').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
    }).magnificPopup({
        type: 'image',
        delegate: 'a:not(.slick-cloned)',
        gallery: {
            enabled: true
        }
    });

    $('.left-top, .right-bottom, .left-bottom, .right-top').magnificPopup({
        type: 'image',
        delegate: 'a:not(.slick-cloned)',
        gallery: {
            enabled: true
        }
    });

    if ($('#progress').length) {
        jQuery('.monthes, .years').css('grid-template-columns', 'repeat(' + progress.count + ', 1fr)');
        responsiveWidthTachArea();
    }
});

function openContent(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

if(jQuery('#defaultOpen').length) {
    document.getElementById("defaultOpen").click();
}


if (jQuery('#progress').length) {
    var slider = document.getElementById('range-slider');

    noUiSlider.create(slider, {
        start: [0],
        step: 1,
        range: {
            'min': 0,
            'max': progress.count - 1,
        },
    });

    slider.noUiSlider.on('update', function (value, handle) {
        let key = Math.ceil(value[handle]);
        jQuery('.progress-gallery').css('display', 'none');
        jQuery('.progress-gallery[data-key="' + key + '"]').css('display', 'flex');
    });

    jQuery(window).resize(function () {
        responsiveWidthTachArea();
    });
}
function responsiveWidthTachArea() {
    let w = jQuery('.month').width();
    let ww = w / 2;

    jQuery('.noUi-handle').css({
        'width': w,
        'right': -ww,
    });
    jQuery('.noUi-target').css({
        'padding-right': ww,
        'padding-left': ww,
    });
    jQuery('.noUi-connects').css({
        'margin-right': -ww,
        'margin-left': -ww,
        'width': 'calc(100% + ' + ww + 'px)'
    });
}

