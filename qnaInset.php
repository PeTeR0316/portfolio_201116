<?php
include 'dbConnection.php';

$userName = $_POST["userName"];
$qnaTitle = $_POST["qnaTitle"];
$contents = $_POST["contents"];
$qnaPW = $_POST["qnaPW"];
$currentTime = date("Y-m-d H:i:s");


//echo "$userName, $qnaTitle, $contents, $qnaPW, $currentTime";

//사용자 패스워드 해시함수
$passwordHash = hash("sha256", $qnaPW);

//mysqli_query($db_con, "insert into board(name, qnaTitle, contents, qnaPW, writeDatetime) value('test','test','test','test','test');");
mysqli_query($db_con, "insert into board(name, qnaTitle, contents, qnaPW, writeDatetime) value('$userName','$qnaTitle','$contents','$qnaPW','$currentTime');");
echo ("<script>alert('등록 되었습니다!'); history.back();</script>");



// $result = mysqli_query($db_con, "SELECT * FROM board") or die(mysqli_error($db_con));
// $row = mysqli_fetch_array($result);
//echo "$result";
// echo "<ul>";
// while ($row) {
//     echo  "<li id=" . $row['name'] . ">Name: " . $row['qnaTitle'] . " ID: " . $row['contents'] . ", PW: " . $row['qnaPW'] . ", E-mail: " . $row['WriteDatetime'] . "</li>";
// }
// echo "</ul>";
