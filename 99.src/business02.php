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
                <button class="btn_tab_cont" onclick="javascript: location.href='./business01.php'"><!-- 탭활성화 "tab_current" -->
                    <span class="btn_tab_text">브랜드 소개</span>
                </button>
                <button class="btn_tab_cont tab_current">
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
        <h3 class="blind">제휴사 소개</h3>
        <div class="content_section">
            <div class="business02_cont_box">
                <strong class="content_title">제휴사 안내</strong>
                <div class="business_partners">
                    <img src="./public/imgs/pc/partners/sub02_1_main2.jpg" alt="제휴사 안내">
                </div>
                <div class="box_info_w">
                    <ul class="box_info_list">
                        <li class="bil_inner">전국 1,000여 개의 식당, 식육점, 레스토랑, 호텔 등</li>
                        <li class="bil_inner">마트 1,400개 점</li>
                    </ul>
                    <div class="box_info_box bg_gray">
                        달구벌 막창을 만나볼 더 넓은 기회를 제공하기 위해 <strong>대구 MBC 라디오</strong><br/>
                        <strong>프로그램 ‘FM모닝쇼’ , ‘정오의 희망곡’</strong>에 협찬광고를 진행하고 있습니다.
                    </div>
                </div>
            </div>

            <div class="business02_cont_box">
                <strong class="content_title">온라인 판매처</strong>
                <div class="business_partners">
                    <img src="./public/imgs/pc/partners/sub02_1_main3.jpg" alt="온라인 판매처">
                </div>
                <div class="box_info_w">
                    <ul class="box_info_list">
                        <li class="bil_inner">지금 ‘달구벌막창’을 검색해보세요.</li>
                    </ul>
                </div>
            </div>

            <div class="business02_cont_box">
                <strong class="content_title">마트, 백화점 입점</strong>
                <div class="business_partners">
                    <img src="./public/imgs/pc/business_02.jpg" alt="마트, 백화점 입점">
                </div>
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
