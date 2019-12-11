<template>
  <div id="2538988706" class="popup_layer">
    <div id="6129500366" class="popup_main">
      <img id="7440669318" src="@/img/icon_comingsoon.svg" class="comingsoon">
      <a id="7422023528" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg"></a>
      <div id="4507885082" class="title">최적 교환주기 추천서비스</div>
      <div id="2747284928" class="textBox">
          고객의 운행 패턴 맞춤형<br>
          소모품 교환주기 추천 서비스
      </div>
      <div id="4586417187" class="subText1">
          차량의 성능 유지 및 고객의 안전운전을 위해<br>
          차량운행 패턴을 분석하여 가혹조건 및 일반조건으로<br>
          나누어 차량 소모품 교환주기를 추천해드립니다.<br>
          <br>
      </div>
      <div id="4586417187" class="subText2">● 일반조건</div>
      <div id="4586417187" class="subText3">제조사에서 권장하는 일반 수준의 교체 주기</div>
      <div id="4586417187" class="subText2">● 가혹조건</div>
      <div id="4586417187" class="subText3">험한길, 고속주행 고온의 환경 등의 주행 조건이 반복되는 경우의 교체 주기</div>
      <a id="8672175743" class="btn" @click="$emit('close')">확인</a>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Commingsoon04',
  components: {

  }
}
</script>

<style scoped>

/* 팝업(커밍순) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:80px 10px 20px; text-align:center}
.popup_layer .popup_main .comingsoon{ position:absolute; top:10px; left:10px; width:50px;}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title{ font-size:22px; font-weight:800; color:#c8161d; letter-spacing:-0.05em;}
.popup_layer .popup_main .textBox{ width:100%; padding:15px 0; font-size:18px; font-weight:800; color:#333; line-height:1.4; background-image:url('../../img/popup4_bg.png'); background-position:center; background-repeat:no-repeat; background-size:cover; border-radius:5px; margin-top:15px;}
.popup_layer .popup_main .textBox span{ font-size:20px; font-weight:bold; color:#28ce99; font-family: 'Moebius_Bold_eng', sans-serif !important;}
.popup_layer .popup_main .subText1{ font-size:13px; font-weight:bold; color:#595757; line-height:1.4; margin-top:20px; letter-spacing:-0.03em}
.popup_layer .popup_main .subText2{ font-size:13px; text-align: left; font-weight:800; color:#595757; line-height:1.4; margin: 0 20px 0 20px; letter-spacing:-0.03em}
.popup_layer .popup_main .subText3{ font-size:11px; text-align: left; font-weight:bold; color:#595757; line-height:1.4; margin: 0 60px 5px 35px; letter-spacing:-0.03em}
.popup_layer .popup_main .btn{ display:block; margin:auto; width:40%; height:30px; line-height:35px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:30px;}


</style>
