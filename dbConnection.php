<?php

header('Content-Type: text/html; charset=utf-8');

$db_con = mysqli_connect("localhost", "paran0341", "a73059125!", "paran0341");
//if ($db_con) {
//    echo "DB 연결 성공<p>";
//} else {
//    echo "DB 연결 실패<p>";
//}

// $result = mysqli_query($db_con, "SELECT * FROM member");
// echo "<ul>";
// while ($row = mysqli_fetch_array($result)) {
//     echo  "<li id=" . $row['userID'] . ">Name: " . $row['name'] . " ID: " . $row['userID'] . ", PW: " . $row['userPW'] . ", E-mail: " . $row['email'] . ", phoneNumber: " . $row['phoneNumber'] . "</li>";
// }
// echo "</ul>";

?>