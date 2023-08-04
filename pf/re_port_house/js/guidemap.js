//카카오맵 api
var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
var options = { //지도를 생성할 때 필요한 기본 옵션
	center: new kakao.maps.LatLng(37.55720549445536, 126.92359720252291), //지도의 중심좌표.
    draggable: false,
	level: 3 //지도의 레벨(확대, 축소 정도)
};

var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴

// 마커가 표시될 위치입니다 
var markerPosition  = new kakao.maps.LatLng(37.55720549445536, 126.92359720252291); 

// 마커를 생성합니다
var marker = new kakao.maps.Marker({
    position: markerPosition
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);

// 버튼 클릭에 따라 지도 이동 기능을 막거나 풀고 싶은 경우에는 map.setDraggable 함수를 사용합니다
function setDraggable(draggable) {
    // 마우스 드래그로 지도 이동 가능여부를 설정합니다
    map.setDraggable(draggable);    
}

///////두번째 지도
var container2 = document.getElementById('map2'); //지도를 담을 영역의 DOM 레퍼런스
var options2 = { //지도를 생성할 때 필요한 기본 옵션
	center: new kakao.maps.LatLng(37.50321411570623, 127.02555255539404), //지도의 중심좌표.
    draggable: false,
	level: 3 //지도의 레벨(확대, 축소 정도)
};

var map2 = new kakao.maps.Map(container2, options2); //지도 생성 및 객체 리턴

// 마커가 표시될 위치입니다 
var markerPosition2  = new kakao.maps.LatLng(37.50321411570623, 127.02555255539404); 

// 마커를 생성합니다
var marker2 = new kakao.maps.Marker({
    position: markerPosition2
});

// 마커가 지도 위에 표시되도록 설정합니다
marker2.setMap(map2);