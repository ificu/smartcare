<template>
  <div id="2250439541" class="popup_layer">
    <div id="5726124298" class="popup_header">
      <a id="4561323194" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg"></a>
      <div id="9788353122" class="title">{{userName}} 님</div>
      <div id="8226028451" class="subtitle1">계약기간</div>
      <div id="9307216051" class="subtitle2">{{ContractInfo.ContStart.replace(/-/gi,".")}} ~ {{ContractInfo.ContEnd.replace(/-/gi,".")}}</div>
    </div>
    <div id="2316227097" class="popup_menu">
      <div id="9898896361" class="menu_list" @click="$emit('close')" >Home</div>
      <router-link to="/Notice"><div id="1723367321" class="menu_list">공지/안내사항</div></router-link>
      <router-link to="/QnA"><div id="1012500541" class="menu_list">1:1문의</div></router-link>
      <router-link to="/"><div id="9866648110" class="menu_list">로그아웃</div></router-link>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Menu',
  data () {
    return {
      userName: "",
    }
  },
  created : function() {
    this.userName = this.UserInfo.UserName;
    console.log("ContractInfo : ", this.ContractInfo);
  },
  components: {

  },
  computed:{
    UserInfo: {
        get() { return this.$store.getters.UserInfo },
        set(value) { this.$store.dispatch('UpdateUserInfo',value) }
    },
    ContractInfo: {
        get() { return this.$store.getters.ContractInfo },
        set(value) { this.$store.dispatch('UpdateConractInfo',value) }
    },
  },
}
</script>

<style scoped>

/* 팝업(메뉴) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:white; z-index:10}
.popup_layer .popup_header{ position:absolute; left:0; top:0; width:250px; height:130px; background-color:#28ce99;  padding:30px 20px 20px;}
.popup_layer .popup_header .xBtn{ position:absolute; top:25px; right:25px;}
.popup_layer .popup_header .xBtn img{ width:22px;}
.popup_layer .popup_header .title{ font-size:24px; font-weight:800; color:white; letter-spacing:-0.05em; margin-bottom: 20px;}
.popup_layer .popup_header .subtitle1{ font-size:14px; color:white; letter-spacing:-0.05em;}
.popup_layer .popup_header .subtitle2{ font-size:16px; color:white; letter-spacing:-0.05em;}
.popup_layer .popup_header .textBox{ width:100%; padding:15px 0; font-size:18px; font-weight:800; color:#333; line-height:1.4; background-image:url('../../img/popup_bg.png'); background-position:center; background-repeat:no-repeat; background-size:cover; border-radius:5px; margin-top:15px;}
.popup_layer .popup_header .textBox span{ font-size:20px; font-weight:bold; color:#28ce99; font-family: 'Moebius_Bold_eng', sans-serif !important;}
.popup_layer .popup_header .subText{ font-size:14px; font-weight:bold; color:#595757; line-height:1.4; margin-top:20px; letter-spacing:-0.03em}

.popup_layer .popup_menu{ position:absolute; left:0; top:130px; width:250px; height:100%; background-color:#ddd;  padding:30px 20px 20px;}
.popup_layer .popup_menu .menu_list{ font-size:18px; font-weight: 800; color:#444; padding: 20px; }
</style>
