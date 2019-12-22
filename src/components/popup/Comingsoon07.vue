<template>
  <div id="2538988706" class="popup_layer">
    <div id="6129500366" class="popup_main">
      <a id="Safe Score_X Button" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg"></a>
      <div id="4507885082" class="title">안전점수란?</div>
      <div id="4586417187" class="subText1">
          본인의 운전방식을 분석하여<br>
          안전 운전 수준을 점수로 안내해드립니다.<br>
          <br>
      </div>
      <div class="subTextGroup">
        <div id="4507885082" class="groupTitle">&lt;안전점수 반영 요소&gt;</div>
        <div id="4586417187" class="groupContents">
            - 주행 행태(과속, 급감속, 급가속)를 반영<br>
            - 최근 주행 기록을 기준<br>
            - 안전지수항목을 5단계 등급으로 분류<br>
            <span>(위험, 주의, 양호, 안전, 모범)</span>
            <br>
        </div>
      </div>
      <a id="Safe Score_Close" class="btn" @click="$emit('close')">확인</a>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Commingsoon06',
  components: {

  }
}
</script>

<style scoped>

/* 팝업(커밍순) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:40px 10px 20px; text-align:center}
.popup_layer .popup_main .comingsoon{ position:absolute; top:10px; left:10px; width:50px;}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title{ font-size:22px; font-weight:800; color:#c8161d; letter-spacing:-0.05em;}
.popup_layer .popup_main .textBox{ width:100%; padding:15px 0; font-size:18px; font-weight:800; color:#333; line-height:1.4; background-image:url('../../img/popup5_bg.png'); background-position:center; background-repeat:no-repeat; background-size:cover; border-radius:5px; margin-top:15px;}
.popup_layer .popup_main .textBox span{ font-size:20px; font-weight:bold; color:#28ce99; font-family: 'Moebius_Bold_eng', sans-serif !important;}
.popup_layer .popup_main .subText1{ font-size:14px; font-weight:bold; color:#595757; line-height:1.4; margin-top:20px; letter-spacing:-0.03em}
.popup_layer .popup_main .subText2{ font-size:13px; text-align: left; font-weight:bold; color:#595757; line-height:1.4; margin: 0 20px 0 20px; letter-spacing:-0.03em}
.popup_layer .popup_main .btn{ display:block; margin:auto; width:40%; height:30px; line-height:35px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:30px;}


.popup_layer .popup_main .subTextGroup { background-color: #ddd; padding: 10px; border-radius:10px;}
.popup_layer .popup_main .subTextGroup .groupTitle{ font-size:16px; text-align: center; font-weight:800; color:#595757; line-height:1.4; margin: 0 20px 15px 20px; letter-spacing:-0.03em}
.popup_layer .popup_main .subTextGroup .groupContents{ font-size:13px; text-align: left; font-weight:bold; color:#595757; line-height:1.4; margin: 2px 20px 2px 20px; letter-spacing:-0.03em}
.popup_layer .popup_main .subTextGroup span{ margin-left: 8px}


</style>
