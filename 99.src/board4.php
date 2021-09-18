<?php require_once('./fragment/header.php'); ?>

<?php include('./db_conn.php'); ?>

<?php
function getExt($filename) {
    $fileinfo = pathinfo($filename);
    $ext = $fileinfo['extension'];

    return $ext;
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
                    달구벌명가식품 고객센터입니다.<br/>
                    053.358.6611<br/>
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
                <button class="btn_tab_cont" onclick="javascript: location.href='./board2.php'">
                    <span class="btn_tab_text">원산지 정보</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./board3.php'">
                    <span class="btn_tab_text">성적서 다운로드</span>
                </button>
                <button class="btn_tab_cont tab_current">
                    <span class="btn_tab_text">갤러리</span>
                </button>
            </div>
        </div>
    </div>

<?php
// 게시글 수
$item_row_count = 8;
// 하단 페이지 block 수 (1, 2, 3, 4, ...  이런거)
$page_block_count = 10;

$sql = "SELECT COUNT(*) FROM g5_write_gallery";

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$total_count = mysqli_fetch_array($result);
$total_count = intval($total_count[0]);
$result->free();

// 현재 페이지
$page = isset($_GET['page']) ? trim($_GET['page']) : 1;
$paging_info = getPagingInfo($page, $total_count, $item_row_count, $page_block_count);


$sql = "
    SELECT page.* FROM (
        SELECT 
            @rownum:=@rownum-1 as num, board.wr_id, board.wr_subject, board.wr_name, board.wr_hit, board.wr_datetime, 
            file.bf_source, file.bf_file, file.bf_download, file.bf_type
        FROM g5_write_gallery board, (SELECT @rownum:=(select count(*) FROM g5_write_gallery )+1) rownum_temp, g5_board_file file
        WHERE board.wr_id = file.wr_id AND file.bo_table = 'gallery' 
        ORDER BY board.wr_id DESC
    ) page LIMIT " . $paging_info['page_db'] . ", $item_row_count
";

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
?>

    <!-- 콘텐츠 -->
    <div class="container_inner">
        <h3 class="blind">갤러리</h3>
        <div class="content_section">
            <div class="board_list_w">
                <strong class="board_search">
                    total <span><?= $total_count; ?></span> 건
                </strong>
                <div class="gallery_list_w">
                    <ul class="gallery_list">
                        <?php while ($row = $result->fetch_array()) { ?>
                        <li class="gallery_inner">
                            <a href="./board4-view.php?wr_id=<?= $row['wr_id']; ?>" class="gallery_cont">
                                <div class="module_box_w_type1">
                                    <div class="mb_image_w">
                                        <div class="mb_image_inner">
                                            <?php
                                            $file_ext = getExt($row['bf_file']);
                                            $thumb_name = str_replace('.' . $file_ext, '_174x124.' . $file_ext, $row['bf_file']);
                                            ?>
                                            <img src="http://www.dalgubeolmakchang.com/data/file/gallery/thumb-<?= $thumb_name; ?>" class="mb_image" alt="<?= $row['bf_source']; ?>" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class="mb_info_w">
                                        <div class="mb_infoline_inner">
                                            <div class="mbif_text"><?= $row['wr_name']; ?></div>
                                            <span class="mbif_date"><?= substr($row['wr_datetime'], 5, 5); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </div>

                <div class="board_paging_w">
                    <ul class="board_paging_list">
                        <?php if ($paging_info['page_prev'] > 0) { ?>
                        <li class="bpl_inner"><a href="./board4.php?page=<?= $paging_info['page_prev'] ?>" class="bpl_cont">&lt;</a></li>
                        <?php } ?>

                        <?php
                        for ($i = $paging_info['page_start']; $i <= $paging_info['page_end']; $i++) {
                            if ($i == $page) {
                        ?>
                            <li class="bpl_inner paging_current"><a href="javascript:void(0);" class="bpl_cont"><?= $i ?></a></li>
                        <?php } else { ?>
                            <li class="bpl_inner"><a href="./board4.php?page=<?= $i ?>" class="bpl_cont"><?= $i ?></a></li>
                        <?php        
                            }
                        }
                        ?>

                        <?php if ($paging_info['page_next'] < $paging_info['page_total']) { ?>
                        <li class="bpl_inner"><a href="./board4.php?page=<?= $paging_info['page_next'] ?>" class="bpl_cont">&gt;</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    $result->free();
    mysqli_close($conn);
    flush();
?>

<?php require_once('./fragment/footer.php'); ?>

<?php require_once('./fragment/tail.php'); ?>