<template>
  <div id="4158449995" class="subArea">
		<div id="5433017376" class="titleBox">
      <router-link to="/Main">
      <a href="" id="4916679281" class="backBtn"><img src="../img/icon_back.svg"></a></router-link>
        <div id="3273278861" class="title">내차 위치 찾기</div>
    </div>
    <div id="map_div" class="graphBox"></div>
    <div id="5433017376" class="carLocation">
      <!--<div id="1937010302" class="graphBox"></div>-->
      <div id="1937010302" class="carInfo">
        <div id="3273278861" class="title">주차위치</div>
        <div id="3273278861" class="subtitle">{{carLocation}}</div>
        <div id="3273278861" class="title">마지막 주행 완료 시간</div>
        <div id="3273278861" class="subtitle">{{carDate}}~</div>
      </div>
    </div>

  </div>
</template>

<script src="https://apis.openapi.sk.com/tmap/js?version=1&format=javascript&appKey=145167c3-796e-4989-b8ed-74241254b771"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
import Constant from '@/Constant'

export default {
  name: 'MyCarLocation',
  data () {
    return {
      carLocation: '',
      carDate: ''
    }
  },
  mounted: function() {
    console.log('CarInfo.... ', this.CarInfo);

    this.carDate = this.CarInfo.gpsDt.substr(0, this.CarInfo.gpsDt.length-5);

    var map = new Tmap.Map({
      div:'map_div',
      width : "100%",
      height : "400px",
      padding: "10px"
    });
    //map.setCenter(new Tmap.LonLat("126.986072", "37.570028").transform("EPSG:4326", "EPSG:3857"), 15);
    map.setCenter(new Tmap.LonLat(this.CarInfo.curLon, this.CarInfo.curLat).transform("EPSG:4326", "EPSG:3857"), 15);

    var markerLayer = new Tmap.Layer.Markers();
    map.addLayer(markerLayer);

    var lonlat = new Tmap.LonLat( this.CarInfo.curLon , this.CarInfo.curLat).transform("EPSG:4326", "EPSG:3857");
    var size = new Tmap.Size(24, 38);
    var offset = new Tmap.Pixel(-(size.w / 2), -(size.h));
    var icon = new Tmap.Icon('http://tmapapis.sktelecom.com/upload/tmap/marker/pin_b_m_a.png',size, offset);

    var marker = new Tmap.Marker(lonlat, icon);
    markerLayer.addMarker(marker);

    var url = Constant.TMAP_URL + "/reversegeocoding?version=1&format=json&callback=result&"
              + "coordType=WGS84GEO&lon=" + this.CarInfo.curLon
              + "&lat=" + this.CarInfo.curLat + "&appKey=" + Constant.TMAP_KEY;

    axios.get(url)
    .then((result) => {
      console.log("TMAP 회신 결과 : ", result);
      this.carLocation = result.data.addressInfo.fullAddress;
    }).catch((error) => {
      console.log(error);
    });
  },
  computed:{
    CarInfo: {
        get() { return this.$store.getters.CarInfo },
        set(value) { this.$store.dispatch('UpdateCarInfo',value) }
    },
  },
}
</script>

<style>
.subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center; margin-bottom: 10px}
.subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
.subArea .titleBox .backBtn img{ width:15px;}
.subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}

.subArea .carLocation {width:100%; padding:10px}
.subArea .carLocation .carInfo{ position:relative; width:100%; padding:5px 10px 15px 10px; box-sizing:border-box; border:1px solid #ddd; box-shadow:0 0 8px rgba(0,0,0,0.2); margin-bottom:15px; border-radius:5px;}
.subArea .carLocation .carInfo .title{ font-size:16px; font-weight:800;  padding: 10px 10px 3px 10px }
.subArea .carLocation .carInfo .subtitle{ font-size:14px; color: #666; padding: 0px 10px 0px 10px }

</style>
