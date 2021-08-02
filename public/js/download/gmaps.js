/* Google Maps API v3 */
var map;
		
function initialize() {
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			setMap(position.coords.latitude, position.coords.longitude, 'Anda berada di lokasi yang ditentukan oleh GPS', 'Anda berada di lokasi yang ditentukan oleh GPS');
		}, function() {
			handleNoGeoLocation(true);
		})
	} else {
		handleNoGeoLocation(false);
	}
}

function setMap(lat, lng, infoContent, keterangan) {
	var mapCanvas = document.getElementById('map-canvas');
	var myLatLng = new google.maps.LatLng(lat, lng);
	var mapOptions = {
		zoom: 16,
		center: myLatLng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	
	map = new google.maps.Map(mapCanvas, mapOptions);
	
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		animation: google.maps.Animation.DROP
	});
	
	var infowindow = new google.maps.InfoWindow({
		content: infoContent
	});
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
	
	traffic = new google.maps.TrafficLayer();
	traffic.setMap(map);
	
	$('#keterangan').html(keterangan);
}

function handleNoGeolocation(errorFlag) {
	if (errorFlag) {
		var content = 'Error: The Geolocation service failed.';
	} else {
		var content = 'Error: Your browser doesn\'t support geolocation.';
	}

	var options = {
		map: map,
		position: new google.maps.LatLng(60, 105),
		content: content
	};

	var infowindow = new google.maps.InfoWindow(options);
	map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);