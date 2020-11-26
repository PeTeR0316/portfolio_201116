<?php
include 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/join.css">
    <title>시크헤라</title>
</head>

<body>
    <div id="wrap">
        <img src="images/join/joinImg.jpg" alt="joinImg">

        <div id="userInfo">
            <form id="joinForm">
                <ul id="userData">
                    <li>
                        <input type="text" name="userName" id="userName" placeholder="이름" required>
                    </li>
                    <li>
                        <input type="text" name="userId" id="userId" placeholder="아이디(영문 또는 숫자조합 4~12자/특수문자제외)" required>
                        <span id="idRegRes"></span>
                        <!-- <button type="button" id="overlapBtn">중복확인</button> -->
                    </li>
                    <li>
                        <input type="password" name="userPW" id="userPW" placeholder="비밀번호" required onkeydown="fnRegExpEng()">
                        <span id="regPW"></span>
                    </li>
                    <li>
                        <input type="password" name="userPWChk" id="userPWChk" placeholder="비밀번호 확인" required onblur="fnPWChk()">
                        <span id="resPWChk"></span>
                    </li>
                    <li>
                        <input type="text" name="userEmail" id="userEmail" placeholder="이메일" required>
                    </li>
                    <li>
                        <select name="year" id="year" onchange="fnSelectDay()"></select> 년
                        <select name="month" id="month" onchange="fnSelectDay()" onclick="deleteOption()"></select> 월
                        <select name="day" id="day" onclick="deleteOption()"></select> 일
                        <div id="genderCheckbox">
                            <input type="radio" name="gender" id="male">
                            <span>남</span>
                            <input type="radio" name="gender" id="female">
                            <span>여</span>
                        </div>
                    </li>
                    <li>
                        <input type="text" name="phoneNumber" placeholder="휴대폰번호 '-'없이 입력">
                        <button type="button">인증번호 요청</button>
                    </li>
                    <li>
                        <input type="text" name="checkNumber" placeholder="인증번호 입력" required>
                        <button type="button">확인</button>
                    </li>
                    <li>
                        <input type="checkbox" name="ageCheck" id="ageCheckbox">
                        <span>14세 이상입니다. (필수)</span>
                    </li>
                </ul>

                <ul id="agree">
                    <li>
                        <input type="checkbox" name="totalCheck" id="totalCheckbox">
                        <span>전체동의</span>
                    </li>
                    <li>
                        <ul>
                            <li>
                                <input type="checkbox" name="termsAndConditions" id="termsAndConditions">
                                <span class="textGray">이용약관</span>
                                <button>내용보기</button>
                            </li>
                            <li>
                                <input type="checkbox" name="privacy1" id="privacy1">
                                <span class="textGray">개인정보 수집 및 이용안내</span>
                                <button>내용보기</button>
                            </li>
                            <li>
                                <input type="checkbox" name="privacy2" id="privacy2">
                                <span class="textGray">개인정보 처리위탁</span>
                                <button>내용보기</button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div>
                            <input type="checkbox" name="marketing" id="marketing">
                            <span>마케팅 수신동의 </span>
                            <span class="textGray">
                                (
                                <input type="checkbox" name="emailChk" id="emailChk">
                                <span>이메일</span>
                                <input type="checkbox" name="smsChk" id="smsChk">
                                <span>SMS</span> )
                            </span>
                            <p class="textGray">
                                쇼핑몰에서 제공하는 신상품 소식/할인쿠폰을 무상으로 보내드립니다!
                                <br> 단, 상품 구매 정보는 수신동의 여부 관계없이 발송됩니다.
                            </p>
                            <p>제공 동의를 하지 않으셔도 서비스 이용에는 문제가 없습니다.</p>
                        </div>
                    </li>
                </ul>

                <button type="button" id="joinBtn">동의하고 가입완료</button>
            </form>
        </div>

        <div id="copyRight">
            <ul>
                <li>
                    <a href="http://www.chichera.co.kr/html/privacy.html">개인정보취급방침 전문보기</a>
                </li>
                <li>
                    <a href="introduce.html">회사소개</a>
                </li>
            </ul>

            <p>Copyright &copy; <span>Chichera Corp.</span> ALL rights Reserved.</p>
        </div>

    </div>

    <script src="JS/jQuery/jquery-3.5.1.min.js"></script>
    <script src="JS/join.js"></script>

</body>

</html>