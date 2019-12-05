<template>
  <div id="2290644288" class="mainArea">
    <div id="9603812673" class="titleBox">
      <a id="1278953801" href="javascript:;" class="menuBtn"><img src="@/img/icon_menu.svg"></a>
      <div id="7596576479" class="title">안녕하세요, {{userName}} 님{{userLoginId}}</div>
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
          <div id="2659560575" class="goal_score">목표 점수<br>95점</div>
          <div id="8870633421" class="my_score">{{safDrvIdx}} 점<p>(상위 32%, 96위)</p></div>
        </div>
        <div id="6594630138" class="text01">좋은 안전운전 습관으로 도약하고 있습니다.</div>
        <div id="1597772086" class="text02">가속패달을 조금 더 차분히 밟아주세요.</div>
        <div id="1246721320" class="text03">지금 <span>안전운전 미션</span>을 확인해 보세요!</div>
      </a>
      <a id="4079354739" href="javascript:;" class="item">
        <div id="2613335142" class="item_title"><img id="2259556330" src="@/img/icon_accident.svg"> <span class="title">사고접수</span></div>
        <div id="9978640929" class="text04">사고 발생시 바로 연결</div>
      </a>
      </router-link>
      <router-link to="/ShockAlarm">
      <a id="8195083055" href="" class="item">
        <div id="6012095227" class="item_title"><img id="4450206969" src="@/img/icon_alarm01.svg"> <span class="title">정차 중 충격알림</span><span class="new">NEW</span></div>
        <ul id="5649529464" class="alarm_list">
          <li id="8585590273"><p class="date">11월 7일 13:00</p><p>차량 충격이 감지되었습니다.</p></li>
          <li id="6661413226"><p class="date">11월 6일 19:21</p><p>차량 충격이 감지되었습니다.</p></li>
        </ul>
        <div id="2515714085" class="more">... more</div>
      </a>
      </router-link>
      <router-link to="/CarRepair">
      <a id="4507565108" href="" class="item">
        <div id="7558405712" class="item_title"><img id="3486064755" src="@/img/icon_fix.svg"> <span class="title">정비관리</span><span class="new">NEW</span></div>
        <div id="5094331840" class="item_text">현재 누적 주행거리 {{accDist}}Km 주행</div>
        <ul id="6794243679" class="text_list">
          <li id="9524843842">- 이달의 점검 항목이 없습니다.</li>
          <li id="2016902426">- 다가오는 점검 항목을 확인하세요.</li>
        </ul>
      </a>
      </router-link>
      <router-link to="/DriveHistory">
      <a id="6185674754" href="" class="item">
        <div id="1150123414" class="item_title"><img id="5638758827" src="@/img/icon_history.svg"> <span class="title">주행이력관리</span><span class="new">NEW</span></div>
        <ul id="1229086322" class="history_list">
          <li id="9198852782"><p class="date">11월 7일 13:00</p><p class="address"><span>서울특별시 강남구 ...</span></p></li>
          <li id="7587326910"><p class="date">11월 6일 19:21</p><p class="address"><span>서울특별시 강남구 ...</span></p></li>
          <li id="7349622438"><p class="date">11월 5일 10:00</p><p class="address"><span>서울특별시 강남구 ...</span></p></li>
        </ul>
        <div id="3714380580" class="more">... more</div>
      </a>
      </router-link>
      <a id="7552253682" href="javascript:;" class="item">
        <div id="5425614371" class="item_title"><img id="8464994905" src="@/img/icon_locate.svg"> <span class="title">내차 위치 찾기</span></div>
        <div id="6545125044" class="item_text" style="padding-bottom:10px">공항, 식당에서 발렛 파킹 하셨나요?</div>
      </a>
      <ul id="6067869823" class="comingsoon_list">
        <div id="1294494412" class="item_title">신규 예정 서비스</div>
        <li id="7244752797" @click="showComingsoon01 = !showComingsoon01"><img id="6769156072" src="@/img/icon_119.svg"> <span>119 자동출동 서비스 (대형사고 발생시)</span></li>
        <li id="2102151511"><img src="@/img/icon_alarm02.svg"> <span>다양한 알림 서비스</span></li>
        <li id="9737112597"><img src="@/img/icon_ai.svg"> <span>우전비스(AI) 서비스</span></li>
        <li id="2707965502"><img src="@/img/icon_change.svg"> <span>최적의 교환주기 추천 서비스</span></li>
        <li id="7117272266"><img src="@/img/icon_fix.svg"> <span>가까운 정비 업소 알림/예약 서비스</span></li>
      </ul>
    </div>
    <transition name="slide-fade">
      <Comingsoon01 v-if="showComingsoon01" @close="showComingsoon01=false"></Comingsoon01>
    </transition>
  </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Comingsoon01 from '@/components/popup/Comingsoon01.vue'
