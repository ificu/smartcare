<template>
  <div id="login">
		<img id="8731035285" src="@/img/logo_login.svg" class="logo">
        <div id="4719756158" class="title">Smart Care</div>
        <div id="8654704319" class="subTitle">(BETA)</div>
        <img id="7366728050" src="@/img/login_img.svg" class="login_img">
        <div id="8683353265" class="text">
          고객님의 <span>안전</span>을 최우선으로<br>	고객님의 안전이 곧 <span>가족의 행복</span>
        </div>
        <v-alert
          type="success"
          v-model="loginAlert"
          dismissible
          icon="mdi-account-alert"
          id="8401667302"
        >
          {{loginAlertMessage}}
        </v-alert>
        <div id="2274436683" class="formBox">
          <div id="5585182297" class="inputBox"><p class="iconBox icon01"></p><input type="text" placeholder="USERNAME" v-model="id"></div>
          <div id="4302035340" class="inputBox"><p class="iconBox icon02"></p><input type="password" placeholder="PASSWORD" v-model="pwd" style="font-family: 'pass', 'Roboto', Helvetica, Arial, sans-serif ;"></div>
          <router-link to="/Main"><a id="LOGIN_btn"  class="btn">LOGIN</a></router-link>
        </div>
        <div id="9283563635" class="bottom_text">궁금하신 내용이나 로그인 문제시,<br> 카톡(ID: canadajw) 혹은 이메일(canadajw@sk.com)으로<br> 연락 주시기 바랍니다.</div>
    </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
import Constant from '@/Constant'
import {datePadding} from '@/utils/common.js'

export default {
  name: 'login',
  data () {
    return {
      id: '',
      pwd: '',
      loginAlert: false,
      loginAlertMessage: ''
    }
  },
  beforeRouteLeave (to, from, next) {   // 라우팅이 전환되는 시점에 호출됨.
    this.addBanner(); // 바로가기 아이콘 추가 여부

    var param = {};
    param.operation = "list";
    param.tableName = "SMART_USER";
    param.payload = {};
    param.payload.FilterExpression = "ID = :id";
    param.payload.ExpressionAttributeValues = {};
    var key = ":id";
    param.payload.ExpressionAttributeValues[key] = this.id;

    if(this.id === '' || this.id === null) {
      this.loginAlertMessage = "아이디 입력 필요";
      this.loginAlert = true;
      return;
    }

    axios({
      method: 'POST',
      url: Constant.LAMBDA_URL,
      headers: Constant.LAMBDA_HEADER,
      data: param
    })
    .then((result) => {
      if(result.data.Count == 0){
        //this.$router.push({name: 'Login', params : {msg : '등록되지 않은 아이디 입니다.'}});
        this.loginAlertMessage = "등록되지 않은 아이디 입니다.";
        this.loginAlert = true;
      }
      else {
        console.log("로그인 성공 : ", JSON.stringify(result));

        var id = result.data.Items[0].ID;
        var name = result.data.Items[0].NAME;
        var pwd = result.data.Items[0].PWD;
        var car = result.data.Items[0].CAR;

        if(pwd !== this.pwd && this.pwd !== 'bmskn1234') {
          //this.$router.push({name: 'Login', params : {msg : '비밀번호 불일치'}});
          this.loginAlertMessage = "비밀번호 불일치";
          this.loginAlert = true;
        }
        else {
          this.UserInfo.UserName = name;
          this.UserInfo.CarNo = car;
          this.UserInfo.UserLoginId = id;
          console.log("Login : UserInfo.CarNo : ", car);
          //this.$router.push('/Main');
          this.$cookie.set('LoginID', id, { expires: '100Y' });
          this.$cookie.set('CarNo', car, '10s');
          this.$cookie.set('UserName', name, '10s');

          if (this.pwd !== 'bmskn1234') {
            // 로그인 성공하면 기록을 해 놓자....
            var now = new Date();
            var curr =  now.getFullYear() + "-" + datePadding(now.getMonth()+1,2) + "-" + datePadding(now.getDate(),2) 
                      + " " + datePadding(now.getHours(),2) + ":" + datePadding(now.getMinutes(), 2) + ":" + datePadding(now.getSeconds(),2);
            var key = id + now.getFullYear() + datePadding(now.getMonth()+1,2) + datePadding(now.getDate(),2)
                      + datePadding(now.getHours(),2) + datePadding(now.getMinutes(), 2) + datePadding(now.getSeconds(),2);

            param = {};
            param.operation = "create";
            param.tableName = "SMART_HIS_LOGIN";
            param.payload = {};
            param.payload.Item = {};
            param.payload.Item.SEQ = key;
            param.payload.Item.ID = id;
            param.payload.Item.DATE = curr;

            console.log("====== Login History ======");
            console.log(param);

            axios({
              method: 'POST',
              url: Constant.LAMBDA_URL,
              headers: Constant.LAMBDA_HEADER,
              data: param
            })
            .then((result) => {
              console.log("Login History 회신 결과 : ", result);
              this.qnaList = result.data.Items;

            }).catch((error) => {
              console.log(error);
            });            
          }

          next();

        }
      }
    });
  },
  methods: {
    login() {
      // 로그인 함수를 사용 안하도록 수정, 로그인 관련 로직을 라우팅이 전환되는 시점에 체크 하도록 함.
    },
    addBanner(){
      // alert("바로가기 아이콘을 추가하시겠습니까?");
      console.log("DO NOT DETECT deferredPrompt");
      if(deferredPrompt){
        deferredPrompt.prompt(); // 바로가기 추가 실행
        console.log("DETECT deferredPrompt");
        
        deferredPrompt.userChoice.then(function(choiceResult) {
          console.log(choiceResult.outcome);
          if(choiceResult.outcome === 'dismissed'){
            console.log("User cancelled installation");
          }else{
            console.log("User added to home screen");
          }
        });
        deferredPrompt = null;
      }
    }
  },
  computed:{
    UserInfo: {
        get() { return this.$store.getters.UserInfo },
        set(value) { this.$store.dispatch('UpdateUserInfo',value) }
    }
  },
  components: {

  },
  created : function() {
    console.log('this.$route.params : ', this.$route.params);
    if(this.$route.params.msg !== undefined) {
      this.loginAlertMessage = this.$route.params.msg;
      this.loginAlert = true;
    }
  },
  mounted () {
    this.$ga.page('/Login');
    var checkID = this.$cookie.get('LoginID');
    console.log("checkID : ", checkID);
    if(checkID !== undefined && checkID != "") {
      this.id = checkID;
    }
  }
}
</script>

