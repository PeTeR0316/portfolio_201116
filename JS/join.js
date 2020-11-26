//아이디 유효성 검사
var idCheck = "";

$("input#userId").keyup(function() {

    var userId = $("input#userId").val().trim();
    var num = userId.search(/[0-9]/g); //0보다 작은경우 숫자가 없음
    var eng = userId.search(/[a-z]/ig); //0보다 작은경우 알파벳이 없음

    if (userId.length < 4 || userId.length > 12) {
        document.getElementById("idRegRes").innerText = "아이디는 4~12자리의 영문숫자만 사용가능합니다.(숫자만으로 아이디 사용금지).";
    } else if (userId.search(/\s/) != -1) {
        document.getElementById("idRegRes").innerText = "공백 업이 입력해주세요";
    } else if (num < 0 || eng < 0) {
        document.getElementById("idRegRes").innerText = "아이디는 4~12자리의 영문숫자만 사용가능합니다.(숫자만으로 아이디 사용금지).";
    } else if (num > 0 && eng < 0) {
        //숫자만 있을 경우
        document.getElementById("idRegRes").innerText = "숫자만으로 아이디 사용금지.";
    } else {
        document.getElementById("idRegRes").innerText = "사용가능한 아이디입니다.";
        idCheck = "checked";
    }

    if (userId === "") {
        document.getElementById("idRegRes").innerText = "";
    }
});


//패스워드 유효성 검사 * 검사 코드 수정하기
var pwCheck = "";

$("input#userPW").keyup(function() {

    var userPW = $("#userPW").val().trim();
    var num = userPW.search(/[0-9]/g);
    var eng = userPW.search(/[a-z]/ig);
    var spe = userPW.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi); //0보다 작을 경우 특수기호가 없음 

    if (userPW.length < 8 || userPW.length > 16) {
        document.getElementById("regPW").innerText = "영문 대소문자/숫자/특수문자를 혼용하여 8~16자 입력";
    } else if (userPW.search(/\s/) != -1) {
        document.getElementById("regPW").innerText = "공백 업이 입력해주세요";
    } else if (num < 0 || eng < 0 || spe < 0) {
        document.getElementById("regPW").innerText = "패스워드는 영문, 숫자, 특수기호를 모두 포함하고 있어야 합니다.";
    } else {
        document.getElementById("regPW").innerText = "";
        pwCheck = "checked";
    }
});

function fnPWChk() {
    var userPW = document.getElementById("userPW").value;
    var userPWChk = document.getElementById("userPWChk").value;

    if (userPW == userPWChk && userPW != "") {
        document.getElementById("resPWChk").innerText = "패스워드가 일치합니다.";
    } else if (userPW != userPWChk && userPW != "") {
        document.getElementById("resPWChk").innerHTML = "패스워드가 불일치합니다.";
    } else if (userPW === "" && userPWChk === "") {
        document.getElementById("resPWChk").innerText = "";
    } else if (userPW == "") {
        document.getElementById("resPWChk").innerText = "패스워드를 입력하세요.";
    }
}

//SELECT태그 1960년부터 현재 년도까지 생성
var now = new Date();
var nowYear = now.getFullYear();
var baseYear = 1960;
var resYear;

for (baseYear; baseYear <= nowYear; baseYear++) {
    joinForm.year.add(new Option(baseYear, baseYear));
}


//SELECT태그 월 생성
for (var month = 1; month <= 12; month++) {
    joinForm.month.add(new Option(month, month));
}


//SELECT태그 일 생성
var month = document.getElementById("month").value;
var selectYear = document.getElementById("year").value;
var resDay = "<option id=deletePotion> 선택 </option>";

if (month == 4 || month == 6 || month == 9 || month == 11) {
    for (var firstDay = 1; firstDay <= 30; firstDay++) {
        resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
    }
} else if (month == 2) {
    if ((selectYear % 4 == 0 && selectYear % 100 != 0) || selectYear % 400 == 0) {
        for (var firstDay = 1; firstDay <= 29; firstDay++) {
            resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
        }
    } else {
        for (var firstDay = 1; firstDay <= 28; firstDay++) {
            resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
        }
    }
} else {
    for (var firstDay = 1; firstDay <= 31; firstDay++) {
        resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
    }
}

document.getElementById("day").innerHTML = resDay;


//년도, 월 값 변경 시 실행되는 함수
function fnSelectDay() {
    var month = document.getElementById("month").value;
    var selectYear = document.getElementById("year").value;
    var resDay = "<option id=deletePotion> 선택 </option>";

    if (month == 4 || month == 6 || month == 9 || month == 11) {
        for (var firstDay = 1; firstDay <= 30; firstDay++) {
            resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
        }
    } else if (month == 2) {
        if (
            (selectYear % 4 == 0 && selectYear % 100 != 0) ||
            selectYear % 400 == 0
        ) {
            for (var firstDay = 1; firstDay <= 29; firstDay++) {
                resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
            }
        } else {
            for (var firstDay = 1; firstDay <= 28; firstDay++) {
                resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
            }
        }
    } else {
        for (var firstDay = 1; firstDay <= 31; firstDay++) {
            resDay += "<option value=" + firstDay + ">" + firstDay + "</option>";
        }
    }

    document.getElementById("day").innerHTML = resDay;
}

