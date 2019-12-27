<template>
  <div id="1763476558" class="subArea">
		<div id="3883037607" class="titleBox">
      <router-link to="/Main">
      <a href="" id="SafeReport_backBtn" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
      <div id="4755611960" class="title">안전 점수</div>
    </div>
    <ul id="3610927099" class="infoBox report">
      <li id="3491418214">
        <div id="4290904421" class="info_title">나의 안전점수 ({{thisMonth}}월 {{thisWeek}}주차)</div>
            <div id="7416675010" class="report_text01">{{DrvInfo.drvHstIFData.safDrvMessage}}</div>
            <div id="4479799753" class="report_text02">{{DrvInfo.drvHstIFData.safDrvRecommend}}</div>
            <a href="javascript:;" id="SafeReport_info" class="change_info" @click="showComingsoon07 = !showComingsoon07">나의 운전 점수 <img src="../img/icon_i.svg" id=""></a>
            <div id="6880835588" class="myReport">
              <div id="7199598694" class="box">
                    <div id="8222585707" class="textBox">
                        <div id="9799274711" class="text02">{{DrvInfo.drvHstIFData.safDrvIdx}}<span>점</span></div>
                        <div id="6613488413" class="text03">(상위 {{SafetyInfo.safeIdxRank}}%, {{parseInt(SafetyInfo.safeIdxRank/100*SafetyInfo.drvrCnt)}}위)</div>
                    </div>
                    <div id="1040758924" class="gradeBox">
                        <div id="3031104676" class="item" v-if="SafetyInfo.overSpeedIdx !== 0">
                            <img v-if="SafetyInfo.overSpeedIdx/0.4 < 45" src="../img/icon_grade05.png" id="">
                            <img v-else-if="SafetyInfo.overSpeedIdx/0.4 >= 45 && SafetyInfo.overSpeedIdx/0.4 < 75" src="../img/icon_grade04.png" id="">
                            <img v-else-if="SafetyInfo.overSpeedIdx/0.4 >= 75 && SafetyInfo.overSpeedIdx/0.4 < 85" src="../img/icon_grade03.png" id="">
                            <img v-else-if="SafetyInfo.overSpeedIdx/0.4 >= 85 && SafetyInfo.overSpeedIdx/0.4 < 95" src="../img/icon_grade02.png" id="">
                            <img v-else src="../img/icon_grade01.png" id="">
                            과속
                        </div>
                        <div id="4160634505" class="item" v-if="SafetyInfo.fstAcclIdx !== 0">
                          <img v-if="SafetyInfo.fstAcclIdx/0.4 < 45" src="../img/icon_grade05.png" id="">
                          <img v-else-if="SafetyInfo.fstAcclIdx/0.4 >= 45 && SafetyInfo.fstAcclIdx/0.4 < 75" src="../img/icon_grade04.png" id="">
                          <img v-else-if="SafetyInfo.fstAcclIdx/0.4 >= 75 && SafetyInfo.fstAcclIdx/0.4 < 85" src="../img/icon_grade03.png" id="">
                          <img v-else-if="SafetyInfo.fstAcclIdx/0.4 >= 85 && SafetyInfo.fstAcclIdx/0.4 < 95" src="../img/icon_grade02.png" id="">
                          <img v-else src="../img/icon_grade01.png" id="">
                            급가속
                        </div>
                        <div id="2650417521" class="item" v-if="SafetyInfo.fastDecIdx !== 0">
                          <img v-if="SafetyInfo.fastDecIdx/0.2 < 45" src="../img/icon_grade05.png" id="">
                          <img v-else-if="SafetyInfo.fastDecIdx/0.2 >= 45 && SafetyInfo.fastDecIdx/0.2 < 75" src="../img/icon_grade04.png" id="">
                          <img v-else-if="SafetyInfo.fastDecIdx/0.2 >= 75 && SafetyInfo.fastDecIdx/0.2 < 85" src="../img/icon_grade03.png" id="">
                          <img v-else-if="SafetyInfo.fastDecIdx/0.2 >= 85 && SafetyInfo.fastDecIdx/0.2 < 95" src="../img/icon_grade02.png" id="">
                          <img v-else src="../img/icon_grade01.png" id="">
                            급감속
                        </div>
                    </div>
                </div>
                <div id="8358222060" class="mileageBox">
                  <div id="9305493453" class="mileage_text">
                    <div id="5140458082" class="text01">주행거리</div>
                    <div id="1412679878" class="text02">{{DrvInfo.drvHstIFData.monthTotDrvDist}} km</div>
                    </div>
                    <div id="5573506553" class="mileage_text">
                      <div id="7997781230" class="text01">주행시간</div>
                      <div id="4714375196" class="text02">{{DrvInfo.drvHstIFData.totDrvTm}}</div>
                    </div>
                    <div id="3332851990" class="mileage_text">
                      <div id="4099284371" class="text01">주행횟수</div>
                      <div id="8164271337" class="text02">{{DrvInfo.drvHstIFData.drvThisMonCount}}회 <span>(야간 {{DrvInfo.drvHstIFData.drvNightCount}}회)</span></div>
                    </div>
                </div>
            </div>
        </li>

        <li id="1001295270" class="comingsoon">
          <div id="1885665149" class="info_title" style="color:#aaa">나의 미션 (서비스 예정)</div>
            <div id="9868666097" class="missionBox">
                <div id="2767257233" class="text01" style="color:#aaa">안전점수 <font color="#ffb8b8">95점</font>을 달성하시면<br><font color="#ffb8b8">스타벅스 커피 쿠폰</font>을 드립니다.</div>
                <div id="9073072639" class="text02" style="color:#aaa">(Beta Test 기간 내, 50km 이상 주행시)</div>
                <img src="../img/coffee.png" class="coffee" id="6096018118">
		</div>
        </li>

        <li id="2169101509">
          <div id="6088604891" class="info_title">안전점수 (주간)</div>
            <div class="chartBox">
                <table>
                  <tr>
                    <th id="8511321822">
                      <p id="6301537765" class="number">{{DrvInfo.drvHstIFData.w1stSafeIdx}}</p>
                      <div id="6904238917" class="bar color01" v-bind:style="w1stSafeStyle"></div>
                    </th>
                    <th id="1555248621">
                      <p id="5156778777" class="number">{{DrvInfo.drvHstIFData.w2ndSafeIdx}}</p>
                      <div id="9561783838" class="bar color02" v-bind:style="w2ndSafeStyle"></div>
                    </th>
                    <th id="2298697235">
                      <p id="4951439354" class="number">{{DrvInfo.drvHstIFData.w3rdSafeIdx}}</p>
                      <div id="6448350963" class="bar color03" v-bind:style="w3rdSafeStyle"></div>
                    </th>
                    <th id="3095348624">
                      <p id="2701190548" class="number">{{DrvInfo.drvHstIFData.w4thSafeIdx}}</p>
                      <div id="6243763942" class="bar color04" v-bind:style="w4thSafeStyle"></div>
                    </th>
                  </tr>
                  <tr>
                    <td id="9366924947">1주</td>
                      <td id="4980277591">2주</td>
                      <td id="8438324623">3주</td>
                      <td id="3952004152">4주</td>
                  </tr>
                </table>
              </div>
        </li>
        <li id="7577102497">
          <div id="SafeReport_tip" class="tip" @click="showSafeDriveTip = !showSafeDriveTip">안전운전 Tip <span>도로위의 블랙홀 '포트홀' 대처법</span></div>
        </li>
    </ul>
    <transition name="slide-fade">
      <SafeDriveTip v-if="showSafeDriveTip" @close="showSafeDriveTip=false"></SafeDriveTip>
      <Comingsoon07 v-if="showComingsoon07" @close="showComingsoon07=false"></Comingsoon07>
    </transition>
    </div>

