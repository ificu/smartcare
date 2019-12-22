<template>
  <div id="8719977076" class="subArea">
		<div id="6363819468" class="titleBox">
      <router-link to="/Main">
      <a href="" id="ContractInfo_backBtn" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
            <div id="9740958422" class="title">차량/계약 정보 안내</div>
        </div>
        <ul id="6326463570" class="infoBox">
          <li id="4496620808">
            <div id="6050419010" class="info_title">차량 정보</div>
                <table id="2643144808">
                  <tr id="2549053519">
                    <th id="3483481127">⊙ 모델</th>
                        <td id="4686868335"><p>{{carModel}}</p></td>
                    </tr>
                    <tr id="3432912197">
                      <th id="3154006697">⊙ 생산</th>
                        <td id="3296516715"><p>{{pYear}}</p></td>
                    </tr>
                    <tr id="9115186043">
                      <th id="9202866437">⊙ 차량가액</th>
                        <td id="2128569587"><p>{{carPrice}}</p></td>
                    </tr>
                    <tr id="9792864102">
                      <th id="7309450569">⊙ 옵션</th>
                        <td id="7809431477">
                          <p style="height:110px" v-html="option"></p>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="1297086572">
              <div id="9273569266" class="info_title">계약 정보</div>
                <table id="9172846720" class="tb02">
                  <tr id="7170186396">
                    <th id="7865099039">⊙ 계약자</th>
                        <td id="8271447043"><p>{{drvName}}</p></td>
                    </tr>
                    <tr id="3004295119">
                      <th id="3575682126">⊙ 계약기간</th>
                        <td id="8677225059"><p>{{cStart}} ~ {{cEnd}} ({{cPeriod}}개월)</p></td>
                    </tr>
                    <tr id="3666856390">
                      <th id="9369307643">⊙ 연간 계약거리</th>
                        <td id="2230891365"><p>{{cDist}}</p></td>
                    </tr>
                    <tr id="2073806950">
                      <th id="3354100226">⊙ 월렌탈료</th>
                        <td id="4520749211"><p>{{rentPrice}}</p></td>
                    </tr>
                    <tr id="4199842230">
                      <th id="7830008680" class="indent"> - 선수금</th>
                        <td id="4762140537"><p>{{prePayed}}원</p></td>
                    </tr>
                    <tr id="9648754559">
                      <th id="9531536027">⊙ 인수가액</th>
                        <td id="6729905483"><p></p></td>
                    </tr>
                    <tr id="1638381196">
                      <th id="5835603339">⊙ 정비관련</th>
                        <td id="6875771441"><p>{{carRepair}}</p></td>
                    </tr>
                    <tr id="6571979376">
                      <th id="7383588514">⊙ 중도해지 위약금</th>
                        <td id="7934832709"><p></p></td>
                    </tr>
                </table>
            </li>
        </ul>
      </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Constant from '@/Constant'

