<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .msg {
            display: none;
        }

        .green {
            color: green;
        }
    </style>
</head>
<body>
    <div id="wrap">
        <main id="main">
            <div class="logo">
                <a href="#"></a>
            </div>
            <aside class="aside"> 
                <div class="img1"></div>
            </aside>
            <div class="contents container">
                <div class="inner">
                    <h1>회원가입</h1>
                    <form action="join_profil.php" name="join_profil" method="post" onsubmit="return joinChecks();">
                        <fieldset>
                            <legend class="blind">회원가입 영역</legend>
                            <p class="msg" id="youNameComment"></p>
                            <p class="msg" id="memberEmailMsg"></p>
                            <p class="msg" id="memberPassMsg"></p>
                            <div>
                                <label for="youName" class="label">이름</label>
                                <input type="text" id="youName" name="youName" placeholder="이름을 입력해주세요" class="input__box1">
                            </div>
                            <div>
                                <label for="youEmail" class="label">이메일</label>
                                <input type="text" id="youEmail" name="youEmail" placeholder="이메일을 입력해주세요" class="input__box1">
                            </div>
                            <div>
                                <label for="youPass" class="label">비밀번호</label>
                                <input type="password" id="youPass" name="youPass" placeholder="비밀번호를 입력해주세요" class="input__box1">
                            </div>
                            <div>
                                <button type="submit" class="btn__style">회원가입</button>
                            </div> 
                            <div class="alread">
                                <p>이미 계정이 있습니까? <a href="#">로그인하기</a></p>   
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        let isEmailCheck = false;

        function joinChecks() {
            let youName = $("#youName").val();
            let youEmail = $("#youEmail").val();
            let youPass = $("#youPass").val();

            // 숨겨진 메시지 엘리먼트를 다시 숨김
            $(".msg").hide().removeClass("green");

            if (youName == null || youName == '') {
                $("#youNameComment").text("** 이름을 입력해주세요!!!");
                $("#youNameComment").show();
                return false;
            } else {
                // 이름 유효성 검사 (한글 3~4글자)
                var nameRegex = /^[가-힣]{2,4}$/;

                if (!nameRegex.test(youName)) {
                    $("#youNameComment").text("이름은 한글 2~4글자로 입력하세요.");
                    $("#youNameComment").show();
                    $("#youName").val('');
                    $("#youName").focus();
                    return false;
                } else {
                    $("#youNameComment").text("사용 가능한 이름입니다.");
                    $("#youNameComment").addClass("green");
                }
            }

            if (youEmail == null || youEmail == '') {
                $("#memberEmailMsg").text("** 이메일을 입력해주세요!!!");
                $("#memberEmailMsg").show();
                return false;
            } else {
                // 이메일 유효성 검사
                let emailRegex = /^[a-zA-Z0-9._-]+@[a-zAZ0-9.-]+\.[a-zA-Z]{2,4}$/;

                if (!emailRegex.test(youEmail)) {
                    $("#memberEmailMsg").text("올바른 이메일 형식이 아닙니다.");
                    $("#memberEmailMsg").show();
                    $("#youEmail").val('');
                    $("#youEmail").focus();
                    return false;
                }
            }

            if (youPass == null || youPass == '') {
                $("#memberPassMsg").text("** 비밀번호를 입력해주세요!!!");
                $("#memberPassMsg").show();
                return false;
            } else {
                // 비밀번호 유효성 검사 (알파벳과 숫자만 허용)
                let passRegex = /^[a-zA-Z0-9]+$/;

                if (!passRegex.test(youPass)) {
                    $("#memberPassMsg").text("비밀번호는 영어와 숫자만 포함하여 작성 가능합니다.");
                    $("#memberPassMsg").show();
                    $("#youPass").val('');
                    $("#youPass").focus();
                    return false;
                }
            }

            // 서버에 이메일 중복 확인 요청 보내기
            $.ajax({
                type: "POST",
                url: "joinCheck.php",
                data: { "youEmail": youEmail, "type": "isEmailCheck" },
                dataType: "json",
                success: function (data) {
                    if (data.result == "good") {
                        isEmailCheck = true;
                        // 폼 서브미션 진행
                        $("form[name='join_profil']").submit();
                    } else {
                        $("#memberEmailMsg").text("이미 존재하는 이메일입니다.");
                        $("#memberEmailMsg").show();
                        isEmailCheck = false;
                    }
                }
            });

            return false; // 폼 서브미션을 여기서 막음
        }
    </script>
</body>
</html>
