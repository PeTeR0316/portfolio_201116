<?php
include 'dbConnection.php';

$userName = $_POST["userName"];
$userID = $_POST["userId"];
$userPW = $_POST["userPW"];
$userEmail = $_POST["userEmail"];
$userPhoneNumber = $_POST["phoneNumber"];
$cuurentTime = date("Y-m-d H:i:s");

//사용자 패스워드 해시함수
$passwordHash = hash("sha256", $userPW);

//전송된 아이디로 중복 확인
$result = mysqli_query($db_con, "SELECT * FROM member WHERE userID = '" . $userID . "';");

$row = mysqli_fetch_array($result);

//해당 id로 SELECT한 결과가 있으면 join.php로 이동
if ($row) {
    echo ("<script>alert('중복된 아이디 입니다.'); location.href='join.php';</script>");
} else {
    mysqli_query($db_con, "insert into member(name, userID, userPW, birth, email, address, phoneNumber, registerDatetime, lastloginDatetime) value('$userName','$userID','$passwordHash','930322','$userEmail','213124','$userPhoneNumber', '$cuurentTime','$cuurentTime');");
    echo ("<script>alert('회원가입이 되었습니다!'); location.href='../index.html';</script>");
}

// if ($userID == "" || $userPW == "") {
//     echo "<script>alert('아이디 또는 패스워드를 입력하세요!!'); location.href='../index.html'; </script>";
// } else {
    // echo $_POST['userID'];
    // $sql = mysqli_query($conn, "SELECT * FROM user WHERE userID='" . $_POST['userID'] . "'");
    // $usernamecount = $sql->fetch_array();
    // if ($usernamecount['success'] == 1) {
    //     echo ("<script>alert('중복된 아이디입니다!'); history.back();</script>");
    // } else {
    //     $id = $_POST['userID'];
    //     $password = password_hash($_POST['userPW'], PASSWORD_DEFAULT);
    //     $date = date("Y-m-d", time());
    //     $result = mysqli_query($conn, "INSERT INTO user(id,password,created)VALUES('" . $id . "','" . $password . "')") or die("알수없는 오류");
    //     echo ("<script>alert('회원가입이 되었습니다!'); location.href='./phptest.php';</script>");

    //mysqli_query($db_con, "INSERT INTO member (userID, userPW,email,phoneNumber) VALUES('$userID','$userPW','$userEmail','$userPhoneNumber')");

//     mysqli_query($db_con, "insert into member(name, userID, userPW, birth, email, address,phoneNumber) value('$userName','$userID','$passwordHash','930322','$userEmail','213124','$userPhoneNumber');");
//     echo ("<script>alert('회원가입이 되었습니다!'); location.href='../index.html';</script>");
// }

//mysqli_query($db_con, "insert into member(name, userID, userPW, birth, email, address,phoneNumber) value('dsgsdg','123123213','12312321321','930322','12312312321','213124','12312312312312');");
// mysqli_query($db_con, "INSERT INTO member (name, userID, userPW, birth, email, address,phoneNumber) value('dsgsdg','$userID','$userPW','930322','$userEmail','213124','$userPhoneNumber')");
