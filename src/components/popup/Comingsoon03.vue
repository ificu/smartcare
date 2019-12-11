<template>
  <div id="2538988706" class="popup_layer">
    <div id="6129500366" class="popup_main">
      <img id="7440669318" src="@/img/icon_comingsoon.svg" class="comingsoon">
      <a id="7422023528" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg"></a>
      <div id="4507885082" class="title">운전비서 (AI) 서비스</div>
      <div id="2747284928" class="textBox">
          AI 기능을 활용한<br>
          고객 맞춤형 정보제공 서비스
      </div>
      <div id="4586417187" class="subText">
          고객님의 차량 이용 패턴과 주행 환경을 분석하여<br>
          아래의 맞춤형 정보를 제공하는 서비스입니다.<br>
          <br>
          - 날씨 변화에 맞춰 차량관리 Tip을 안내<br>
          - 고객님의 차량 이동 패턴을 분석하여<br>
             최적의 주행 노선과 맞춤형 장소 추천<br>
      </div>
      <a id="8672175743" class="btn" @click="$emit('close')">확인</a>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Commingsoon03',
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
.popup_layer .popup_main .textBox{ width:100%; padding:15px 0; font-size:18px; font-weight:800; color:#333; line-height:1.4; background-image:url('../../img/popup3_bg.png'); background-position:center; background-repeat:no-repeat; background-size:cover; border-radius:5px; margin-top:15px;}
.popup_layer .popup_main .textBox span{ font-size:20px; font-weight:bold; color:#28ce99; font-family: 'Moebius_Bold_eng', sans-serif !important;}
.popup_layer .popup_main .subText{ font-size:14px; font-weight:bold; color:#595757; line-height:1.4; margin-top:20px; letter-spacing:-0.03em}
.popup_layer .popup_main .btn{ display:block; margin:auto; width:40%; height:30px; line-height:35px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:30px;}


</style>