export default {
  name: 'ContractInfo',
  data () {
    return {
      carModel: '',
      pYear: '',
      carPrice: '',
      option: '',
      drvName: '',
      cStart: '',
      cEnd: '',
      cPeriod: '',
      cDist: '',
      rentPrice: '',
      prePayed: '',
      carRepair: ''
    }
  },
  created : function(){
    //this.carContract();

    this.carModel =  this.ContractInfo.carModel;
    this.pYear = this.ContractInfo.ProductYear;
    this.carPrice = this.ContractInfo.CarAMT;
    this.option = this.ContractInfo.Option;
    this.drvName = this.ContractInfo.Name;
    this.cStart = this.ContractInfo.ContStart.substring(2).replace(/-/gi,".");
    this.cEnd = this.ContractInfo.ContEnd.substring(2).replace(/-/gi,".");
    this.cPeriod = this.ContractInfo.ContPeriod;
    this.rentPrice = this.ContractInfo.RentAMT;
    this.prePayed = this.ContractInfo.PrePayed;
    this.carRepair = this.ContractInfo.CarRepair;

    if(this.ContractInfo.ContDist === "0") {
      this.cDist = "무제한";
    }
    else {
      this.cDist = this.ContractInfo.ContDist + "km";
    }
  },
  methods:{
    test(){
      console.log("ddddddddddddddddddd :"+this.UserInfo.CarNo);
    },
    carContract() {     // Main에서 초기에 한번에 읽어 오는 것으로 위치 변경....

      console.log("Check Login : ", this.UserInfo.CarNo);

      var param = {};
      param.operation = "list";
      param.tableName = "SMART_CONTRACT";
      param.payload = {};
      param.payload.FilterExpression = "CAR = :id";
      param.payload.ExpressionAttributeValues = {};
      var key = ":id";
      param.payload.ExpressionAttributeValues[key] = this.UserInfo.CarNo;


      axios({
        method: 'POST',
        url: Constant.LAMBDA_URL,
        headers: Constant.LAMBDA_HEADER,
        data: param
      })
      .then((result) => {
        console.log("Contract 회신 결과 : " + JSON.stringify(result));


        // var carModel = result.data.Items[0].CAR_MODEL;
        // var pYear = result.data.Items[0].PRODUCT_YEAR;
        // var carPrice = result.data.Items[0].CAR_AMT;
        // var option = result.data.Items[0].OPTION;
        // var drvName = result.data.Items[0].NAME;
        // var cStart = result.data.Items[0].CONTRACT_START;
        // var cEnd = result.data.Items[0].CONTRACT_END;
        // var cPeriod = result.data.Items[0].CONTRACT_PERIOD;
        // var rentPrice = result.data.Items[0].RENTAL_AMT;
        /*
        for(var i =0 ;i<result.data.Items.length;i++){
          if(result.data.Items[i].CAR == this.UserInfo.CarNo){
            this.ContractInfo.carModel = result.data.Items[i].CAR_MODEL;
            this.ContractInfo.ProductYear = result.data.Items[i].PRODUCT_YEAR;
            this.ContractInfo.CarAMT =  result.data.Items[i].CAR_AMT;
            this.ContractInfo.Option = result.data.Items[i].OPTION;
            this.ContractInfo.Name =  result.data.Items[i].NAME;
            this.ContractInfo.ContStart = result.data.Items[i].CONTRACT_START;
            this.ContractInfo.ContEnd = result.data.Items[i].CONTRACT_END;
            this.ContractInfo.ContPeriod = result.data.Items[i].CONTRACT_PERIOD;
            this.ContractInfo.RentAMT = result.data.Items[i].RENTAL_AMT;
            break;
          }
        }*/
        // this.ContractInfo.carModel = result.data.Items[8].CAR_MODEL;
        // this.ContractInfo.ProductYear = result.data.Items[8].PRODUCT_YEAR;
        // this.ContractInfo.CarAMT =  result.data.Items[8].CAR_AMT;
        // this.ContractInfo.Option = result.data.Items[8].OPTION;
        // this.ContractInfo.Name =  result.data.Items[8].NAME;
        // this.ContractInfo.ContStart = result.data.Items[8].CONTRACT_START;
        // this.ContractInfo.ContEnd = result.data.Items[8].CONTRACT_END;
        // this.ContractInfo.ContPeriod = result.data.Items[8].CONTRACT_PERIOD;
        // this.ContractInfo.RentAMT = result.data.Items[8].RENTAL_AMT;
            this.ContractInfo.carModel = result.data.Items[0].CAR_MODEL;
            this.ContractInfo.ProductYear = result.data.Items[0].PRODUCT_YEAR;
            this.ContractInfo.CarAMT =  result.data.Items[0].CAR_AMT;
            this.ContractInfo.Option = result.data.Items[0].OPTION;
            this.ContractInfo.Name =  result.data.Items[0].NAME;
            this.ContractInfo.ContStart = result.data.Items[0].CONTRACT_START;
            this.ContractInfo.ContEnd = result.data.Items[0].CONTRACT_END;
            this.ContractInfo.ContPeriod = result.data.Items[0].CONTRACT_PERIOD;
            this.ContractInfo.RentAMT = result.data.Items[0].RENTAL_AMT;

      });

    }
  },
  mounted(){
    //this.carContract();
    // this.test();
  },
  mounted () {
    this.$ga.page('/ContractInfo');
  } ,
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
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .infoBox{ width:100%; padding:20px 10px; box-sizing:border-box;}
.subArea .infoBox li{ position:relative; width:100%; padding:15px 10px; box-sizing:border-box; border:1px solid #ddd; box-shadow:0 0 8px rgba(0,0,0,0.2); margin-bottom:15px; border-radius:5px;}
.subArea .infoBox li:last-child{ margin-bottom:0}
.subArea .infoBox li .info_title{ font-size:18px; font-weight:800; color:#333; margin-bottom:10px;}
.subArea .infoBox li table{ width:100%;}
.subArea .infoBox li table th{ width:80px; font-size:14px; font-weight:bold; color:#777; text-align:left; background-color:transparent; vertical-align:middle; letter-spacing:-0.03em;}
.subArea .infoBox li table td{ padding:5px 0; vertical-align:middle;}
.subArea .infoBox li table td p{ height:25px; font-size:14px; font-weight:bold; color:#777; padding:5px 8px; box-sizing:border-box; background-color:#efefef; letter-spacing:-0.03em;}
.subArea .infoBox li table .indent{ padding-left: 10px;}
.subArea .infoBox li table .sub th{ font-weight:normal; vertical-align:top}
.subArea .infoBox li table .sub td{ padding:0; vertical-align:top}
.subArea .infoBox li table .sub td p{ height:auto; background-color:transparent; padding:0 8px;}
.subArea .infoBox li table .sub .indent{ padding-left: 10px;}
.subArea .infoBox li table.tb02 th{ width:115px;}

</style>
