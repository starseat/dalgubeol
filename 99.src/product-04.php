<?php require_once('./fragment/header.php'); ?>

<!-- 콘텐츠 -->
<div class="container">
    <div class="container_inner">
        <div class="detail_view_w">
            <strong class="content_title">제품안내</strong>
            <div class="detail_image_w">
                <img src="./public/imgs/pc/detail/detail10.jpg" alt="소모듬구이">
                <img src="./public/imgs/pc/detail/detail_review.jpg" alt="생생고객후기">
                <img src="./public/imgs/pc/detail/detail_mart01.jpg" alt="마트입점">
                <img src="./public/imgs/pc/detail/guide_makchang.jpg" alt="더 맛있게먹는법">
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