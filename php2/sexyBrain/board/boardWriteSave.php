<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<?php
    $memberId = 1;
    $boardAuthor = "코코넛";
    $boardCategory = $_POST['boardCategory'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = nl2br($_POST['boardContents']);

    $boardView = 1;
    $boardLike = 0;
    $boardRegTime = time();
    $boardDelete = 1;

    $boardFile = $_FILES['boardFile'];
    $boardImgSize = $_FILES['boardFile']['size'];
    $boardImgType = $_FILES['boardFile']['type'];
    $boardImgName = $_FILES['boardFile']['name'];
    $boardImgTmp = $_FILES['boardFile']['tmp_name'];

    if($boardImgType){
        $fileTypeExtension = explode("/", $boardImgType);
        $fileType = $fileTypeExtension[0];  // image
        $fileExtension = $fileTypeExtension[1];  // jpeg
    
        // 이미지 타입 확인
        if($fileType === "image"){
            if($fileExtension === "jpg" || $fileExtension === "jpeg" || $fileExtension === "png" || $fileExtension === "gif" || $fileExtension === "webp"){
                $boardImgDir = "../assets/board/";
                $boardImgName = "Img_".time().rand(1, 99999)."."."{$fileExtension}";
                $sql = "INSERT INTO sexyBoard (memberId, boardTitle, boardContents, boardCategory, boardAuthor, boardRegTime, boardView, boardLike, boardImgFile, boardImgSize, boardDelete) VALUES ('$memberId', '$boardTitle', '$boardContents', '$boardCategory', '$boardAuthor', '$boardRegTime', '$boardView','$boardLike','$boardImgName','$boardImgSize', '$boardDelete');";
            } else {
                echo "<script>alert('이미지 파일 형식이 아닙니다.')</script>";
            }
            echo "<script>alert('이미지 파일이 맞습니다.')</script>";
        } else {
            echo "<script>alert('이미지 파일이 아닙니다.')</script>";
        }
    } else {
        echo "<script>alert('이미지 파일을 첨부하지 않았습니다.')</script>";
        echo "<script>window.location.href='../boardHome/board.php';</script>";
        $sql = "INSERT INTO sexyBoard (memberId, boardTitle, boardContents, boardCategory, boardAuthor, boardRegTime, boardView, boardLike, boardImgFile, boardImgSize, boardDelete) VALUES ('$memberId', '$boardTitle', '$boardContents', '$boardCategory', '$boardAuthor', '$boardRegTime', '$boardView','$boardLike','Img_default.jpg','$boardImgSize', '$boardDelete');";
    }

    // 이미지 사이즈 확인
    if($boardImgSize > 10000000){
        echo "<script>alert('이미지 파일 용량이 1MB를 초과했습니다. 사이즈를 줄여주세요.')</script>";
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($boardImgTmp, $boardImgDir.$boardImgName);

    if($result) {
        echo "<script>alert('저장이 완료되었습니다.')</script>";
        echo "<script>window.location.href='../boardHome/board.php';</script>";
    }

?>