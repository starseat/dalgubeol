<?php require_once('./fragment/header.php'); ?>
<?php include('./db_conn.php'); ?>

<?php

$wr_id = 0;

$is_access = false;
if ($_SERVER['QUERY_STRING'] != '') {
    $wr_id = $_GET['wr_id'];
    if (!isEmpty($wr_id) && is_numeric($wr_id)) {
        $is_access = true;
    }
}

if (!$is_access) {
    // viewAlert('잘못된 접근 입니다.');
    mysqli_close($conn);
    flush();
    //historyBack();
    echo ('<meta http-equiv="refresh" content="0 url=./notice.php" />');
    exit;
}

// 조회수 처리
$notice_view_cookie_name = 'notice_view_' . $wr_id;
if (!isset($_COOKIE[$notice_view_cookie_name]) || empty($_COOKIE[$notice_view_cookie_name])) {
    $sql  = 'UPDATE g5_write_notice set wr_hit = wr_hit + 1 WHERE wr_id = ' . $wr_id;
    $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
    // setcookie($notice_view_cookie_name, 1, time() + (60 * 60 * 24), '/');  // 1 day
}

$sql = "SELECT wr_subject, wr_link1, wr_link2, wr_hit, wr_name, wr_datetime, wr_last, wr_file, wr_option, wr_content FROM g5_write_notice WHERE wr_id= $wr_id";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$data = mysqli_fetch_array($result);
$result->free();

$html = 0;
$stx = 0;
if (strstr($data['wr_option'], 'html1')) {
    $html = 1;
}
else if (strstr($data['wr_option'], 'html2')) {
    $html = 2;
}

$content = $data['wr_content'];
$content = str_replace("\n", "<br>", $content);
$content = str_replace('  ', '&nbsp; ', $content);

$isFile = intVal($data['wr_file']);
if ($isFile > 0) {
}
?>
<!-- 콘텐츠 -->
<div class="container">
    <div class="container_top">
        <!-- 서브상단 타이틀 -->
        <div class="sub_big_title_w" style="background-image:url('./public/imgs/pc/bg_sub_business.jpg');">
            <div class="sub_big_title_inner">
                <h2 class="sub_big_title">고객센터</h2>
                <span class="sub_big_info">
                    <i class="title_bar"></i>
                    달구벌명가식품 고객센터입니다.<br />
                    053.358.6611<br />
                    Am 9:00 - pm 6:00 월~금
                </span>
            </div>
        </div>

        <!-- 탭버튼 -->
        <div class="tab_btn_box_w">
            <div class="btn_tab_inner">
                <button class="btn_tab_cont tab_current" onclick="javascript: location.href='./notice.php'">
                    <!-- 탭활성화 "tab_current" -->
                    <span class="btn_tab_text">공지사항</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./country.php'">
                    <span class="btn_tab_text">원산지 정보</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./report.php'">
                    <span class="btn_tab_text">성적서 다운로드</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./gallery.php'">
                    <span class="btn_tab_text">갤러리</span>
                </button>
            </div>
        </div>
    </div>

    <!-- 콘텐츠 -->
    <div class="container_inner">
        <div class="content_section">
            <div class="board_list_w">
                <h3 class="content_title_board">공지사항</h3>
                <div class="board_table_view_w">
                    <div class="board_view_title_w">
                        <strong class="board_view_title">
                            현대홈쇼핑 방송(2018년 7월 10일 pm11:50)
                        </strong>
                        <div class="board_info_w">
                            <ul class="board_info_list">
                                <li class="board_info_cont">
                                    <span class="board_info_text">
                                        작성자
                                        <span><?= $data['wr_name']; ?></span>
                                    </span>
                                    <span class="board_info_text">
                                        <span><?= $data['wr_datetime'] ?></span>
                                    </span>
                                    <span class="board_info_text">
                                        조회
                                        <span><?= $data['wr_hit'] ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="board_text_box">
                        <?= $content; ?>

                        <br><br><hr>
                        <?php if (!isEmpty($data['wr_link1'])) { ?>
                            <br>
                            - link 1 : <a href="<?= $data['wr_link1']; ?>"><?= $data['wr_link1']; ?></a>
                        <?php } ?>

                        <?php if (!isEmpty($data['wr_link2'])) { ?>
                            <br>
                            - link 2 : <a href="<?= $data['wr_link2']; ?>"><?= $data['wr_link2']; ?></a>
                        <?php } ?>

                    </div>
                    <br>
                    <div class="board_btn_action">
                        <button type="button" class="btn_board_prev">이전글</button>
                        <button type="button" class="btn_board_next">다음글</button>
                        <button type="button" class="btn_board_list" onclick="javascript: location.href='./notice.php'">목록</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once('./fragment/tail.php'); ?>