<template>
  <div id="8719977076" class="subArea">
		<div id="6363819468" class="titleBox">
      <a href="./Main" id="" class="backBtn"><img src="../img/icon_back.svg"></a>
            <div id="9740958422" class="title">차량/계약 정보 안내</div>
        </div>
        <ul id="6326463570" class="infoBox">
          <li id="4496620808">
            <div id="6050419010" class="info_title">차량 정보</div>
                <table id="2643144808">
                  <tr id="2549053519">
                    <th id="3483481127">⊙ 모델</th>
                        <td id="4686868335"><p>SF소나타 (하이브리드)</p></td>
                    </tr>
                    <tr id="3432912197">
                      <th id="3154006697">⊙ 생산</th>
                        <td id="3296516715"><p>2019년 5월</p></td>
                    </tr>
                    <tr id="9115186043">
                      <th id="9202866437">⊙ 차량가액</th>
                        <td id="2128569587"><p>3,238 만원</p></td>
                    </tr>
                    <tr id="9792864102">
                      <th id="7309450569">⊙ 옵션</th>
                        <td id="7809431477">
                          <p style="height:70px">- 스마트 네비게이션<br>
                            - 블랙박스 (내장)</p>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="1297086572">
              <div id="9273569266" class="info_title">계약 정보</div>
                <table id="9172846720" class="tb02">
                  <tr id="7170186396">
                    <th id="7865099039">⊙ 계약자</th>
                        <td id="8271447043"><p>문성준</p></td>
                    </tr>
                    <tr id="3004295119">
                      <th id="3575682126">⊙ 계약기간</th>
                        <td id="8677225059"><p>19.01.01~22.12.31 (48개월)</p></td>
                    </tr>
                    <tr id="3666856390">
                      <th id="9369307643">⊙ 연간 계약마일리지</th>
                        <td id="2230891365"><p>10,000 km</p></td>
                    </tr>
                    <tr id="2073806950">
                      <th id="3354100226">⊙ 월렌탈료</th>
                        <td id="4520749211"><p>63.8 만원</p></td>
                    </tr>
                    <tr id="4199842230" class="sub">
                      <th id="7830008680" class="indent"> - 선수금</th>
                        <td id="4762140537"><p>800 만원 (30%)</p></td>
                    </tr>
                    <tr id="9648754559">
                      <th id="9531536027">⊙ 인수가액</th>
                        <td id="6729905483"><p></p></td>
                    </tr>
                    <tr id="1638381196">
                      <th id="5835603339">⊙ 정비관련</th>
                        <td id="6875771441"><p></p></td>
                    </tr>
                    <tr id="6571979376">
                      <th id="7383588514">⊙ 중도해지 위약금</th>
                        <td id="7934832709"><p></p></td>
                    </tr>
                </table>
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

</style>