</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
import SafeDriveTip from '@/components/popup/SafeDriveTip.vue'
import Constant from '@/Constant'
import Comingsoon07 from '@/components/popup/Comingsoon07.vue'

export default {
  name: 'SafeReport',
  data () {
    return {
      w1stSafeStyle: "",
      w2ndSafeStyle: "",
      w3rdSafeStyle: "",
      w4thSafeStyle: "",
      showSafeDriveTip: false,
      thisMonth: "",
      thisWeek: "",
      showComingsoon07: false,
    }
  },
  created: function() {
    console.log('DrvInfo : ', this.DrvInfo);

    // 일단 시간이 없어서 첫주차는 하드코딩하고....
    var stDt = '2019-12-01'
    var edDt = '2019-12-07';

    var param = {};
    param.authKey = Constant.SMARTLINK_AUTH_KEY;
    param.userId = this.UserInfo.UserLoginId;
    param.stDt = stDt;
    param.edDt = edDt;

    console.log("====== getSafetyInfo 1주차 ======");
    console.log(param);

    axios({
     method: 'POST',
     url: Constant.SMARTLINK_URL+"/reqSafeRanking",
     headers: Constant.SMARTLINK_HEADER,
     data: param
    })
    .then((result) => {
      console.log("getSafetyInfo 1주차 회신 결과 : ", result);
      this.DrvInfo.drvHstIFData.w1stSafeIdx = result.data.safeRank.safeIdx;
      this.w1stSafeStyle = "height : " + this.DrvInfo.drvHstIFData.w1stSafeIdx + "px";

    }).catch((error) => {
      console.log(error);
    });

    // 둘째주도 하드코딩하고....
    stDt = '2019-12-08'
    edDt = '2019-12-14';

    var param = {};
    param.authKey = Constant.SMARTLINK_AUTH_KEY;
    param.userId = this.UserInfo.UserLoginId;
    param.stDt = stDt;
    param.edDt = edDt;

    console.log("====== getSafetyInfo 2주차 ======");
    console.log(param);

    axios({
     method: 'POST',
     url: Constant.SMARTLINK_URL+"/reqSafeRanking",
     headers: Constant.SMARTLINK_HEADER,
     data: param
    })
    .then((result) => {
      console.log("getSafetyInfo 2주차 회신 결과 : ", result);
      this.DrvInfo.drvHstIFData.w2ndSafeIdx = result.data.safeRank.safeIdx;
      this.w2ndSafeStyle = "height : " + this.DrvInfo.drvHstIFData.w2ndSafeIdx + "px";

    }).catch((error) => {
      console.log(error);
    });

    this.DrvInfo.drvHstIFData.w3rdSafeIdx = this.SafetyInfo.safeIdx;
    this.DrvInfo.drvHstIFData.w4thSafeIdx = 0;

    this.w1stSafeStyle = "height : " + this.DrvInfo.drvHstIFData.w1stSafeIdx + "px";
    this.w2ndSafeStyle = "height : " + this.DrvInfo.drvHstIFData.w2ndSafeIdx + "px";
    this.w3rdSafeStyle = "height : " + this.DrvInfo.drvHstIFData.w3rdSafeIdx + "px";
    this.w4thSafeStyle = "height : " + this.DrvInfo.drvHstIFData.w4thSafeIdx + "px";


    var now = new Date();
    console.log("This Week : ", this.weekNumberByMonth(now));

    this.thisMonth = this.weekNumberByMonth(now).month;
    this.thisWeek = this.weekNumberByMonth(now).weekNo;
    // 정확히는 이렇게 계산하자...
    /*
    for(var i = 0; i< this.thisWeek; i++) {
      this.getThisMonthWeekData(i);
    }*/
  },
  methods: {
    //getThisMonthWeekData(weekNo){  // 이번달의 1주차, 2주차, 3주차, 4주차, 5주차 값을 계산하여 조회 함.
    //},
    weekNumberByMonth(dateFormat) {
      const inputDate = new Date(dateFormat);

      // 인풋의 년, 월
      let year = inputDate.getFullYear();
      let month = inputDate.getMonth() + 1;

      // 목요일 기준 주차 구하기
      const weekNumberByThurFnc = (paramDate) => {

        const year = paramDate.getFullYear();
        const month = paramDate.getMonth();
        const date = paramDate.getDate();

        // 인풋한 달의 첫 날과 마지막 날의 요일
        const firstDate = new Date(year, month, 1);
        const lastDate = new Date(year, month+1, 0);
        const firstDayOfWeek = firstDate.getDay() === 0 ? 7 : firstDate.getDay();
        const lastDayOfweek = lastDate.getDay();

        // 인풋한 달의 마지막 일
        const lastDay = lastDate.getDate();

        // 첫 날의 요일이 금, 토, 일요일 이라면 true
        const firstWeekCheck = firstDayOfWeek === 5 || firstDayOfWeek === 6 || firstDayOfWeek === 7;
        // 마지막 날의 요일이 월, 화, 수라면 true
        const lastWeekCheck = lastDayOfweek === 1 || lastDayOfweek === 2 || lastDayOfweek === 3;

        // 해당 달이 총 몇주까지 있는지
        const lastWeekNo = Math.ceil((firstDayOfWeek - 1 + lastDay) / 7);

        // 날짜 기준으로 몇주차 인지
        let weekNo = Math.ceil((firstDayOfWeek - 1 + date) / 7);

        // 인풋한 날짜가 첫 주에 있고 첫 날이 월, 화, 수로 시작한다면 'prev'(전달 마지막 주)
        if(weekNo === 1 && firstWeekCheck) weekNo = 'prev';
        // 인풋한 날짜가 마지막 주에 있고 마지막 날이 월, 화, 수로 끝난다면 'next'(다음달 첫 주)
        else if(weekNo === lastWeekNo && lastWeekCheck) weekNo = 'next';
        // 인풋한 날짜의 첫 주는 아니지만 첫날이 월, 화 수로 시작하면 -1;
        else if(firstWeekCheck) weekNo = weekNo -1;

        return weekNo;
      };

      // 목요일 기준의 주차
      let weekNo = weekNumberByThurFnc(inputDate);

      // 이전달의 마지막 주차일 떄
      if(weekNo === 'prev') {
        // 이전 달의 마지막날
        const afterDate = new Date(year, month-1, 0);
        year = month === 1 ? year - 1 : year;
        month = month === 1 ? 12 : month - 1;
        weekNo = weekNumberByThurFnc(afterDate);
      }
      // 다음달의 첫 주차일 때
      if(weekNo === 'next') {
        year = month === 12 ? year + 1 : year;
        month = month === 12 ? 1 : month + 1;
        weekNo = 1;
      }

      return {year, month, weekNo};
    }
  },
  beforeMount(){

  },
  mounted () {
    this.$ga.page('/SafeReport');
    console.log("SafetyInfo : ", this.SafetyInfo);
  } ,
  components: {
    SafeDriveTip: SafeDriveTip,
    Comingsoon07: Comingsoon07,
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
    SafetyInfo: {
        get() { return this.$store.getters.SafetyInfo },
        set(value) { this.$store.dispatch('UpdateSafetyInfo',value) }
    },
  },
}
</script>

