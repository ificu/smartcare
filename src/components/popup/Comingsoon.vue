<template>
  <div id="popup_01" class="popup_layer">
    <div class="popup_main">
      <img src="@/img/icon_comingsoon.svg" class="comingsoon">
      <a @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg"></a>
      <div class="title">119 자동출동 서비스</div>
      <div class="textBox">
          <span>Smart Care</span> 를 통한 긴급<br>
          자동 119 자동출동 호출 서비스
      </div>
      <div class="subText">
          긴급 혹은 대형사고로 판단될 경우,<br>
          사고발생 위치로 119 출동 요청 드리는 서비스입니다.<br>
          (고객님께 선연락 후 통화가 되지 않을 시 진행)<br><br>

          SK 렌터카 차량을 이용하는 본인 뿐 아니라<br>
          차량을 같이 이용하는 배 우자, 부모님, 자녀 등<br>
          운전 고객의 안전을 위한 서비스 입니다.
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'popup_01',
  components: {

  }
}
</script>

<style>

/* 팝업(커밍순) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:80px 10px 20px; text-align:center}
.popup_layer .popup_main .comingsoon{ position:absolute; top:10px; left:10px; width:50px;}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title{ font-size:22px; font-weight:800; color:#c8161d; letter-spacing:-0.05em;}
.popup_layer .popup_main .textBox{ width:100%; padding:15px 0; font-size:18px; font-weight:800; color:#333; line-height:1.4; background-image:url('../../img/popup_bg.png'); background-position:center; background-repeat:no-repeat; background-size:cover; border-radius:5px; margin-top:15px;}
.popup_layer .popup_main .textBox span{ font-size:20px; font-weight:bold; color:#28ce99; font-family: 'Moebius_Bold_eng', sans-serif !important;}
.popup_layer .popup_main .subText{ font-size:14px; font-weight:bold; color:#595757; line-height:1.4; margin-top:20px; letter-spacing:-0.03em}


</style>
