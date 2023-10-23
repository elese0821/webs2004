<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* div로 유효성 검사 후 올바르면 사라진 후 진짜 버튼 나옴 */
        .join {
            line-height: 3.5;
            text-align: center;
        }
        .join__form button {
            display: none;
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
                    <form action="joinResult.php" class="join__form" name="joinResult" method="post" onsubmit="return joinChecks()">
                        <fieldset>
                            <legend class="blind">회원가입 영역</legend>
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
                            <div class="btn__style join" onclick="emailChecking()">회원가입</div>
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

        function emailChecking(){
    let youEmail = $("#youEmail").val();

    if(youEmail == null || youEmail == ''){
        $("#youEmail > input").addClass("fail__null");
        alert("이메일을 입력해주세요.");
        $("#youEmail").focus();
        return false;
    } else {
        let getEmail = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

        if (!getEmail.test(youEmail)) {
            $("#youEmail > input").addClass("fail__duple");
            alert("올바른 이메일 주소를 입력해주세요.");
            $("#youEmail").val('');
            $("#youEmail").focus();
            return false;
        } else {
            $("#youEmail > input").addClass("success");

            $.ajax({
                type: "POST",
                url: "joinCheck.php",
                data: {"youEmail": youEmail, "type": "isEmailCheck"},
                dataType: "json",
                success: function(data){
                    if(data.result == "good"){
                        $("#youEmail > input").addClass("success");
                        isEmailCheck = true;
                        $(".join__form button").show();
                        $(".join").hide();
                       
                    } else {
                        $("#youEmail > input").addClass("fail__duple");
                        alert("이미 가입된 이메일입니다.");
                        isEmailCheck = false;
                        
                    }
                }
            });
        }
    }
} 

        function joinChecks(){

            if($("#youEmail").val() == ''){
                $("#youEmail > input").addClass("fail__null");
                $("#youEmail").focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>
</html>