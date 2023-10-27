<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>뇌섹남녀-boardWrite</title>
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
                <form action="boardWriteSave.php" name="boardWriteSave" method="post" enctype="multipart/form-data" class="board_write b_p">
                    <fieldset>
                        <legend>글 작성하기</legend>
                        <div>
                                <label for="boardCategory" class="blind">말머리</label>
                                <select name="boardCategory" id="boardCategory">
                                    <option value="공지">공지</option>
                                    <option value="자유">자유</option>
                                    <option value="질문">질문</option>
                                </select>
                            </div>
                        <div>
                            <label id="b_title" for="title" class="label_text">제목 <span class="red_t">*</span></label>
                            <input type="text" id="boardTitle" name="boardTitle" class="input__style"  placeholder="제목을 입력해주세요">
                        </div>
                        <div id="weite_box2">
                            <label id="boardContents_w" for="boardContents" class="label_text">내용 작성하기</label>
                            <textarea name="boardContents" id="boardContents" rows="20" class="input__style"></textarea>
                        </div>
                        <div class="file">
                                <label for="boardFile" class="blind">파일</label>
                                <input type="file" id="boardFile" name="boardFile"> <!-- accept=".jpg, .jpeg, .png, .gif, .webp" -->
                                <p>* jpg, png, gif, webp 파일만 넣을 수 있습니다. 이미지 용량은 1MB를 넘길 수 없습니다.</p>
                            </div>
                        <div >
                            <label id="boardPass_label" for="boardPass"class="label_text">비밀번호 입력</label>
                            <input type="password" id="boardPass" class="input__style" autocomplete="off" placeholder="글을 수정하려면 로그인 비밀번호를 입력하셔야 합니다." required>
                        </div>
                        <div class="board__btns">
                            <button type="submit" class="btn__style3">저장하기</button>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/translations/ko.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#boardContents_w'), {
                language: 'ko' 
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>