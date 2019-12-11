<template>
  <div id="4158449995" class="subArea">
		<div id="5433017376" class="titleBox">
      <router-link to="/Main">
      <a href="" id="4916679281" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
            <div id="3273278861" class="title">주행 이력 관리</div>
        </div>
        <ul id="3403304624" class="infoBox mileage">
          <li id="3299986171">
            <div id="1589697674" class="info_text">누적 주행거리 <span>{{CarInfo.accDist | currencyNum}} Km</span></div>
                <!--<div id="7145441350" class="info_text_black">스마트케어 (Smart Care) 설치 이후의 주행거리를 말합니다.</div>-->
                <div class="mileage" v-if="ContractInfo.RentAMT !== ''">
                  <div id="8800093588" class="textBox">
                    <div id="7895560229" class="text01">총 주행거리</div>
                    <div id="5062870532" class="text02">{{CarInfo.accDist | currencyNum}} km</div>
                  </div>
                  <div id="8684162098" class="guageBox">
                    <div id="5946694751" class="top_text">
                      <div id="1055888146" class="left"></div>
                          <div id="6403556384" class="right">{{contractDist}}</div>
                      </div>
                      <div id="3546067459" class="guage"><span v-bind:style="contractDistBarStyle"></span></div>
                      <div id="2946534962" class="bottom_text">
                        <div id="7217849805" class="left"></div>
                          <div id="8110743748" class="right">총 계약 거리</div>
                      </div>
                  </div>
                </div>
                <div id="2884652697" class="mileage" v-if="ContractInfo.RentAMT !== '' && ContractInfo.ContDist !== '0'">
                  <div id="1034217117" class="textBox">
                    <div id="8916390546" class="text01">최근 한달</div>
                    <div id="9433829126" class="text02">{{DrvInfo.drvHstIFData.totDrvDist | currencyNum}} km</div>
                  </div>
                  <div id="9017259802" class="guageBox">
                    <div id="9908387410" class="top_text">
                      <div id="6189443755" class="left"></div>
                      <div id="6276053519" class="right">{{recommendDist}}</div>
                  </div>
                  <div id="1195771929" class="guage"><span v-bind:style="recommendDistBarStyle"></span></div>
                  <div id="4652004510" class="bottom_text">
                    <div id="4999187550" class="left"></div>
                      <div id="9602309909" class="right" >권장 주행거리</div>
                  </div>

              </div>
            </div>
            <div id="9602309909" class="normal" v-if="!recommandEmphasize">{{recommendMessage}}</div>
            <div id="9602309909" class="emphasize" v-if="recommandEmphasize">{{recommendMessage}}</div>
        </li>

            <li id="8899113537">
              <div id="4208281451" class="info_title">이전 주행 기록</div>

                <div id="3903253433" class="mileage_item" v-for="(drv, index) in drvHistList" v-bind:key="index">
                  <div id="5220113684" class="mileage_info">
                      <div id="5523879721" class="textBox">
                          <div id="4047802892" class="text01">{{drv.dist}} km | {{drv.movTm}}</div>
                          <div id="2752795652" class="text02">
                              {{drv.startAddr}} → {{drv.endAddr}}<br>
                              {{drv.startDate}} ~ {{drv.endDate}}
                          </div>
                      </div>
                      <div id="7346146481" class="gradeBox">
                          <div id="3151257694" class="item" v-if="drv.overSpdIdx === '양호'">
                              <img src="../img/icon_grade03.svg">과속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.overSpdIdx === '안전'">
                              <img src="../img/icon_grade02.svg">과속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.overSpdIdx === '모범'">
                              <img src="../img/icon_grade01.svg">과속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.fstAccelIdx === '양호'">
                              <img src="../img/icon_grade03.svg">급가속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.fstAccelIdx === '안전'">
                              <img src="../img/icon_grade02.svg">급가속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.fstAccelIdx === '모범'">
                              <img src="../img/icon_grade01.svg">급가속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.fstDecelIdx === '양호'">
                              <img src="../img/icon_grade03.svg">급감속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.fstDecelIdx === '안전'">
                              <img src="../img/icon_grade02.svg">급감속
                          </div>
                          <div id="3151257694" class="item" v-if="drv.fstDecelIdx === '모범'">
                              <img src="../img/icon_grade01.svg">급감속
                          </div>
                      </div>
                  </div>
                  <div v-bind:id="'TmapLayer_' + drv.drvId" class="graphBox"></div>
                </div>

            </li>
        </ul>
    </div>
