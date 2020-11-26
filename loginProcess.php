<?php
include 'dbConnection.php';

$userID = $_POST["userId"];
$userPW = $_POST["userPW"];
$cuurentTime = date("Y-m-d H:i:s");

$passwordHash = hash("sha256", $userPW);

//계정 확인
$result = mysqli_query($db_con, "SELECT * FROM member WHERE userID = '" . $userID . "' AND userPW = '" . $passwordHash . "';");

$row = mysqli_fetch_array($result);


if ($row) {
    echo ("<script>alert('로그인 되었습니다!'); location.href='index.html?$userID';</script>");
    //최종 로그인 시간 UPDATE
    mysqli_query($db_con, "UPDATE member set lastloginDatetime = '" . $cuurentTime . "' WHERE userID = '" . $userID . "' AND userPW = '" . $passwordHash . "';");
    setcookie('loginID', $userID, time() + (3600 * 6));
} else {
    echo "<script>alert('아이디 또는 비밀번호가 틀립니다.'); location.href='login.php'; </script>";
}
