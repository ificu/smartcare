<template>
  <v-app>
    <div id="1198754371" class="subArea">
      <div id="4307942033" class="titleBox">
        <router-link to="/Main">
        <a href="" id="6893267579" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
        <div id="3144077403" class="title">공지사항</div>
      </div>
      <v-expansion-panels focusable class="notice">
        <v-expansion-panel v-for="(notice,index) in noticeList" v-bind:key="index">
          <v-expansion-panel-header>{{notice.TITLE}}</v-expansion-panel-header>
          <v-expansion-panel-content>
            {{notice.DESC}}
          </v-expansion-panel-content>
        </v-expansion-panel>
      </v-expansion-panels>
    </div>
  </v-app>
</template>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Constant from '@/Constant'

export default {
  name: 'Notice',
  data () {
    return {
      noticeList: [],
    }
  },
  components: {

  },
  mounted () {
    this.$ga.page('/Notice');

    var param = {};
    param.operation = "list";
    param.tableName = "SMART_NOTICE";
    param.payload = {};

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
      this.noticeList = result.data.Items;

    }).catch((error) => {
      console.log(error);
    });
  }
}
</script>

<style scoped>
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .notice {padding: 10px}
</style>
