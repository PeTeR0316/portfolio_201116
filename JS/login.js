//회원가입 li 요소 아래 쿠폰 움직임
setInterval(joinCouponMove, 1000);

function joinCouponMove() {

    $("ul#userMenu>li>a>span:last-child").animate({
            "top": "40px"
        },
        500,
        function() {
            $(this).animate({
                "top": "35px",
            }, 500);
        }
    );
}

//메인메뉴 영역 로고 표시
$(window).scroll(function() {
    var scrollHeight = $(document).scrollTop(); // 현재 스크롤 위치 가져오기

    if (scrollHeight > 123) {
        $("li#navLogo").css({
            "display": "block"
        })
    } else {
        $("li#navLogo").css({
            "display": "none"
        })
    }
});


//인기검색어 창 열기
$("input#keyWord").focus(function() {
    $("div#trendKeyWord").css({
        "display": "inline-block"
    })
});

//인기검색어 창 닫기
$("input#keyWord").focusout(function() {
    $("div#trendKeyWord").css({
        "display": "none"
    })
});

// 개인정보처리방침 창 발생
$("span#privacy").click(function() {
    var url = "http://www.chichera.co.kr/html/privacy.html";
    var widthPopup = 500; //팝업창의 폭
    var left = (screen.availWidth - widthPopup) / 2;
    var prop = "width=" + widthPopup + "px, height=450px, left=" + left + "px, top=50px"; //property = 속성

    window.open(url, "", prop);
});


// 사업자정보확인 창 발생
$("span#bizInfo").click(function() {
    var url = "http://www.ftc.go.kr/bizCommPop.do?wrkr_no=1068686649";
    var widthPopup = 750; //팝업창의 폭
    var left = (screen.availWidth - widthPopup) / 2;
    var prop = "width=" + widthPopup + "px, height=700px, left=" + left + "px, top=50px"; //property = 속성

    window.open(url, "", prop);
});


// 서브메뉴 생성

$("i#subMenuBtn").click(function() {
    $("div#subMenu").css({
        display: "block",
    });

    $("body").css({
        "overflow-y": "hidden",
    });
});


// 서브메뉴 닫기
$("i#subMenuClose").click(function() {
    $("div#subMenu").css({
        display: "none",
    });

    $("body").css({
        "overflow-y": "visible",
    });
});


//로그인 처리
$("button#loginBtn").click(function() {
    if (document.getElementById("userId").value != "" && document.getElementById("userPW").value != "") {
        var mtd_Type = "post";
        document.getElementById("loginForm").method = mtd_Type;
        document.getElementById("loginForm").action = "loginProcess.php";
        document.getElementById("loginForm").submit();
    } else {
        alert("아이디 또는 패스워드를 입력하세요");
    }
});