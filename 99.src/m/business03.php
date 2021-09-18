<?php require_once('./fragment/header.php'); ?>

<!-- 콘텐츠 -->
<div class="container">
    <div class="container_top">
        <!-- 서브상단 타이틀 -->
        <div class="sub_big_title_w" style="background-image:url('../public/imgs/m/bg_sub_business.jpg');">
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
        <div class="tab_btn_box_w">
            <div class="btn_tab_inner">
                <button class="btn_tab_cont" onclick="javascript: location.href='./business01.php'">
                    <span class="btn_tab_text">브랜드 소개</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./business02.php'">
                    <span class="btn_tab_text">제휴사 소개</span>
                </button>
                <button class="btn_tab_cont tab_current">
                    <span class="btn_tab_text">제조공정</span>
                </button>
            </div>
        </div>
    </div>

    <!-- 콘텐츠 -->
    <div class="container_inner">
        <h3 class="blind">제조공정</h3>
        <div class="content_section">
            <div class="business03_cont_box">
                <strong class="content_title">제조공정 과정</strong>
                <p class="business_text">
                    우리는 위생적인 시설과 엄격한 품질관리로<br/>
                    안심하고 드실 수 있는 먹거리만을 만듭니다.<br/><br/>
                    1년여의 연구 끝에 개발된 과일 숙성 막창은 소비자들에게<br/>
                    양질의 제품과 안전한 먹거리 제공을 위해 HACCP 시설 완비와<br/>
                    음식물 배상책임 보험에도 가입되어 있어 더욱 안전합니다.
                </p>
                <img src="../public/imgs/m/business_03.jpg" alt="제조공정 과정 이미지">
            </div>
            <div class="text_info_list_w">
                <div class="container_wide bg_red">
                    <ul class="text_info_list">
                        <li class="til_cont">총 4차에 걸친 세척과 이물질 제거작업으로 깨끗합니다.</li>
                        <li class="til_cont">막창을 세척할 때 밀가루와 천일염으로만 세척함으로써 잡내가 없고 깨끗합니다.</li>
                        <li class="til_cont">막창을 과일로 숙성하여 연하고 부드러우며 고소하고 육즙이 살아있습니다.</li>
                        <li class="til_cont">현재 생상하고 있는 막창은 깨끗한 시설과 공정에서 생산됩니다.</li>
                        <li class="til_cont">천연과일 숙성으로 인테에 무해하여 소비자들이 안심하고 먹을 수 있는 먹거리로 자리 잡은 식품입니다.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>