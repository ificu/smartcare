<?php include "head.php"; ?>

	<div id="" class="subArea">
		<div id="" class="titleBox">
        	<a href="javascript:;" id="" class="backBtn"><img src="img/icon_back.svg"></a>
            <div id="" class="title">정비 관리</div>
        </div>
        <ul id="" class="infoBox">
        	<li id="">
            	<div id="" class="info_text">현재 누적 주행거리 <span>58,705 Km</span> 주행</div>
                <div id="" class="info_text_orange">주행거리 1,000km/1달 이내의<br>점검항목은 없습니다.</div>                
            </li>
            <li id="">
            	<div id="" class="info_title">엔진 오일 및 필터</div>
                <a href="" id="" class="change_info">교환주기안내 <img src="img/icon_i.svg" id=""></a>
                <div class="tbBox">
                    <table id="">
                        <tr id="">
                            <th id="">⊙ 교환 필요 시기</th>
                            <td id=""><p class="orange">61,021 km</p></td>
                        </tr>
                        <tr id="">
                            <th id="">⊙ 이전 교환 시기</th>
                            <td id=""><p>46,021 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="img/icon_pen.svg" id=""></a></td>
                        </tr>
                        <tr id="">
                            <th id="">⊙ 교환 주기(일반)</th>
                            <td id=""><p>15,000 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="img/icon_pen.svg" id=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="">
            	<div id="" class="info_title">에어컨 필터</div>
                <a href="" id="" class="change_info">교환주기안내 <img src="img/icon_i.svg" id=""></a>
                <div class="tbBox">
                    <table id="">
                        <tr id="">
                            <th id="">⊙ 교환 필요 시기</th>
                            <td id=""><p class="orange">61,021 km</p></td>
                        </tr>
                        <tr id="">
                            <th id="">⊙ 이전 교환 시기</th>
                            <td id=""><p>46,021 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="img/icon_pen.svg" id=""></a></td>
                        </tr>
                        <tr id="">
                            <th id="">⊙ 교환 주기(일반)</th>
                            <td id=""><p>15,000 km</p> <a href="javascript:layer_open('popup_period_setting');" id="" class="btn"><img src="img/icon_pen.svg" id=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="" class="comingsoon">
            	<div id="" class="info_title">신규 예정 서비스</div>
                <div class="service"><img src="img/icon_change.svg"> <span>최적의 교환주기 추천 서비스</span></div>
                <div class="service"><img src="img/icon_fix.svg"> <span>가까운 정비 업소 알림/예약 서비스</span></div>
            </li>
        </ul>
    </div>
   
</div> <!-- // wraper-->

<?php include_once "popup_period_setting.php"; ?>

</body>
</html>