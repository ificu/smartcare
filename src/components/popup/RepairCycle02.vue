<template>
	<div id="popup_period_setting" class="popup_layer">
    <div id="" class="popup_main">
      <a href="javascript:;" id="RepairCycle02_xBtn" @click="$emit('close')" class="xBtn"><img src="@/img/icon_xBtn.svg" id=""></a>
      <div id="" class="title2">정비주기 설정</div>
      <div id="" class="popup_table">
        <table id="">
          <tr>
            <th id="">⊙ 일반조건</th>
            <td id=""><input type="radio" id="일반조건" name="정비주기설정" v-model="checkedValues" value="1"><label for="일반조건">{{conditionMessage1}}</label></td>
          </tr>
          <tr v-if = "repairItem === '엔진오일'">
            <th id="">⊙ 가혹조건</th>
            <td id=""><input type="radio" id="가혹조건" name="정비주기설정" v-model="checkedValues" value="2"><label for="가혹조건">{{conditionMessage2}}</label></td>
          </tr>
          <tr>
            <th id="">⊙ 개인 설정조건</th>
            <td id=""><input type="radio" id="개인설정조건" name="정비주기설정" v-model="checkedValues" value="3"><label for="개인설정조건" class="my"><div class="inputBox"><input type="text" id="" v-model="inputKm"></div> km</label></td>
          </tr>
        </table>
      </div>
			<br>
			<a id="RepairCycle02_Confirm" class="btn" @click="updateData">확인</a>
    </div>
  </div>
</template>

<script>
import Constant from '@/Constant'
import axios from 'axios'

export default {
  name: 'RepairCycle02',
	props: {
		repairItem: String,
	},
	data () {
    return {
			item: this.repairItem,
			checkedValues: [],
			conditionMessage1: '',
			conditionMessage2: '',
			inputKm: this.repairItem === "엔진오일" ? this.$store.getters.CarRepairInfo.EngineOilCycle : this.$store.getters.CarRepairInfo.AirFilterCycle
    }
  },
	methods: {
    updateData() {
			console.log("this.checkedValues : ", this.checkedValues);
			console.log("this.repairItem : ", this.repairItem);

      var param = {};
      param.operation = "update";
      param.tableName = "SMART_REPAIR";
      param.payload = {};
			param.payload.Key = {};
			param.payload.Key.CAR = this.UserInfo.CarNo;

			var tmpKm = 0;
			var tmpType = "";
      var key1 = ":km";
			var key2 = ":type";
			param.payload.ExpressionAttributeValues = {};

			if(this.checkedValues === '1') {
				tmpType = "일반";
				if(this.repairItem === "엔진오일") tmpKm = 15000;
				else tmpKm = 10000;
			}
			else if(this.checkedValues === '2') {
				tmpType = "가혹";
				if(this.repairItem === "엔진오일") tmpKm = 7500;
				else tmpKm = 5000;
			}
			else {
				tmpType = "개인";
				tmpKm = this.inputKm;
			}

			if(this.repairItem === "엔진오일") {
				param.payload.UpdateExpression = "set EngineOilCycle = :km, EngineOilType = :type";
				param.payload.ExpressionAttributeValues[key1] = tmpKm;
				param.payload.ExpressionAttributeValues[key2] = tmpType;
				this.CarRepairInfo.EngineOilCycle = tmpKm;
				this.CarRepairInfo.EngineOilType = tmpType;
			}
			else {
				param.payload.UpdateExpression = "set AirFilterCycle = :km, AirFilterType = :type";
				param.payload.ExpressionAttributeValues[key1] = tmpKm;
				param.payload.ExpressionAttributeValues[key2] = tmpType;
				this.CarRepairInfo.AirFilterCycle = tmpKm;
				this.CarRepairInfo.AirFilterType = tmpType;
			}


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
	mounted(){
		console.log("this.repairItem : ", this.item);
		console.log("this.checkedValues : ", this.checkedValues);
		console.log("this.CarRepairInfo.EngineOilType : ", this.CarRepairInfo.EngineOilType);
		console.log("this.CarRepairInfo.AirFilterType : ", this.CarRepairInfo.AirFilterType);
		if(this.item === "엔진오일") {
			if(this.CarRepairInfo.EngineOilType === "일반") {
				this.checkedValues = 1;
			}
			else if(this.CarRepairInfo.EngineOilType === "가혹") {
				this.checkedValues = 2;
			}
			else {
				this.checkedValues = 3;
			}
			this.conditionMessage1 = '15,000Km / 6개월';
			this.conditionMessage2 = '7,500km / 6개월';
		}
		else {
			if(this.CarRepairInfo.AirFilterType === "일반") {
				this.checkedValues = 1;
			}
			else if(this.CarRepairInfo.AirFilterType === "가혹") {
				this.checkedValues = 2;
			}
			else {
				this.checkedValues = 3;
			}
			this.conditionMessage1 = '10,000Km / 6개월';
			this.conditionMessage2 = '5,000Km / 3개월';
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

/* 팝업(정비주기설정) */
.popup_layer{ position:fixed; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:10}
.popup_layer .popup_main{ position:absolute; left:5%; top:50%; transform:translateY(-50%); width:90%; background-color:#fff; border:1px solid #28ce99; box-sizing:border-box; padding:50px 15px 30px; text-align:center}
.popup_layer .popup_main .xBtn{ position:absolute; top:12px; right:10px;}
.popup_layer .popup_main .xBtn img{ width:22px;}
.popup_layer .popup_main .title2{ font-size:26px; font-weight:800; color:#333; letter-spacing:-0.05em;}
.popup_layer .popup_main .popup_table{ margin-top:30px;}
.popup_layer .popup_main .popup_table table{ width:100%;}
.popup_layer .popup_main .popup_table table th{ width:115px; font-size:14px; font-weight:bold; color:#333; text-align:left; background-color:transparent; vertical-align:middle;}
.popup_layer .popup_main .popup_table table td{ font-size:14px; font-weight:800; color:#333; vertical-align:middle; padding:5px 0}
.popup_layer .popup_main .popup_table table td input[type=radio]{ display:none;}
.popup_layer .popup_main .popup_table table td input[type=radio] + label{ position:relative; display:block; width:100%; font-size:14px; font-weight:800; color:#333; text-align:left;}
.popup_layer .popup_main .popup_table table td input[type=radio] + label:before{ content:""; position:absolute; top:50%; right:0; transform:translateY(-50%); width:14px; height:14px; border-radius:50%; border:1px solid #aaa;}
.popup_layer .popup_main .popup_table table td input[type=radio]:checked + label:before{ background-color:#ff0000;}
.popup_layer .popup_main .popup_table table td .inputBox{ display:inline-block; vertical-align:middle; width:120px; height:25px; vertical-align:middle; background-color:#efefef;}
.popup_layer .popup_main .popup_table table td .inputBox input[type=text]{ display:block; width:100%; height:100%; font-size:14px; font-weight:bold; color:#333; text-align:right; padding-right:10px; box-sizing:border-box; background-color:transparent; border:none; outline:none;}
.popup_layer .popup_main .btn{ display:block; margin:auto; width:40%; height:30px; line-height:35px; font-size:14px; font-weight:bold; color:#fff; text-align:center; background-color:#28ce99; border-radius:4px; margin-top:10px;}

</style>
