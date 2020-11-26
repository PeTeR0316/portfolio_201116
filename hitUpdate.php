<?php

include 'dbConnection.php';

// $no = $_GET["no"];
// $hit = $_GET["hit"];

// echo ("<script>alert('$no');</script>");

// $result = mysqli_query($db_con, "SELECT hit FROM board WHERE no = '" . $no . "';");
// $row = mysqli_fetch_array($result);

// $thisHit = $row["hit"] + 1;

// mysqli_query($db_con, "UPDATE board set hit = '" . $thisHit . "' WHERE no = '" . $no . "';");


//url을 통해 id 값이 존재하면
if (isset($_POST["no"])) {

    //빈 배열을 만들고
    $thisHit;

    //넘어온 id에 해당하는 row를 출력하는 프로시저 쿼리를 만든다.
    $procedure = "SELECT hit FROM board WHERE no = '" . $no . "';";

    //기존의 프로시저가 존재한다면 삭제 후
    if (mysqli_query($db_con, "DROP PROCEDURE IF EXISTS whereUser")) {
        //위에서 선언한 프로시저 선언(1)
        if (mysqli_query($db_con, $procedure)) {
            //프로시저 호출(2)
            $query = "CALL whereUser(" . $_POST["no"] . ")";
            $result = mysqli_query($connect, $query);

            while ($row = mysqli_fetch_array($result)) {
                //위에서 만든 배열에 넣어준다.
                $thisHit = $row["hit"];
            }


            //json string 형식으로 변환 후 넘겨준다.
            echo json_encode($thisHit);
        }
    }
}