// SELECT클릭 시 월, 일 항목 리스트에서 삭제
function deleteOption() {
    //document.getElementById("deleteMonth").style.display = "none";
    document.getElementById("deletePotion").style.display = "none";
}


//전체동의 체크박스
$("input#totalCheckbox").click(function() {
    //var totalAgree = $("input#totalCheckbox").is(":checked");
    var totalAgree = document.getElementById("totalCheckbox").checked;

    if (totalAgree === true) {
        // $("input#privacy1").prop("checked", true)
        document.getElementById("termsAndConditions").checked = true;
        document.getElementById("privacy1").checked = true;
        document.getElementById("privacy2").checked = true;
        document.getElementById("marketing").checked = true;
        document.getElementById("emailChk").checked = true;
        document.getElementById("smsChk").checked = true;
    } else {
        document.getElementById("termsAndConditions").checked = false;
        document.getElementById("privacy1").checked = false;
        document.getElementById("privacy2").checked = false;
        document.getElementById("marketing").checked = false;
        document.getElementById("emailChk").checked = false;
        document.getElementById("smsChk").checked = false;
    }
});


//모든 체크박스 선택 시 전체동의 체크박스 선택
$("ul#agree > li > ul >li> input[type=checkbox]").click(function() {
    if (
        document.getElementById("termsAndConditions").checked === true &&
        document.getElementById("privacy1").checked === true &&
        document.getElementById("privacy2").checked === true &&
        document.getElementById("marketing").checked === true &&
        document.getElementById("emailChk").checked === true &&
        document.getElementById("smsChk").checked === true
    ) {
        document.getElementById("totalCheckbox").checked = true;
    } else {
        document.getElementById("totalCheckbox").checked = false;
    }
});

$("ul#agree > li > div > span > input[type=checkbox]").click(function() {
    if (
        document.getElementById("termsAndConditions").checked === true &&
        document.getElementById("privacy1").checked === true &&
        document.getElementById("privacy2").checked === true &&
        document.getElementById("emailChk").checked === true &&
        document.getElementById("smsChk").checked === true
    ) {
        document.getElementById("totalCheckbox").checked = true;
    } else {
        document.getElementById("totalCheckbox").checked = false;
    }
});


//마케팅 수신동의 체크박스 선택 시 하위 체크박스도 선택
$("ul#agree > li > div > input[type=checkbox]").click(function() {
    if (document.getElementById("marketing").checked === true) {
        document.getElementById("emailChk").checked = true;
        document.getElementById("smsChk").checked = true;
    } else {
        document.getElementById("emailChk").checked = false;
        document.getElementById("smsChk").checked = false;
    }

    //모든 체크박스 선택 시 전체동의 체크박스 선택
    if (document.getElementById("termsAndConditions").checked === true &&
        document.getElementById("privacy1").checked === true &&
        document.getElementById("privacy2").checked === true &&
        document.getElementById("marketing").checked === true) {
        document.getElementById("totalCheckbox").checked = true;
    } else {
        document.getElementById("totalCheckbox").checked = false;
    }
});


//마케팅 수신동의 체크박스의 하위 체크박스가 모두 선택 시 마케팅 수신동의 체크박스도 선택
$("ul#agree > li > div > span > input[type=checkbox]").click(function() {
    if (document.getElementById("emailChk").checked === true &&
        document.getElementById("smsChk").checked === true) {
        document.getElementById("marketing").checked = true;
    } else {
        document.getElementById("marketing").checked = false;
    }
});


//회원가입 양식 제출
$("button#joinBtn").click(function() {
    if (
        $("input#ageCheckbox").is(":checked") === true &&
        $("input#totalCheckbox").is(":checked") === true &&
        document.getElementById("userName").value != "" &&
        document.getElementById("userId").value != "" &&
        document.getElementById("userPW").value != "" &&
        document.getElementById("userPWChk").value != "" &&
        document.getElementById("userEmail").value != "" &&
        idCheck === "checked"
    ) {
        var userComfirm = confirm("회원가입하시겠습니까");

        if (userComfirm) {
            var mtd_Type = "post";
            document.getElementById("joinForm").method = mtd_Type;
            document.getElementById("joinForm").action = "insert.php";
            document.getElementById("joinForm").submit();
        } else {
            alert("회원가입을 취소하셨습니다.");
        }
    } else {
        alert("필수 체크사항을 선택하세요");
    }
});