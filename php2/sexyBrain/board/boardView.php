<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['boardId'])){
        $boardId = $_GET['boardId'];
    } else {
        Header("Location: ../boardHome/board.php");
    }

    // 조회수 추가
    $updateViewSql = "UPDATE sexyBoard SET boardView = boardView +1 WHERE boardId = '$boardId'";
    $connect -> query($updateViewSql);

    // 조회수 불러오기
    $boardView = "SELECT boardView FROM sexyBoard WHERE boardId = '$boardId'";
    $boardViewResult = $connect -> query($boardView);
    $boardViewInfo = $boardViewResult -> fetch_array(MYSQLI_ASSOC);

    // 블로그 정보 가져오기
    $boardSql = "SELECT * FROM sexyBoard WHERE boardId = '$boardId'";
    $boardResult = $connect -> query($boardSql);
    $boardInfo = $boardResult -> fetch_array(MYSQLI_ASSOC);

    // 이전글 가져오기
    $prevBoardSql = "SELECT * FROM sexyBoard WHERE boardId < '$boardId' ORDER BY boardId DESC LIMIT 1";
    $preBoardResult = $connect -> query($prevBoardSql);
    $preBoardInfo = $preBoardResult -> fetch_array(MYSQLI_ASSOC);

    // 다음글 가져오기
    $nextvBoardSql = "SELECT * FROM sexyBoard WHERE boardId > '$boardId' ORDER BY boardId ASC LIMIT 1";
    $nextBoardResult = $connect -> query($nextvBoardSql);
    $nextBoardInfo = $nextBoardResult -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>뇌섹남녀-boardView</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/board.css">
</head>

<body>
    <div id="wrap">
        <header id="header">
            <nav class="nav">
                <ul class="down_nav">
                    <li class="active"><a href="#">홈</a></li>
                    <li><a href="#">문제</a></li>
                    <li><a href="#">커뮤니티</a></li>
                </ul>
            </nav>
            <h2 class="logo"><img src="../assets/img/logo.png" alt="logo"></h2>
            <nav class="loginnav">
                <ul>
                    <li><a href="#">로그인</a></li>
                    <li class="active_nav"><a href="#">회원가입</a></li>
                </ul>
            </nav>
        </header>
        <!-- header -->

        <main id="main">
            <div id="b_write_wrap">
                <div class="write_board"></div>
                <form action="boardWriteSave.html" name="#" method="#" class="board_write">
                    <section class="table__inner">
                        <div class="board__view">
                            <table>
                                <tbody class="tby">
                                    <tr>
                                        <th>제목</th>
                                        <td><?=$boardInfo['boardTitle']?></td>
                                    </tr>
                                    <tr>
                                        <th>등록일</td>
                                        <td class="date"><?=date('Y-m-d', $boardInfo['boardRegTime'])?></td>
                                    </tr>
                                    <tr>
                                        <th>조회수</td>
                                        <td>조회수 <?=$boardViewInfo['boardView']?></td>
                                    </tr>
                                    <tr>
                                        <th>내용</td>
                                        <td class="b_contents_style" style="text-align: left; line-height: 1.6rem;">
                                            <img src="../assets/board/<?=$boardInfo['boardImgFile']?>" alt="<?=$boardInfo['boardTitle']?>">
                                            <?=$boardInfo['boardContents']?>
                                        </td>
                                        <tr>
                                            <th>등록자</td>
                                            <td class="writer">작성자 <?=$boardInfo['boardAuthor']?></td>
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <div class="board__btns">
                        <button type="submit" class="btn__style3"><a href="../boardHome/board.php">목록보기</a></button>
                        <button type="submit" class="btn__style3 m10aa"><a href="#">수정하기</a></button>
                        <button type="submit" class="btn__style3 m10aa"><a href="#">삭제하기</a></button>
                    </div>
                    </fieldset>
                </form>
            </div>
        </main>
        <!-- main -->

            <footer id="footer">
                <div class="footerwrap">
                    <div class="footer__logo"><img src="../assets/img/footer_logo.png" alt="logo02"></div>
                    <div class="footer2">
                        <div class="footer_us">
                            <ul>
                                <li><a href="#">권초록</a></li>
                                <li><a href="#">오종석</a></li>
                                <li><a href="#">이원영</a></li>
                                <li><a href="#">이혜민</a></li>
                            </ul>
                        </div>
                        <div class="copylight">© 2023 뇌섹남녀</div>
                    </div>
                </div>
            </footer>
            <!-- footer -->
    </div>
</body>

</html>