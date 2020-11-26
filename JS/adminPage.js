//서브메뉴 슬라이드
$("ul#mainMenu > li").click(function() {
    $(this).children("ul.subMenu").stop().slideToggle()

    //기존에 slideDown된 메뉴를 slideUp
    $(this).siblings().children("ul.subMenu").stop().slideUp();
});


//메인메뉴 슬라이드
var mainMenuState = "visible"

$("span#mainMenuAnimate").click(function() {
    if (mainMenuState === "visible") {
        $("nav#nav").animate({
            "margin-left": -200
        }, 800);

        $("div#curve_chart").css({
            "left": "50%"
        });

        mainMenuState = "none";
    } else {
        $("nav#nav").animate({
            "margin-left": 0
        }, 800);

        $("div#curve_chart").css({
            "left": "50%"
        });

        mainMenuState = "visible"
    }
});

//매출 통계 영역 버튼
$("div#salesStats > div > button").click(function() {
    var btnId = $(this).attr("id");

    $(this).css({
        "background-color": "#00c73c",
        "border": "1px solid #00ae34",
        "color": "#ffffff"
    });

    $(this).siblings(":not(:last-child)").css({
        "background-color": "#ffffff",
        "border": "1px solid #dbdde2",
        "color": "#000000"
    });

    if (btnId === "countChart") {
        //차트 영역
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', '결제건수'],
                ['10.01', 1000],
                ['10.02', 1170],
                ['10.03', 660],
                ['10.04', 1030],
                ['10.05', 564],
                ['10.06', 654],
                ['10.07', 540],
                ['10.08', 480],
                ['10.09', 430],
                ['10.10', 330],
                ['10.11', 289],
                ['10.12', 232],
                ['10.13', 310],
                ['10.14', 323],
                ['10.15', 298],
                ['10.16', 321],
                ['10.17', 548],
                ['10.18', 589],
                ['10.19', 665],
                ['10.20', 680],
                ['10.21', 655],
                ['10.22', 602],
                ['10.23', 580],
                ['10.24', 589],
                ['10.25', 699],
                ['10.26', 703],
                ['10.27', 720],
                ['10.28', 820],
                ['10.29', 755],
                ['10.30', 703],
                ['10.31', 740]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    } else if (btnId === "personChart") {
        //차트 영역
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', '결제자수'],
                ['10.01', 1000],
                ['10.02', 1170],
                ['10.03', 660],
                ['10.04', 1030],
                ['10.05', 1564],
                ['10.06', 654],
                ['10.07', 1030],
                ['10.08', 1030],
                ['10.09', 1030],
                ['10.10', 1030],
                ['10.11', 1030],
                ['10.12', 165],
                ['10.13', 891],
                ['10.14', 890],
                ['10.15', 184],
                ['10.16', 489],
                ['10.17', 516],
                ['10.18', 580],
                ['10.19', 1030],
                ['10.20', 1030],
                ['10.21', 1030],
                ['10.22', 489],
                ['10.23', 165],
                ['10.24', 894],
                ['10.25', 987],
                ['10.26', 159],
                ['10.27', 356],
                ['10.28', 189],
                ['10.29', 789],
                ['10.30', 842],
                ['10.31', 185]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    } else {
        //차트 영역
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', '결제금액'],
                ['10.01', 1000],
                ['10.02', 1170],
                ['10.03', 660],
                ['10.04', 1030],
                ['10.05', 1564],
                ['10.06', 654],
                ['10.07', 1030],
                ['10.08', 123],
                ['10.09', 158],
                ['10.10', 485],
                ['10.11', 654],
                ['10.12', 1030],
                ['10.13', 1030],
                ['10.14', 1030],
                ['10.15', 1030],
                ['10.16', 1030],
                ['10.17', 1030],
                ['10.18', 1090],
                ['10.19', 650],
                ['10.20', 930],
                ['10.21', 416],
                ['10.22', 148],
                ['10.23', 897],
                ['10.24', 321],
                ['10.25', 198],
                ['10.26', 1030],
                ['10.27', 1030],
                ['10.28', 1030],
                ['10.29', 1030],
                ['10.30', 1030],
                ['10.31', 1030]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    }
});

$("button#countChart").trigger("click"); // 결제건수를 기본차트로 사용

//미답변 문의 영역 버튼
$("div#qna > div > ul > li").click(function() {
    $(this).css({
        "border-bottom": "none"
    });

    $(this).children("button").css({
        "background-color": "#ffffff",
        "color": "#00c73c"
    });

    $(this).siblings().css({
        "border-bottom": "1px solid #dbdde2"
    });

    $(this).siblings().children("button").css({
        "background-color": "#f8f9fd",
        "color": "#000000"
    });
});