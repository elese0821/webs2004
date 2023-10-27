<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardSql = "SELECT * FROM sexyBoard WHERE boardDelete = 1 ORDER BY boardId DESC";
    $boardShow = $connect -> query($boardSql);

    // 블로그 정보 가져오기
    $boardSql = "SELECT * FROM sexyBoard WHERE boardId = '$boardId'";
    $boardResult = $connect -> query($boardSql);
    $boardInfo = $boardResult -> fetch_array(MYSQLI_ASSOC);

    // 조회수 불러오기
    $boardView = "SELECT boardView FROM sexyBoard WHERE boardId = '$boardId'";
    $boardViewResult = $connect -> query($boardView);
    $boardViewInfo = $boardViewResult -> fetch_array(MYSQLI_ASSOC);

    if(isset($_GET['category'])){
        $category = $_GET['category'];
    } 

    // 카테고리 가져오기
    $categorySql = "SELECT * FROM sexyBoard WHERE boardDelete = 1 AND boardCategory = '$category' ORDER BY boardId DESC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 목록</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrap">
        <header id="header">
            <nav class="header__nav">
                <ul>
                    <li><a href="#">문제</a></li>
                    <li class="active"><a href="#">커뮤니티</a></li>
                </ul>
            </nav>
            <div class="header__logo">
                <a href="home.html"><img src="assets/img/logo.png" alt="뇌섹남녀" href></a>
            </div>
            <div class="header__right">
                <input type="search" class="search" name="allSearchValue" autocomplete="off" role="combobox" placeholder="검색" aria-live="polite">
                <button><a class="logout" href="#">로그아웃</a></button>
                <a class="propile" href="#">뇌섹</a>
                <!-- <img src="" alt="프로필"> -->
            </div>
        </header>
        <!-- //header -->

        <main>
            <header class="intro__box">
                <h2>
                    뇌섹남녀 커뮤니티에서<br>
                    다양한 이야기를 나누세요
                </h2>
                <p>공지사항과 질문 외에도 자유롭게 이야기를 나눌 수 있습니다.</p>
                <a href="#">글쓰기</a>
            </header>
            <!-- //header -->

            <section class="board__wrap container">
                <div class="board__inner">
                    <div class="card__inner column4">
                        <input type="search" class="search" name="allSearchValue" autocomplete="off" role="combobox" placeholder="검색" aria-live="polite">
                        
<?php forEach($boardShow as $sexyBoard){?>
    <div class="card">
    <figure class="card__img">
        <a href="../board/boardView.php?boardId=<?=$sexyBoard['boardId']?>">
            <img src="../assets/board/<?=$sexyBoard['boardImgFile']?>" alt="<?=$sexyBoard['boardTitle']?>">
        </a>
    </figure>
    <div class="card__text">
        <h3>
            <p><?=$category?></p>
            <div>
                <p><?=$boardInfo['boardAuthor']?></p>
                <p><?=$boardViewInfo['boardView']?></p>
            </div>
        </h3>
        <h4>
            <a href="#"><?=$sexyBoard['boardTitle']?></a><p>[댓글수]</p>
        </h4>
        <div class="card__desc"><?=substr($sexyBoard['boardContents'], 0, 100)?></div>
    </div>
</div>
<?php }?>
                        <!-- //card -->

                    </div>
                        <!-- //card__inner -->
    
                    <div class="board__pages">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">></a></li>
                        </ul>
                    </div>
                    <!-- //board__pages -->
                </div>
                <!-- //board__inner -->

                <aside class="board__filter">
                    <?php include "../board/boardCategory.php" ?>
                  </aside>
                <!-- //board__filter -->
            </section>
            <!-- //board__wrap -->
        </main>
        <!-- //main -->

        <footer id="footer">
            <div class="footer__logo">
                <a href="home.html"><img src="assets/img/footer_logo.png" alt="뇌섹남녀" href></a>
            </div>
            <div class="footer__info">
                <ul class="footer__creater">
                    <li>권초록</li>
                    <li>오종석</li>
                    <li>이원영</li>
                    <li>이혜민</li>
                </ul>
                <div class="footer__copyright">© 2023 뇌섹남녀</div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    /* $(document).ready(function() {
    // 체크박스 라벨 추가 또는 삭제 시 높이 조절
    $('input[type="checkbox"]').on('change', function() {
        adjustFilterHeight();
    });

    // 초기 페이지 로드 시 높이 조절
    adjustFilterHeight();

    function adjustFilterHeight() {
        let totalHeight = 300;

        // 모든 체크박스의 높이를 합산
        $('input[type="checkbox"]').each(function() {
            let labelHeight = parseInt($(this).next('.checkbox').css('height'));
            let labelMarginBottom = parseInt($(this).next('.checkbox').css('margin-bottom'));
                totalHeight += labelHeight + labelMarginBottom;
        });
        totalHeight += parseInt($('.filter__button').css('height'));

        // 높이 조절
        $('.board__filter').css('height', totalHeight + 'px');
    }
}); */
    </script>
</body>
</html>