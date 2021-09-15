<?php require_once('./fragment/header.php'); ?>

<?php include('./db_conn.php'); ?>

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
        <div class="tab_btn_box_w"><!-- select 오픈시 select_open 추가 -->
            <div class="btn_tab_inner">
                <button class="btn_tab_cont tab_current"><!-- 탭활성화 "tab_current" -->
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
        <h3 class="blind">공지사항</h3>
        <div class="content_section">
            <div class="board_list_w">
                <strong class="board_search">
                    totla
                    <span>1건</span>
                </strong>
                <div class="board_table_w">
                    <table>
                        <colgroup>
                            <col width="10%">
                            <col width="55%">
                            <col width="15%">
                            <col width="10%">
                            <col width="10%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">번호</th>
                                <th scope="col">제목</th>
                                <th scope="col">글쓴이</th>
                                <th scope="col">날짜</th>
                                <th scope="col">조회</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="notice">
                                <td>공지</td>
                                <td>현대홈쇼핑 방송(2018년 7월 10일 pm11:50)</td>
                                <td>달구벌명가식품</td>
                                <td>07.04</td>
                                <td>482</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>홈쇼핑 방송 종료 전 완판! 달구벌 막창이 다시 방송됩니다.</td>
                                <td>달구벌명가식품</td>
                                <td>07.04</td>
                                <td>482</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>게시판 타이틀 영역 게시판 타이틀 영역 게시판 타이틀 영역 게시판 타이틀 영역 게시판 타이틀 영역 </td>
                                <td>달구벌명가식품</td>
                                <td>07.04</td>
                                <td>482</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="board_paging_w">
                    <ul class="board_paging_list">
                        <li class="bpl_inner paging_current">
                            <a href="#none" class="bpl_cont">1</a>
                        </li>
                        <li class="bpl_inner">
                            <a href="#none" class="bpl_cont">2</a>
                        </li>
                        <li class="bpl_inner">
                            <a href="#none" class="bpl_cont">3</a>
                        </li>
                        <li class="bpl_inner">
                            <a href="#none" class="bpl_cont">4</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
    mysqli_close($conn);
    flush();
?>

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