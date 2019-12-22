<template>
  <div id="9092369439" class="popup_layer">
    <div id="8186834801" class="popup_main">
      <a id="SafeDriveTip_xBtn" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg"></a>
      <img id="2760040642" src="@/img/img_drivetip1.svg">
      <img id="9780334514" src="@/img/img_drivetip2.svg">
    </div>
  </div>
</template>

<script>

export default {
  name: 'SafeDriveTip',
  components: {

  }
}
</script>

<style scoped>

/* 팝업(커밍순) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:40px 10px 0px; text-align:center}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title{ font-size:22px; font-weight:800; color:#c8161d; letter-spacing:-0.05em;}
.popup_layer .popup_main .textBox{ width:100%; padding:15px 0; font-size:18px; font-weight:800; color:#333; line-height:1.4; background-image:url('../../img/popup_bg.png'); background-position:center; background-repeat:no-repeat; background-size:cover; border-radius:5px; margin-top:15px;}
.popup_layer .popup_main .textBox span{ font-size:20px; font-weight:bold; color:#28ce99; font-family: 'Moebius_Bold_eng', sans-serif !important;}
.popup_layer .popup_main .subText{ font-size:14px; font-weight:bold; color:#595757; line-height:1.4; margin-top:20px; letter-spacing:-0.03em}


</style>
