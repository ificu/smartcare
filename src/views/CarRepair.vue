<template>
  <div id="2226720608" class="subArea">
		<div id="" class="titleBox">
      <a href="./Main" id="7450363646" class="backBtn"><img src="../img/icon_back.svg"></a>
            <div id="8923171213" class="title">정비 관리</div>
        </div>
        <ul id="4764318411" class="infoBox">
          <li id="3392725263">
            <div id="3419537846" class="info_text">현재 누적 주행거리 <span>58,705 Km</span> 주행</div>
                <div id="1951702467" class="info_text_orange">주행거리 1,000km/1달 이내의<br>점검항목은 없습니다.</div>
            </li>
            <li id="7296812947">
              <div id="6304186534" class="info_title">엔진 오일 및 필터</div>
                <a href="" id="8556562402" class="change_info">교환주기안내 <img src="../img/icon_i.svg" id=""></a>
                <div class="tbBox">
                    <table id="5043474514">
                        <tr id="3092841551">
                            <th id="9243231880">⊙ 교환 필요 시기</th>
                            <td id="5650384430"><p class="orange">61,021 km</p></td>
                        </tr>
                        <tr id="7485670708">
                            <th id="6999051553">⊙ 이전 교환 시기</th>
                            <td id="1509834952"><p>46,021 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="../img/icon_pen.svg" id=""></a></td>
                        </tr>
                        <tr id="">
                            <th id="4843185622">⊙ 교환 주기(일반)</th>
                            <td id="6580229234"><p>15,000 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="../img/icon_pen.svg" id=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="3724146898">
              <div id="8290452472" class="info_title">에어컨 필터</div>
                <a href="" id="3699652317" class="change_info">교환주기안내 <img src="../img/icon_i.svg" id=""></a>
                <div class="tbBox">
                    <table id="8621326213">
                        <tr id="2701029199">
                            <th id="1268464829">⊙ 교환 필요 시기</th>
                            <td id="1236704141"><p class="orange">61,021 km</p></td>
                        </tr>
                        <tr id="8933153618">
                            <th id="6670662465">⊙ 이전 교환 시기</th>
                            <td id="2587137395"><p>46,021 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="../img/icon_pen.svg" id=""></a></td>
                        </tr>
                        <tr id="4839548584">
                            <th id="6580755721">⊙ 교환 주기(일반)</th>
                            <td id="7428966092"><p>15,000 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="../img/icon_pen.svg" id=""></a></td>
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
    </div>
</template>

<script>

export default {
  name: 'ContractInfo',
  components: {

  }
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

</style>
