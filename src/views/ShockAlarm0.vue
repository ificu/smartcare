<template>
  <div id="3931999843" class="subArea">
		<div id="1179823999" class="titleBox">
      <router-link to="/Main">
      <a href="" id="3258595457" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
            <div id="6059913767" class="title">정차 중 충격 알림</div>
        </div>
        <ul id="4087025838" class="infoBox alarm">
          <li id="1467150025">
            <div id="8697308162" class="info_title">새로운 알림</div>
                <table id="8818160461">
                  <tr id="6226981038">
                    <th id="1755125895">11월 7일 14:02</th>
                        <td id="5076142077">차량 충격이 감지되었습니다.<br>차량 상태를 확인해주세요.</td>
                    </tr>
                    <tr id="9458895533">
                      <th id="4132565529">11월 6일 14:02</th>
                        <td id="5337823818">차량 충격이 감지되었습니다.<br>차량 상태를 확인해주세요.</td>
                    </tr>
                </table>
            </li>
            <li id="7183661800">
              <div id="5814191749" class="info_title">지난 알림</div>
                <table id="5258240579">
                  <tr id="6307474462">
                    <th id="3335003040">10월 7일 14:02</th>
                        <td id="2438936961">차량 충격이 감지되었습니다.<br>차량 상태를 확인해주세요.</td>
                    </tr>
                    <tr id="3167119839">
                      <th id="4418064826">10월 6일 14:02</th>
                        <td id="4100522818">차량 충격이 감지되었습니다.<br>차량 상태를 확인해주세요.</td>
                    </tr>
                    <tr id="8415065594">
                      <th id="6082564655">10월 5일 14:02</th>
                        <td id="8833004793">차량 충격이 감지되었습니다.<br>차량 상태를 확인해주세요.</td>
                    </tr>
                </table>
            </li>
            <li id="1190266500" class="comingsoon">
              <div id="1174615975" class="info_title">신규 예정 서비스</div>
                <div id="8381761707" class="service">
                  <img src="../img/icon_119.svg" id=""> <span id="2485293019">대형 사고 발생시, 119 자동 출동 서비스</span>
                    <p id="5107197396">대형사고 상황 감지시, 고객님께 선연락후 통화가<br>되지 않을 시, 사고 발생 위치로 119 출동 요청해드립니다.</p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>

export default {
  name: 'ShockAlarm',
  components: {
    newShockList: [],
    oldShocklist: []
  },
  mounted () {
    this.$ga.page('/ShockAlarm');
    console.log("CarShockInfo : ", this.CarShockInfo);

    for(var shock of this.CarShockInfo.shockList) {
      if(shock.type === "new") newShockList.push(shock);
      else oldShocklist.push(shock);
    }
  } ,
  computed:{
    CarShockInfo: {
        get() { return this.$store.getters.CarShockInfo },
        set(value) { this.$store.dispatch('UpdateCarShockInfo',value) }
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

.subArea .alarm li table th{ font-size:11px; color:#898989; vertical-align:top}
.subArea .alarm li table td{ font-size:14px; font-weight:800; color:#333; line-height:1.2; vertical-align:top; padding-top:0; padding-bottom:10px;}

.subArea .infoBox li .info_title{ font-size:18px; font-weight:800; color:#333; margin-bottom:10px;}

</style>
