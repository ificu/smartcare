<template>
	<div id="" class="popup_layer">
    <div id="" class="popup_main">
      <a href="javascript:;" id="" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg" id=""></a>
      <div id="" class="title2">문의사항 등록</div>
      <div id="" class="popup_table">
        <table id="">
          <tr>
						<th>제목</th>
            <td id=""><div class="inputBox"><input type="text" id="" v-model="inputTitle"></div> </td>
          </tr>
					<tr>
						<th>내용</th>
            <td id=""><div class="inputArea"><textarea rows="6" cols="23" v-model="inputDesc" name="contents"></textarea></div> </td>
          </tr>
        </table>
      </div>
			<v-alert
				type="success"
				v-model="registerAlert"
				dismissible
				icon="mdi-account-alert"
				id="8401667302"
			>
				{{registerAlertMessage}}
			</v-alert>
			<br>
			<a id="8672175743" class="btn" @click="updateData">확인</a>
    </div>
  </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Constant from '@/Constant'

export default {
  name: 'QnARegister',
	data () {
    return {
			inputTitle: "",
			inputDesc: "",
			registerAlert: false,
      registerAlertMessage: ''
    }
  },
	methods: {
    updateData() {
			if(this.inputTitle.length === 0) {
				this.registerAlert = true;
				this.registerAlertMessage = "문의 제목에 내용을 넣어 주세요.";
				return;
			}
			if(this.inputDesc.length === 0) {
				this.registerAlert = true;
				this.registerAlertMessage = "문의 내용을 입력해 주세요.";
				return;
			}

			var data = {'inputTitle': this.inputTitle, 'inputDesc': this.inputDesc};
			this.$emit('updateData', data);
			this.$emit('close');
		}
	},
	computed:{
		UserInfo: {
        get() { return this.$store.getters.UserInfo },
        set(value) { this.$store.dispatch('UpdateUserInfo',value) }
    },
    CarRepairInfo: {
        get() { return this.$store.getters.CarRepairInfo },
        set(value) { this.$store.dispatch('UpdateCarRepairInfo',value) }
    },
  },
}
</script>

<style scoped>

.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:40px 10px 20px; text-align:center}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title2{ font-size:26px; font-weight:800; color:#333; letter-spacing:-0.05em;}
.popup_layer .popup_main .popup_table{ margin-top:10px;}
.popup_layer .popup_main .popup_table table{ width:100%;}
.popup_layer .popup_main .popup_table table th{ width:20%; font-size:18px; font-weight:bold; color:#333; text-align:center; background-color:transparent; vertical-align:middle;}
.popup_layer .popup_main .popup_table table td{ font-size:14px; font-weight:800; color:#333; vertical-align:middle; padding:5px 0}
.popup_layer .popup_main .popup_table table td .inputBox{ display:inline-block; vertical-align:middle; width:100%; height:30px; background-color:#efefef;}
.popup_layer .popup_main .popup_table table td .inputBox input[type=text]{ display:block; width:100%; height:100%; font-size:14px; font-weight:bold; color:#333; padding-right:10px; box-sizing:border-box; background-color:transparent; border:none; outline:none;}
.popup_layer .popup_main .popup_table table td .inputArea{ display:inline-block; vertical-align:middle; width:100%; height:100px; background-color:#efefef;}
.popup_layer .popup_main .popup_table table td .inputArea textarea{ display:block; width:100%; height:100%; font-size:14px; font-weight:bold; color:#333; padding-right:10px; box-sizing:border-box; background-color:transparent; border:none; outline:none;}

.popup_layer .btn{ display:block; margin:auto; width:40%; height:30px; line-height:35px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:10px;}

</style>
