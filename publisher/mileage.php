<?php include "head.php"; ?>

	<div id="" class="subArea">
		<div id="" class="titleBox">
        	<a href="javascript:;" id="" class="backBtn"><img src="img/icon_back.svg"></a>
            <div id="" class="title">주행 이력 관리</div>
        </div>
        <ul id="" class="infoBox mileage">
        	<li id="">
            	<div id="" class="info_text">현재 누적 주행거리 <span>58,705 Km</span> 주행</div>
                <div id="" class="info_text_black">스마트케어 (Smart Care) 설치 이후의 주행거리를 말합니다.</div>
                <div class="mileage">
                	<div id="" class="textBox">
                    	<div id="" class="text01">총 주행거리</div>
                    	<div id="" class="text02">341.6 km</div>
                    </div>
                    <div id="" class="guageBox">
                    	<div id="" class="top_text">
                        	<div id="" class="left">4.2 km(1%)</div>
                            <div id="" class="right">333.6 km(99%)</div>
                        </div>
                        <div id="" class="guage"><span style="width:10%"></span></div>
                        <div id="" class="bottom_text">
                        	<div class="left">비업무용</div>
                            <div class="right">출/퇴근 및 업무용</div>
                        </div>
                    </div>
                </div>
                <div id="" class="mileage">
                	<div id="" class="textBox">
                    	<div id="" class="text01">총 주행횟수</div>
                    	<div id="" class="text02">30회</div>
                    </div>
                    <div id="" class="guageBox">
                    	<div id="" class="top_text">
                        	<div id="" class="left">1회</div>
                            <div id="" class="right">29회</div>
                        </div>
                        <div id="" class="guage"><span style="width:10%"></span></div>
                        <div id="" class="bottom_text">
                        	<div id="" class="left">비업무용</div>
                            <div id="" class="right">출/퇴근 및 업무용</div>
                        </div>
                    </div>
                </div>
            </li>

            <li id="">
            	<div id="" class="info_title">이전 주행 기록</div>
                
                <div class="mileage_item">
                    <div class="mileage_info">
                        <div class="textBox">
                            <div class="text01">0.1 km | 01분 18초</div>
                            <div class="text02">
                                업무용<br>
                                위치정보 없음 → 위치정보 없음<br>
                                19.11.16 16:22:37 ~ 19.11.16 16:23:55
                            </div>
                        </div>
                        <div class="gradeBox">
                            <div class="item">
                                <img src="img/icon_grade03.svg">과속
                            </div>
                            <div class="item">
                                <img src="img/icon_grade02.svg">급가속
                            </div>
                            <div class="item">
                                <img src="img/icon_grade01.svg">급감속
                            </div>
                        </div>
                    </div>
                    <div class="graphBox"></div>
				</div>
                
                <div class="mileage_item">
                    <div class="mileage_info">
                        <div class="textBox">
                            <div class="text01">0.1 km | 01분 18초</div>
                            <div class="text02">
                                업무용<br>
                                서울특별시 노원구 월계 3동 → 서울특별시 성동구 왕시리 도선동<br>
                                19.11.16 14:20:44~19.11.16 14:53:20
                            </div>
                        </div>
                        <div class="gradeBox">
                            <div class="item">
                                <img src="img/icon_grade03.svg">과속
                            </div>
                            <div class="item">
                                <img src="img/icon_grade02.svg">급가속
                            </div>
                            <div class="item">
                                <img src="img/icon_grade01.svg">급감속
                            </div>
                        </div>
                    </div>
                    <div class="graphBox"></div>
				</div>
            </li>
        </ul>
    </div>
   
</div> <!-- // wraper-->

<?php include_once "popup_period_setting.php"; ?>

</body>
</html>