</template>

<script src="https://apis.openapi.sk.com/tmap/js?version=1&format=javascript&appKey=145167c3-796e-4989-b8ed-74241254b771"></script>
<script src="https://apis.openapi.sk.com/tmap/jsv2?version=1&appkey=145167c3-796e-4989-b8ed-74241254b771"></script>
<script>

export default {
  name: 'DriveHistory',
  data () {
    return {
      drvHistList: [],
      contractDist: "",
      contractDistBarStyle: "",
      recommendDist: "",
      recommendDistBarStyle: "",
      recommendMessage: "",
      recommandEmphasize: false
    }
  },
  mounted () {
    this.$ga.page('/DriveHistory');
    console.log("Mounted...");
    console.log("CarContractInfo : ", this.ContractInfo);

    for(var info of this.DrvInfo.drvGpsList) {
      if(info.gpsRawData !== undefined) {
        var id = "TmapLayer_" + info.drvId;

        var map = new Tmapv2.Map(id,
                      {
                        center: new Tmapv2.LatLng(info.gpsRawData[parseInt(info.gpsRawData.length/2)].lat, info.gpsRawData[parseInt(info.gpsRawData.length/2)].lon), // 지도 초기 좌표
                        width : "100%",
                        height : "250px",
                        zoom: 13
                      });

        var pathList = [];
        for(var gps of info.gpsRawData) {
          pathList.push(new Tmapv2.LatLng(gps.lat, gps.lon));
        }
        var polyline = new Tmapv2.Polyline(
                      {
                        path: pathList,
                        strokeColor: "#dd00dd",
                        strokeWeight:6,
                        map:map
                      });
      }
    }
  },
  created () {
    console.log("DrvInfo : ", this.DrvInfo);

    if(this.ContractInfo.ContDist === '0') {
      this.contractDist = "무제한";
      var now = new Date();
      var start = new Date(this.ContractInfo.ContStart);
      var end = new Date(this.ContractInfo.ContEnd);
      this.contractDistBarStyle = "width:" + parseInt((now-start)/(end-start)*100) + "%" ;
    }
    else {


      this.contractDist = (this.ContractInfo.ContDist * this.ContractInfo.ContPeriod / 12).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "km (" + ((this.CarInfo.accDist)/(this.ContractInfo.ContDist * this.ContractInfo.ContPeriod / 12)*100).toFixed(1) + "%)";
      if((this.CarInfo.accDist) < (this.ContractInfo.ContDist * this.ContractInfo.ContPeriod / 12)*100)
        this.contractDistBarStyle = "width:" + parseInt((this.CarInfo.accDist)/(this.ContractInfo.ContDist * this.ContractInfo.ContPeriod / 12)*100) + "%";
      else
        this.contractDistBarStyle = "width:100%; background-color:red;";

     this.recommendDist = parseInt(this.ContractInfo.ContDist / 12).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "km (" + ((this.DrvInfo.drvHstIFData.totDrvDist)/(this.ContractInfo.ContDist / 12) * 100).toFixed(1) + "%)";

     if(this.DrvInfo.drvHstIFData.totDrvDist < (this.ContractInfo.ContDist / 12)) {

       this.recommendDistBarStyle = "width:" + parseInt((this.DrvInfo.drvHstIFData.totDrvDist/(this.ContractInfo.ContDist / 12)) * 100) + "%";
       this.recommendMessage = "이번달 권장주행거리 대비 " + (parseInt(this.ContractInfo.ContDist / 12) - parseInt(this.DrvInfo.drvHstIFData.totDrvDist)) + "km 남으셨습니다.";
     }
     else {
       console.log("totDrvDist : ", this.DrvInfo.drvHstIFData.totDrvDist);
       console.log("totDrvDist : ", this.ContractInfo.ContDist);
       this.recommendDistBarStyle = "width:100%; background-color:red;";
       this.recommendMessage = "이번달 권장주행거리 대비 "
                              + (parseInt(this.DrvInfo.drvHstIFData.totDrvDist) - parseInt(this.ContractInfo.ContDist / 12)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                              + "km 초과하셨습니다.";
       this.recommandEmphasize = true;
     }

//        recommendDist: "",
//        recommendDistBarStyle: ""
    }

    for(var info of this.DrvInfo.drvGpsList) {
      var drvHist = {
        "drvId" : info.drvId,
        "dist" : (info.drvRawData.offDist - info.drvRawData.onDist).toFixed(1),
        "movTm" : parseInt(info.drvRawData.movTm / 60) + "분 " + (info.drvRawData.movTm - parseInt(info.drvRawData.movTm / 60)*60) + "초",
        "startAddr" : info.startAddr,
        "endAddr" : info.endAddr,
        "startDate" : info.startDate,
        "endDate" : info.endDate,
      };

      if (info.drvRawData.overSpdIdx === undefined) drvHist.overSpdIdx = "모범";
      else if(info.drvRawData.overSpdIdx <= 100 && info.drvRawData.overSpdIdx > 80 ) drvHist.overSpdIdx = "모범";
      else if(info.drvRawData.overSpdIdx <= 80 && info.drvRawData.overSpdIdx > 60 ) drvHist.overSpdIdx = "안전";
      else drvHist.overSpdIdx = "양호";

      if(info.drvRawData.fstAccelIdx <= 100 && info.drvRawData.fstAccelIdx > 80 ) drvHist.fstAccelIdx = "모범";
      else if(info.drvRawData.fstAccelIdx <= 80 && info.drvRawData.fstAccelIdx > 60 ) drvHist.fstAccelIdx = "안전";
      else drvHist.fstAccelIdx = "양호";

      if(info.drvRawData.fstDecelIdx <= 100 && info.drvRawData.fstDecelIdx > 80 ) drvHist.fstDecelIdx = "모범";
      else if(info.drvRawData.fstDecelIdx <= 80 && info.drvRawData.fstDecelIdx > 60 ) drvHist.fstDecelIdx = "안전";
      else drvHist.fstDecelIdx = "양호";

      if(info.endAddr !== undefined)
        this.drvHistList.push(drvHist);

    }
  },
  computed:{
    DrvInfo: {
        get() { return this.$store.getters.DrvInfo },
        set(value) { this.$store.dispatch('UpdateDrvInfo',value) }
    },
    CarInfo: {
        get() { return this.$store.getters.CarInfo },
        set(value) { this.$store.dispatch('UpdateCarInfo',value) }
    },
    ContractInfo: {
        get() { return this.$store.getters.ContractInfo },
        set(value) { this.$store.dispatch('UpdateConractInfo',value) }
    },
  },
}
</script>

<style scoped>
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .infoBox{ width:100%; padding:20px 10px; box-sizing:border-box;}
.subArea .infoBox .info_text{ font-size:18px; font-weight:800; color:#333; margin-bottom:10px; letter-spacing:-0.03em; text-align: center;}
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
.subArea .infoBox li table .sub .indent{ padding-left: 10px;}

.subArea .infoBox li .mileage{ width:100%; padding:0 5px; box-sizing:border-box; overflow:hidden; margin-top:15px}
.subArea .infoBox li .mileage:after{ content:""; display:block; clear:both}
.subArea .infoBox li .mileage .textBox{ float:left; display:inline-block; text-align:left;}
.subArea .infoBox li .mileage .textBox .text01{ font-size:12px; font-weight:bold; color:#999; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .textBox .text02{ font-size:15px; font-weight:800; color:#333; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .guageBox{ float:right; display:inline-block; width:68%;}
.subArea .infoBox li .mileage .guageBox .top_text{ overflow:hidden}
.subArea .infoBox li .mileage .guageBox .top_text:after{ content:""; display:block; clear:both}
.subArea .infoBox li .mileage .guageBox .top_text .left{ float:left; font-size:10px; font-weight:bold; color:#ef8300; letter-spacing:-0.03em;}
.subArea .infoBox li .mileage .guageBox .top_text .right{ float:right; font-size:10px; font-weight:bold; color:#e60012; letter-spacing:-0.03em;}

.subArea .infoBox li .mileage .guageBox .guage{ position:relative; width:100%; height:20px; background-color:#ddd}
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

.subArea .infoBox li .emphasize{ font-size:12px; font-weight:bold; color:red; padding:10px 20px 0px 20px}
.subArea .infoBox li .normal{ font-size:12px; padding:10px 20px 0px 20px}

</style>
