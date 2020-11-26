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


//제품이름 가져오기
$("ul.goodsList>li>a>img").click(function() {
    var imgName = $(this).attr("alt"); //제품이름 가져오기

    location.href = "shop.php?" + imgName; //제품이름 인자 값 전달
})


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


//사이드메뉴 위치
$(window).scroll(function() {
    var scrollHeight = $(document).scrollTop(); // 현재 스크롤 위치 가져오기

    if (scrollHeight > 700) {
        $("div#sideMenu").css({
            "display": "block"
        })
    } else {
        $("div#sideMenu").css({
            "display": "none"
        })
    }
});


//사이드메뉴 TOP 버튼
$("img#topBtn").click(function() {

    var offset = $("header#header").offset();

    $("html").animate({
        scrollTop: offset.top
    }, 1000)
});


//Qna 양식 초기화

$("button#revoke").click(function() {
    document.getElementById("qnaForm").reset();

});

//QnA 양식 제출
$("button#write").click(function() {
    if (
        document.getElementById("userName").value != "" &&
        document.getElementById("qnaTitle").value != "" &&
        document.getElementById("contents").value != "" &&
        document.getElementById("qnaPW").value != ""
    ) {
        document.getElementById("qnaForm").method = "post";
        document.getElementById("qnaForm").action = "qnaInset.php";
        document.getElementById("qnaForm").submit();
    } else {
        alert("내용을 확인해 주세요.");
    }
});


//로그인 성공 후 계정 정보
var loginCookie = getCookie("loginID");

if (loginCookie !== "") {
    $("a#joinText").html("<a href='#'>" + loginCookie + "</a>");
    $("a#login").html("<a href='http://paran0341.dothome.co.kr/index.html' id='logout'>로그아웃</a>");
} else {
    $("a#joinText").html("<a href='join.php' id='joinText'>" + "회원가입" + "</a>");
    $("a#logout").html("<a href='login.php' id='login'>로그인</a>");
}


//로그아웃 시 쿠키 삭제
$("a#logout").click(function() {
    //expires 매개변수를 지나간 날짜로 설정하여 삭제
    document.cookie = "loginID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
});