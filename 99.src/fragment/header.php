<?php
require_once('head.php');
?>

<?php
include('./common.php');
// include('./db_conn.php');
?>

<body>

<script>
// var isAppleDev = (/iphone|ipad|ipod/i.test(navigator.userAgent.toLowerCase()));  

var IS_MOBILE = false;
var filter = "win16|win32|win64|mac|macintel";
if(navigator.platform) {
    if(filter.indexOf(navigator.platform.toLowerCase()) < 0){
        IS_MOBILE = true;
    }
}

if(IS_MOBILE) {
    location.href = './m/index.php';
}

</script>

<div class="wrap main">
    <!-- GNB -->
    <div class="common_gnb_w"><!-- lnbtype_main / sticky / 모바일:gnb_open -->

        <div class="common_lnb_w">
            <h1 class="gnb_big_logo"><a href="./index.php" class="gnb_logo"><img src="./public/imgs/pc/gnb_logo.png" alt="달구벌명가식품"></a></h1>
            <div class="common_lnb_inner">
                <ul class="common_lnb_list">
                    <li class="slnb_inner">
                        <a href="./company01.php" class="slnb_link">
                            <span class="slnb_txt_box">
                                <span class="slnb_txt">
                                    회사소개
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="slnb_inner">
                        <a href="./business01.php" class="slnb_link">
                            <span class="slnb_txt_box">
                                <span class="slnb_txt">
                                    사업소개
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="slnb_inner current">
                        <a href="./product.php" class="slnb_link">
                            <span class="slnb_txt_box">
                                <span class="slnb_txt">
                                        제품안내
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="slnb_inner">
                        <a href="./notice.php" class="slnb_link">
                            <span class="slnb_txt_box">
                                <span class="slnb_txt">
                                    고객센터
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- .common_gnb_w -->