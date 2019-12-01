<template>
  <div id="login">
		<img src="@/img/logo_login.svg" class="logo">
        <div class="title">Smart Care</div>
        <div class="subTitle">(BETA)</div>
        <img src="@/img/login_img.svg" class="login_img">
        <div class="text">
          고객님의 <span>안전</span>을 최우선으로<br>	고객님의 안전이 곧 <span>가족의 행복</span>
        </div>
        <v-alert
          type="success"
          v-model="loginAlert"
          dismissible
          icon="mdi-account-alert"
        >
          {{loginAlertMessage}}
        </v-alert>
        <div class="formBox">
          <div class="inputBox"><p class="iconBox icon01"></p><input type="text" placeholder="USERNAME" v-model="id"></div>
          <div class="inputBox"><p class="iconBox icon02"></p><input type="password" placeholder="PASSWORD" v-model="pwd"></div>
          <a @click="login" class="btn">LOGIN</a>
        </div>
        <div class="bottom_text">궁금하신 내용용이나 로그인 문제시,<br>스마트링크 고객센터 (1800-2023)<br>혹은 canadajw@sk.com으로 연락주시기 바랍니다.</div>
    </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

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
  methods: {
    login() {
      //this.$router.push('/Main');

      var param = {};
      param.operation = "list";
      param.tableName = "BAY4U_USER";
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
        url: 'https://2fb6f8ww5b.execute-api.ap-northeast-2.amazonaws.com/bay4u/backendService',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        data: param
      })
      .then((result) => {
        if(result.data.Count == 0){
          this.loginAlertMessage = "등록되지 않은 아이디 입니다.";
          this.loginAlert = true;
        }
        else {
          console.log("로그인 성공 : ", JSON.stringify(result));

          var id = result.data.Items[0].ID;
          var name = result.data.Items[0].NAME;
          var pwd = result.data.Items[0].PWD;
          var type = result.data.Items[0].TYPE;
          var siteCode = result.data.Items[0].CODE;

          console.log('ID 체크 : ', id);

          if(!(pwd === this.pwd)) {
            this.loginAlertMessage = "비밀번호 불일치";
            this.loginAlert = true;
          }
          else {
            this.$router.push('/Main');

            //this.$cookies.set('BsnID', siteCode, '60000s');
            //this.$cookies.set('UserNM', name, '60000s');
            //this.$cookies.set('UserType', type, '6000s');
            //this.$router.push('/MainPage');
            //this.UserInfo.UserID = id;
            //this.UserInfo.BsnID = siteCode;
            //this.UserInfo.Name = name;
          }
        }
      });

    }
  },
  components: {

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

</style>
