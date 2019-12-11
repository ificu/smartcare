<template>
  <div id="4158449995" class="subArea">
		<div id="5433017376" class="titleBox">
      <router-link to="/Main">
      <a href="" id="4916679281" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
        <div id="3273278861" class="title">1:1문의</div>
    </div>
    <a id="8672175743" class="btn" @click="showQnARegister = !showQnARegister">문의사항이 있으시다면 Click</a>

      <div id="5433017376" class="messageList">
        <div id="1937010302" class="qnaCard" v-for="(qna,index) in qnaList" v-bind:key="index">
          <div id="3273278861" class="qDate">{{qna.QDATE}}</div>
          <div id="3273278861" class="qTitle">{{qna.QTITLE}}</div>
          <div id="3273278861" class="qDesc">{{qna.QDESC}}</div>
          <div id="3273278861" class="aTitle" v-if="qna.ADESC !== undefined">[답변]</div>
          <div id="3273278861" class="aDesc">{{qna.ADESC}}</div>
        </div>
      </div>
    <transition name="slide-fade">
      <QnARegister v-if="showQnARegister" @close="showQnARegister=false" @updateData="updateData"></QnARegister>
    </transition>
  </div>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Constant from '@/Constant'
import QnARegister from '@/components/popup/QnARegister.vue'
import {datePadding} from '@/utils/common.js'

export default {
  name: 'QnA',
  data () {
    return {
      showQnARegister: false,
      qnaList: []
    }
  },
  methods: {
    updateData(input) {
      var now = new Date();
      var curr =  now.getFullYear() + "." + datePadding(now.getMonth()+1,2) + "." + datePadding(now.getDate(),2) ;
      var key = now.getFullYear() + datePadding(now.getMonth()+1,2) + datePadding(now.getDate(),2)
                + datePadding(now.getHours(),2) + datePadding(now.getMinutes(), 2) + datePadding(now.getSeconds(),2);

      var cont = {"QDATE": curr, "QTITLE": input.inputTitle, "QDESC": input.inputDesc};

      var param = {};
      param.operation = "create";
      param.tableName = "SMART_QNA";
      param.payload = {};
      param.payload.Item = {};
      param.payload.Item.SEQ = key;
      param.payload.Item.ID = this.UserInfo.UserLoginId;
      param.payload.Item.QDATE = curr;
      param.payload.Item.QTITLE = input.inputTitle;
      param.payload.Item.QDESC = input.inputDesc;

      console.log("====== updateData ======");
      console.log(param);

      axios({
        method: 'POST',
        url: Constant.LAMBDA_URL,
        headers: Constant.LAMBDA_HEADER,
        data: param
      })
      .then((result) => {
        console.log("mounted 회신 결과 : ", result);
        this.qnaList = result.data.Items;

      }).catch((error) => {
        console.log(error);
      });

			this.qnaList.unshift(cont);
		}
	},
  mounted () {
    this.$ga.page('/QnA');


    var param = {};
    param.operation = "list";
    param.tableName = "SMART_QNA";
    param.payload = {};

    /*
    param.payload.FilterExpression = "ID = :id";
    param.payload.ExpressionAttributeValues = {};
    var key = ":id";
    param.payload.ExpressionAttributeValues[key] = this.UserInfo.UserLoginId;    */
    console.log("====== mounted ======");
    console.log(param);

    axios({
      method: 'POST',
      url: Constant.LAMBDA_URL,
      headers: Constant.LAMBDA_HEADER,
      data: param
    })
    .then((result) => {
      console.log("mounted 회신 결과 : ", result);
      result.data.Items.sort(function(a,b) {
        return a.SEQ > b.SEQ ? -1 : a.SEQ < b.SEQ ? 1 : 0;
      });
      this.qnaList = result.data.Items;
    }).catch((error) => {
      console.log(error);
    });
  } ,
  components: {
    QnARegister: QnARegister,
  },
  computed:{
    UserInfo: {
        get() { return this.$store.getters.UserInfo },
        set(value) { this.$store.dispatch('UpdateUserInfo',value) }
    },
  },
}
</script>

<style scoped>
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center; margin-bottom: 10px}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .messageList {width:100%; padding:10px}
.subArea .messageList .qnaCard{ position:relative; width:100%; padding:5px 10px 15px 10px; box-sizing:border-box; border:1px solid #ddd; box-shadow:0 0 8px rgba(0,0,0,0.2); margin-bottom:15px; border-radius:5px;}
.subArea .messageList .qnaCard .qDate{ font-size:12px; color: #666; padding: 10px 10px 0px 10px }
.subArea .messageList .qnaCard .qTitle{ font-size:16px; font-weight:800;  padding: 5px 10px 3px 10px }
.subArea .messageList .qnaCard .qDesc{ font-size:14px; color: #666; padding: 0px 20px 0px 20px }
.subArea .messageList .qnaCard .aTitle{ font-size:14px; color: #666; padding: 20px 10px 0px 10px }
.subArea .messageList .qnaCard .aDesc{ font-size:16px; font-weight:800;  padding: 5px 10px 3px 10px }
.subArea .btn{ display:block; margin:auto; width:95%; height:35px; line-height:35px; font-size:18px; font-weight:bold; color:#fff; text-align:center; background-color:#ED6C00; border-radius:6px; margin-top:10px;}

</style>
