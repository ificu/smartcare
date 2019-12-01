<template>
  <div class="mainArea">
    <div class="titleBox">
      <a href="javascript:;" class="menuBtn"><img src="@/img/icon_menu.svg"></a>
      <div class="title">안녕하세요, 문성준 님</div>
      <div class="subTitle">SK렌터카 <span>스마트케어</span>(Beta Ver.) 서비스<br>테스트에 참여해주셔서 감사합니다.</div>
    </div>
    <div class="item_list">
      <a href="javascript:;" class="item">
        <img src="@/img/logo_skRental.svg" class="logo">
        <div class="item_text">내 차 계약 정보 확인</div>
      </a>
      <a href="javascript:;" class="item">
        <div class="item_title"><img src="@/img/icon_target.svg"> <span class="title">안전점수</span></div>
        <div class="guageBox">
          <img src="@/img/guage_bar.svg" class="guage_bar">
          <div class="goal_score">목표 점수<br>85점</div>
          <div class="my_score">74점<p>(상위 32%, 96위)</p></div>
        </div>
        <div class="text01">좋은 안전운전 습관으로 도약하고 있습니다.</div>
        <div class="text02">가속패달을 조금 더 차분히 밟아주세요.</div>
        <div class="text03">지금 <span>안전운전 미션</span>을 확인해 보세요!</div>
      </a>
      <a href="javascript:;" class="item">
        <div class="item_title"><img src="@/img/icon_alarm01.svg"> <span class="title">정차 중 충격알림</span><span class="new">NEW</span></div>
        <ul class="alarm_list">
          <li><p class="date">11월 7일 13:00</p><p>차량 충격이 감지되었습니다.</p></li>
          <li><p class="date">11월 6일 19:21</p><p>차량 충격이 감지되었습니다.</p></li>
        </ul>
        <div class="more">... more</div>
      </a>
      <a href="javascript:;" class="item">
        <div class="item_title"><img src="@/img/icon_fix.svg"> <span class="title">정비관리</span><span class="new">NEW</span></div>
        <div class="item_text">현재 누적 주행거리 8,321Km 주행</div>
        <ul class="text_list">
          <li>- 이달의 점검 항목이 없습니다.</li>
          <li>- 다가오는 점검 항목을 확인하세요.</li>
        </ul>
      </a>
      <a href="javascript:;" class="item">
        <div class="item_title"><img src="@/img/icon_history.svg"> <span class="title">주행이력관리</span><span class="new">NEW</span></div>
        <ul class="history_list">
          <li><p class="date">11월 7일 13:00</p><p class="address"><span>서울특별시 강남구 논현동 278-12 성재빌딩</span></p></li>
          <li><p class="date">11월 6일 19:21</p><p class="address"><span>서울특별시 강남구 테헤란로 340 성재빌딩</span></p></li>
          <li><p class="date">11월 5일 10:00</p><p class="address"><span>서울특별시 강남구 논현동 278-12 성재빌딩</span></p></li>
        </ul>
        <div class="more">... more</div>
      </a>
      <a href="javascript:;" class="item">
        <div class="item_title"><img src="@/img/icon_locate.svg"> <span class="title">내차 위치 찾기</span></div>
        <div class="item_text" style="padding-bottom:10px">공항, 식당에서 발렛 파킹 하셨나요?</div>
      </a>
      <ul class="comingsoon_list">
        <div class="item_title">신규 예정 서비스</div>
        <li @click="showComingsoon = !showComingsoon"><img src="@/img/icon_119.svg"> <span>119 자동출동 서비스 (대형사고 발생시)</span></li>
        <li><img src="@/img/icon_alarm02.svg"> <span>다양한 알림 서비스</span></li>
        <li><img src="@/img/icon_ai.svg"> <span>우전비스(AI) 서비스</span></li>
        <li><img src="@/img/icon_change.svg"> <span>최적의 교환주기 추천 서비스</span></li>
        <li><img src="@/img/icon_fix.svg"> <span>가까운 정비 업소 알림/예약 서비스</span></li>
      </ul>
    </div>
    <transition name="slide-fade">
      <Comingsoon v-if="showComingsoon" @close="showComingsoon=false"></Comingsoon>
    </transition>
  </div>
</template>

<script>
import Comingsoon from '@/components/popup/Comingsoon.vue'

export default {
  name: 'main',
  data () {
    return {
      showComingsoon: false,
    }
  },
  components: {
    Comingsoon: Comingsoon
  }
}
</script>

<style>

