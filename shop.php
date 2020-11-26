<?php
include 'dbConnection.php';
include 'hitUpdate.php';
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/shop.css">
    <title>시크헤라</title>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <!-- 맨 상단 메뉴 영역 -->
            <div id="topBar">
                <ul id="recruitment">
                    <li>
                        <a href="#">
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
                    <li>
                        <a href="join.php" id="joinText">
                            <span>회원가입</span>
                            <span>10,000쿠폰+10%할인</span>
                        </a>
                    </li>
                    <li><a href="login.php" id="login">로그인</a></li>
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

        <main id="main">
            <div id="shop">
                <div id="preImg">
                    <div id="goodsImg">
                        <img src="images/wrap/main/goods/top1.gif" alt="goodsName" id="goodsName">
                    </div>
                    <div id="photoReview">
                        <p>PHOTO REVIEW</p>
                        <ul>
                            <li>REVIEW1</li>
                            <li>REVIEW2</li>
                            <li>REVIEW3</li>
                            <li>REVIEW4</li>
                            <li>REVIEW5</li>
                        </ul>
                    </div>
                </div>

                <div id="purchase">
                    <ul>
                        <li>
                            <h2>모두의맨투맨</h2>
                        </li>
                        <li>
                            <span>판매가</span>
                            <p>
                                <span id="price">29,900</span>원
                            </p>
                        </li>
                        <li>
                            <span>마일리지</span>
                            <span>200</span>
                        </li>
                        <li>
                            <span>컬러</span>
                            <select name="color" id="color">
                                <option value="choice">옵션 선택</option>
                                <!-- <option value="mint">mint</option>
                                <option value="black">black</option> -->
                            </select>
                        </li>
                        <li>
                            <span>사이즈</span>
                            <select name="size" id="size">
                                <option value="choice">옵션 선택</option>
                            </select>
                        </li>
                        <li id="count">
                        </li>
                        <li id="liTotalPrice">
                            <span>총 상품 금액</span>
                            <span id="totalPrice">0</span> 원
                        </li>
                        <li>
                            <button type="button">장바구니</button>
                            <button type="button">관심상품</button>
                        </li>
                        <li>
                            <button type="button" id="purchaseBtn">구매하기</button>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/shopDetail/common/cuopon2.jpg" alt="cupoon">
                            </a>
                        </li>
                        <li>
                            <div id="share">
                                공유하기
                            </div>
                            <div id="sns">
                                <i class="fab fa-facebook-square fa-4x"></i>
                                <i class="fab fa-twitter-square fa-4x"></i>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="cuopon">
                    <img src="images/shopDetail/common/cuopon1.jpg" alt="cuoponInfo">
                </div>
            </div>

            <div class="moveBtn">
                <ul>
                    <li><a href="#detailImg">상세페이지</a></li>
                    <li><a href="#sizeGuide">사이즈</a></li>
                    <li><a href="#review">리뷰(<span id="reviewCount">0</span>)</a></li>
                    <li><a href="#qna">문의(<span id="qnaCount">0</span>)</a></li>
                    <li><a href="#refund">교환/반품/배송</a></li>
                </ul>
            </div>

            <div id="detailImg">
                <p id="modelName">MODEL_HYOIN/ STYLIST_NU,SB/ PHOTOGRAPHER_JY/ EDITOR_YJs</p>
                <img src="images/shopDetail/folderName/mainImg1.jpg" alt="mainImg1" id="mainImg1" onerror="this.style.display='none'">
                <!-- 이미지가 없으면 대체이미지 표시 X -->

                <div class="baggrounImg">
                </div>
                <img src="images/shopDetail/folderName/mainImg2.jpg" alt="mainImg2" id="mainImg2" onerror="this.style.display='none'">
                <img src="images/shopDetail/folderName/mainImg3.jpg" alt="mainImg3" id="mainImg3" onerror="this.style.display='none'">
                <img src="images/shopDetail/folderName/mainImg4.jpg" alt="mainImg4" id="mainImg4" onerror="this.style.display='none'">
                <img src="images/shopDetail/folderName/mainImg5.jpg" alt="mainImg5" id="mainImg5" onerror="this.style.display='none'">

                <!-- <p>color <span class="colorName">Mint</span></p>
                <p>모델착용컬러-민트</p> -->
                <img src="images/shopDetail/folderName/mainImg6.jpg" alt="mainImg6" id="mainImg6" onerror="this.style.display='none'">
                <img src="images/shopDetail/folderName/mainImg7.jpg" alt="mainImg7" id="mainImg7" onerror="this.style.display='none'">
                <img src="images/shopDetail/folderName/mainImg8.jpg" alt="mainImg8" id="mainImg8" onerror="this.style.display='none'">

                <!-- <p>color <span class="colorName">Brown</span></p>
                <p>모델착용컬러-브라운</p> -->
                <img src="images/shopDetail/folderName/mainImg9.jpg" alt="mainImg9" id="mainImg9" onerror="this.style.display='none'">
                <img src="images/shopDetail/folderName/mainImg10.jpg" alt="mainImg10" id="mainImg10" onerror="this.style.display='none'">
                <img src="images/shopDetail/folderName/mainImg11.jpg" alt="mainImg11" id="mainImg11" onerror="this.style.display='none'">

                <!-- <p id="noticeImg">
                    <img src="images/shopDetail/folderName/notice.gif" alt="noticeImg">
                </p> -->

                <div id="detailInfo">

                    <img src="images/shopDetail/common/notice.gif" alt="noticeImg">
                    <br>
                    <p class="detailInfoText">DETAIL INFO</p>
                    <br>
                    <span>
                        실제 제품색상은 아래의 제품컷을 참고해주세요!
                        <br>
                        모니터의 해상도에 따라 다를 수 있습니다.
                    </span>
                    <br>
                    <img src="images/shopDetail/folderName/mainImg12.jpg" alt="mainImg12" id="mainImg12" onerror="this.style.display='none'">
                    <br>
                    <img src="images/shopDetail/folderName/mainImg13.jpg" alt="mainImg13" id="mainImg13" onerror="this.style.display='none'">
                    <br>
                    <img src="images/shopDetail/folderName/mainImg14.jpg" alt="mainImg14" id="mainImg14" onerror="this.style.display='none'">
                    <br>
                    <p class="detailInfoText">SIZE INFO</p>
                    <br>
                    <img src="images/shopDetail/common/sizeInfo.jpg" alt="sizeInfo" id="sizeGuide">

                    <table id="sizeTable">
                        <caption>
                            사이즈<span>(단위:cm)</span>
                        </caption>
                        <tr>
                            <td>사이즈</td>
                            <td>S</td>
                            <td>M</td>
                            <td>L</td>
                        </tr>
                        <tr>
                            <td>①어깨길이</td>
                            <td>44</td>
                            <td>46</td>
                            <td>48</td>
                        </tr>
                        <tr>
                            <td>②가슴둘레</td>
                            <td>114</td>
                            <td>118</td>
                            <td>122</td>
                        </tr>
                        <tr>
                            <td>③밑단둘레</td>
                            <td>94</td>
                            <td>98</td>
                            <td>102</td>
                        </tr>
                        <tr>
                            <td>④소매길이</td>
                            <td>60</td>
                            <td>61</td>
                            <td>62</td>
                        </tr>
                        <tr>
                            <td>⑤소매통</td>
                            <td>44</td>
                            <td>48</td>
                            <td>52</td>
                        </tr>
                        <tr>
                            <td>⑥암홀</td>
                            <td>26</td>
                            <td>30</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td>⑦총길이</td>
                            <td>65</td>
                            <td>66</td>
                            <td>67</td>
                        </tr>
                    </table>

                    <div class="detailText">
                        <p>코디상품</p>
                        <p class="textGray13px">
                            *민트, 블랙, 브라운, 퍼플, 오트밀 컬러에 착용한 가방, 신발, 악세사리는 코디용입니다
                        </p>
                        <p>사이즈:<span class="textGray13px">S(55),M(66,L(77))</span></p>
                        <p>모델피팅사이즈:<span class="textGray13px">S(55)</span> </p>
                        <p>소재<span class="textGray13px">코튼100</span></p>
                        <p>컬러:<span class="textGray13px">Mint,Brown</span></p>
                        <p>세탁방법:<span class="textGray13px">찬물손세탁 및 드라이크리닝</span></p>
                        <p>무게:<span class="textGray13px">406g</span></p>
                        <br>
                        <br>

                        <p class="textGray13px">*상품에 실제 측정사이즈 입니다.</p>
                        <p class="textGray13px">*컬러별로 원단의 수축률이 달라 사이즈의 오차가 있을 수 있습니다.</p>
                        <p class="textGray13px">*사이즈는 재는 방법에 따라 +- 1~2cm 정도 오차가 있을 수 있으며, 체형에 따라 핏이 다를 수 있습니다.</p>
                        <p class="textGray13px">*니트소재의 경우 보관상태에 따라 안내드린 실측 사이즈와 약 3~5cm가량(기장은 ~7cm)차이가 날 수있습니다.</p>
                        <p class="textGray13px">*첫 세탁 및 착용전 '드라이크리닝'을 권장드립니다.</p>
                        <p class="textGray13px">*셔츠나 블라우스 등 단추 선을 맞추기위한 초크자국이 남아있을 수 있으며, 물로 가볍게 지울 수 있습니다. 이부분은 불량 사유가 아님을 알려드립니다.</p>
                        <p class="textGray13px">*화이트 계열을 제외한 모든 의류는 염색작업이 들어가는 특성상 물빠짐현상이 있을 수 있습니다.</p>
                        <p class="textGray13px">*염색 작업을 거치는 의류의 경우 밝은컬러와 마찰로인해 이염이 있을 수 있으니 참고해주세요.</p>
                    </div>

                    <span id="sizeTip">사이즈 측정 GUIDE</span>
                    <span id="sizeTip">소재별 세탁시 유의사항 TIP</span>

                    <table id="infoTable">
                        <tr>
                            <td>비침</td>
                            <td>
                                <div class="box"></div>
                                있음
                            </td>
                            <td>
                                <div class="box"></div>
                                약간
                            </td>
                            <td>
                                <div class="box select"></div>
                                없음
                            </td>
                        </tr>
                        <tr>
                            <td>신축성</td>
                            <td>
                                <div class="box"></div>
                                좋음
                            </td>
                            <td>
                                <div class="box select"></div>
                                약간
                            </td>
                            <td>
                                <div class="box"></div>
                                없음
                            </td>
                        </tr>
                        <tr>
                            <td>안감</td>
                            <td>
                                <div class="box"></div>
                                있음
                            </td>
                            <td>
                                <div class="box select"></div>
                                없음
                            </td>
                            <td>
                                <div class="box"></div>
                                기모
                            </td>
                        </tr>
                        <tr>
                            <td>피팅감</td>
                            <td>
                                <div class="box"></div>
                                타이트핏
                            </td>
                            <td>
                                <div class="box select"></div>
                                베이직핏
                            </td>
                            <td>
                                <div class="box"></div>
                                루즈핏
                            </td>
                        </tr>
                        <tr>
                            <td>두께감</td>
                            <td>
                                <div class="box"></div>
                                도톰
                            </td>
                            <td>
                                <div class="box select"></div>
                                적당
                            </td>
                            <td>
                                <div class="box"></div>
                                얇음
                            </td>
                        </tr>
                        <tr>
                            <td>촉감</td>
                            <td>
                                <div class="box"></div>
                                부드러움
                            </td>
                            <td>
                                <div class="box select"></div>
                                보통
                            </td>
                            <td>
                                <div class="box"></div>
                                까슬함
                            </td>
                        </tr>
                        <tr>
                            <td>광택</td>
                            <td>
                                <div class="box"></div>
                                많음
                            </td>
                            <td>
                                <div class="box"></div>
                                약간
                            </td>
                            <td>
                                <div class="box select"></div>
                                없음
                            </td>
                        </tr>
                        <tr>
                            <td>무게감</td>
                            <td>
                                <div class="box"></div>
                                무거움
                            </td>
                            <td>
                                <div class="box select"></div>
                                적당
                            </td>
                            <td>
                                <div class="box"></div>
                                가벼움
                            </td>
                        </tr>
                    </table>

                    <div class="detailText">
                        <p>제조사:<span class="textGray13px">시크헤라</span></p>
                        <p>제조국:<span class="textGray13px">대한민국</span> </p>
                        <p>제조연월:<span class="textGray13px">배송일로부터 3개월 이전 신상품</span></p>
                        <p>품질보증기준:<span class="textGray13px">본 제품에 이상이 있을경우 공정거래위원회 고시에 의거보상</span></p>
                        <p>A/S 책임자와 전화번호:<span class="textGray13px">시크헤라 고객센터 1599-0719</span></p>
                        <p>취급시 주의사항:
                            <span class="textGray13px">
                                컴퓨터와 모니터 사양과 촬영시 주변광원으로 실제 제품컬러와 다르게 보일 수 있습니다.
                                <br>
                                제품에 과도한 충격 또는 힘을 가하는 경우 제품이 손상 될 가능성이 있으니 주의부탁드립니다.
                            </span>
                        </p>
                    </div>
                </div>

                <p class="detailInfoText">WASHING TIP</p>
                <div id="washingTip">
                    <img src="images/shopDetail/common/washingTip1.png" alt="washingTip1">
                    <img src="images/shopDetail/common/washingTip2.png" alt="washingTip2">
                    <img src="images/shopDetail/common/washingTip3.png" alt="washingTip3">
                    <br>
                    <br>
                    <img src="images/shopDetail/common/contrast.jpg" alt="contrast">
                </div>


                <p class="detailInfoText">MODEL INFO</p>
                <div id="model">
                    <img src="images/shopDetail/model/model.jpg" alt="model">
                </div>
            </div>

            <div class="moveBtn">
                <ul>
                    <li><a href="#detailImg">상세페이지</a></li>
                    <li><a href="#sizeGuide">사이즈</a></li>
                    <li><a href="#review">리뷰(<span id="reviewCount">0</span>)</a></li>
                    <li><a href="#qna">문의(<span id="qnaCount">0</span>)</a></li>
                    <li><a href="#refund">교환/반품/배송</a></li>
                </ul>
            </div>

            <div id="review">
                <img src="images/shopDetail/topReviewImg.jpg" alt="topReviewImg">

            </div>

            <!-- 버튼으로 변경하기 -->
            <div class="moveBtn">
                <ul>
                    <li><a href="#detailImg">상세페이지</a></li>
                    <li><a href="#sizeGuide">사이즈</a></li>
                    <li><a href="#review">리뷰(<span id="reviewCount">0</span>)</a></li>
                    <li><a href="#qna">문의(<span id="qnaCount">0</span>)</a></li>
                    <li><a href="#refund">교환/반품/배송</a></li>
                </ul>
            </div>

            <div id="qna">
                <img src="images/shopDetail/QnA.jpg" alt="qna">

                <table id="qnaList">
                    <tr>
                        <td>번호</td>
                        <td>제목</td>
                        <td>작성자</td>
                        <td>작성일</td>
                        <td>조회</td>
                    </tr>

                    <?php
                    mysqli_query($db_con, "SET @CNT = 0");
                    mysqli_query($db_con, "UPDATE board SET board.no = @CNT:@CNT+1");
                    $result = mysqli_query($db_con, "SELECT * FROM board ORDER BY no ASC");

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td id='no'>" . $row["no"] . "</td>";
                        echo "<td id='title'>" . $row["qnaTitle"] . "</td>";
                        // echo "<td id='title' onClick=top.location.href='hitUpdate.php?no=$row[no]&hit=$row[hit]'>" . 'name' . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["writeDatetime"] . "</td>";
                        echo "<td>" . $row["hit"] . "</td>";
                        echo "</tr>";

                        echo "<tr id='contents'>";
                        echo "<td></td>";
                        echo "<td>" . $row["contents"] . "</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "</tr>";
                    }

                    ?>
                </table>

                <ul id="pageNumber">
                    <li>
                        <a href="#">1</a>
                    </li>
                </ul>
                <a href="qnaWrite.php" id="qnaWrite">글쓰기</a>
            </div>

            <!-- 버튼으로 변경하기 -->
            <div class="moveBtn">
                <ul>
                    <li><a href="#detailImg">상세페이지</a></li>
                    <li><a href="#sizeGuide">사이즈</a></li>
                    <li><a href="#review">리뷰(<span id="reviewCount">0</span>)</a></li>
                    <li><a href="#qna">문의(<span id="qnaCount">0</span>)</a></li>
                    <li><a href="#refund">교환/반품/배송</a></li>
                </ul>
            </div>

            <div id="refund">
                <div id="tabBtn">
                    <button type="button" id="text1Btn">교환/반품안내</button>
                    <button type="button" id="text2Btn">취소/환불안내</button>
                    <button type="button" id="text3Btn">배송안내</button>
                </div>

                <div id="refundText">
                    <div id="refundText1">
                        <p>교환/반품안내</p>
                        <ul>
                            <li>
                                단순 변심의 경우 상품 수령일로부터 7일 이내에 교환, 반품이 가능합니다
                            </li>
                            <li>
                                상품에 하자가 있는 경우에는 상품 수령일로부터 30일 이내 교환, 반품이 가능합니다
                            </li>
                            <li>
                                교환, 반품 시에는 CJ대한통운(1588-1255)를 이용해주셔야 원활하게 처리가 가능합니다
                            </li>
                            <li>
                                교환은 상품이 시크헤라 담당 부서에서 확인 후 교환 상품의 재준비가 진행되며, 맞교환은 분실 우려가 있어 진행되지 않습니다
                            </li>
                            <li>
                                분리 배송된 상품을 모두 수령하신 후 최종적으로 교환, 반품을 접수해주세요
                            </li>
                            <li>
                                택배비는 반품 상품을 제외한 실 결제금액이 5만원 이상일 경우 2,500원 / 교환 또는 5만원 미만일 경우 5,000원 입니다
                            </li>
                            <li>
                                전체 반품인 경우 택배비가 포함된 주문서는 결제금액이 전체 취소, 환불이 진행됨으로 초기 택배비와 회수 택배비 총 5,000원이 안내됩니다
                            </li>
                            <li>
                                불량&오배송일 경우 택배비는 시크헤라에서 부담합니다
                            </li>
                            <li>
                                택배비는 동봉 시 누락 위험이 있어 입금으로만 진행됩니다 국민은행 : 292501-01-279502 예금주명 : ㈜시크헤라
                            </li>
                            <li>
                                타 택배 이용 시 반품 주소지가 변경됩니다 (사이트 하단 주소 확인)
                            </li>
                            <li>
                                타 택배 이용 시 가산동 459-8 구로지점 관악1직영으로 반송되어 분실될 경우 도움드릴 수 없는 점 양해 바랍니다
                            </li>
                            <li>
                                타 택배 이용 시 선불로 보내주시고 시크헤라 고객센터로 꼭 말씀해주세요
                            </li>
                            <li>
                                변심 반품으로 인한 반품 시에는 사용하신 쿠폰은 반환되지 않습니다
                            </li>
                            <li>
                                부분 반품 시 사용하셨던 쿠폰의 금액 조건이 충족되지 않을 경우 할인 금액은 모두 차감되며 쿠폰은 반환되지 않습니다
                            </li>
                        </ul>
                        <br>

                        <p>교환, 반품 접수 방법</p>
                        <ul>
                            <li>
                                회원이실 경우 마이페이지에서 교환, 반품 탭으로 접수가 가능합니다
                            </li>
                            <li>
                                비회원이실 경우 고객센터 또는 게시판으로 접수가 가능합니다
                            </li>
                            <li>
                                교환, 반품 접수 확인 시 CJ대한통운택배 수거 신청은 시크헤라에서 접수해드립니다
                            </li>
                        </ul>
                    </div>
                    <div id="refundText2">
                        <p>취소/환불안내</p>
                        <ul>
                            <li>
                                배송 전 취소 신청은 회원이실 경우 마이페이지 내 취소 신청 탭 이용 / 비회원이실 경우 고객센터 또는 게시판을 이용해주세요
                            </li>
                            <li>
                                이미 출고된 경우에도 시스템 연동 소요 시간으로 인해 주문 상태가 배송 준비 중으로 보일 수 있으며, 이러한 경우 취소 신청은 거부되는 점 양해 부탁드립니다
                            </li>
                            <li>
                                출고된 건에 대해 취소를 원하는 경우에는 반품으로 처리되며 택배비는 구매자 부담입니다
                            </li>
                            <li>
                                배송 전 취소인경우 사용하신 마일리지, 쿠폰은 재 반환됩니다
                            </li>
                            <li>
                                카드 취소는 시크헤라에서 영업일 1~2일 내 처리되며 실제 카드사 취소 승인은 영업일 기준 2~3일 소요됩니다
                            </li>
                            <li>
                                카드 결제는 전자거래법상 카드 취소로 만 진행됩니다(회원은 예치금으로 환불 가능)
                            </li>
                            <li>
                                무통장 환불은 배송 전 취소 및 반품 회수 여부를 확인 후 영업일 1~2일내 입금됩니다
                            </li>
                            <li>
                                휴대폰결제는 부분 취소 또는 1달이 바뀐 경우 무통장 환불로 진행되오니 계좌 정보를 꼭 시크헤라로 전달해주세요
                            </li>
                            <li>
                                초기 무료배송으로 주문 후 부분 취소 시 수령 상품의 금액이 5만원 미만일경우 택배비 2,500원 부담됩니다
                            </li>
                            <li>
                                부분 취소 시 사용하셨던 쿠폰의 금액 조건이 충족되지 않을 경우 쿠폰적용 해지 및 쿠폰은 반환됩니다
                            </li>
                        </ul>
                    </div>
                    <div id="refundText3">
                        <p>배송안내</p>
                        <ul>
                            <li>
                                시크헤라는 CJ대한통운택배와 배송대행 계약이 체결되어있습니다
                            </li>
                            <li>
                                상품 구매액이 5만원 이상인 경우 무료배송으로 발송됩니다
                            </li>
                            <li>
                                상품 구매액이 5만원 미만인 경우 택배비 2,500원이 추가되며 전국 동일합니다
                            </li>
                            <li>
                                배송기간은 결제일 기준으로 영업일 2~7일 소요됩니다
                            </li>
                            <li>
                                당일배송표기상품은 오후 3시(네이버페이결제 또는 무통장입금은 오후2시30분)이 전 결제 완료 시 당일 출고됩니다
                            </li>
                            <li>
                                당일배송상품은 반드시 단독 주문해 주세요
                            </li>
                            <li>
                                당일배송상품은 일반배송상품과 함께 주문시 일반배송상품의 출고일자에 맞춰 배송됩니다
                            </li>
                            <li>
                                당일배송표기 상품은 재고 소진으로 당일배송이 어려울 수 있으며 개별 안내가 어렵습니다
                            </li>
                            <li>
                                패션잡화 또는 재고가 없는 경우 최대 약 2주의 제작 기간이 소요될 수 있습니다
                            </li>
                            <li>
                                재고 소진 시 부득이하게 예고없이 리오더가 진행될 수 있으며 기간은 영업일 5~14일 소요됩니다
                            </li>
                        </ul>
                    </div>
                </div>

                <img src="images/shopDetail/cuopon3.png" alt="cuopon3">
            </div>
        </main>

        <!-- FOOTER 영역 -->
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
                        <span id="privacy">개인정보처리방침</span>
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
                        <a href="join.html">회원가입</a>
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

    <!-- sideMenu 영역 -->
    <div id="sideMenu">
        <ul>
            <li>
                <a href="#">
                    <p>+5,000</p>
                    <img src="images/sideMenu/kakaoTalk.png" alt="카카오톡">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="images/sideMenu/naverTalk.png" alt="네이버메신져">
                </a>
            </li>
            <li>
                <img src="images/sideMenu/upBtn.png" alt="상단버튼" id="topBtn">
            </li>
        </ul>
    </div>

    <button type="button" id="sidePurchaseBtn">바로구매</button>


    <!-- 옵션 추가 시 사용되는 엘리먼트 -->
    <div style="display: none;">
        <ul>
            <li id='countElement'>
                <div>
                    <p class="productCode"></p>
                    <br>
                    <button type="button" class="down">
                        -
                    </button>
                    <input type="text" class="goodsCount" value="1">
                    <button type="button" class="up">
                        +
                    </button>
                    <span>29,900원</span>
                    <i class="fas fa-times optionClose"></i>
                </div>
            </li>
        </ul>
    </div>

    <script src="JS/jQuery/jquery-3.5.1.min.js"></script>
    <script src="JS/shop.js"></script>
</body>

</html>