<style>
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .infoBox{ width:100%; padding:20px 10px; box-sizing:border-box;}
.subArea .infoBox li{ position:relative; width:100%; padding:15px 10px; box-sizing:border-box; border:1px solid #ddd; box-shadow:0 0 8px rgba(0,0,0,0.2); margin-bottom:15px; border-radius:5px;}
.subArea .infoBox li:last-child{ margin-bottom:0}
.subArea .infoBox li .info_title{ font-size:18px; font-weight:800; color:#333; margin-bottom:10px;}
.subArea .infoBox li table{ width:100%;}
.subArea .infoBox li table th{ width:80px; font-size:14px; font-weight:bold; color:#777; text-align:left; background-color:transparent; vertical-align:middle; letter-spacing:-0.03em;}
.subArea .infoBox li table td{ padding:5px 0; vertical-align:middle;}
.subArea .infoBox li table td p{ height:25px; font-size:14px; font-weight:14px; font-weight:bold; color:#777; padding:5px 8px; box-sizing:border-box; background-color:#efefef; letter-spacing:-0.03em;}
.subArea .infoBox li table .sub th{ font-weight:normal; vertical-align:top}
.subArea .infoBox li table .sub td{ padding:0; vertical-align:top}
.subArea .infoBox li table .sub td p{ height:auto; background-color:transparent; padding:0 8px;}
.subArea .infoBox .info_text{ font-size:18px; font-weight:800; color:#333; margin-bottom:10px; letter-spacing:-0.03em;}
.subArea .infoBox .info_text span{ padding:5px 20px; background-color:#efefef}
.subArea .infoBox .info_text_orange{ font-size:15px; font-weight:bold; color:#ed6c00; line-height:1.3; text-align:center;}
.subArea .infoBox .info_text_black{ font-size:13px; font-weight:bold; color:#333; text-align:center; letter-spacing:-0.03em}
.subArea .infoBox .change_info{ position:absolute; top:15px; right:14px; font-size:11px; font-weight:bold; color:#777;}
.subArea .infoBox .change_info img{ width:11px; vertical-align:middle;}
.subArea .infoBox .tbBox{ width:100%; padding:0 10px; box-sizing:border-box;}
.subArea .infoBox .tbBox table th{ width:110px}
.subArea .infoBox .tbBox table td p{ display:inline-block; vertical-align:middle; width:135px; text-align:center; font-weight:800; color:#333;}
.subArea .infoBox .tbBox table td p.orange{ color:#ed6c00;}
.subArea .infoBox .tbBox table td .btn{ display:inline-block; vertical-align:middle; padding:0 5px;}
.subArea .infoBox .tbBox table td .btn img{ width:16px;}
.subArea .infoBox li.comingsoon{}
.subArea .infoBox li.comingsoon:before{ content:""; position:absolute; top:-8px; right:-5px; width:45px; height:45px; background-image:url(../img/icon_comingsoon.svg); background-position:center; background-repeat:no-repeat; background-size:contain; }
.subArea .infoBox li.comingsoon .service{ margin-top:10px;}
.subArea .infoBox li.comingsoon .service img{ display:inline-block; vertical-align:middle; width:22px; margin-right:5px; margin-left:10px;}
.subArea .infoBox li.comingsoon .service span{ display:inline-block; vertical-align:middle; font-size:15px; font-weight:800; color:#333;}
.subArea .infoBox li.comingsoon .service p{ display:block; width:100%; font-size:12px; font-weight:bold; color:#333; text-align:center; line-height:1.2; margin-top:7px;}
.subArea .infoBox li .mileage{ width:100%; padding:0 10px; box-sizing:border-box; overflow:hidden; margin-top:15px}
.subArea .infoBox li .mileage:after{ content:""; display:block; clear:both}
.subArea .infoBox li .mileage .textBox{ float:left; display:inline-block; text-align:left;}
.subArea .infoBox li .mileage .textBox .text01{ font-size:12px; font-weight:bold; color:#999; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .textBox .text02{ font-size:16px; font-weight:800; color:#333; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .guageBox{ float:right; display:inline-block; width:68%;}
.subArea .infoBox li .mileage .guageBox .top_text{ overflow:hidden}
.subArea .infoBox li .mileage .guageBox .top_text:after{ content:""; display:block; clear:both}
.subArea .infoBox li .mileage .guageBox .top_text .left{ float:left; font-size:10px; font-weight:bold; color:#ef8300; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .guageBox .top_text .right{ float:right; font-size:10px; font-weight:bold; color:#e60012; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .guageBox .guage{ position:relative; width:100%; height:20px; background-color:#e60012}
.subArea .infoBox li .mileage .guageBox .guage span{ position:absolute; display:block; top:0; left:0; height:100%; background-color:#ef8300; z-index:1}
.subArea .infoBox li .mileage .guageBox .bottom_text{ overflow:hidden}
.subArea .infoBox li .mileage .guageBox .bottom_text:after{ content:""; display:block; clear:both}
.subArea .infoBox li .mileage .guageBox .bottom_text .left{ float:left; font-size:10px; font-weight:bold; color:#999; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .guageBox .bottom_text .right{ float:right; font-size:10px; font-weight:bold; color:#999; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage_item{ width:100%; padding:0 10px; box-sizing:border-box;}
.subArea .infoBox li .mileage_item .mileage_info{ position:relative; overflow:hidden; margin-top:15px}
.subArea .infoBox li .mileage_item .mileage_info:after{ content:""; display:block; clear:both}
.subArea .infoBox li .mileage_item .mileage_info .textBox{ float:left; width:58%; text-align:left;}
.subArea .infoBox li .mileage_item .mileage_info .textBox .text01{ font-size:14px; font-weight:800; color:#666; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage_item .mileage_info .textBox .text02{ font-size:10px; font-weight:bold; color:#666; line-height:1.2; margin-top:5px; letter-spacing:-0.05em;}
.subArea .infoBox li .mileage_item .mileage_info .gradeBox{ position:absolute; right:0; bottom:0; width:42%; text-align:right;}
.subArea .infoBox li .mileage_item .mileage_info .gradeBox .item{ display:inline-block; vertical-align:middle; text-align:center; font-size:11px; font-weight:bold; color:#999; margin:0 2px;}
.subArea .infoBox li .mileage_item .mileage_info .gradeBox .item img{ display:block; width:32px; margin:0 auto 5px;}
.subArea .infoBox li .mileage_item .graphBox{ width:100%; min-height:80px; background-color:#555; margin-top:10px; border-radius:5px;}

.subArea .alarm li table th{ font-size:11px; color:#898989; vertical-align:top}
.subArea .alarm li table td{ font-size:14px; font-weight:800; color:#333; line-height:1.2; vertical-align:top; padding-top:0; padding-bottom:10px;}
.subArea .report li .report_text01{ font-size:19px; font-weight:800; color:#333; text-align:left; margin-top:20px; letter-spacing:-0.05em;}
.subArea .report li .report_text02{ font-size:13px; color:#333; margin-top:5px; text-align:left;}
.subArea .report li .myReport{ width:100%; padding:0 10px; box-sizing:border-box; margin-top:20px}
.subArea .report li .myReport .box{ overflow:hidden; text-align:center;}
.subArea .report li .myReport .box .textBox{ display:inline-block; vertical-align:bottom; width:100px; text-align:center; letter-spacing:-0.05em;}
.subArea .report li .myReport .box .textBox .text01{ font-size:11px; font-weight:bold; color:#777;}
.subArea .report li .myReport .box .textBox .text01 img{ width:11px; vertical-align:middle}
.subArea .report li .myReport .box .textBox .text02{ font-size:44px; font-weight:800; color:#333; line-height:1;}
.subArea .report li .myReport .box .textBox .text02 span{ font-size:20px; font-weight:bold;}
.subArea .report li .myReport .box .textBox .text03{ font-size:12px; font-weight:bold; color:#999;}
.subArea .report li .myReport .box .gradeBox{ display:inline-block; vertical-align:bottom;}
.subArea .report li .myReport .box .gradeBox .item{ display:inline-block; vertical-align:middle; text-align:center; font-size:12px; font-weight:bold; color:#999; margin:0 4px;}
.subArea .report li .myReport .box .gradeBox .item img{ display:block; width:45px; margin:0 auto 5px;}
.subArea .report li .myReport .mileageBox{ width:100%; padding:10px; box-sizing:border-box; border:2px solid #c9caca; background-color:#efefef; border-radius:7px; text-align:center; margin-top:20px}
.subArea .report li .myReport .mileageBox .mileage_text{ position:relative; display:inline-block; vertical-align:middle; padding:0 7px; box-sizing:border-box; text-align:center}
.subArea .report li .myReport .mileageBox .mileage_text:after{ content:""; display:block; position:absolute; width:1px; height:30px; top:0; right:-3px; background-color:#c9caca;}
.subArea .report li .myReport .mileageBox .mileage_text:last-child:after{ display:none}
.subArea .report li .myReport .mileageBox .mileage_text .text01{ font-size:12px; font-weight:bold; color:#999;}
.subArea .report li .myReport .mileageBox .mileage_text .text02{ font-size:13px; font-weight:800; color:#333; margin-top:5px;}
.subArea .report li .myReport .mileageBox .mileage_text .text02 span{ font-size:11px; font-weight:bold; color:#aaa;}
.subArea .report li .missionBox{ position:relative; text-align:center; margin-top:15px;}
.subArea .report li .missionBox .text01{ font-size:19px; font-weight:800; color:#333; letter-spacing:-0.05em;}
.subArea .report li .missionBox .text02{ font-size:12px; font-weight:bold; color:#333; margin-top:5px;}
.subArea .report li .missionBox .coffee{ position:absolute; right:5px; bottom:10px; width:40px;}
.subArea .report li .chartBox{ width:100%; padding:0 10px; box-sizing:border-box; margin-top:20px;}
.subArea .report li .chartBox table{ width:100%; border-collapse:collapse;}
.subArea .report li .chartBox table th{ width:25%; background-color:transparent; text-align:center; padding:0; vertical-align: bottom;}
.subArea .report li .chartBox table th .number{ font-size:13px; font-weight:800; color:#999;}
.subArea .report li .chartBox table th .bar{ width:20px; height:80px; margin:0 auto;}
.subArea .report li .chartBox table th .color01{ background-color:#f9bd00}
.subArea .report li .chartBox table th .color02{ background-color:#abcd03}
.subArea .report li .chartBox table th .color03{ background-color:#39b483}
.subArea .report li .chartBox table th .color04{ background-color:#ed6c00}
.subArea .report li .chartBox table td{ padding:5px 0; font-size:14px; font-weight:800; color:#333; text-align:center; border-top:1px solid #ddd;}
.subArea .report li .tip{ text-align:center; padding:5px 0; font-size:19px; font-weight:800; color:#333; letter-spacing:-0.05em;}
.subArea .report li .tip span{ font-size:14px; font-weight:bold; color:#888; margin-left:15px;}


/* 팝업 슬라이드 */
.slide-fade-enter-active { transition: all .3s ease;}
.slide-fade-leave-active { transition: all .5s cubic-bezier(1.0, 0.5, 0.8, 1.0);}
.slide-fade-enter, .slide-fade-leave-to { opacity: 0;}
</style>
