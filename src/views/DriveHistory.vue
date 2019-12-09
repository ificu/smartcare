<template>
  <div id="4158449995" class="subArea">
		<div id="5433017376" class="titleBox">
      <router-link to="/Main">
      <a href="" id="4916679281" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
            <div id="3273278861" class="title">주행 이력 관리</div>
        </div>
        <ul id="3403304624" class="infoBox mileage">
          <li id="3299986171">
            <div id="1589697674" class="info_text">현재 누적 주행거리 <span>58,705 Km</span> 주행</div>
                <div id="7145441350" class="info_text_black">스마트케어 (Smart Care) 설치 이후의 주행거리를 말합니다.</div>
                <div class="mileage">
                  <div id="8800093588" class="textBox">
                    <div id="7895560229" class="text01">총 주행거리</div>
                    <div id="5062870532" class="text02">341.6 km</div>
                  </div>
                  <div id="8684162098" class="guageBox">
                    <div id="5946694751" class="top_text">
                      <div id="1055888146" class="left">4.2 km(1%)</div>
                          <div id="6403556384" class="right">333.6 km(99%)</div>
                      </div>
                      <div id="3546067459" class="guage"><span style="width:10%"></span></div>
                      <div id="2946534962" class="bottom_text">
                        <div id="7217849805" class="left">비업무용</div>
                          <div id="8110743748" class="right">출/퇴근 및 업무용</div>
                      </div>
                  </div>
                </div>
                <div id="2884652697" class="mileage">
                  <div id="1034217117" class="textBox">
                    <div id="8916390546" class="text01">총 주행횟수</div>
                    <div id="9433829126" class="text02">30회</div>
                  </div>
                  <div id="9017259802" class="guageBox">
                    <div id="9908387410" class="top_text">
                      <div id="6189443755" class="left">1회</div>
                      <div id="6276053519" class="right">29회</div>
                  </div>
                  <div id="1195771929" class="guage"><span style="width:10%"></span></div>
                  <div id="4652004510" class="bottom_text">
                    <div id="4999187550" class="left">비업무용</div>
                      <div id="9602309909" class="right">출/퇴근 및 업무용</div>
                  </div>
              </div>
            </div>
        </li>

            <li id="8899113537">
              <div id="4208281451" class="info_title">이전 주행 기록</div>

                <div id="3903253433" class="mileage_item">
                    <div id="5220113684" class="mileage_info">
                        <div id="5523879721" class="textBox">
                            <div id="4047802892" class="text01">0.1 km | 01분 18초</div>
                            <div id="2752795652" class="text02">
                                업무용<br>
                                위치정보 없음 → 위치정보 없음<br>
                                19.11.16 16:22:37 ~ 19.11.16 16:23:55
                            </div>
                        </div>
                        <div id="7346146481" class="gradeBox">
                            <div id="3151257694" class="item">
                                <img src="../img/icon_grade03.svg">과속
                            </div>
                            <div id="6751531387" class="item">
                                <img src="../img/icon_grade02.svg">급가속
                            </div>
                            <div id="3897340000" class="item">
                                <img src="../img/icon_grade01.svg">급감속
                            </div>
                        </div>
                    </div>
                    <div id="1937010302" class="graphBox"></div>
				</div>

                <div id="2647855986" class="mileage_item">
                    <div id="7579124833" class="mileage_info">
                        <div id="5702618358" class="textBox">
                            <div id="2236782887" class="text01">0.1 km | 01분 18초</div>
                            <div id="7856813414" class="text02">
                                업무용<br>
                                서울특별시 노원구 월계 3동 → 서울특별시 성동구 왕시리 도선동<br>
                                19.11.16 14:20:44~19.11.16 14:53:20
                            </div>
                        </div>
                        <div id="8389217178" class="gradeBox">
                            <div id="9409312820" class="item">
                                <img src="../img/icon_grade03.svg">과속
                            </div>
                            <div id="3745897700" class="item">
                                <img src="../img/icon_grade02.svg">급가속
                            </div>
                            <div id="3052502258" class="item">
                                <img src="../img/icon_grade01.svg">급감속
                            </div>
                        </div>
                    </div>
                    <div id="8278380577" class="graphBox"></div>
				</div>
            </li>
        </ul>
    </div>
</template>

<script>

export default {
  name: 'DriveHistory',
  components: {

  },
  mounted () {
    this.$ga.page('/DriveHistory');
  } ,      
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

</style>
