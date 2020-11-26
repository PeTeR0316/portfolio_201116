<?php
include 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/login.css">
    <title>시크헤라</title>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <!-- 맨 상단 메뉴 영역 -->
            <div id="topBar">
                <ul id="recruitment">
                    <li>
                        <a href="index.html">
                            <img src="images/wrap/header/incruit.png" alt="채용공고"> 인재채용공고
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/wrap/header/coIcon.png" alt="협찬문의"> 협찬문의
                        </a>
                    </li>
                </ul>

                <ul id="userMenu">
                    <li><a href="join.php">회원가입</a></li>
                    <li><a href="#">로그인</a></li>
                    <li><a href="#">장바구니</a></li>
                    <li><a href="#">마이페이지</a></li>
                    <li><a href="#">고객센터</a></li>
                </ul>
            </div>

            <!-- 상단 로고 영역 -->
            <div class="logo">
                <a href="index.html">
                    <img src="images/wrap/header/logo.png" alt="logo">
                </a>
            </div>
        </header>

        <!-- NAV 메인메뉴 영역 -->
        <nav id="nav">
            <div id="menuFrame">
                <ul id="mainMenu">
                    <li>
                        <i class="fas fa-bars" id="subMenuBtn"></i>
                    </li>
                    <li id="navLogo">
                        <a href="index.html">
                            <img src="images/wrap/nav/chichera_logo.gif" alt="chichera_logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">MADE</a>
                    </li>
                    <li>
                        <a href="#">NEW5%</a>
                    </li>
                    <li>
                        <a href="#">BEST100</a>
                    </li>
                    <li>
                        <a href="#">핸드메이드</a>
                    </li>
                    <li>
                        <a href="#">티셔츠</a>
                    </li>
                    <li>
                        <a href="#">팬츠</a>
                    </li>
                    <li>
                        <a href="#">블라우스</a>
                    </li>
                    <li>
                        <a href="#">아우터</a>
                    </li>
                    <li>
                        <a href="#">니트</a>
                    </li>
                    <li>
                        <a href="#">원피스</a>
                    </li>
                    <li>
                        <a href="#">스커트</a>
                    </li>
                    <li>
                        <a href="#">슈즈</a>
                    </li>
                    <li>
                        <a href="#">패션잡화</a>
                    </li>
                    <li>
                        <a href="#">77사이즈</a>
                    </li>
                    <li>
                        <a href="#">당일배송</a>
                    </li>
                    <li>
                        <a href="#">SALE</a>
                    </li>
                    <li>
                        <div>
                            <input type="text" name="keyWord" id="keyWord">
                            <i class="fas fa-search"></i>
                        </div>
                    </li>
                </ul>

                <div id="trendKeyWord">
                    <div id="keyWord">
                        <h2>인기 검색어</h2>
                        <hr>
                        <div>
                            <ul>
                                <li>1<a href="#">핸드메이드코트</a></li>
                                <li>2<a href="#">가디건</a></li>
                                <li>3<a href="#">맨투맨</a></li>
                                <li>4<a href="#">니트</a></li>
                                <li>5<a href="#">원피스</a></li>
                            </ul>

                            <ul>
                                <li>6<a href="#">세트</a></li>
                                <li>7<a href="#">데님</a></li>
                                <li>8<a href="#">레오파드</a></li>
                                <li>9<a href="#">후드</a></li>
                                <li>10<a href="#">슬랙스</a></li>
                            </ul>

                            <ul>
                                <li>11<a href="#">블라우스</a></li>
                                <li>12<a href="#">스커트</a></li>
                                <li>13<a href="#">조끼</a></li>
                                <li>14<a href="#">셔츠</a></li>
                                <li>15<a href="#">밴딩</a></li>
                            </ul>

                            <ul>
                                <li>16<a href="#">자켓</a></li>
                                <li>17<a href="#">점프수트</a></li>
                                <li>18<a href="#">양말</a></li>
                                <li>19<a href="#">체크</a></li>
                                <li>20<a href="#">폴라</a></li>
                            </ul>

                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="tagImg">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="images/wrap/nav/tagImg1.jpg" alt="tagImg1">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/wrap/nav/tagImg2.jpg" alt="tagImg2">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>

        <!-- MAIN 영역 -->
        <main id="main">
            <div id="loginFrame">
                <div id="userLogin">
                    <h2>로그인</h2>
                    <form id="loginForm">
                        <input type="text" name="userId" id="userId" placeholder="아이디">
                        <br>
                        <input type="password" name="userPW" id="userPW" placeholder="비밀번호">
                    </form>
                    <button type="button" id="loginBtn">로그인</button>
                    <br>
                    <div>
                        <input type="checkbox" name="storageID" id="storageID">
                        <span>아이디저장</span>
                        <input type="checkbox" name="security" id="security" checked>
                        <span>보안접속</span>
                        <a href="#">아이디/비번찾기</a>
                    </div>
                </div>

                <!-- <div id="notUserLogin">
                    <h2>비회원 주문조회</h2>
                    <form id="loginForm">
                        <input type="text">
                        <input type="password">
                    </form>
                </div> -->
            </div>

            <div id="easyLogin">
                <div>
                    <h2>간편로그인</h2>
                    <h5>sns도 간편하게 로그인하세요</h5>
                </div>
                <a href="#">
                    <img src="images/login/facebookLogin.png" alt="facebook">
                </a>
                <a href="#">
                    <img src="images/login/naverLogin.png" alt="naver">
                </a>
                <a href="#">
                    <img src="images/login/kakaoLogin.png" alt="kakao">
                </a>
            </div>

            <div id="joinText">
                <h2>신규가입회원혜택</h2>
                <hr>
                <p><span class="textBoldRed">10,000</span>원 + <span class="textBoldRed">10%</span></p>
                <a href="join.php">회원가입</a>
            </div>
        </main>

        <footer id="footer">

            <div id="info">
                <ul>
                    <li>
                        <span class="infoUlName">INFO</span>
                    </li>
                    <li>
                        <a href="#">사이트맵</a>
                        <a href="#">회사소개</a>
                    </li>
                    <li>
                        <a href="#">이용약관</a>
                        <a href="#">입사지원</a>
                    </li>
                    <li>
                        <a href="#">개인정보처리방침</a>
                        <a href="#">WARNING</a>
                    </li>
                    <li>
                        <a href="#">대표메일(chichera4@gmail.com)</a>
                    </li>
                    <li>
                        <a href="#">제휴문의(skinoboy3@naver.com)</a>
                    </li>
                    <li>
                        <a href="#">협찬문의</a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <span class="infoUlName">CS CENTER</span>
                    </li>
                    <li>
                        <span id="csNumber">1599 - 0719</span>
                    </li>
                    <li>평일 10:00~17:00</li>
                    <li>점심 13:00~14:00</li>
                    <li>주말/공휴일 휴무</li>
                </ul>

                <ul>
                    <li>
                        <span class="infoUlName">BANK INFO</span>
                    </li>
                    <li>우리 1005-303-198181</li>
                    <li>국민 463501-01-263510</li>
                    <li>농협 301-0210-9759-11</li>
                    <li>신한 100-032-164812</li>
                    <li>예금주:(주)시크해라</li>
                </ul>

                <ul>
                    <li>
                        <span class="infoUlName">BENEFIT</span>
                    </li>
                    <li>쇼핑의 지혜(쿠폰북)</li>
                    <li>
                        <ul>
                            <li>
                                <span class="infoUlName">SNS</span>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-square fa-4x"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram-square fa-4x"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter-square fa-4x"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="companyInfo">
                <div id="companyInfoText">
                    <p>COMPANY INFO</p>
                    <p>(주)시크헤라 대표자: 김종진 | 서울특별시 용산구 새창로 101 충영빌딩 3층 (지번)용문동 28-5</p>
                    <p>반품주소: CJ대한통운 이용 - 서울시 금천구 가산동 459-8 구로지점 관악1직영 | 타 택배이용 - 서울시 금천구 벚꽃로 24길 24 세일로빌딩 A동 3층</p>
                    <p>사업자번호:106-86-86649 <span id="bizInfo">사업자정보확인</span> 통신판매업:제2012-서울용산-00659 | 개인정보책임관리자:김종진</p>
                </div>
            </div>
        </footer>

    </div>

    <!-- modalLayerPopup 영역 -->
    <!-- <div id="modalLayerPopup">
        <a href="#">
            <img src="images/modalLayerPopup/img_modal.JPG" alt="">
        </a>

        <br>

        <input type="checkbox" id="dayClose">
        <span>다시 열지 않음</span>
        <i class="fas fa-times" id="modalPopupClose" onclick="fnPopupClose()"></i>
    </div> -->

    <!-- subMenu 영역 -->
    <div id="subMenu">
        <div id="subMenuWrap">
            <div id="subMenuTop">
                <i class="fas fa-times fa-3x" id="subMenuClose"></i>
                <a href="#"><img src="images/subMenu/subMenuNew.png" alt="newMenu"></a>
                <a href="#"><img src="images/subMenu/subMenuBest.png" alt="bestMenu"></a>
                <a href="#"><img src="images/subMenu/subMenuMade.png" alt="madeMenu"></a>
            </div>
            <div id="category">
                <div class="categorySection">
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">티셔츠</span>
                        </li>
                        <li>
                            <a href="#">후드/맨투맨</a>
                        </li>
                        <li>
                            <a href="#">무지/기본티</a>
                        </li>
                        <li>
                            <a href="#">라운드넥</a>
                        </li>
                        <li>
                            <a href="#">브이넥</a>
                        </li>
                        <li>
                            <a href="#">하이넥</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">팬츠</span>
                        </li>
                        <li>
                            <a href="#">슬랙스</a>
                        </li>
                        <li>
                            <a href="#">밴딩</a>
                        </li>
                        <li>
                            <a href="#">데님</a>
                        </li>
                        <li>
                            <a href="#">반바지</a>
                        </li>
                        <li>
                            <a href="#">레깅스</a>
                        </li>
                    </ul>
                </div>

                <div class="categorySection">
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">아우터</span>
                        </li>
                        <li>
                            <a href="#">핸드메이드</a>
                        </li>
                        <li>
                            <a href="#">자켓</a>
                        </li>
                        <li>
                            <a href="#">가디건</a>
                        </li>
                        <li>
                            <a href="#">코트</a>
                        </li>
                        <li>
                            <a href="#">패딩/점퍼</a>
                        </li>
                        <li>
                            <a href="#">조끼</a>
                        </li>
                        <li>
                            <a href="#">무스탕</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">니트</span>
                        </li>
                        <li>
                            <a href="#">니트티</a>
                        </li>
                        <li>
                            <a href="#">가디건</a>
                        </li>
                        <li>
                            <a href="#">라운드넥</a>
                        </li>
                        <li>
                            <a href="#">브이넥</a>
                        </li>
                        <li>
                            <a href="#">목폴라/하이넥</a>
                        </li>
                    </ul>
                </div>

                <div class="categorySection">
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">원피스</span>
                        </li>
                        <li>
                            <a href="#">롱원피스</a>
                        </li>
                        <li>
                            <a href="#">미니/미니원피스</a>
                        </li>
                        <li>
                            <a href="#">패턴원피스</a>
                        </li>
                        <li>
                            <a href="#">니트원피스</a>
                        </li>
                        <li>
                            <a href="#">하객원피스</a>
                        </li>
                        <li>
                            <a href="#">셔츠원피스</a>
                        </li>
                        <li>
                            <a href="#">점프수트</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">블라우스/셔츠</span>
                        </li>
                        <li>
                            <a href="#">셔츠</a>
                        </li>
                        <li>
                            <a href="#">블라우스</a>
                        </li>
                        <li>
                            <a href="#">무지</a>
                        </li>
                        <li>
                            <a href="#">패턴</a>
                        </li>
                        <li>
                            <a href="#">레이스/펀칭</a>
                        </li>
                    </ul>
                </div>

                <div class="categorySection">
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">스커트</span>
                        </li>
                        <li>
                            <a href="#">롱스커트</a>
                        </li>
                        <li>
                            <a href="#">미니/미디</a>
                        </li>
                        <li>
                            <a href="#">A라인/플레어</a>
                        </li>
                        <li>
                            <a href="#">H라인</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">슈즈</span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">패션잡화</span>
                        </li>
                    </ul>
                </div>

                <div class="categorySection">
                    <ul>
                        <li>
                            <span class="subMenuUlTitle">기획전</span>
                        <li>
                            <a href="#">메이드시그니처라인 <i></i> </a>
                        </li>
                        <li>
                            <a href="#">싸게잘샀다</a>
                        </li>
                        <li>
                            <a href="#">365베이직</a>
                        </li>
                        <li>
                            <a href="#">77사이즈</a>
                        </li>
                        <li>
                            <a href="#">SALE</a>
                        </li>
                        <li>
                            <a href="#">S라인프로젝트</a>
                        </li>
                        <li>
                            <a href="#">포레스트TEA</a>
                        </li>
                        <li>
                            <a href="#">디플린</a>
                        </li>
                        <li>
                            <br>
                            <br>
                            <br>
                            <a href="#">배송지연</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="board">
                <ul id="customerCenter">
                    <li>
                        <span class="subMenuBoardUlTitle">고객센터</span>
                        <span class="subMenuBoardUlTitle">1599-0719</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/subMenu/kakao.png" alt="카카오톡 실시간 문의">
                        </a>
                    </li>
                    <li>
                        <a href="#">공지사항</a>
                        <a href="#">문의하기</a>
                    </li>
                    <li>
                        <a href="#">자주하는 질문</a>
                        <a href="#">VIP ONLY</a>
                    </li>
                    <li>
                        <a href="#">미확인 입금자</a>
                        <a href="#">인재채용공고</a>
                    </li>
                    <li>
                        <a href="#">해외배송</a>
                        <a href="#">WARNING</a>
                    </li>
                    <li>
                        <a href="#">제휴문의</a>
                        <a href="#">협찬문의</a>
                    </li>
                    <li>
                        <a href="#">(skinoboy3@naver.com)</a>
                    </li>
                    <a href></a>
                    </li>
                </ul>

                <ul id="subMenuMyPage">
                    <li>
                        <span class="subMenuBoardUlTitle">마이페이지</span>
                    </li>
                    <li>
                        <a href="#">로그인</a>
                        <a href="#">마일리지</a>
                    </li>
                    <li>
                        <a href="join.php">회원가입</a>
                        <a href="#">내 쿠폰 조회</a>
                    </li>
                    <li>
                        <a href="#">장바구니</a>
                        <a href="#">내 게시글 보기</a>
                    </li>
                    <li>
                        <a href="#">주문내역</a>
                        <a href="#">최근 본 상품</a>
                    </li>
                    <li>
                        <a href="#">비회원주문조회</a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <span class="subMenuBoardUlTitle">시크헤라</span>
                    </li>
                    <li>
                        <a href="#">IDENTITY</a>
                    </li>
                    <li>
                        <a href="#">VISION</a>
                    </li>
                    <li>
                        <a href="#">FINAL GOAL</a>
                    </li>
                </ul>

                <ul id="subMenuBanner">
                    <li>
                        <h6>신규회원혜택</h6>
                        <a href="#">
                            <div class="subMenuBannerImg">
                                <img src="images/subMenu/coupon.png" alt="coupon">
                            </div>

                            <div class="subMenuBannerText">
                                <p>
                                    <span>10,000</span>원 + <span>10%</span> 할인
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="subMenuBannerImg">
                                <img src="images/subMenu/kakaoPlus.png" alt="kakaoPlus">
                            </div>

                            <div class="subMenuBannerText">
                                <p>
                                    <span>5,000</span>원
                                    <br> 카카오톡 플친 맺고 혜택받자
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="subMenuBannerImg">
                                <img src="images/subMenu/chicApp.png" alt="chicApp">
                            </div>
                            <div class="subMenuBannerText">
                                <p>
                                    <span>10% </span> 어플전용할인
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>

                <ul id="subMenuEvent">
                    <li>
                        <a href="#">
                            <p>REVIEW</p>
                            <span>리뷰쓰고 마일리지 받으세요</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>EVENT</p>
                            <span>다양한 이벤트보러가기</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>CELEB'S PICK</p>
                            <span>셀럽이 사랑한 시크헤라 아이템</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>CHIC TV</p>
                            <span>막장드라마 꿀잼영상</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="JS/jQuery/jquery-3.5.1.min.js"></script>
    <script src="JS/login.js"></script>
</body>

</html>