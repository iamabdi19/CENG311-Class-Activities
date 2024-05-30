$(document).ready(function() {
    $("#slider").bxSlider({
        auto: true,
        minSlides: 1,
        maxSlides: 1,
        slideWidth: 250,
        slideMargin: 10,
        moveSlides: 1,
        pause: 3000,
        randomStart: true,
        pagerCustom: '#pager',
        captions: true
    });
});
