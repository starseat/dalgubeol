/** 퍼블리셔용 **/


function tabAction(){
    $('.btn_tab_cont').click( function() {
        $('.btn_tab_cont').removeClass('tab_current');
        $(this).addClass('tab_current');
    } );
}

function mainvisualSlick(){
    $('.main_visual_list').slick({
        dots: false,
        infinite: true,
        speed: 150,
        fade: true,
        arrows:false,
        autoplay: true,
        cssEase: 'linear'
    });
}



function listSlick(){
    $('.slick_slide_list').slick({
        dots: false,
        arrows:true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2
    });
}
