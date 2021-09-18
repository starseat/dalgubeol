<?php require_once('./fragment/header.php'); ?>

<!-- 콘텐츠 -->
<div class="container">
    <div class="container_top">
        <!-- 서브상단 타이틀 -->
        <div class="sub_big_title_w" style="background-image:url('./public/imgs/pc/bg_sub_company.jpg');">
            <div class="sub_big_title_inner">
                <h2 class="sub_big_title">회사소개</h2>
                <span class="sub_big_info">
                    <i class="title_bar"></i>
                    깨끗한 막창 맛있는 막창,<br/>
                    달구벌명가식품 홈페이지를 방문해주셔서 감사합니다.
                </span>
            </div>
        </div>

        <!-- 탭버튼 -->
        <div class="tab_btn_box_w"><!-- select 오픈시 select_open 추가 -->
            <div class="btn_tab_inner">
                <button class="btn_tab_cont" onclick="javascript: location.href='./company01.php'"><!-- 탭활성화 "tab_current" -->
                    <span class="btn_tab_text">인사말</span>
                </button>
                <button class="btn_tab_cont tab_current">
                    <span class="btn_tab_text">연혁</span>
                </button>
            </div>
        </div>
    </div>

    <!-- 콘텐츠 -->
    <div class="container_inner">
        <h3 class="blind">연혁</h3>
        <div class="content_section">
            <!-- 인사말 -->
            <div class="company_cont_box">
                <strong class="content_title">달구벌명가식품이 걸어온 길</strong>
                <div class="company01_history">
                    <img src="./public/imgs/pc/company_02.jpg" alt="연혁이미지">
                </div>
            </div>

        </div>
    </div>

    <div class="container_wide bg_red" id="directions">
        <div class="container_inner">
            <div class="company_map_w">
                <div class="map_box">
                    <!-- * 카카오맵 - 지도퍼가기 -->
                    <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1631339279136" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                    <!--
                        2. 설치 스크립트
                        * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                    -->
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                    <!-- 3. 실행 스크립트 -->
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1631339279136",
                            "key" : "27c4n",
                            "mapWidth" : "640",
                            "mapHeight" : "360"
                        }).render();
                    </script>
                </div>
                <div class="map_text_w">
                    <strong class="content_title">오시는 길</strong>
                    <div class="map_text">
                        <div>
                            <strong>전화</strong>
                            053-358-6611~2
                        </div>
                        <div>
                            <strong>주소</strong>
                            경상북도 경산시 남천면 협석 2길
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>


<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>
