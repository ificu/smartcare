<template>
  <div id="2290644288" class="mainArea">
    <div id="9603812673" class="titleBox">
      <a id="1278953801" href="javascript:;" class="menuBtn" @click="showMenu=true"><img src="@/img/icon_menu.svg"></a>
      <div id="7596576479" class="title">안녕하세요, {{userName}} 님</div>
      <div id="1054309100" class="subTitle">SK렌터카 <span>스마트케어</span>(Beta Ver.) 서비스<br>테스트에 참여해주셔서 감사합니다.</div>
    </div>
    <div id="4644211896" class="item_list">
      <router-link to="/ContractInfo">
      <a id="7564086534" href="" class="item">
        <img id="1840625569" src="@/img/logo_skRental.svg" class="logo">
        <div id="6544656424" class="item_text">내 차 계약 정보 확인</div>
      </a>
    </router-link>
    <router-link to="/SafeReport">
      <a id="3398034514" href="" class="item">
        <div id="7829133626" class="item_title"><img id="7426634982" src="@/img/icon_target.svg"> <span id="" class="title">안전점수</span></div>
        <div id="2930701675" class="guageBox">
          <img id="1771345032" src="@/img/guage_bar.svg" class="guage_bar">
          <img id="1771345032" src="@/img/line_guage.png" class="guage_line">
          <div id="2659560575" class="goal_score">목표 점수<br>95점</div>
          <div id="8870633421" class="my_score">{{safDrvIdx}} 점<p>(상위 {{SafetyInfo.safeIdxRank}}%, {{parseInt(SafetyInfo.safeIdxRank/100*SafetyInfo.drvrCnt)}}위)</p></div>
        </div>
        <div id="6594630138" class="text01">{{safDrvMessage}}</div>
        <div id="1597772086" class="text02">{{safDrvRecommend}}</div>
        <div id="1246721320" class="text03"><span>안전운전 미션이 향후 안내될 예정입니다.</span></div>
      </a>
      </router-link>
      <a id="4079354739" @click="showERSCall=true" class="item">
        <div id="2613335142" class="item_title"><img id="2259556330" src="@/img/icon_accident.svg"> <span class="title">사고접수</span></div>
        <div id="9978640929" class="text04">사고 발생시 바로 연결</div>
      </a>
      <router-link to="/ShockAlarm">
      <a id="8195083055" href="" class="item">
        <div id="6012095227" class="item_title"><img id="4450206969" src="@/img/icon_alarm01.svg"> <span class="title">정차 중 충격알림</span><span class="new" v-if="newShockAlarm">NEW</span></div>
        <!--<ul id="5649529464" class="alarm_list">
          <li id="8585590273"><p class="date">11월 7일 13:00</p><p>차량 충격이 감지되었습니다.</p></li>
          <li id="6661413226"><p class="date">11월 6일 19:21</p><p>차량 충격이 감지되었습니다.</p></li>
        </ul>-->
        <ul id="5649529464" class="alarm_list" v-for="(shock, index) in shockAlarmList" v-bind:key="index">
          <li v-bind:id="'9548127208'+index"><p class="date">{{shock.shockDate}}</p><p>{{shock.shockMsg}}</p></li>
        </ul>
        <div id="2515714085" class="more">... more</div>
      </a>
      </router-link>
      <router-link to="/CarRepair">
      <a id="4507565108" href="" class="item">
        <div id="7558405712" class="item_title"><img id="3486064755" src="@/img/icon_fix.svg"> <span class="title">정비관리</span><span class="new" v-if="isNewRepairMessage">NEW</span></div>
        <div id="5094331840" class="item_text">누적 주행거리 {{accDist}}Km</div>
        <ul id="6794243679" class="text_list">
          <li id="9524843842">- {{repairMessage1}}</li>
          <li id="2016902426">- {{repairMessage2}}</li>
        </ul>
      </a>
      </router-link>
      <router-link to="/DriveHistory">
      <a id="6185674754" href="" class="item">
        <div id="1150123414" class="item_title"><img id="5638758827" src="@/img/icon_history.svg"> <span class="title">주행이력관리</span><span class="new">NEW</span></div>
        <!--<ul id="1229086322" class="history_list">
          <li id="9198852782"><p class="date">11월 7일 13:00</p><p class="address"><span>서울특별시 강남구 ...</span></p></li>
          <li id="7587326910"><p class="date">11월 6일 19:21</p><p class="address"><span>서울특별시 강남구 ...</span></p></li>
          <li id="7349622438"><p class="date">11월 5일 10:00</p><p class="address"><span>서울특별시 강남구 ...</span></p></li>
        </ul>-->
        <ul id="1229086322" class="history_list" v-for="(drive, index) in driveHistoryList" v-bind:key="index">
          <li v-bind:id="'9198852782'+index"><p class="date">{{drive.drvDate}}</p><p class="address"><span>{{drive.addr}}</span></p></li>
        </ul>
        <div id="3714380580" class="more">... more</div>
      </a>
      </router-link>
      <router-link to="/MyCarLocation">
      <a id="7552253682" href="javascript:;" class="item">
        <div id="5425614371" class="item_title"><img id="8464994905" src="@/img/icon_locate.svg"> <span class="title">내차 위치 찾기</span></div>
        <div id="6545125044" class="item_text" style="padding-bottom:10px">공항, 식당에서 발렛 파킹 하셨나요?</div>
      </a>
      </router-link>
      <ul id="6067869823" class="comingsoon_list">
        <div id="1294494412" class="item_title">신규 예정 서비스</div>
        <li id="7244752797" @click="showComingsoon01 = !showComingsoon01"><img id="6769156072" src="@/img/icon_119.svg"> <span>119 자동출동 서비스 (대형사고 발생시)</span></li>
        <li id="2102151511" @click="showComingsoon02 = !showComingsoon02"><img src="@/img/icon_alarm02.svg"> <span>다양한 알림 서비스</span></li>
        <li id="9737112597" @click="showComingsoon03 = !showComingsoon03"><img src="@/img/icon_ai.svg"> <span>운전비서(AI) 서비스</span></li>
        <li id="2707965502" @click="showComingsoon04 = !showComingsoon04"><img src="@/img/icon_change.svg"> <span>최적의 교환주기 추천 서비스</span></li>
        <li id="7117272266" @click="showComingsoon05 = !showComingsoon05"><img src="@/img/icon_fix.svg"> <span>가까운 정비 업소 알림/예약 서비스</span></li>
        <li id="7117272266" @click="showComingsoon06 = !showComingsoon06"><img src="@/img/icon_sos.png"> <span>스마트 사고대응 서비스</span></li>
      </ul>
    </div>
    <transition name="slide-fade">
      <Comingsoon01 v-if="showComingsoon01" @close="showComingsoon01=false"></Comingsoon01>
      <Comingsoon02 v-if="showComingsoon02" @close="showComingsoon02=false"></Comingsoon02>
      <Comingsoon03 v-if="showComingsoon03" @close="showComingsoon03=false"></Comingsoon03>
      <Comingsoon04 v-if="showComingsoon04" @close="showComingsoon04=false"></Comingsoon04>
      <Comingsoon05 v-if="showComingsoon05" @close="showComingsoon05=false"></Comingsoon05>
      <Comingsoon06 v-if="showComingsoon06" @close="showComingsoon06=false"></Comingsoon06>
      <ERSCall v-if="showERSCall" @close="showERSCall=false"></ERSCall>
      <Loading v-if="showLoading"></Loading>
    </transition>
    <transition name="slide-side">
      <Menu v-if="showMenu" @close="showMenu=false"></Menu>
    </transition>

  </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Comingsoon01 from '@/components/popup/Comingsoon01.vue'
