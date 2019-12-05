<template>
  <div id="" class="popup_layer">
    <div id="" class="popup_main">
      <a id="" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg"></a>
      <div id="" class="title">사고접수 연결을 선택하셨습니다.</div>
      <div id="" class="message">고객센터(1599-9111)로 전화연결 하시겠습니까?</div>
      <div id="" class="description">전화연결 후 <span>1</span> → <span>1</span>(사고접수)</div>
      <div id="" @click="$emit('close')" class="btn_cancel">취소</div>
      <a href="tel:1599-9111"><div id="" class="btn_ok">확인</div></a>
    </div>
  </div>
</template>

<script>

export default {
  name: 'ERSCall',
  components: {

  }
}
</script>

<style scoped>

/* 팝업(커밍순) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:60px 10px 20px; text-align:center}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title{ font-size:23px; font-weight:800; color:#c8161d; letter-spacing:-0.05em; margin-bottom: 30px}
.popup_layer .popup_main .message{ font-size:14px; font-weight:800; color:#333; margin-bottom: 10px}
.popup_layer .popup_main .description{ font-size:12px; font-weight:800; color:#999; margin-bottom: 70px}
.popup_layer .popup_main .btn_cancel{ position:absolute; font-size:32px; font-weight:800; bottom:0; left:0; height: 60px; width: 50%; color:white; background-color:#333; padding: 14px}
.popup_layer .popup_main .btn_ok{ position:absolute; font-size:32px; font-weight:800; bottom:0; right:0; height: 60px; width: 50%; color:white; background-color:red;  padding: 14px}

</style>
