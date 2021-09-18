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
    echo ('<meta http-equiv="refresh" content="0 url=./board2.php" />');
    exit;
}


// 조회수 처리
$board_view_cookie_name = 'board_view_' . $wr_id;
if (!isset($_COOKIE[$board_view_cookie_name]) || empty($_COOKIE[$board_view_cookie_name])) {
    $sql  = 'UPDATE g5_write_board set wr_hit = wr_hit + 1 WHERE wr_id = ' . $wr_id;
    $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
    // setcookie($board_view_cookie_name, 1, time() + (60 * 60 * 24), '/');  // 1 day
}

$sql = "SELECT wr_subject, wr_link1, wr_link2, wr_hit, wr_name, wr_datetime, wr_last, wr_file, wr_option, wr_content FROM g5_write_board WHERE wr_id= $wr_id";
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
// $content = str_replace("\n", "<br>", $content);
$content = str_replace("\n", " ", $content);
$content = str_replace('  ', '&nbsp; ', $content);
$content = str_replace('\\', '₩', $content);

$prevId = 0;
$nextId = 0;

$sql = "SELECT ifnull(max(pp.wr_id), 0) as prev_id FROM (SELECT temp.wr_id FROM g5_write_board temp WHERE temp.wr_id ) pp WHERE pp.wr_id < $wr_id";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$prev_data = mysqli_fetch_array($result);
$result->free();
$prevId = intVal($prev_data['prev_id']);

$sql = "SELECT ifnull(min(nn.wr_id), 0) as next_id FROM (SELECT temp.wr_id FROM g5_write_board temp WHERE temp.wr_id ) nn WHERE nn.wr_id > $wr_id";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$next_data = mysqli_fetch_array($result);
$result->free();
$nextId = intVal($next_data['next_id']);


$isFile = intVal($data['wr_file']);
$file_data = array();
$img_data = array();
if ($isFile > 0) {
    $sql = "SELECT bf_source, bf_file, bf_download, bf_type FROM g5_board_file where bo_table = 'board' AND  wr_id = $wr_id";
    $upload_data_result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));    

    while ($file = $upload_data_result->fetch_array()) {
        if(intVal($file['bf_type']) == 0) {
            array_push($file_data, $file);
        }
        else {
            array_push($img_data, $file);
        }
    }
    $upload_data_result->free();
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
                <button class="btn_tab_cont" onclick="javascript: location.href='./board1.php'">
                    <span class="btn_tab_text">공지사항</span>
                </button>
                <button class="btn_tab_cont tab_current" onclick="javascript: location.href='./board2.php'">
                    <span class="btn_tab_text">원산지 정보</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./board3.php'">
                    <span class="btn_tab_text">성적서 다운로드</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./board4.php'">
                    <span class="btn_tab_text">갤러리</span>
                </button>
            </div>
        </div>
    </div>

    <!-- 콘텐츠 -->
    <div class="container_inner">
        <div class="content_section">
            <div class="board_list_w">
                <h3 class="content_title_board">원산지 정보</h3>
                <div class="board_table_view_w">
                    <div class="board_view_title_w">
                        <strong class="board_view_title"><?= $data['wr_subject']; ?></strong>
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
                    <div class="board_file_box">
                        <?php
                        if(count($file_data) > 0) {
                            for($i=0; $i<count($file_data); $i++) {
                                $file = $file_data[$i];
                                echo '<a href="http://www.dalgubeolmakchang.com/bbs/download.php?bo_table=download&amp;wr_id=' . $wr_id . '&amp;no=0" class="view_file_download">';
                                echo '<img src="http://www.dalgubeolmakchang.com/skin/board/basic/img/icon_file.gif" alt="첨부파일: ' . $file['bf_source'] . '">';
                                echo $file['bf_source'];
                                echo '</a>';
                            }
                        }
                        ?>
                    </div>
                    <div class="board_img_box">
                        <?php
                        if(count($img_data) > 0) {
                            for($i=0; $i<count($img_data); $i++) {
                                $img = $img_data[$i];
                                echo '<a href="http://www.dalgubeolmakchang.com/bbs/view_image.php?bo_table=board&amp;fn=' . $img['bf_file'] . '" target="_blank" class="view_image">';
                                echo '<img src="http://www.dalgubeolmakchang.com/data/file/board/' . $img['bf_file'] . '" alt="' . $img['bf_source'] . '">';
                                echo '</a>';
                            }
                        }
                        ?>
                    </div>
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
                        <?php if($prevId > 0) { ?>
                        <button type="button" class="btn_board_prev" onclick="javascript: location.href='./board2-view.php?wr_id=<?= $prevId; ?>'">이전글</button>
                        <?php } ?>
                        
                        <?php if($nextId > 0) { ?>
                        <button type="button" class="btn_board_next" onclick="javascript: location.href='./board2-view.php?wr_id=<?= $nextId; ?>'">다음글</button>
                        <?php } ?>
                        
                        <button type="button" class="btn_board_list" onclick="javascript: location.href='./board2.php'">목록</button>                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once('./fragment/tail.php'); ?>