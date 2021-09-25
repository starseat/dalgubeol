/** 퍼블리셔용 **/
$(document).ready(function() {
    mainvisualSlick();

    var mql = window.matchMedia("screen and (max-width: 720px)");
    if (mql.matches) {
        console.log("화면의 너비가 720px 보다 작습니다.");
    } else {
        console.log("화면의 너비가 720px 보다 큽니다.");
    }
});

$(window).resize(function() {});

function tabAction() {
    $('.btn_tab_cont').click(function() {
        $('.btn_tab_cont').removeClass('tab_current');
        $(this).addClass('tab_current');
    });
}

function mainvisualSlick() {
    $('.main_visual_list').slick({
        dots: false,
        infinite: true,
        speed: 150,
        fade: true,
        arrows: false,
        autoplay: true,
        cssEase: 'linear'
    });
}



function listSlick(devMode) {
    if (devMode && devMode == 'm') {
        $('.slick_slide_list').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2
        });
    } else {
        $('.slick_slide_list').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4
        });
    }
}