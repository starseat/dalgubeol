<?php require_once('./fragment/header.php'); ?>

<?php include('../db_conn.php'); ?>

<!-- 콘텐츠 -->
<div class="container">
    <div class="container_top">
        <!-- 서브상단 타이틀 -->
        <div class="sub_big_title_w" style="background-image:url('../public/imgs/m/bg_sub_business.jpg');">
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
                <button class="btn_tab_cont tab_current">
                    <span class="btn_tab_text">원산지 정보</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./board3.php'">
                    <span class="btn_tab_text">성적서</span>
                </button>
                <button class="btn_tab_cont" onclick="javascript: location.href='./board4.php'">
                    <span class="btn_tab_text">갤러리</span>
                </button>
            </div>
        </div>
    </div>

<?php
// 게시글 수
$item_row_count = 10;
// 하단 페이지 block 수 (1, 2, 3, 4, ...  이런거)
$page_block_count = 10;

$sql = "SELECT COUNT(*) FROM g5_write_board";

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$total_count = mysqli_fetch_array($result);
$total_count = intval($total_count[0]);
$result->free();

// 현재 페이지
$page = isset($_GET['page']) ? trim($_GET['page']) : 1;
$paging_info = getPagingInfo($page, $total_count, $item_row_count, $page_block_count);

$sql = "
    SELECT page.* FROM (
        SELECT @rownum:=@rownum-1 as num, board.wr_id, board.wr_subject, board.wr_name, board.wr_hit, board.wr_datetime 
        FROM g5_write_board board, (SELECT @rownum:=(select count(*) FROM g5_write_board )+1) rownum_temp 
        ORDER BY board.wr_id DESC
    ) page LIMIT " . $paging_info['page_db'] . ", $item_row_count
";

$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
?>

    <!-- 콘텐츠 -->
    <div class="container_inner">
        <div class="content_section">
            <div class="board_list_w">
                <h3 class="content_title_board">원산지 정보</h3>
                <strong class="board_search">
                    total <span><?= $total_count; ?></span> 건 / <?= $page; ?> 페이지
                </strong>
                <div class="board_table_w">
                    <table>
                        <colgroup>
                            <col width="80%">
                            <col width="20%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">제목</th>
                                <th scope="col">날짜</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_array()) { ?>
                            <tr onclick="moveView(<?= $row['wr_id']; ?>);">
                                <td style="text-align: left;"><?= $row['wr_subject']; ?></td>
                                <td><?= substr($row['wr_datetime'], 5, 5); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="board_paging_w">
                    <ul class="board_paging_list">
                        <?php if ($paging_info['page_prev'] > 0) { ?>
                        <li class="bpl_inner"><a href="./board2.php?page=<?= $paging_info['page_prev'] ?>" class="bpl_cont">&lt;</a></li>
                        <?php } ?>

                        <?php
                        for ($i = $paging_info['page_start']; $i <= $paging_info['page_end']; $i++) {
                            if ($i == $page) {
                        ?>
                            <li class="bpl_inner paging_current"><a href="javascript:void(0);" class="bpl_cont"><?= $i ?></a></li>
                        <?php } else { ?>
                            <li class="bpl_inner"><a href="./board2.php?page=<?= $i ?>" class="bpl_cont"><?= $i ?></a></li>
                        <?php        
                            }
                        }
                        ?>

                        <?php if ($paging_info['page_next'] < $paging_info['page_total']) { ?>
                        <li class="bpl_inner"><a href="./board2.php?page=<?= $paging_info['page_next'] ?>" class="bpl_cont">&gt;</a></li>
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

<!--#front-->
<script type="text/javascript">
    function moveView(id) {
        location.href = './board2-view.php?wr_id=' + id;
    }
</script>

<?php require_once('./fragment/tail.php'); ?>