import Comingsoon02 from '@/components/popup/Comingsoon02.vue'
import Comingsoon03 from '@/components/popup/Comingsoon03.vue'
import Comingsoon04 from '@/components/popup/Comingsoon04.vue'
import Comingsoon05 from '@/components/popup/Comingsoon05.vue'
import Comingsoon06 from '@/components/popup/Comingsoon06.vue'
import Menu from '@/components/popup/Menu.vue'
import ERSCall from '@/components/popup/ERSCall.vue'
import Loading from '@/components/popup/Loading.vue'
import Constant from '@/Constant'
import {datePadding} from '@/utils/common.js'
import {numberWithCommas} from '@/utils/common.js'

export default {
  name: 'main',
  data () {
    return {
      showMenu: false,
      showERSCall: false,
      showComingsoon01: false,
      showComingsoon02: false,
      showComingsoon03: false,
      showComingsoon04: false,
      showComingsoon05: false,
      showComingsoon06: false,
      showLoading: false,
      userName: "",
      safDrvIdx: "",
      safDrvMessage: "",
      safDrvRecommend: "",
      shockAlarmList: [],
      newShockAlarm: false,
      driveHistoryList: [],
      isNewRepairMessage: false,
      repairMessage1: "",
      repairMessage2: "",
    }
  },
  created : function() {
    this.userLoginId = this.UserInfo.userLoginId;
    this.userName = this.UserInfo.UserName;
    this.carNo = this.UserInfo.CarNo;
    this.safDrvIdx = this.DrvInfo.safDrvIdx;
    this.accDist = this.CarInfo.accDist;
  },
  methods: {
    ContractInfo(){
      this.$router.push('/ContractInfo');
    },

    //현재 날짜 및 1개월 전 날짜
    getTodayDate(){
      var today_DATE = new Date();
      var year = today_DATE.getFullYear();
      var month = today_DATE.getMonth()+1;
      var day = today_DATE.getDate();
      var beforeYear = year;
      var beforeMonth = month - 1;
      var beforeDay = day;


      //1개월 전 Month 변환
      if(beforeMonth == 0){
        beforeMonth = 12;
        if(beforeMonth == 12){
          beforeYear = year - 1;
        }
      }
      //1개월 전 Day 변환
      if(beforeDay == 31){
        beforeDay = 30;
      }else if(beforeDay == 30){
        beforeDay = 31;
      }

      var stDtToday = beforeYear+"-"+beforeMonth+"-"+beforeDay;
      var edDtToday = year+"-"+month+"-"+day;

      return {"stDtToday":stDtToday,"edDtToday":edDtToday};
    },
    ///////////////////////////////////////////////////////////////////
    // 운행 이력 조회
    ///////////////////////////////////////////////////////////////////
    getDrvInfo() {
      console.log("CarName : "+ this.UserInfo.UserName);
      console.log("CarNum : "+ this.UserInfo.CarNo);
      console.log("SafDrvIdx : " + this.DrvInfo.SafDrvIdx);
      console.log("UserLoginId : " + this.UserInfo.UserLoginId);

      var now = new Date();
      var edDt = now.getFullYear() + "-" + datePadding(now.getMonth()+1,2) + "-" + datePadding(now.getDate(),2);
      //now.setDate(now.getDate() -7);    // 일주일 전
      now.setMonth(now.getMonth() -1);    // 한달 전
      var stDt = now.getFullYear() + "-" + datePadding(now.getMonth()+1,2) + "-" + datePadding(now.getDate(),2);

      var param = {};
      param.authKey = Constant.SMARTLINK_AUTH_KEY;
      param.reqTyp = "n";
      param.stDt = stDt;
      param.edDt = edDt;
      param.carNum = this.carNo;

      console.log("====== getDrvInfo ======");
      console.log(param);

      axios({
       method: 'POST',
       url: Constant.SMARTLINK_URL+"/reqDrvHst",
       headers: Constant.SMARTLINK_HEADER,
       data: param
      })
      .then((result) => {

        console.log("getDrvInfo 회신 결과 : ", result);
        this.DrvInfo.movTm = result.data.drvHsts[0].movTm; // 운행시간
        this.DrvInfo.safDrvIdx = result.data.drvHsts[0].safDrvIdx; // 안전지수
        this.DrvInfo.safDrvIdx = result.data.drvHsts[0].safDrvIdx; // 안전지수

        //-------------------------------------------------------//
        // 1. 안전지수 평균을 가져옴
        //-------------------------------------------------------//
        var drvCount = result.data.drvHsts.length;  // 주행 횟수
        var drvNightCount = 0;    // 야간 주행 시간
        var safTotal = 0;         // 안전지수 총점
        var fstAccelTotal = 0;    // 급가속 총점
        var fstDecelTotal = 0;    // 급감속 총점
        var overSpdTotal  = 0;    // 과속 총점
        var startDist = 0;        // 시작 주행 거리
        var endDist = 0;          // 종료 주행 거
        var movTmTotal = 0;       // 주행 시간 총 합계
        var w1stSafeCnt = 0;      // 1주차 운행 건수
        var w1stSafeTot = 0;      // 1주차 안전지수 총점
        var w2ndSafeCnt = 0;      // 2주차 운행 건수
        var w2ndSafeTot = 0;      // 2주차 안전지수 총점
        var w3rdSafeCnt = 0;      // 3주차 운행 건수
        var w3rdSafeTot = 0;      // 3주차 안전지수 총점
        var w4thSafeCnt = 0;      // 4주차 운행 건수
        var w4thSafeTot = 0;      // 4주차 안전지수 총점

        result.data.drvHsts.sort(function(a,b) {
          return a.drvId > b.drvId ? -1 : a.drvId < b.drvId ? 1 : 0;
        });

        this.DrvInfo.drvHstIFList = result.data.drvHsts;

        var i = 0;
        var tmpDrvHst = [];
        var tmpDispDrv = [];
        now = new Date();

        // 전체 운행 기록을 체크해 보자...
        for(var hist of result.data.drvHsts) {
          safTotal +=       (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          fstAccelTotal +=  (hist.fstAccelIdx === undefined ? 0 : hist.fstAccelIdx);
          fstDecelTotal +=  (hist.fstDecelIdx === undefined ? 0 : hist.fstDecelIdx);
          overSpdTotal +=   (hist.overSpdIdx === undefined ? 0 : hist.overSpdIdx);

          if(i === 0) endDist = hist.offDist;   // 맨 마지막의 OFF 시 누적 거리
          if(i === (drvCount-1)) startDist = hist.onDist;   // 맨 처음의 On 시 누적 거리

          movTmTotal += hist.movTm;    // 운행 시간 합계 (초)
          var drvDate = new Date(hist.offDt);
          if(drvDate.getHours() >= 18)  drvNightCount++;  // 18시 이후인 경우 야간 주행시간으로 카운트

          /*
          if(((now - drvDate)/1000/60/60/24) < 7) { // 현재 기준 7일 이내면 월 기준으로 4주차
            w4thSafeCnt++;
            w4thSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }
          else if(((now - drvDate)/1000/60/60/24) < 14) { // 현재 기준 14일 이내면 월 기준으로 3주차
            w3rdSafeCnt++;
            w3rdSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }
          else if(((now - drvDate)/1000/60/60/24) < 21) { // 현재 기준 21일 이내면 월 기준으로 3주차
            w2ndSafeCnt++;
            w2ndSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }
          else if(((now - drvDate)/1000/60/60/24) < 28) { // 현재 기준 28일 이내면 월 기준으로 3주차
            w1stSafeCnt++;
            w1stSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }*/
          // 일단 하드코딩으로....
          if(drvDate.getMonth() == 11 && (drvDate.getDate() >= 1 && drvDate.getDate() <= 7)) {
            w1stSafeCnt++;
            w1stSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }
          else if(drvDate.getMonth() == 11 && (drvDate.getDate() >= 8 && drvDate.getDate() <= 14)) {
            w2ndSafeCnt++;
            w2ndSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }
          else if(drvDate.getMonth() == 11 && (drvDate.getDate() >= 15 && drvDate.getDate() <= 21)) {
            w3rdSafeCnt++;
            w3rdSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }
          else if(drvDate.getMonth() == 11 && (drvDate.getDate() >= 22 && drvDate.getDate() <= 28)) {
            w4thSafeCnt++;
            w4thSafeTot += (hist.safDrvIdx === undefined ? 0 : hist.safDrvIdx);
          }

          // 최신 3개 이력은 별도로 주행 이력으로 상세 표시함.
          if(i++ < 3) {
            var drvDate = "";
            if(hist.offDt !== undefined) {
              drvDate = (hist.offDt.substr(5,1) === '0' ? hist.offDt.substr(6,1) : hist.offDt.substr(5,2)) + "월 " +
                        (hist.offDt.substr(8,1) === '0' ? hist.offDt.substr(9,1) : hist.offDt.substr(8,2)) + "일 " +
                        hist.offDt.substr(11,5);
                        }
            var drvId = hist.drvId;
            var drv = { "index" : i, "drvDate" : drvDate, "drvId" : drvId , "rawData" : hist};
            tmpDrvHst.push(drv);
          }
        }
        console.log("!!!!!!!!!!!!!! ", tmpDrvHst);

        //-------------------------------------------------------//
        // 2. 안전지수 게이지
        //-------------------------------------------------------//
        //this.safDrvIdx = this.DrvInfo.safDrvIdx; // 안전지수
        //this.safDrvIdx = parseInt(safTotal / drvCount);
        this.safDrvIdx = this.SafetyInfo.safeIdx;
        this.DrvInfo.drvHstIFData.safDrvIdx = this.safDrvIdx;

        if(this.safDrvIdx != null && this.safDrvIdx != ""){
          var gageBar = document.getElementById('1771345032'); // 게이지 Bar
          var degree = this.safDrvIdx * 1.8 - 90;

          gageBar.style.transform = 'rotate(' + degree + 'deg)';
        }

        console.log("this.DrvInfo.movTm : " + this.DrvInfo.movTm);
        console.log("this.DrvInfo.SafeIndex : " + this.DrvInfo.safDrvIdx);

        //-------------------------------------------------------//
        // 3. 메시지 표시 계산
        //-------------------------------------------------------//
        var fstAccelMean = parseInt(fstAccelTotal / drvCount);  // 급가속 평균
        var fstDecelMean = parseInt(fstDecelTotal / drvCount);  // 갑감속 평균
        var overSpdMean = parseInt(overSpdTotal / drvCount);    // 과속 평균

        this.DrvInfo.drvHstIFData.fstAccelMean = fstAccelMean;
        this.DrvInfo.drvHstIFData.fstDecelMean = fstDecelMean;
        this.DrvInfo.drvHstIFData.overSpdMean = overSpdMean;

        var fstAccelAdjst = parseInt(fstAccelMean  * 0.4);  // 급가속 반영 비중 적용 점수
        var fstDecelAdjst = parseInt(fstDecelMean * 0.2);  // 갑감속 반영 비중 적용 점수
        var overSpdAdjst = parseInt(overSpdMean * 0.4);    // 과속 반영 비중 적용 점수

        var recommendType = "";
        //if(fstAccelMean <= fstDecelMean && fstAccelMean <= overSpdMean) recommendType = "fstAccel";
        //else if(fstDecelMean <= fstAccelMean && fstDecelMean <= overSpdMean ) recommendType = "fstDecel";
        //else recommendType = "overSpd";
        if(this.SafetyInfo.fstAcclIdx/0.4 <= this.SafetyInfo.fastDecIdx/0.2 && this.SafetyInfo.fstAcclIdx/0.4 <= this.SafetyInfo.overSpeedIdx/0.4) recommendType = "fstAccel";
        else if(this.SafetyInfo.fastDecIdx/0.2 <= this.SafetyInfo.fstAcclIdx/0.4 && this.SafetyInfo.fastDecIdx/0.2 <= this.SafetyInfo.overSpeedIdx/0.4 ) recommendType = "fstDecel";
        else recommendType = "overSpd";

        if(this.safDrvIdx == 0) this.safDrvMessage = "아직까지 주행이력이 없습니다.";
        else if(this.safDrvIdx > 0 && this.safDrvIdx < 20 ) this.safDrvMessage = "사고 발생 가능성이 높습니다. 꼭 안전운전 하세요.";
        else if(this.safDrvIdx >= 20 && this.safDrvIdx < 40 ) this.safDrvMessage = "안전운전 습관을 꾸준히 글러보세요.";
        else if(this.safDrvIdx >= 40 && this.safDrvIdx < 60 ) this.safDrvMessage = "행복을 위해 안전운전하세요.";
        else if(this.safDrvIdx >= 60 && this.safDrvIdx < 80 ) this.safDrvMessage = "좋은 안전운전 습관으로 도약하고 있습니다.";
        else if(this.safDrvIdx >= 80 && this.safDrvIdx < 100 ) this.safDrvMessage = "안전운전을 잘하고 계십니다.";
        else this.safDrvMessage = "최고의 안전운전을 하고 계십니다.";

        if(recommendType === "fstAccel") this.safDrvRecommend = "가속 페달은 조금 더 차분히 밟아주세요.";
        else if (recommendType === "fstDecel") this.safDrvRecommend = "돌발 상황 대응을 위해 먼저 속도를 줄여주세요.";
        else this.safDrvRecommend = "조금만 더 속도를 줄여주세요.";

        this.DrvInfo.drvHstIFData.safDrvMessage = this.safDrvMessage;
        this.DrvInfo.drvHstIFData.safDrvRecommend = this.safDrvRecommend;
        this.DrvInfo.drvHstIFData.drvCount = drvCount;
        this.DrvInfo.drvHstIFData.drvNightCount = drvNightCount;
        this.DrvInfo.drvHstIFData.totDrvDist = (endDist - startDist).toFixed(1);
        this.DrvInfo.drvHstIFData.totDrvTm = parseInt(movTmTotal/60/60) + '시간 ' + parseInt((movTmTotal - parseInt(movTmTotal/60/60)*60*60)/60) + '분' ;
        this.DrvInfo.drvHstIFData.w1stSafeIdx = (w1stSafeCnt === 0 ? 0 : parseInt(w1stSafeTot / w1stSafeCnt));
        this.DrvInfo.drvHstIFData.w2ndSafeIdx = (w2ndSafeCnt === 0 ? 0 : parseInt(w2ndSafeTot / w2ndSafeCnt));
        this.DrvInfo.drvHstIFData.w3rdSafeIdx = (w3rdSafeCnt === 0 ? 0 : parseInt(w3rdSafeTot / w3rdSafeCnt));
        this.DrvInfo.drvHstIFData.w4thSafeIdx = (w4thSafeCnt === 0 ? 0 : parseInt(w4thSafeTot / w4thSafeCnt));

        //-------------------------------------------------------//
        // 4. 주행 기록 중 3개만 추출하여 GPS 좌표 조회
        //-------------------------------------------------------//
        this.DrvInfo.drvGpsList = [];
        for(var path of tmpDrvHst) {
          param = {};
          param.authKey = Constant.SMARTLINK_AUTH_KEY;
          param.drvId = path.drvId;

          var gpsCount = 0;

          var gpsRawData = {
            "drvId" : path.drvId,
            "drvRawData" : path.rawData
          };
          this.DrvInfo.drvGpsList.push(gpsRawData);

          console.log("====== getGPSInfo ======");
          console.log(param);

          axios({
            method: 'POST',
            url: Constant.SMARTLINK_URL + "/reqDrvGps",
            headers: Constant.SMARTLINK_HEADER,
            data: param
          })
          .then((result) => {
            console.log("getGPSInfo 회신 결과 :(", JSON.parse(result.config.data).drvId, ") ", result);

            //-------------------------------------------------------//
            // 5. GPS 좌표를 기준으로 주소값을 읽어 옴
            //-------------------------------------------------------//
            gpsCount++;
            if(result.data.gps !== undefined) {

              for(var arr of this.DrvInfo.drvGpsList) {
                if(arr.drvId === JSON.parse(result.config.data).drvId) {
                  arr.gpsRawData = result.data.gps;
                  arr.startDate = result.data.gps[0].gpsDt.substr(0, 19);
                  arr.endDate = result.data.gps[result.data.gps.length-1].gpsDt.substr(0, 19);
                }
              }

              var gpsDate = result.data.gps[result.data.gps.length-1].gpsDt;
              var dispDate = (gpsDate.substr(5,1) === '0' ? gpsDate.substr(6,1) : gpsDate.substr(5,2)) + "월 " +
                              (gpsDate.substr(8,1) === '0' ? gpsDate.substr(9,1) : gpsDate.substr(8,2)) + "일 " +
                              gpsDate.substr(11,5);

              // 종료된 시점 계산
              var url = Constant.TMAP_URL + "/reversegeocoding?version=1&format=json&callback=result&"
                        + "coordType=WGS84GEO&lon=" + result.data.gps[result.data.gps.length-1].lon
                        + "&lat=" + result.data.gps[result.data.gps.length-1].lat + "&appKey=" + Constant.TMAP_KEY
                        + "&date=" + dispDate + "&drvId=" + JSON.parse(result.config.data).drvId;

              axios.get(url)
              .then((result) => {
                console.log("TMAP 회신 결과(종료) : ", result);

                var dateIdx = result.config.url.indexOf('&date=');
                var drvIdIdx = result.config.url.indexOf('&drvId=');

                var dateStr = result.config.url.substr(dateIdx + 6, drvIdIdx - dateIdx - 6);
                var drvIdStr = result.config.url.substr(drvIdIdx + 7);

                var addrArr = result.data.addressInfo.fullAddress.split(' ');

                var drvDate = hist.drvId;
                var drv = { "drvId" : drvIdStr, "drvDate" : dateStr, "addr" : addrArr[0] + " " + addrArr[1] + " " + addrArr[2] + " ..." };
                tmpDispDrv.push(drv);

                // 3개의 데이터가 모두 채워 졌다면, 최종 화면에 Display
                // 데이터가 모두 Async로 조회 되므로 이렇게 처리하는게 가장 정확할 거 같음....
                if(gpsCount === 3) {
                  tmpDispDrv.sort(function(a, b) {
                    return a.drvId > b.drvId ? -1 : a.drvId < b.drvId ? 1 : 0;
                  });
                  this.driveHistoryList = tmpDispDrv;
                  this.showLoading = false;
                }

                for(var arr of this.DrvInfo.drvGpsList) {
                  if(arr.drvId === parseInt(drvIdStr)) {
                    arr.startAddr = result.data.addressInfo.fullAddress;
                  }
                }

              }).catch((error) => {
                console.log(error);
              });


              // 시작 시점 계산
              url = Constant.TMAP_URL + "/reversegeocoding?version=1&format=json&callback=result&"
                        + "coordType=WGS84GEO&lon=" + result.data.gps[0].lon
                        + "&lat=" + result.data.gps[0].lat + "&appKey=" + Constant.TMAP_KEY
                        + "&date=" + dispDate + "&drvId=" + JSON.parse(result.config.data).drvId;

              axios.get(url)
              .then((result) => {
                console.log("TMAP 회신 결과(시작) : ", result);

                var drvIdIdx = result.config.url.indexOf('&drvId=');
                var drvIdStr = result.config.url.substr(drvIdIdx + 7);

                for(var arr of this.DrvInfo.drvGpsList) {
                  if(arr.drvId === parseInt(drvIdStr)) {
                    arr.endAddr = result.data.addressInfo.fullAddress;
                  }
                }

              }).catch((error) => {
                console.log(error);
              });
            }
            else {  // gps 정보가 없다면 리스트에서 삭제해 줘야 함.
              var index = 0;
              var check = 0;
              for(var arr of this.DrvInfo.drvGpsList) {
                if(arr.drvId === JSON.parse(result.config.data).drvId) {
                  check = index;
                }
                index++;
              }
              console.log(check + "번째 요소 삭제......");
              this.DrvInfo.drvGpsList.slice(check, 1);
            }

          }).catch((error) => {
            console.log(error);
          });
        }

      }).catch((error) => {
        console.log(error);
      });
    },
    ///////////////////////////////////////////////////////////////////
    // 자동차 정보
    ///////////////////////////////////////////////////////////////////
    getCarInfo() {
      var param = {};
      param.authKey = Constant.SMARTLINK_AUTH_KEY;
      param.reqTyp = "n";
      param.carNum = this.carNo;

      console.log("====== getCarInfo ======");
      console.log(param);

      axios({
       method: 'POST',
       url: Constant.SMARTLINK_URL+"/reqCarInfo",
       headers: Constant.SMARTLINK_HEADER,
       data: param
      })
      .then((result) => {
        console.log("getCarInfo 회신 결과 : ", result);
        this.accDist = numberWithCommas(Math.floor(result.data.cars[0].accDist));
        this.CarInfo.accDist = numberWithCommas(Math.floor(result.data.cars[0].accDist)); // 총 누적거리
        this.CarInfo.curLat = result.data.cars[0].curLat; // 현재 위치 (GPS 위도)
        this.CarInfo.curLon = result.data.cars[0].curLon; // 현재 위치 (GPS 경도)
        this.CarInfo.gpsDt = result.data.cars[0].gpsDt; // 현재 GPS 위치 업데이트 일시
        //gspDt
        console.log("this.CarInfo.accDist : " + this.CarInfo.accDist);
      }).catch((error) => {
        console.log(error);
      });
    },
    ///////////////////////////////////////////////////////////////////
    // 안전점수 정보
    ///////////////////////////////////////////////////////////////////
    getSafetyInfo() {
      var now = new Date();
      var edDt = now.getFullYear() + "-" + datePadding(now.getMonth()+1,2) + "-" + datePadding(now.getDate(),2);
      now.setMonth(now.getMonth() -1);    // 한달 전
      var stDt = now.getFullYear() + "-" + datePadding(now.getMonth()+1,2) + "-" + datePadding(now.getDate(),2);

      var param = {};
      param.authKey = Constant.SMARTLINK_AUTH_KEY;
      param.userId = this.UserInfo.UserLoginId;
      param.stDt = stDt;
      param.edDt = edDt;

      console.log("====== getSafetyInfo ======");
      console.log(param);

      axios({
       method: 'POST',
       url: Constant.SMARTLINK_URL+"/reqSafeRanking",
       headers: Constant.SMARTLINK_HEADER,
       data: param
      })
      .then((result) => {
        console.log("getSafetyInfo 회신 결과 : ", result);
        this.SafetyInfo.safeIdx = result.data.safeRank.safeIdx;
        this.SafetyInfo.safeIdxRank = result.data.safeRank.safeIdxRank;
        this.SafetyInfo.drvrCnt = result.data.safeRank.drvrCnt;
        this.SafetyInfo.fstAcclIdx = result.data.safeRank.fstAcclIdx;
        this.SafetyInfo.fastDecIdx = result.data.safeRank.fastDecIdx;
        this.SafetyInfo.overSpeedIdx = result.data.safeRank.overSpeedIdx;

      }).catch((error) => {
        console.log(error);
      });
    },
    ///////////////////////////////////////////////////////////////////
    // 충격알림 이력 조회
    ///////////////////////////////////////////////////////////////////
    getImpactNotice() {
      var now = new Date();
      var edDt = now.getFullYear() + "-" + datePadding(now.getMonth()+1,2) + "-" + datePadding(now.getDate(),2);
      now.setDate(now.getDate() -7);    // 일주일 전
      var stDt = now.getFullYear() + "-" + datePadding(now.getMonth()+1,2) + "-" + datePadding(now.getDate(),2);

      var param = {};
      param.authKey = Constant.SMARTLINK_AUTH_KEY;
      param.carNum = this.UserInfo.CarNo;
      param.stDt = stDt;
      param.edDt = edDt;

      console.log("====== getImpactNotice ======");
      console.log(param);

      axios({
       method: 'POST',
       url: Constant.SMARTLINK_URL+"/reqImpact",
       headers: Constant.SMARTLINK_HEADER,
       data: param
      })
      .then((result) => {
        console.log("getImpactNotice 회신 결과 : ", result);

        if(result.data.header.message === "success" && result.data.impacts.length > 0) {

          var tmpShockList = [];
          var i = 0;
          for(var impact of result.data.impacts) {
            if(impact.impactDt !== undefined) {
              var shockDate = (impact.impactDt.substr(5,1) === '0' ? impact.impactDt.substr(6,1) : impact.impactDt.substr(5,2)) + "월 " +
                              (impact.impactDt.substr(8,1) === '0' ? impact.impactDt.substr(9,1) : impact.impactDt.substr(8,2)) + "일 " +
                              impact.impactDt.substr(11,5);
              var shockMsg = "차량 충격이 감지되었습니다.";
              var type = "";
              if(edDt === impact.impactDt.substr(0, 10)) type = "new";
              else type = "old";
              var shock = { "index" : i, "shockDate" : shockDate, "shockMsg" : shockMsg, "type": type};

              tmpShockList.push(shock);
              i++;
            }
          }

          this.CarShockInfo.shockList = tmpShockList;

          tmpShockList.sort(function(a, b) {
            return a.index > b.index ? -1 : a.index < b.index ? 1 : 0;
          });

          this.shockAlarmList = tmpShockList.slice(0, 3);
          this.newShockAlarm = true;
        }

      }).catch((error) => {
        console.log(error);
      });
    },
    ///////////////////////////////////////////////////////////////////
    // 차량 정비 이력 정보
    ///////////////////////////////////////////////////////////////////
    getCarRepairInfo() {

      var param = {};
      param.operation = "list";
      param.tableName = "SMART_REPAIR";
      param.payload = {};
      param.payload.FilterExpression = "CAR = :car";
      param.payload.ExpressionAttributeValues = {};
      var key = ":car";
      param.payload.ExpressionAttributeValues[key] = this.UserInfo.CarNo;

      console.log("====== getCarRepairInfo ======");
      console.log(param);

      axios({
        method: 'POST',
        url: Constant.LAMBDA_URL,
        headers: Constant.LAMBDA_HEADER,
        data: param
      })
      .then((result) => {
        console.log("getCarRepairInfo 회신 결과 : ", result);
        this.CarRepairInfo.AirFilterBefore = result.data.Items[0].AirFilterBefore;
        this.CarRepairInfo.AirFilterCycle = result.data.Items[0].AirFilterCycle;
        this.CarRepairInfo.AirFilterType = result.data.Items[0].AirFilterType;
        this.CarRepairInfo.EngineOilBefore = result.data.Items[0].EngineOilBefore;
        this.CarRepairInfo.EngineOilCycle = result.data.Items[0].EngineOilCycle;
        this.CarRepairInfo.EngineOilType = result.data.Items[0].EngineOilType;

        var engineOilCheck = parseInt(this.CarRepairInfo.EngineOilBefore) + parseInt(this.CarRepairInfo.EngineOilCycle);
        var airFilterCheck = parseInt(this.CarRepairInfo.AirFilterBefore) + parseInt(this.CarRepairInfo.AirFilterCycle);

        if(engineOilCheck < (parseInt(this.CarInfo.accDist) + 2000)) {
          this.isNewRepairMessage = true;
          this.repairMessage1 = "주행거리 2,000km 혹은 1달 이내에";
          this.repairMessage2 = "엔진오일 및 필터 교환이 필요합니다.";
        }
        else if(airFilterCheck < (parseInt(this.CarInfo.accDist) + 2000)) {
          this.isNewRepairMessage = true;
          this.repairMessage1 = "주행거리 2,000km 혹은 1달 이내에";
          this.repairMessage2 = "에어컨 필터 교환이 필요합니다.";
        }
        else {
          this.isNewRepairMessage = false;
          this.repairMessage1 = "이달의 점검 항목이 없습니다.";
          this.repairMessage2 = "다가오는 점검 항목을 확인하세요.";
        }


      }).catch((error) => {
        console.log(error);
      });
    },
    ///////////////////////////////////////////////////////////////////
    // 차량 계약 정보
    ///////////////////////////////////////////////////////////////////
    getCarContractInfo() {
      console.log("Check Login : ", this.UserInfo.CarNo);

      var param = {};
      param.operation = "list";
      param.tableName = "SMART_CONTRACT";
      param.payload = {};
      param.payload.FilterExpression = "CAR = :id";
      param.payload.ExpressionAttributeValues = {};
      var key = ":id";
      param.payload.ExpressionAttributeValues[key] = this.UserInfo.CarNo;

      console.log("====== getCarContractInfo ======");
      console.log(param);

      axios({
        method: 'POST',
        url: Constant.LAMBDA_URL,
        headers: Constant.LAMBDA_HEADER,
        data: param
      })
      .then((result) => {
        console.log("getCarContractInfo 회신 결과 : ", result);

        this.ContractInfo.carModel = result.data.Items[0].CAR_MODEL;
        this.ContractInfo.ProductYear = result.data.Items[0].PRODUCT_YEAR;
        this.ContractInfo.CarAMT =  result.data.Items[0].CAR_AMT;
        this.ContractInfo.Option = result.data.Items[0].OPTION;
        this.ContractInfo.Name =  result.data.Items[0].NAME;
        this.ContractInfo.ContStart = result.data.Items[0].CONTRACT_START;
        this.ContractInfo.ContEnd = result.data.Items[0].CONTRACT_END;
        this.ContractInfo.ContPeriod = result.data.Items[0].CONTRACT_PERIOD;
        this.ContractInfo.ContDist = result.data.Items[0].CONTRACT_DIST;
        this.ContractInfo.RentAMT = result.data.Items[0].RENTAL_AMT;
        this.ContractInfo.PrePayed = result.data.Items[0].RENTAL_PREPAID;
        this.ContractInfo.CarRepair = result.data.Items[0].REPAIR_SERVICE;

      }).catch((error) => {
        console.log(error);
      });
    },
  },
  beforeMount(){
    var checkCookie = this.$cookie.get('CarNo');
    console.log("checkCookie : ", checkCookie);
    if(checkCookie !== undefined && checkCookie != "" && checkCookie != null) {
      this.UserInfo.UserName = this.$cookie.get('UserName');
      this.UserInfo.CarNo = this.$cookie.get('CarNo');
      this.UserInfo.UserLoginId = this.$cookie.get('LoginID');

      this.userLoginId = this.UserInfo.userLoginId;
      this.userName = this.UserInfo.UserName;
      this.carNo = this.UserInfo.CarNo;
    }
    else {
      this.$router.push('/');
    }

    this.showLoading = true;
    this.getSafetyInfo();
    this.getDrvInfo();
    this.getCarInfo();
    this.getImpactNotice();
    this.getCarRepairInfo();
    this.getCarContractInfo();
    this.getTodayDate();
  },
  mounted () {
    this.$ga.page('/Main');
  } ,
  components: {
    Comingsoon01: Comingsoon01,
    Comingsoon02: Comingsoon02,
    Comingsoon03: Comingsoon03,
    Comingsoon04: Comingsoon04,
    Comingsoon05: Comingsoon05,
    Comingsoon06: Comingsoon06,
    Loading: Loading,
    Menu: Menu,
    ERSCall: ERSCall
  },
  computed:{
    UserInfo: {
        get() { return this.$store.getters.UserInfo },
        set(value) { this.$store.dispatch('UpdateUserInfo',value) }
    },
    DrvInfo: {
        get() { return this.$store.getters.DrvInfo },
        set(value) { this.$store.dispatch('UpdateDrvInfo',value) }
    },
    CarInfo: {
        get() { return this.$store.getters.CarInfo },
        set(value) { this.$store.dispatch('UpdateCarInfo',value) }
    },
    CarRepairInfo: {
        get() { return this.$store.getters.CarRepairInfo },
        set(value) { this.$store.dispatch('UpdateCarRepairInfo',value) }
    },
    CarShockInfo: {
        get() { return this.$store.getters.CarShockInfo },
        set(value) { this.$store.dispatch('UpdateCarShockInfo',value) }
    },
    SafetyInfo: {
        get() { return this.$store.getters.SafetyInfo },
        set(value) { this.$store.dispatch('UpdateSafetyInfo',value) }
    },
    ContractInfo: {
        get() { return this.$store.getters.ContractInfo },
        set(value) { this.$store.dispatch('UpdateConractInfo',value) }
    },
  },
}
</script>

<style>

/* 메인 */
#app{ position:relative; padding-bottom:10px;}
#app .mainArea{}
#app .mainArea .titleBox{ position:relative; width:100%; padding:50px 10px 20px; box-sizing:border-box; background-color:#28ce99; text-align:center}
#app .mainArea .titleBox .menuBtn{ position:absolute; top:20px; left:20px;}
#app .mainArea .titleBox .menuBtn img{ width:20px;}
#app .mainArea .titleBox .title{ font-size:24px; font-weight:bold; color:#fff;}
#app .mainArea .titleBox .subTitle{ font-size:16px; font-weight:bold; color:#fff; line-height:1.2; margin-top:20px;}
#app .mainArea .titleBox .subTitle span{ color:#ffee7d}
#app .mainArea .item_list{ width:100%; padding:15px 10px; box-sizing:border-box; }
#app .mainArea .item_list .item{ position:relative; display:block; width:100%; padding:10px; box-sizing:border-box; border:1px solid #ddd; box-shadow:0 0 8px rgba(0,0,0,0.2); background-color:#fff; margin-bottom:10px; border-radius:5px;}
#app .mainArea .item_list .item .logo{ position:absolute; top:13px; left:20px; width:40px;}
#app .mainArea .item_list .item .item_title{ margin-bottom:10px}
#app .mainArea .item_list .item .item_title img{ display:inline-block; vertical-align:middle; height:18px;}
#app .mainArea .item_list .item .item_title .title{ display:inline-block; vertical-align:middle; font-size:14px; font-weight:bold; color:#666;}
#app .mainArea .item_list .item .item_title .new{ display:inline-block; vertical-align:super; font-size:10px; font-weight:bold; color:#f2000d;}
#app .mainArea .item_list .item .guageBox{ position:relative; width:100%; height:120px; background-image:url(../img/main_guage.png); background-position:center top; background-repeat:no-repeat; background-size:200px;}
#app .mainArea .item_list .item .guageBox .guage_bar{ position:absolute; left:50%; top:35px; margin-left:-12px; width:20px; transform-origin:bottom center; transform:rotate(45deg)}
#app .mainArea .item_list .item .guageBox .guage_line{ position:absolute; left:50%; top:78px; margin-left:50px; width:65px; transform-origin:bottom center; transform:rotate(-12deg)}
#app .mainArea .item_list .item .guageBox .goal_score{ position:absolute; left:50%; top:55px; margin-left:100px; font-size:14px; font-weight:bold; color:#666; text-align:center;}
#app .mainArea .item_list .item .guageBox .my_score{ position:absolute; left:0; bottom:-35px; width:100%; font-size:30px; font-weight:800; color:#333; text-align:center;}
#app .mainArea .item_list .item .guageBox .my_score p{ display:block; font-size:14px; color:#666;}
#app .mainArea .item_list .item .text01{ font-size:16px; font-weight:800; color:#333; text-align:center; margin-top:50px}
#app .mainArea .item_list .item .text02{ font-size:13px; color:#666; text-align:center; margin-top:5px;}
#app .mainArea .item_list .item .text03{ width:100%; padding:7px 0 5px; font-size:18px; font-weight:800; color:#333; text-align:center; background-color:#ceece3; margin-top:25px; margin-bottom:10px; border-radius:3px;}
#app .mainArea .item_list .item .text04{ font-size:20px; font-weight: 800; color:red; text-align:center; margin-top:5px; padding-bottom:10px;}
#app .mainArea .item_list .item .text03 span{ font-size:16px; font-weight: 400; color:#999;}
#app .mainArea .item_list .item .alarm_list{ margin-top:10px}
#app .mainArea .item_list .item .alarm_list li{ display:table; width:100%; margin-bottom:5px;}
#app .mainArea .item_list .item .alarm_list li p{ display:table-cell; font-size:15px; font-weight:bold; color:#333; vertical-align:middle;}
#app .mainArea .item_list .item .alarm_list li p.date{ font-size:12px; font-weight:normal; width:110px; padding-left:10px; box-sizing:border-box}
#app .mainArea .item_list .item .more{ font-size:11px; font-weight:bold; color:#333; text-align:right; margin-top:5px;}
#app .mainArea .item_list .item .item_text{ font-size:16px; font-weight:800; color:#333; padding:5px 0; text-align:center;}
#app .mainArea .item_list .item .text_list{ padding-left:50px; padding-bottom:10px}
#app .mainArea .item_list .item .text_list li{ font-size:14px; font-weight:bold; color:#333; margin-top:5px;}
#app .mainArea .item_list .item .history_list{ margin-top:10px}
#app .mainArea .item_list .item .history_list li{ display:table; width:100%; margin-bottom:5px;}
#app .mainArea .item_list .item .history_list li p{ display:table-cell; vertical-align:middle;}
#app .mainArea .item_list .item .history_list li p.date{ width:110px; font-size:12px; color:#333; font-weight:normal; padding-left:10px; box-sizing:border-box}
#app .mainArea .item_list .item .history_list li p.address span{ font-size:12px; font-weight:bold; color:#333; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; }
#app .mainArea .item_list .comingsoon_list{ position:relative; display:block; width:100%; padding:10px; box-sizing:border-box; border:4px solid #28ce99; box-shadow:0 0 8px rgba(0,0,0,0.2); background-color:#fff; border-radius:5px;}
#app .mainArea .item_list .comingsoon_list:before{ content:""; position:absolute; top:-10px; right:-10px; width:45px; height:45px; background-image:url(../img/icon_comingsoon.svg); background-position:center; background-repeat:no-repeat; background-size:contain; }
#app .mainArea .item_list .comingsoon_list .item_title{ font-size:14px; color:#666;}
#app .mainArea .item_list .comingsoon_list li{ margin-top:10px; padding-left:10px;}
#app .mainArea .item_list .comingsoon_list li img{ display:inline-block; vertical-align:middle; width:22px; margin-right:5px;}
#app .mainArea .item_list .comingsoon_list li span{ display:inline-block; vertical-align:middle; font-size:15px; font-weight:800; color:#333;}

/* 서브 */
#app .subArea{ }
#app .subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
#app .subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
#app .subArea .titleBox .backBtn img{ width:15px;}
#app .subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}
#app .subArea .notice_list{ width:100%; padding:10px 20px; box-sizing:border-box}
#app .subArea .notice_list a{ display:block; width:100%; padding:10px 0; border-bottom:1px solid #ddd; font-size:14px; font-weight:bold; color:#333;}

/* 팝업 슬라이드 */
.slide-fade-enter-active { transition: all .3s ease;}
.slide-fade-leave-active { transition: all .5s cubic-bezier(1.0, 0.5, 0.8, 1.0);}
.slide-fade-enter, .slide-fade-leave-to { opacity: 0;}

/* 메뉴 슬라이드 */
.slide-side-enter-active { transition: all .3s ease;}
.slide-side-leave-active { transition: all .2s cubic-bezier(1.0, 0.5, 0.8, 1.0);}
.slide-side-enter { opacity: 0; transform: translateX(-100%)}
.slide-side-leave-to { opacity: 0;}

</style>