import Constant from '@/Constant'

export default {
  name: 'main',
  data () {
    return {
      showComingsoon01: false,
      userName: "",
      safDrvIdx: ""
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

    //운행 이력 조회
    getDrvInfo() {
      console.log("CarName : "+ this.UserInfo.UserName);
      console.log("CarNum : "+ this.UserInfo.CarNo);
      console.log("SafDrvIdx : " + this.DrvInfo.SafDrvIdx);
      console.log("UserLoginId : " + this.UserInfo.UserLoginId);
      
      var today_DATE = {};
      today_DATE = this.getTodayDate();
      var stDtToday = today_DATE.stDtToday;
      var edDtToday = today_DATE.edDtToday;

      console.log("stDt : " + today_DATE.stDtToday);
      console.log("edDt : " + today_DATE.edDtToday);
      
      var param = {};
      param.authKey = Constant.SMARTLINK_AUTH_KEY;
      param.reqTyp = "n";
      param.stDt = stDtToday;
      param.edDt = edDtToday;
      param.carNum = this.carNo;

      axios({
       method: 'POST',
       url: Constant.SMARTLINK_URL+"/reqDrvHst",
       headers: Constant.SMARTLINK_HEADER,
       data: param
      })
      .then((result) => {
        console.log("회신 결과 : ", JSON.stringify(result));

        this.DrvInfo.movTm = result.data.drvHsts[0].movTm; // 운행시간
        this.DrvInfo.safDrvIdx = result.data.drvHsts[0].safDrvIdx; // 안전지수
        
        this.safDrvIdx = this.DrvInfo.safDrvIdx; // 안전지수
        console.log("this.DrvInfo.SafeIndex : " + this.DrvInfo.safDrvIdx);

        if(this.safDrvIdx != null && this.safDrvIdx != ""){
          var gageBar = document.getElementById('1771345032'); // 게이지 Bar
          var degree = this.safDrvIdx * 1.8 - 90;
          gageBar.style.transform = 'rotate('+degree+'deg)';
        }
      }).catch((error) => {
        console.log(error);
      });
    },

    // 자동차 정보
    getCarInfo() {
      var param = {};
      param.authKey = Constant.SMARTLINK_AUTH_KEY;
      param.reqTyp = "n";
      param.carNum = this.carNo;

      axios({
       method: 'POST',
       url: Constant.SMARTLINK_URL+"/reqCarInfo",
       headers: Constant.SMARTLINK_HEADER,
       data: param
      })
      .then((result) => {
        console.log("회신 결과 : ", JSON.stringify(result));
        console.log("CarInfo 회신 결과 : ", result);
        this.CarInfo.accDist = result.data.cars[0].accDist; // 총 누적거리
        console.log("this.CarInfo.accDist : " + this.CarInfo.accDist);
      }).catch((error) => {
        console.log(error);
      });
    }
  },
  beforeMount(){
    this.getDrvInfo();
    this.getCarInfo();
    this.getTodayDate();
  },
  components: {
    Comingsoon01: Comingsoon01
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
#app .mainArea .item_list .item .guageBox .goal_score{ position:absolute; left:52%; top:65px; margin-left:95px; font-size:14px; font-weight:bold; color:#666; text-align:center;}
#app .mainArea .item_list .item .guageBox .my_score{ position:absolute; left:0; bottom:-10px; width:100%; font-size:30px; font-weight:800; color:#333; text-align:center;}
#app .mainArea .item_list .item .guageBox .my_score p{ display:block; font-size:14px; color:#666;}
#app .mainArea .item_list .item .text01{ font-size:16px; font-weight:800; color:#333; text-align:center; margin-top:20px}
#app .mainArea .item_list .item .text02{ font-size:13px; color:#666; text-align:center; margin-top:5px;}
#app .mainArea .item_list .item .text03{ width:100%; padding:7px 0 5px; font-size:18px; font-weight:800; color:#333; text-align:center; background-color:#ceece3; margin-top:25px; margin-bottom:10px; border-radius:3px;}
#app .mainArea .item_list .item .text04{ font-size:20px; font-weight: 800; color:red; text-align:center; margin-top:5px; padding-bottom:10px;}
#app .mainArea .item_list .item .text03 span{ color:#f2000d;}
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

</style>
