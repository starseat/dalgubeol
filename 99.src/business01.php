<?php require_once('./fragment/header.php'); ?>

<!-- 콘텐츠 -->
<div class="container">
    <div class="container_top">
        <!-- 서브상단 타이틀 -->
        <div class="sub_big_title_w" style="background-image:url('./public/imgs/pc/bg_sub_business.jpg');">
            <div class="sub_big_title_inner">
                <h2 class="sub_big_title">사업소개</h2>
                <span class="sub_big_info">
                    <i class="title_bar"></i>
                    달구벌명가식품은 축산물 유통 전문회사입니다.<br/>
                    전문적인 노하우와 기술력을 바탕으로 엄선한 다양한 원육 및 육류가공 제품을 전국으로 유통하고 있습니다.
                </span>
            </div>
        </div>

        <!-- 탭버튼 -->
        <div class="tab_btn_box_w"><!-- select 오픈시 select_open 추가 -->
            <div class="btn_tab_inner">
                <button class="btn_tab_cont tab_current"><!-- 탭활성화 "tab_current" -->
                    <span class="btn_tab_text">브랜드 소개</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./business02.php'">
                    <span class="btn_tab_text">제휴사 소개</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./business03.php'">
                    <span class="btn_tab_text">제조공정</span>
                </button>
            </div>
        </div>
    </div>

    <!-- 콘텐츠 -->
    <div class="container_inner">
        <h3 class="blind">브랜드 소개</h3>
        <div class="content_section">
            <div class="business_cont_box">
                <strong class="content_title">막창브랜드의 선두주자</strong>
                <p class="business_text">
                    전국 약 100여개의 식당, 식육점, 레스토랑 등에 고기등을 납품하고 있으며, 우리나라 제일의 막창 체인점인 반야월막창,<br/>
                    직영점 십이지락 (서울홍대앞)을 포함한 약 500여개의 막창 전문점에 돼지막창과 소막창 등을 판매하고 있습니다.<br/>
                    또한 롯데마트 GS슈퍼마켓에도 막창 가공품을 납품하며, 전국 막창 소비량의 대부분을 책임지고 있습니다.
                </p>
            </div>

            <div class="business_cont_box">
                <div class="business01_l">
                    <img src="./public/imgs/pc/logo_makchangnews.jpg" alt="막창일보">
                </div>
                <div class="business01_r">
                    <strong class="business_title">막창일보</strong>
                    <p>
                        막창일보의 막창은 과일로 숙성한 막창의 원조 ‘(주)달구벌명가식품’ 막창을<br/>
                        위주로 판매하는 배달고기 전문점입니다. 뉴트로 신문 컨셉의 브랜딩과 식감이<br/>
                        뛰어난 막창의 조합으로 소비자와 업주 모두가 만족하는 브랜드입니다.
                    </p>
                </div>
            </div>

            <div class="business_cont_box">
                <div class="business01_l">
                    <strong class="business_title">고택남</strong>
                    <p>
                        고택남은 국내유통 최고의 맛을 자랑하는 ‘(주)달구벌명가식품’ 고기 제품을<br/>
                        위주로 판매하는 배달고기 전문점입니다. 우후죽순 생겨나는 배달 브랜드에서<br/>
                        차별화된 컨셉의 브랜딩과 최고의 고기로 소비자와 업주 모두가 만족하는<br/>
                        브랜드입니다.
                    </p>
                </div>
                <div class="business01_r">
                    <img src="./public/imgs/pc/logo_meatexpress.jpg" alt="고택남">
                </div>
            </div>

            <div class="business_cont_box">
                <div class="business01_l">
                    <img src="./public/imgs/pc/logo_meatcomedy.jpg" alt="미트코미디">
                </div>
                <div class="business01_r">
                    <strong class="business_title">미트코미디</strong>
                    <p>
                        미트코미디는 ‘(주)달구벌명가식품’의 이베리코 숙성 막창과 특허받은 맥반석<br/>
                        구이 기술로 구운 돼지곱창을 판매하는 온라인 고기 판매 스토어입니다.
                    </p>
                </div>
            </div>
        </div>

        <div class="content_section">
            <strong class="content_title">체인계약 절차안내</strong>
            <div class="business02">
                <img src="./public/imgs/pc/franchise_step.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<!--#front-->
<script type="text/javascript">
    $(document).ready(function(){
        // mainvisualSlick();

        var mql = window.matchMedia("screen and (max-width: 720px)");
        if (mql.matches) {
            console.log("화면의 너비가 720px 보다 작습니다.");
        } else {
            console.log("화면의 너비가 720px 보다 큽니다.");
        }
    });

    $(window).resize(function() {   });
</script>

<?php require_once('./fragment/tail.php'); ?>
