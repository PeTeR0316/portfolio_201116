//var windowWidth = window.innerWidth //브라우저 화면의 너비
//var windowHeight = window.innerHeight //브라우저 화면의 높이
//screen.availWidth = 현재 사용자가 보고있는 모니터의 가로 폭

//레이어팝업 닫기
function fnPopupClose() {
    document.getElementById("modalLayerPopup").style.display = "none";

    //체크박스 선택 시 쿠키 저장
    if ($("input#dayClose").is(":checked")) {
        setCookie("close", "yes", 1);
    }
}

//레이어팝업 하루동안 열지 않기
//setCookie("쿠키명", "쿠키값", "유효날짜")
var checkCookie = getCookie("close");

if (checkCookie == "yes") {
    $("div#modalLayerPopup").css({
        "display": "none"
    });
} else {
    $("div#modalLayerPopup").css({
        "display": "block"
    });
}

//쿠키 생성
function setCookie(cName, cValue, cDay) {
    var expire = new Date();
    expire.setDate(expire.getDate() + cDay);
    cookies = cName + '=' + escape(cValue) + '; path=/ '; // 한글 깨짐을 막기위해 escape(cValue)를 합니다.
    if (typeof cDay != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
    document.cookie = cookies;
}

//쿠키값 가져오기
function getCookie(cName) {
    cName = cName + '=';
    var cookieData = document.cookie;
    var start = cookieData.indexOf(cName);
    var cValue = '';
    if (start != -1) {
        start += cName.length;
        var end = cookieData.indexOf(';', start);
        if (end == -1) end = cookieData.length;
        cValue = cookieData.substring(start, end);
    }
    return unescape(cValue);
}


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

//Main SlideShow
setInterval(mainSlideShow, 6000);

function mainSlideShow() {
    var imgWidth =
        "-" + $("div#slideShowFrame > a > img:first-child").css("width");

    $("div#slideShowFrame").animate({
            "margin-left": imgWidth,
        },
        3000,
        function() {
            $(this).css({
                "margin-left": "0"
            });
            $("div#slideShowFrame > a:first-child").insertAfter("div#slideShowFrame > a:last-child");
        }
    );
};


//Icon 클릭 시 상품 Grid 변경
$("i#twoGrid").click(function() {
    $("ul.goodsList").css({
        "grid-template-columns": "1fr 1fr",
    });
});

$("i#threeGrid").click(function() {
    $("ul.goodsList").css({
        "grid-template-columns": "1fr 1fr 1fr",
    });
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


//로그인 성공 후 계정 정보
//index 페이지로부터 받은 제품이미지 이름
// var temp = location.href.split("?"); // ?를 기준으로 자르기
// var userID = temp[1]; //로그인 아이디

// if (userID !== undefined) {
//     $("a#joinText").html("<a href='#'>" + userID + "</a>");
//     $("a#login").html("<a href='http://paran0341.dothome.co.kr/index.html'>로그아웃</a>");
// }

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