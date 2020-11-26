//index 페이지로부터 받은 제품이미지 이름
var temp = location.href.split("?"); // ?를 기준으로 자르기
// data = temp[1].split(":");
var imgAlt = temp[1]; //메인페이지 제품 이미지 주소
var imgName = imgAlt.split("/"); // /를 기준으로 자르기
var imgAdress = imgName[1]; //제품 이름

var imgs = document.getElementsByTagName("img"); // 모든 이미지 주소 가져오기
var imgSrcs = []; // 모든 이미지 주소를 담기 위한 배열

var imgSrc = "images/shopDetail/folderName"; // 변경할 이미지의 주소 인덱스

var cnt = 1; //이미지 주소 순차적으로 적용을 위한 인덱스 번호

// div#goodsImg영역 제품이미지
var goodsName = "images/wrap/main/goods/" + imgAlt + ".gif";
$("img#goodsName").attr("src", goodsName);

//이미지 주소 배열로 저장
for (var i = 0; i < imgs.length; i++) {
    imgSrcs.push(imgs[i].src);
}

//이미지 주소에 folderName을 가진 이미지들의 주소 값 변경
for (var i = 0; i < imgs.length; i++) {
    if (imgSrcs[i].indexOf(imgSrc) != -1) {
        imgSrcs[i] = imgSrcs[i].replace("folderName", imgAdress); //이미지 참조 폴더명 변경
        document.getElementsByTagName("img").src = imgSrcs[i];
        imgId = "img#mainImg" + cnt;

        $(imgId).attr("src", imgSrcs[i]);

        cnt++
    }
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

//QnA 글쓰기 클릭 시 로그인 유무 확인
$("#qnaWrite").click(function(event) {
    event.preventDefault();

    if (loginCookie !== "") {
        location.href = "qnaWrite.php";
    } else {
        alert("로그인 후 작성할 수 있습니다.")
    }
})

//QnA 클릭 시 내용 보여주기
$("td#title").click(function() {
    $(this).parent().next("tr#contents").stop().slideToggle(300);
});

//조회수
$("td#title").click(function() {
    var no = $("td#no").text();

    $.ajax({
        url: "hitUpdate.php",
        method: "post",
        data: { no: no },
        dataType: "json",
        success: function(data) {
            alert(data);
        }

    })
});

//환불영역 테스트 변경 버튼
$("button#text1Btn").click(function() {
    $("div#refundText1").css({
        "display": "block"
    });

    $("div#refundText2").css({
        "display": "none"
    });

    $("div#refundText3").css({
        "display": "none"
    });
});

$("button#text2Btn").click(function() {
    $("div#refundText1").css({
        "display": "none"
    });

    $("div#refundText2").css({
        "display": "block"
    });

    $("div#refundText3").css({
        "display": "none"
    });
});

$("button#text3Btn").click(function() {
    $("div#refundText1").css({
        "display": "none"
    });

    $("div#refundText2").css({
        "display": "none"
    });

    $("div#refundText3").css({
        "display": "block"
    });
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


//스크롤 위치에 따른 사이드메뉴 생성 및 제거
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
})


//스크롤 위치에 따른 사이드 바로구매 버튼 생성 및 제거
var sidePurchaseBtnState = "off"; // 버튼 하나로 생성 및 제거

$(window).scroll(function() {
    var scrollHeight = $(document).scrollTop(); // 현재 스크롤 위치 가져오기

    if (scrollHeight > 800) {
        $("button#sidePurchaseBtn").css({
            "display": "block"
        })

    } else {
        $("button#sidePurchaseBtn").css({
            "display": "none",
            "color": "#ffffff",
            "background-color": "#cc0000",
            "border": "none"
        })

        $("div#sidePurchase").attr("id", "purchase")

        sidePurchaseBtnState = "off";
    }
});

//사이드 바로구매 버튼 클릭 시 바로구매 창 생성 및 제거
$("button#sidePurchaseBtn").click(function() {
    if (sidePurchaseBtnState === "off") {
        $("button#sidePurchaseBtn").css({
            "color": "#cccccc",
            "background-color": "#ffffff",
            "border": "1px solid #cccccc"
        });

        $("div#purchase").attr("id", "sidePurchase")

        sidePurchaseBtnState = "on";

    } else if (sidePurchaseBtnState === "on") {
        $("button#sidePurchaseBtn").css({
            "color": "#ffffff",
            "background-color": "#cc0000",
            "border": "none"
        });

        $("div#sidePurchase").attr("id", "purchase")

        sidePurchaseBtnState = "off";
    }
});


//결제 창 가격
var goodsColor = "<option value='choice'>옵션 선택</option>" +
    "<option value='mint'>mint</option>" +
    "<option value='black'>black</option>";

var goodsSize = "<option value='choice'>옵션 선택</option>" +
    "<option value='s'>S(55)</option>" +
    "<option value='m'>M(66)</option>" +
    "<option value='l'>L(77)</option>";

$("select#color").html(goodsColor);

//컬러 셀렉트 값 변경 시
$("select#color").change(function() {
    var selectColor = $("select#color").val();

    if (selectColor != "choice") {
        $("select#size").html(goodsSize);
    } else if (selectColor === "choice") {
        $("select#size").html("<option value='choice'>옵션 선택</option>");
    }
});


var optionIndex = 0; //옵션 마다의 가격을 가져오기 위한 인덱스, 옵션의 갯 수를 파악

//사이즈 셀렉트 값 변경 시
$("select#size").change(function() {
    var selectColor = $("select#color").val(); //선택한 컬러 값
    var selectSize = $("select#size").val(); // 선택한 사이즈 값
    var indexId = "div.option_" + optionIndex + " > p.productCode"; //옵션 인덱스
    var countClone = $("li#countElement > div").clone(); //추가할 요소를 담을 변수
    var optionCount = 0; // 총 상품 금액을 구하기 위한 변수
    var totalPrice = 0; // 총 상품 금액 값을 담을 변수
    var productCode = selectColor + "," + selectSize;
    var duplicationCheck = 0; //중복된 옵션 검사를 위한 변수 0인경우 중복 옵션 없음, 1인경우 중복 옵션 있음

    //중복된 옵션 검사
    for (var num = 0; num <= optionIndex; num++) {
        //선택한 옵션 값을 첫번째 요소의 옵션부터 순서대로 비교
        if (productCode === $("li#count > div").eq(num).children("p.productCode").text()) {
            duplicationCheck = 1;
        }
    }

    //중복이 있을 경우 요소를 추가하지 않는다.
    if (duplicationCheck === 1) {
        alert("이미 추가된 옵션입니다.");
        $("select#size").html(goodsSize);
        return false;
    } else {
        for (optionCount; optionCount <= optionIndex; optionCount++) {
            countClone.appendTo("li#count") // 선택한 옵션을 보여줄 요소 추가
            $("li#count > div").eq(optionCount).attr("class", "option_" + optionCount); //순차적으로 클래스명 추가
            totalPrice += parseInt($("li#count > div").eq(optionCount).children("span").text().replace(/[^\d]+/g, '')) //현재까지의  총 상품 금
        }
    }

    $(indexId).text(productCode);

    $("li#liTotalPrice > span#totalPrice").text(totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

    //SELECT창 초기화
    $("select#color").html(goodsColor);
    $("select#size").html("<option value='choice'>옵션 선택</option>");

    optionIndex++;
});


//마이너스 버튼 클릭 시
$(document).on("click", "button.down", function() {
    var price = parseInt($("span#price").text().replace(/[^\d]+/g, ''));
    var optionTotalPrice = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var selectInput = $("div." + $(this).parent().attr("class") + " > input.goodsCount"); // 선택한 버튼의 div 영역의 input 선택자
    var count = parseInt(selectInput.val()); //선택한 버튼의 div 영역의 input 값
    var selectDiv = $("div." + $(this).parent().attr("class") + " > span"); // 선택한 버튼의 div클래스명 가져오기
    var optionCount = 0;
    var totalPrice = 0;

    count = count - 1;
    optionTotalPrice = (price * count).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    if (count < 1) {
        alert("최소 주문수량은 1개 입니다.");
        return false;
    } else {
        selectInput.val(count);
        selectDiv.text(optionTotalPrice + "원");

        //마이너스 버튼 클릭 시 총 상품 금액 변경
        for (optionCount; optionCount < optionIndex; optionCount++) {
            totalPrice += parseInt($("li#count > div").eq(optionCount).children("span").text().replace(/[^\d]+/g, '')) //현재까지의  총 상품 금액
        }

        $("li#liTotalPrice > span#totalPrice").text(totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    }
});

//플러스 버튼 클릭 시
$(document).on("click", "button.up", function() {
    var price = parseInt($("span#price").text().replace(/[^\d]+/g, ''));
    var optionTotalPrice = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var selectInput = $("div." + $(this).parent().attr("class") + " > input.goodsCount"); // 선택한 버튼의 div 영역의 input 선택자
    var count = parseInt(selectInput.val()); //선택한 버튼의 div 영역의 input 값
    var selectDiv = $("div." + $(this).parent().attr("class") + " > span"); // 선택한 버튼의 div클래스명 가져오기
    var optionCount = 0;
    var totalPrice = 0;

    count = count + 1;
    optionTotalPrice = (price * count).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    if (count > 100) {
        alert("최대 주문수량은 100개 입니다.");
        return false;
    } else {
        selectInput.val(count);
        selectDiv.text(optionTotalPrice + "원");

        //플러스 버튼 클릭 시 총 상품 금액 변경
        for (optionCount; optionCount < optionIndex; optionCount++) {
            totalPrice += parseInt($("li#count > div").eq(optionCount).children("span").text().replace(/[^\d]+/g, '')) //현재까지의  총 상품 금액
        }

        $("li#liTotalPrice > span#totalPrice").text(totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    }
});

//직접 수량 입력 시
$(document).on("blur", "input.goodsCount", function() {
    var price = parseInt($("span#price").text().replace(/[^\d]+/g, ''));
    var optionTotalPrice = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var count = parseInt($(this).val());
    var selectDiv = $("div." + $(this).parent().attr("class") + " > span");
    var optionCount = 0;
    var totalPrice = 0;

    optionTotalPrice = (price * count).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    if (count > 100) {
        alert("최대 주문수량은 100개 입니다.");
        $(this).val(100)
        return;
    } else if (count < 1) {
        alert("최소 주문수량은 1개 입니다.");
        $(this).val(1)
        return;
    } else {
        $(this).val(count);
        selectDiv.text(optionTotalPrice + "원");

        //직접 수량 입력 시 총 상품 금액 변경
        for (optionCount; optionCount < optionIndex; optionCount++) {
            totalPrice += parseInt($("li#count > div").eq(optionCount).children("span").text().replace(/[^\d]+/g, '')) //현재까지의  총 상품 금액
        }

        $("li#liTotalPrice > span#totalPrice").text(totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    }
});

//선택한 옵션 제거
$(document).on("click", "i.optionClose", function() {
    var removeOptionCount = 0;
    var optionCount = 0;
    var totalPrice = 0;

    $(this).parent().remove();
    optionIndex--;

    //옵션 제거 시 클래스명 순차적으로 재정의
    for (removeOptionCount; removeOptionCount <= optionIndex; removeOptionCount++) {
        $("li#count > div").eq(removeOptionCount).attr("class", "option_" + removeOptionCount);
    }

    //옵션 제거 시 총 상품 금액 변경
    for (optionCount; optionCount < optionIndex; optionCount++) {
        totalPrice += parseInt($("li#count > div").eq(optionCount).children("span").text().replace(/[^\d]+/g, '')) //현재까지의  총 상품 금액
    }

    $("li#liTotalPrice > span#totalPrice").text(totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
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