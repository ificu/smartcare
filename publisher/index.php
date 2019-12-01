<?php include "head.php"; ?>

	<div class="mainArea">
		<div class="titleBox">
        	<a href="javascript:;" class="menuBtn"><img src="img/icon_menu.svg"></a>
            <div class="title">안녕하세요, 문성준 님</div>
            <div class="subTitle">SK렌터카 <span>스마트케어</span>(Beta Ver.) 서비스<br>테스트에 참여해주셔서 감사합니다.</div>
        </div>
        <div class="item_list">
        	<a href="javascript:;" class="item">
            	<img src="img/logo_skRental.svg" class="logo">
            	<div class="item_text">내 차 계약 정보 확인</div>
            </a>
        	<a href="javascript:;" class="item">
            	<div class="item_title"><img src="img/icon_target.svg"> <span class="title">안전점수</span></div>
                <div class="guageBox">
                	<img src="img/guage_bar.svg" class="guage_bar">
                	<div class="goal_score">목표 점수<br>85점</div>
                    <div class="my_score">74점<p>(상위 32%, 96위)</p></div>
                </div>
                <div class="text01">좋은 안전운전 습관으로 도약하고 있습니다.</div>
                <div class="text02">가속패달을 조금 더 차분히 밟아주세요.</div>
                <div class="text03">지금 <span>안전운전 미션</span>을 확인해 보세요!</div>
            </a>
            <a href="javascript:;" class="item">
            	<div class="item_title"><img src="img/icon_alarm01.svg"> <span class="title">정차 중 충격알림</span><span class="new">NEW</span></div>
                <ul class="alarm_list">
                	<li><p class="date">11월 7일 13:00</p><p>차량 충격이 감지되었습니다.</p></li>
                	<li><p class="date">11월 6일 19:21</p><p>차량 충격이 감지되었습니다.</p></li>
                </ul>
                <div class="more">... more</div>
            </a>
            <a href="javascript:;" class="item">
            	<div class="item_title"><img src="img/icon_fix.svg"> <span class="title">정비관리</span><span class="new">NEW</span></div>
                <div class="item_text">현재 누적 주행거리 8,321Km 주행</div>
                <ul class="text_list">
                	<li>- 이달의 점검 항목이 없습니다.</li>
                	<li>- 다가오는 점검 항목을 확인하세요.</li>
                </ul>
            </a>
            <a href="javascript:;" class="item">
            	<div class="item_title"><img src="img/icon_history.svg"> <span class="title">주행이력관리</span><span class="new">NEW</span></div>
                <ul class="history_list">
                	<li><p class="date">11월 7일 13:00</p><p class="address"><span>서울특별시 강남구 논현동 278-12 성재빌딩</span></p></li>
                	<li><p class="date">11월 6일 19:21</p><p class="address"><span>서울특별시 강남구 테헤란로 340 성재빌딩</span></p></li>
                  <li><p class="date">11월 5일 10:00</p><p class="address"><span>서울특별시 강남구 논현동 278-12 성재빌딩</span></p></li>
                </ul>
                <div class="more">... more</div>
            </a>
            <a href="javascript:;" class="item">
            	<div class="item_title"><img src="img/icon_locate.svg"> <span class="title">내차 위치 찾기</span></div>
                <div class="item_text" style="padding-bottom:10px">공항, 식당에서 발렛 파킹 하셨나요?</div>
            </a>
            <ul class="comingsoon_list">
            	<div class="item_title">신규 예정 서비스</div>
            	<li onClick="layer_open('popup_01')"><img src="img/icon_119.svg"> <span>119 자동출동 서비스 (대형사고 발생시)</span></li>
            	<li><img src="img/icon_alarm02.svg"> <span>다양한 알림 서비스</span></li>
            	<li><img src="img/icon_ai.svg"> <span>우전비스(AI) 서비스</span></li>
            	<li><img src="img/icon_change.svg"> <span>최적의 교환주기 추천 서비스</span></li>
            	<li><img src="img/icon_fix.svg"> <span>가까운 정비 업소 알림/예약 서비스</span></li>
            </ul>
        </div>
    </div>

</div> <!-- // wraper-->
<?php include_once "popup_01.php"; ?>

<script>
function layer_open(el){
	var temp = $('#' + el);
	temp.fadeIn();

	temp.find('.xBtn').click(function(e){
		temp.fadeOut();
		e.preventDefault();
	});
}
</script>
</body>
</html>
