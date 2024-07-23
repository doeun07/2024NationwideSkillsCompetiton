<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>여행코스추천</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- 헤더 시작 -->
    <header>
      <a href="./index.html"
        ><img title="logo" class="logo" src="./logo.png" alt="logo"
      /></a>
      <ul class="menu">
        <li>
          <span>경주여행</span>
          <ul>
            <li><a href="#">이벤트</a></li>
            <li><a href="./sub1.html">여행코스추천</a></li>
            <li><a href="#">테마여행</a></li>
            <li><a href="#">경주의 자연</a></li>
          </ul>
        </li>
        <li>
          <span>문화행사</span>
          <ul>
            <li><a href="#">이달의 축제행사</a></li>
            <li><a href="#">정기 축제행사</a></li>
            <li><a href="#">공연전시 정보</a></li>
            <li><a href="#">해외공연 정보</a></li>
          </ul>
        </li>
        <li>
          <span>안내</span>
          <ul>
            <li><a href="./sub2.html">조직도</a></li>
            <li><a href="#">공지사항</a></li>
            <li><a href="#">홍보영상</a></li>
            <li><a href="#">여행책자</a></li>
          </ul>
        </li>
        <li>
          <span>나의여행</span>
          <ul>
            <li><a href="#">투어택시예약</a></li>
          </ul>
        </li>
      </ul>

      <span class="menu">
        <label for="login"> 로그인 </label>
        <label for="register">회원가입</label>
        <input id="login" type="radio" name="menu" />
        <input id="register" type="radio" name="menu" />
        <input id="check" type="radio" name="menu" />
        <!-- 로그인&회원가입 모달 시작 -->
        <div id="loginModal" class="modal">
          <div class="modal_body">
            <h3>로그인</h3>
            <input
              class="login_input"
              id="name"
              type="text"
              placeholder="  아이디를 입력해주세요."
            />
            <input
              class="login_input"
              id="password"
              type="password"
              placeholder="  비밀번호를 입력해주세요."
            />
            <label class="check" for="check">확인</label>
          </div>
        </div>

        <div id="registerModal" class="modal">
          <div class="modal_body">
            <h3>회원가입</h3>
            <input
              class="login_input"
              id="name"
              type="text"
              placeholder="  아이디를 입력해주세요."
            />
            <input
              class="login_input"
              id="username"
              type="text"
              placeholder="  이름을 입력해주세요."
            />
            <input
              class="login_input"
              id="password"
              type="password"
              placeholder="  비밀번호를 입력해주세요."
            />

            <select class="login_input" name="" id="mb_level">
              <option value="">일반회원</option>
              <option value="">기사</option>
              <option value="">관리자</option>
            </select>
            <label class="check" for="check">확인</label>
          </div>
        </div>
        <!-- 로그인&회원가입 모달 끝 -->
      </span>
    </header>
    <!-- 헤더 끝 -->

    <div class="trip_menu">
      <input id="동해안투어" type="radio" name="trip" checked />
      <input id="세계유산투어" type="radio" name="trip" />
      <input id="신라역사투어" type="radio" name="trip" />
      <ul>
        <li><label for="동해안투어">동해안투어</label></li>
        <li><label for="세계유산투어">세계유산투어</label></li>
        <li><label for="신라역사투어">신라역사투어</label></li>
      </ul>
    
      <div class="trip" id="동해안">
        <div class="trip_cards">
          <div class="trip_card">
            <h2>1. 경주전통명주전시관</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/동해안투어/경주전통명주전시관.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>2. 감은사지</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/동해안투어/감은사지.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>3. 문무대왕릉</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/동해안투어/문무대왕릉.jpg"
              alt=""
            />
          </div>
        </div>
        <div class="trip_cards">
          <div class="trip_card">
            <h2>4. 양남주상절리</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/동해안투어/양남주상절리.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>5. 골굴사</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/동해안투어/양남주상절리.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>6. 괘릉</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/동해안투어/괘릉.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="trip" id="세계유산">
        <div class="trip_cards">
          <div class="trip_card">
            <h2>1. 무열왕릉</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/세계유산투어/무열왕릉.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>2. 대릉원</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/세계유산투어/대릉원.png"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>3. 분황사</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/세계유산투어/분황사.jpg"
              alt=""
            />
          </div>
        </div>
        <div class="trip_cards">
          <div class="trip_card">
            <h2>4. 석굴암</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/세계유산투어/석굴암.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>5. 불국사</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/세계유산투어/불국사.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="trip" id="신라역사">
        <div class="trip_cards">
          <div class="trip_card">
            <h2>1. 김유신장군묘</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/신라역사투어/김유신장군묘.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>2. 국립경주박물관</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/신라역사투어/국립경주박물관.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>3. 황룡사역사문화관</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/신라역사투어/황룡사역사문화관.jpg"
              alt=""
            />
          </div>
        </div>
        <div class="trip_cards">
          <div class="trip_card">
            <h2>4. 불국사</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/신라역사투어/불국사.jpg"
              alt=""
            />
          </div>
          <div class="trip_card">
            <h2>5. 경주세계문화엑스포</h2>
            <img
              src="./2024_충북(모듈별제공파일)/A-Module/제공파일/여행코스/신라역사투어/경주세계문화엑스포.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    

    <!-- 푸터 시작 -->
    <footer>
      <img class="logo" src="./logo.png" alt="" />
      <div>
        <p>
          [38102] 경상북도 경주시 양정로 260 <br />(동천동, 경주시청)대표전화 :
          054-779-8585 <br />
          관광안내전화 1330 응급전화안내 1339 <br />
          Copyright 2024 Gyeongju Tourguide. All rights reserved.
        </p>
        <br />
        <div>
          <img
            class="sns"
            src="./2024_충북(모듈별제공파일)/A-Module/제공파일/footer/SNS_01.png"
            title="인스타그램"
            alt="인스타그램"
          />
          <img
            class="sns"
            src="./2024_충북(모듈별제공파일)/A-Module/제공파일/footer/SNS_02.png"
            title="페이스북"
            alt="페이스북"
          />
          <img
            class="sns"
            src="./2024_충북(모듈별제공파일)/A-Module/제공파일/footer/SNS_03.png"
            title="유튜브"
            alt="유튜브"
          />
          <img
            class="sns"
            src="./2024_충북(모듈별제공파일)/A-Module/제공파일/footer/SNS_04.png"
            title="트위터"
            alt="트위터"
          />
        </div>
      </div>
      <div>
        <a href="#">개인정보처리방침</a><br />
        <a href="#">저작권보호</a><br />
        <a href="#">사이트오류신고</a>
      </div>
    </footer>
    <!-- 푸터 끝 -->
  </body>
</html>
