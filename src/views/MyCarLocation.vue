<template>
  <div id="4158449995" class="subArea">
		<div id="5433017376" class="titleBox">
      <router-link to="/Main">
      <a href="" id="4916679281" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
        <div id="3273278861" class="title">내차 위치 찾기</div>
    </div>
    <div id="5433017376" class="carLocation">
      <div id="1937010302" class="graphBox"></div>
      <div id="1937010302" class="carInfo">
        <div id="3273278861" class="title">주차위치</div>
        <div id="3273278861" class="subtitle">장수동 근처 100m</div>
        <div id="3273278861" class="title">마지막 주행 완료 시간</div>
        <div id="3273278861" class="subtitle">2019.11.05 PM 2:25~</div>
      </div>
    </div>
        
  </div>
</template>

<script>

export default {
  name: 'MyCarLocation',
  components: {

  }
}
</script>

<style>
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .carLocation {width:100%; padding:10px}
.subArea .carLocation .graphBox{ width:100%; min-height:80px; height: 400px; background-color:#555;  border-radius:5px; margin-bottom: 10px}
.subArea .carLocation .carInfo{ position:relative; width:100%; padding:5px 10px 15px 10px; box-sizing:border-box; border:1px solid #ddd; box-shadow:0 0 8px rgba(0,0,0,0.2); margin-bottom:15px; border-radius:5px;}
.subArea .carLocation .carInfo .title{ font-size:16px; font-weight:800;  padding: 10px 10px 3px 10px }
.subArea .carLocation .carInfo .subtitle{ font-size:14px; color: #666; padding: 0px 10px 0px 10px }

</style>