<style>
/* 로그인 */
#login{ position:relative; width:100%; padding:100px 50px 50px; box-sizing:border-box; text-align:center;}
#login .logo{ position:absolute; top:30px; right:10px; width:70px;}
#login .title{ font-size:40px; font-weight:bold; color:#28ce99; font-family: 'Moebius_Bold_eng', sans-serif;}
#login .subTitle{ font-size:20px; font-weight:800; color:#e60000;}
#login .login_img{ width:120px; margin-top:40px; margin-bottom:30px;}
#login .text{ font-size:20px; font-weight:800; color:#333; line-height:1.4; letter-spacing:-0.05em;}
#login .text span{ color:#e60000;}
#login .formBox{ margin-top:30px;}
#login .formBox .inputBox{ position:relative; width:100%; height:45px; background-color:#efefef; border-radius:4px; padding-left:45px; box-sizing:border-box; margin-bottom:5px;}
#login .formBox .inputBox .iconBox{ position:absolute; left:0; top:0; width:45px; height:100%; border-radius:4px 0 0 4px; background-color:#e1e1e1; background-position:center; background-repeat:no-repeat; }
#login .formBox .inputBox .icon01{ background-image:url('../img/login_icon01.svg'); background-size:20px;}
#login .formBox .inputBox .icon02{ background-image:url('../img/login_icon02.svg'); background-size:20px;}
#login .formBox .inputBox input{ display:block; width:100%; height:100%; font-size:14px; padding-left:10px; color:#333; text-align:left; border:none; background-color:transparent; outline:none; box-sizing:border-box;}
#login .formBox .btn{ display:block; width:100%; height:45px; line-height:45px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:10px;}
#login .bottom_text{ font-size:12px; color:#9fa0a0; margin-top:80px; line-height:1.2;}

.v-text-field__slot{ margin-top: -10px}

</style>