/* 메인 */
#app{ position:relative; padding-bottom:10px;}
#app .mainArea{}
#app .mainArea .titleBox{ position:relative; width:100%; padding:50px 10px 20px; box-sizing:border-box; background-color:#28ce99; text-align:center}
#app .mainArea .titleBox .menuBtn{ position:absolute; top:20px; left:20px;}
#app .mainArea .titleBox .menuBtn img{ width:20px;}
#app .mainArea .titleBox .title{ font-size:24px; font-weight:bold; color:#fff;}
#app .mainArea .titleBox .subTitle{ font-size:16px; font-weight:bold; color:#fff; line-height:1.2; margin-top:20px;}
#app .mainArea .titleBox .subTitle span{ color:#ffee7d}
#app .mainArea .item_list{ width:100%; padding:15px 10px; box-sizing:border-box; }
#app .mainArea .item_list .item{ position:relative; display:block; width:100%; padding:10px; box-sizing:border-box; border:1px solid #ddd; box-shadow:0 0 8px rgba(0,0,0,0.2); background-color:#fff; margin-bottom:10px; border-radius:5px;}
#app .mainArea .item_list .item .logo{ position:absolute; top:13px; left:20px; width:40px;}
#app .mainArea .item_list .item .item_title{ margin-bottom:10px}
#app .mainArea .item_list .item .item_title img{ display:inline-block; vertical-align:middle; height:18px;}
#app .mainArea .item_list .item .item_title .title{ display:inline-block; vertical-align:middle; font-size:14px; font-weight:bold; color:#666;}
#app .mainArea .item_list .item .item_title .new{ display:inline-block; vertical-align:super; font-size:10px; font-weight:bold; color:#f2000d;}
#app .mainArea .item_list .item .guageBox{ position:relative; width:100%; height:120px; background-image:url(../img/main_guage.png); background-position:center top; background-repeat:no-repeat; background-size:200px;}
#app .mainArea .item_list .item .guageBox .guage_bar{ position:absolute; left:50%; top:15px; margin-left:-12px; width:20px; transform-origin:bottom center; transform:rotate(45deg)}
#app .mainArea .item_list .item .guageBox .goal_score{ position:absolute; left:50%; top:45px; margin-left:95px; font-size:14px; font-weight:bold; color:#666; text-align:center;}
#app .mainArea .item_list .item .guageBox .my_score{ position:absolute; left:0; bottom:-10px; width:100%; font-size:30px; font-weight:800; color:#333; text-align:center;}
#app .mainArea .item_list .item .guageBox .my_score p{ display:block; font-size:14px; color:#666;}
#app .mainArea .item_list .item .text01{ font-size:16px; font-weight:800; color:#333; text-align:center; margin-top:20px}
#app .mainArea .item_list .item .text02{ font-size:13px; color:#666; text-align:center; margin-top:5px;}
#app .mainArea .item_list .item .text03{ width:100%; padding:7px 0 5px; font-size:18px; font-weight:800; color:#333; text-align:center; background-color:#ceece3; margin-top:25px; margin-bottom:10px; border-radius:3px;}
#app .mainArea .item_list .item .text03 span{ color:#f2000d;}
#app .mainArea .item_list .item .alarm_list{ margin-top:10px}
#app .mainArea .item_list .item .alarm_list li{ display:table; width:100%; margin-bottom:5px;}
#app .mainArea .item_list .item .alarm_list li p{ display:table-cell; font-size:15px; font-weight:bold; color:#333; vertical-align:middle;}
#app .mainArea .item_list .item .alarm_list li p.date{ font-size:12px; font-weight:normal; width:110px; padding-left:10px; box-sizing:border-box}
#app .mainArea .item_list .item .more{ font-size:11px; font-weight:bold; color:#333; text-align:right; margin-top:5px;}
#app .mainArea .item_list .item .item_text{ font-size:16px; font-weight:800; color:#333; padding:5px 0; text-align:center;}
#app .mainArea .item_list .item .text_list{ padding-left:50px; padding-bottom:10px}
#app .mainArea .item_list .item .text_list li{ font-size:14px; font-weight:bold; color:#333; margin-top:5px;}
#app .mainArea .item_list .item .history_list{ margin-top:10px}
#app .mainArea .item_list .item .history_list li{ display:table; width:100%; margin-bottom:5px;}
#app .mainArea .item_list .item .history_list li p{ display:table-cell; vertical-align:middle;}
#app .mainArea .item_list .item .history_list li p.date{ width:110px; font-size:12px; color:#333; font-weight:normal; padding-left:10px; box-sizing:border-box}
#app .mainArea .item_list .item .history_list li p.address span{ font-size:12px; font-weight:bold; color:#333; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; }
#app .mainArea .item_list .comingsoon_list{ position:relative; display:block; width:100%; padding:10px; box-sizing:border-box; border:4px solid #28ce99; box-shadow:0 0 8px rgba(0,0,0,0.2); background-color:#fff; border-radius:5px;}
#app .mainArea .item_list .comingsoon_list:before{ content:""; position:absolute; top:-10px; right:-10px; width:45px; height:45px; background-image:url(../img/icon_comingsoon.svg); background-position:center; background-repeat:no-repeat; background-size:contain; }
#app .mainArea .item_list .comingsoon_list .item_title{ font-size:14px; color:#666;}
#app .mainArea .item_list .comingsoon_list li{ margin-top:10px; padding-left:10px;}
#app .mainArea .item_list .comingsoon_list li img{ display:inline-block; vertical-align:middle; width:22px; margin-right:5px;}
#app .mainArea .item_list .comingsoon_list li span{ display:inline-block; vertical-align:middle; font-size:15px; font-weight:800; color:#333;}

/* 서브 */
#app .subArea{ }
#app .subArea .titleBox{ position:relative; width:100%; background-color:#28ce99; text-align:center}
#app .subArea .titleBox .backBtn{ position:absolute; top:15px; left:20px;}
#app .subArea .titleBox .backBtn img{ width:15px;}
#app .subArea .titleBox .title{ font-size:20px; font-weight:800; color:#fff; height:50px; line-height:50px;}
#app .subArea .notice_list{ width:100%; padding:10px 20px; box-sizing:border-box}
#app .subArea .notice_list a{ display:block; width:100%; padding:10px 0; border-bottom:1px solid #ddd; font-size:14px; font-weight:bold; color:#333;}

/* 팝업 슬라이드 */
.slide-fade-enter-active { transition: all .3s ease;}
.slide-fade-leave-active { transition: all .5s cubic-bezier(1.0, 0.5, 0.8, 1.0);}
.slide-fade-enter, .slide-fade-leave-to { opacity: 0;}

</style>
