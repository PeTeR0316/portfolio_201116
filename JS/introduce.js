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


//브라우저의 창 크기만큼 높이 조정
$(window).resize(function() {
    var windowHeight = window.innerHeight //브라우저 화면의 높이
    var windowWidth = window.innerWidth //브라우저 화면의 너비

    $("main#main > div.intro").css({
        "height": windowHeight
    });


    // $("div.textImg>img").animate({
    //     "left": windowHeight,
    //     "top": windowWidth
    // }, 3000);
});



//화면단위 스크롤 이동
$(".intro").on("mousewheel DOMMouseScroll", function(event) {
    //DOMMouseScroll은 파이어폭스 브라우저 용

    event.preventDefault();
    //event.stopPropagation();

    var introTop = 0;

    if (event.originalEvent.wheelDelta >= 0) {
        //마우스 휠 방향 위

        introTop = $(this).prev().offset(); //이전 요소의 위치값을 저장
        introTop.top -= 55; //nav의 높이만큼 빼기


        $("html, body").stop().animate({
            scrollTop: introTop.top
        }, 1000);

        // $(this).prev().children("div.backgroundImg>div.textImg").animate({
        //     "opacity": "1"
        // }, 1000)

        $(this).prev().find("div.textImg").animate({
            "opacity": "1"
        }, 1500)

        return false;

    } else if (event.originalEvent.wheelDelta < 0) {
        //마우스 휠 방향 아래

        introTop = $(this).next().offset(); //다음 요소의 위치값을 저장
        introTop.top -= 55; //nav의 높이만큼 빼기

        $("html, body").stop().animate({
            scrollTop: introTop.top
        }, 1000);

        // $(this).next().children(".textImg").animate({
        //     "opacity": "1"
        // }, 1000)

        $(this).next().find("div.textImg").animate({
            "opacity": "1"
        }, 1500)

        return false;
    }
});


//하단 버튼을 통한 화면단위 이동
$("div#nextBtn").click(function() {
    var windowHeight = window.innerHeight
    var scrollHeight = $(document).scrollTop(); // 현재 스크롤 위치 가져오기
    scrollHeight += windowHeight;

    $("html, body").stop().animate({
        scrollTop: scrollHeight
    });

    $(this).next().children(".textImg").animate({
        "opacity": "1"
    }, 1000)

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



//TEXT IMAGE 슬라이드 다운 효과 *보충하기
// $(".intro").on("mousemove", function(e) {
//     var testintroTop = $(this).offset().top / 100;
//     testintroTop = testintroTop.toFixed(0);

//     var testscrollHeight = $(document).scrollTop() / 100;
//     testscrollHeight = testscrollHeight.toFixed(0);

//     //console.log(testintroTop + "," + testscrollHeight);

//     if (testintroTop === testscrollHeight) {
//         console.log("ok");
//         $(this).children(".textImg").animate({
//             "margin-top": "0px"
//         }, 1000)

//     }
// });