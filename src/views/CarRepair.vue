<template>
  <div id="2226720608" class="subArea">
		<div id="" class="titleBox">
      <router-link to="/Main">
      <a href="" id="7450363646" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
            <div id="8923171213" class="title">정비 관리</div>
        </div>
        <ul id="4764318411" class="infoBox">
          <li id="3392725263">
            <div id="3419537846" class="info_text">현재 누적 주행거리 <span>{{CarInfo.accDist | currencyNum}} Km</span> 주행</div>
                <div id="1951702467" class="info_text_orange">주행거리 1,000km/1달 이내의<br>점검항목은 없습니다.</div>
            </li>
            <li id="7296812947">
              <div id="6304186534" class="info_title">엔진 오일 및 필터</div>
                <a href="javascript:;" id="8556562402" class="change_info" @click="showRepairCycle03 = !showRepairCycle03">교환주기안내 <img src="../img/icon_i.svg" id=""></a>
                <div class="tbBox">
                    <table id="5043474514">
                        <tr id="3092841551">
                            <th id="9243231880">⊙ 교환 필요 시기</th>
                            <td id="5650384430"><p class="orange">{{(parseInt(CarRepairInfo.EngineOilBefore) + parseInt(CarRepairInfo.EngineOilCycle)) | currencyNum}} km</p></td>
                        </tr>
                        <tr id="7485670708">
                            <th id="6999051553">⊙ 이전 교환 시기</th>
                            <td id="1509834952"><p>{{CarRepairInfo.EngineOilBefore | currencyNum}} km</p> <a href="javascript:;" id="" class="btn" @click="showRepairCycle01Popup('엔진오일')"><img src="../img/icon_pen.svg" id=""></a></td>
                        </tr>
                        <tr id="">
                            <th id="4843185622">⊙ 교환 주기({{CarRepairInfo.EngineOilType}})</th>
                            <td id="6580229234"><p>{{CarRepairInfo.EngineOilCycle | currencyNum}} km</p> <a href="javascript:;" id="" class="btn" @click="showRepairCycle02Popup('엔진오일')"><img src="../img/icon_pen.svg" id=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="3724146898">
              <div id="8290452472" class="info_title">에어컨 필터</div>
                <a href="javascript:;" id="3699652317" class="change_info" @click="showRepairCycle03 = !showRepairCycle03">교환주기안내 <img src="../img/icon_i.svg" id=""></a>
                <div class="tbBox">
                    <table id="8621326213">
                        <tr id="2701029199">
                            <th id="1268464829">⊙ 교환 필요 시기</th>
                            <td id="1236704141"><p class="orange">{{(parseInt(CarRepairInfo.AirFilterBefore) + parseInt(CarRepairInfo.EngineOilCycle)) | currencyNum}} km</p></td>
                        </tr>
                        <tr id="8933153618">
                            <th id="6670662465">⊙ 이전 교환 시기</th>
                            <td id="2587137395"><p>{{CarRepairInfo.AirFilterBefore | currencyNum}} km</p> <a href="javascript:;" id="" class="btn" @click="showRepairCycle01Popup('에어컨필터')"><img src="../img/icon_pen.svg" id=""></a></td>
                        </tr>
                        <tr id="4839548584">
                            <th id="6580755721">⊙ 교환 주기({{CarRepairInfo.AirFilterType}})</th>
                            <td id="7428966092"><p>{{CarRepairInfo.AirFilterCycle | currencyNum}} km</p> <a href="javascript:;" id="" class="btn" @click="showRepairCycle02Popup('에어컨필터')"><img src="../img/icon_pen.svg" id=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="7923017196" class="comingsoon">
              <div id="8317196453" class="info_title">신규 예정 서비스</div>
                <div id="4778325971" class="service"><img src="../img/icon_change.svg"> <span>최적의 교환주기 추천 서비스</span></div>
                <div id="4263336708" class="service"><img src="../img/icon_fix.svg"> <span>가까운 정비 업소 알림/예약 서비스</span></div>
            </li>
        </ul>
        <transition name="slide-fade">
          <RepairCycle01 v-if="showRepairCycle01" @close="showRepairCycle01=false" :repairItem="repairItem"></RepairCycle01>
          <RepairCycle02 v-if="showRepairCycle02" @close="showRepairCycle02=false" :repairItem="repairItem"></RepairCycle02>
          <RepairCycle03 v-if="showRepairCycle03" @close="showRepairCycle03=false"></RepairCycle03>
        </transition>
    </div>
</template>

<script>
import RepairCycle01 from '@/components/popup/RepairCycle01.vue'
import RepairCycle02 from '@/components/popup/RepairCycle02.vue'
import RepairCycle03 from '@/components/popup/RepairCycle03.vue'

export default {
  name: 'ContractInfo',
  data () {
    return {
      showRepairCycle01: false,
      showRepairCycle02: false,
      showRepairCycle03: false,
      repairItem: "",
    }
  },
  methods: {
    showRepairCycle01Popup(type) {
      this.showRepairCycle01 = !this.showRepairCycle01;
      this.repairItem = type;
		},
    showRepairCycle02Popup(type) {
      this.showRepairCycle02 = !this.showRepairCycle02;
      this.repairItem = type;
		}
	},
  components: {
    RepairCycle01: RepairCycle01,
    RepairCycle02: RepairCycle02,
    RepairCycle03: RepairCycle03,
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
.subArea .infoBox li table .sub .indent{ padding-left: 10px;}
.subArea .infoBox li table.tb02 th{ width:125px;}

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


/* 팝업 슬라이드 */
.slide-fade-enter-active { transition: all .3s ease;}
.slide-fade-leave-active { transition: all .5s cubic-bezier(1.0, 0.5, 0.8, 1.0);}
.slide-fade-enter, .slide-fade-leave-to { opacity: 0;}
</style>
