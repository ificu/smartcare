<template>
  <v-app>
    <div id="1198754371" class="subArea">
      <div id="4307942033" class="titleBox">
        <router-link to="/Main">
        <a href="" id="Notice_backBtn" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
        <div id="3144077403" class="title">공지사항</div>
      </div>
      <v-expansion-panels focusable class="notice" v-model="openPanel">
        <v-expansion-panel v-for="(notice,index) in noticeList" v-bind:key="index">
          <v-expansion-panel-header>{{notice.TITLE}}</v-expansion-panel-header>
          <v-expansion-panel-content v-html = "notice.DESC">
            
          </v-expansion-panel-content>
          <router-link to="/SafeReport">
            <v-btn class="ta-2" color="#ceece3" block v-if="openPanel===0 && index===0">
              <v-icon>mdi-link-variant</v-icon>상세내용 바로가기
            </v-btn>
          </router-link>
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
      openPanel: ''
    }
  },
  components: {

  },
  created : function() {
    console.log("create...... ", this.$route.params);
    if(this.$route.params !== undefined){
      this.openPanel = this.$route.params.index;
    }
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

      result.data.Items.sort(function(a,b) {
        return a.SEQ > b.SEQ ? -1 : a.SEQ < b.SEQ ? 1 : 0;
      });

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

.v-expansion-panel-content {padding: 20px 0px 20px 40px}
</style>
