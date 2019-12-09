<template>
  <v-app>
    <div id="1198754371" class="subArea">
      <div id="4307942033" class="titleBox">
        <router-link to="/Main">
        <a href="" id="6893267579" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
        <div id="3144077403" class="title">공지사항</div>
      </div>
      <v-expansion-panels focusable class="notice">

        <v-expansion-panel>
          <v-expansion-panel-header>신규서비스 안내 (주행 지역 날씨 정보 안내)</v-expansion-panel-header>
          <v-expansion-panel-content>
            <br>신규 서비스가  <br> 만들어져서... <br> 안내를 하려 합니다....
          </v-expansion-panel-content>        
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header>안전운전 이벤트 안내 (~'19.12.31까지)</v-expansion-panel-header>
          <v-expansion-panel-content>
            <br>안전운전이 최고에요 !!!!!  <br>완전좋아좋아좋아
          </v-expansion-panel-content>        
        </v-expansion-panel> 
               
        <v-expansion-panel>
          <v-expansion-panel-header>MVP 사이트를 오픈 했습니다.</v-expansion-panel-header>
          <v-expansion-panel-content>
            <br>만세~~~~~
          </v-expansion-panel-content>        
        </v-expansion-panel>        
      </v-expansion-panels>      
    </div>
  </v-app>
</template>

<script>

export default {
  name: 'Notice',
  components: {

  },
  mounted () {
    this.$ga.page('/Notice');
  } ,      
}
</script>

<style scoped>
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .notice {padding: 10px}
</style>
