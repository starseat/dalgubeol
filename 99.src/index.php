
<?php require_once('./fragment/header.php'); ?>

<!-- 콘텐츠 -->
<div class="container">
    <!-- 이미지 슬라이드 -->
    <div class="section_visual_w">
        <div class="main_visual_list">
            <div class="main_vl_cont" >
                <div class="bg" style="background-image:url('./public/imgs/pc/main_visual01.jpg');"></div>
                <div class="mvl_text_w">
                    <div class="mvl_text">
                        <img src="./public/imgs/pc/main_visual01_text.png" alt="바른먹거리와 정직한 유통 달구벌명가 식품">
                    </div>
                </div>
            </div>
            <div class="main_vl_cont">
                <div class="bg" style="background-image:url('./public/imgs/pc/main_visual02.jpg');"></div>
                <div class="mvl_text_w">
                    <div class="mvl_text">
                        <img src="./public/imgs/pc/main_visual01_text.png" alt="축산물유통의 선두주자 달구벌명가 식품">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_quick_menu_w">
        <div class="mquick_menu_inner">
            <a href="./company02.php#directions" class="mquick_link01">
                <span class="mquick_text">오시는길</span>
                <span class="more_text">+더보기</span>
            </a>
            <a href="./company01.php" class="mquick_link02">
                <span class="mquick_text">브랜드</span>
                <span class="more_text">+더보기</span>
            </a>
            <a href="./product.php" class="mquick_link03">
                <span class="mquick_text">제품안내</span>
                <span class="more_text">+더보기</span>
            </a>
            <a href="./notice.php" class="mquick_link04">
                <span class="mquick_text">고객센터</span>
                <span class="more_text">+더보기</span>
            </a>
        </div>
    </div>
</div>

<?php require_once('./fragment/footer.php'); ?>

<!--#front-->
<script type="text/javascript">
    $(document).ready(function(){
        mainvisualSlick();

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
