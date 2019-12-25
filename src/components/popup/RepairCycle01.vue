<template>
	<div id="popup_period_setting" class="popup_layer">
    <div id="" class="popup_main">
      <a href="javascript:;" id="RepairCycle01_xBtn" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg" id=""></a>
      <div id="" class="title2">이전 교환시기 입력</div>
			<div id="" class="message1">마지막으로 교체한 주행거리를 넣어주세요</div>
			<div id="" class="message2">직접 넣어주신 주행거리부터</div>
			<div id="" class="message2">교환주기를 다시 시작합니다</div>
      <div id="" class="popup_table">
        <table id="">
          <tr>
            <td id=""><div class="inputBox"><input type="text" id="" v-model="inputKm"></div> km</td>
          </tr>
        </table>
      </div>
			<v-alert
				type="success"
				v-model="repairAlert"
				dismissible
				icon="mdi-account-alert"
				id="8401667302"
			>
				{{repairAlertMessage}}
			</v-alert>			
			<br>
			<a id="RepairCycle01_Confirm" class="btn" @click="updateData">확인</a>
    </div>
  </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Constant from '@/Constant'

export default {
  name: 'RepairCycle01',
	props: {
		repairItem: String,
	},
	data () {
    return {
			item: this.repairItem,
      beforeChangeKm: 0,
			beforeChangeItem: "",
			repairAlert: false,
			repairAlertMessage: '',
			inputKm: this.repairItem === "엔진오일" ? this.$store.getters.CarRepairInfo.EngineOilBefore : this.$store.getters.CarRepairInfo.AirFilterBefore
    }
  },
	methods: {
    updateData() {

			if(parseInt(this.inputKm) > parseInt(this.CarInfo.accDist)) {
				this.repairAlert = true;
				this.repairAlertMessage = "현 주행거리보다 더 크게 입력하실 수 없습니다.";
				return;
			}

      var param = {};
      param.operation = "update";
      param.tableName = "SMART_REPAIR";
      param.payload = {};
			param.payload.Key = {};
			param.payload.Key.CAR = this.UserInfo.CarNo;
			if(this.repairItem === "엔진오일") {
				param.payload.UpdateExpression = "set EngineOilBefore = :km";
				this.CarRepairInfo.EngineOilBefore = this.inputKm;
			}
			else {
				param.payload.UpdateExpression = "set AirFilterBefore = :km";
				this.CarRepairInfo.AirFilterBefore = this.inputKm;
			}
      param.payload.ExpressionAttributeValues = {};
      var key = ":km";
      param.payload.ExpressionAttributeValues[key] = this.inputKm;

      console.log("====== updateData ======");
      console.log(param);

      axios({
        method: 'POST',
        url: Constant.LAMBDA_URL,
        headers: Constant.LAMBDA_HEADER,
        data: param
      })
      .then((result) => {
        console.log("updateData 회신 결과 : ", result);

      }).catch((error) => {
        console.log(error);
      });

			this.$emit('close');
		}
	},
	computed:{
		UserInfo: {
        get() { return this.$store.getters.UserInfo },
        set(value) { this.$store.dispatch('UpdateUserInfo',value) }
    },
		CarInfo: {
        get() { return this.$store.getters.CarInfo },
        set(value) { this.$store.dispatch('UpdateCarInfo',value) }
    },
    CarRepairInfo: {
        get() { return this.$store.getters.CarRepairInfo },
        set(value) { this.$store.dispatch('UpdateCarRepairInfo',value) }
    },
  },
}
</script>

<style scoped>

/* 팝업(정비주기설정) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:50px 15px 30px; text-align:center}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title2{ font-size:26px; font-weight:800; color:#333; letter-spacing:-0.05em;}
.popup_layer .popup_main .message1{ font-size:16px; font-weight:600; color:#999; padding-top:30px; padding-bottom: 30px}
.popup_layer .popup_main .message2{ font-size:14px; font-weight:600; color:#999; }
.popup_layer .popup_main .popup_table{ margin-top:30px;}
.popup_layer .popup_main .popup_table table{ width:100%;}
.popup_layer .popup_main .popup_table table th{ width:120px; font-size:14px; font-weight:bold; color:#333; text-align:left; background-color:transparent; vertical-align:middle;}
.popup_layer .popup_main .popup_table table td{ font-size:24px; font-weight:800; color:#333; vertical-align:middle; padding:5px 0}
.popup_layer .popup_main .popup_table table td .inputBox{ display:inline-block; vertical-align:middle; width:150px; height:30px; background-color:#efefef;}
.popup_layer .popup_main .popup_table table td .inputBox input[type=text]{ display:block; width:100%; height:100%; font-size:14px; font-weight:bold; color:#333; text-align:right; padding-right:10px; box-sizing:border-box; background-color:transparent; border:none; outline:none;}
.popup_layer .btn{ display:block; margin:auto; width:40%; height:30px; line-height:35px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:10px;}

</style>
