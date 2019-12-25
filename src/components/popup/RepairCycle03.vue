<template>
	<div id="popup_period_setting" class="popup_layer">
    <div id="" class="popup_main">
      <a href="javascript:;" id="RepairCycle03_xBtn" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg" id=""></a>
      <div id="" class="title2">교환주기 설정방법</div>
			<div id="" class="message1">고객님의 운행 패턴에 따라 소무품 교환 주기를</div>
			<div id="" class="message2"><span>일반조건/가혹조건/개인</span>별로 설정할 수 있습니다.</div>
			<div id="" class="submessage1">⊙ 일반조건</div>
			<div id="" class="submessage2">제조사에서 권장하는 일반 수주의 교체 주기</div>
			<div id="" class="submessage1">⊙ 가혹조건</div>
			<div id="" class="submessage2">험한길, 고속주행 고온의 환경 등의 주행 조건이 반복되는 경우의 교체 주기</div>
			<div id="" class="submessage1">⊙ 개인 설정주기</div>
			<div id="" class="submessage2">개인이 운전습관을 참조하여 직접 설정하는 주기</div>
			<br>
			<a id="RepairCycle03_Confirm" class="btn" @click="$emit('close')">확인</a>
    </div>
  </div>
</template>

<script>

export default {
  name: 'RepairCycle03',
}
</script>

<style scoped>

/* 팝업(정비주기설정) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:50px 15px 30px; text-align:center}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title2{ font-size:26px; font-weight:800; color:#333; letter-spacing:-0.05em;}
.popup_layer .popup_main .btn{ display:block; margin:auto; width:40%; height:30px; line-height:35px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:10px;}

.popup_layer .popup_main .message1{ font-size:14px; font-weight:400; color:#666; padding-top: 30px}
.popup_layer .popup_main .message2{ font-size:14px; font-weight:400; color:#666; padding-bottom: 30px}
.popup_layer .popup_main .message2 span{ font-weight:900; }
.popup_layer .popup_main .submessage1{ text-align: left; font-size:14px; font-weight:600; color:#666; padding-left: 30px}
.popup_layer .popup_main .submessage2{ text-align: left; font-size:11px; font-weight:600; color:#999; padding: 5px 30px 20px 45px}

</style>
