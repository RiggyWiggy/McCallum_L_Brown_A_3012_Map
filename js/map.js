(function() {
	var map = new google.maps.Map(document.querySelector('.map-container'), {
			mapTypeControlOptions: {
				mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map']
			},
			scrollwheel: false,
			
		}),
		preloader = document.querySelector('.preload-wrapper'),
		routeService = new google.maps.DirectionsService(),
		routeVisual = new google.maps.DirectionsRenderer(),
		locations = [],
		markerA,
		markerB,
		homeIcon = 'images/marker.png',
		chantIcon = 'images/lighthouseMap.png';

	function initMap(position) {
		locations[0] = {
			lat: position.coords.latitude,
			lng: position.coords.longitude
		};
		locations[1] = {
			lat: 44.4947573,
			lng: -81.3796216
		};
		map.setCenter({
			lat: position.coords.latitude,
			lng: position.coords.longitude
		});
		map.setZoom(16);
		markerA = new google.maps.Marker({
			position: {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			},
			map: map,
			title: 'Your Location!',
			icon: homeIcon,
			label: {
    		color: '#3BA5FC',
  			fontWeight: '400',
   			text: 'Your Location',
 			 }	
		});
		markerB = new google.maps.Marker({
			position: {
				lat: 44.4947573,
				lng: -81.3796216
			},
			map: map,
			title: 'Chantry Island',
			icon: chantIcon,
			label: {
    		color: '#3BA5FC',
  			fontWeight: '400',
   			text: 'Chantry Island',
 			 }	
		});
			

		//Step-By Directions Panel
		routeVisual = new google.maps.DirectionsRenderer({
		map: map,
		panel: document.querySelector('#directionBox')
		});
		//

		
		routeVisual.setMap(map);
		routeVisual.setOptions({
		suppressMarkers: true
		});
		
		
		

		
		
		
		
		//Map Styling
		var styledMapType = new google.maps.StyledMapType(
			[{
				"stylers": [{
					"visibility": "on"
				}]
			}, {
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
				}]
			}, {
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
				}]
			}, {
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#616161"
				}]
			}, {
				"elementType": "labels.text.stroke",
				"stylers": [{
					"color": "#f5f5f5"
				}]
			}, {
				"featureType": "administrative",
				"stylers": [{
					"visibility": "on"
				}]
			}, {
				"featureType": "administrative.land_parcel",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#bdbdbd"
				}]
			}, {
				"featureType": "landscape.man_made",
				"stylers": [{
					"visibility": "on"
				}]
			}, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#eeeeee"
				}]
			}, {
				"featureType": "poi",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#757575"
				}]
			}, {
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [{
					"color": "#e5e5e5"
				}]
			}, {
				"featureType": "poi.park",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#9e9e9e"
				}]
			}, {
				"featureType": "road",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}]
			}, {
				"featureType": "road.arterial",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#e3e7e1"
				}]
			}, {
				"featureType": "road.arterial",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#757575"
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dadada"
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#05668D"
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "on"
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#616161"
				}]
			}, {
				"featureType": "road.local",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#9e9e9e"
				}]
			}, {
				"featureType": "transit.line",
				"elementType": "geometry",
				"stylers": [{
					"color": "#e5e5e5"
				}]
			}, {
				"featureType": "transit.station",
				"elementType": "geometry",
				"stylers": [{
					"color": "#eeeeee"
				}]
			}, {
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [{
					"color": "#c9c9c9"
				}]
			}, {
				"featureType": "water",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#05668D"
				}]
			}, {
				"featureType": "water",
				"elementType": "labels.text.fill",
				"stylers": [{
					"color": "#9e9e9e"
				}]
			}], {
				name: 'Styled Map'
			});
		map.mapTypes.set('styled_map', styledMapType);
		map.setMapTypeId('styled_map');
		////////////////////
		routeGen();
		////
		preloader.classList.add('hide-preloader');
	}

	function routeGen() {
		var request = {
			origin: locations[0],
			destination: locations[1],
			travelMode: 'DRIVING'
		};
		routeService.route(request, function(response, status) {
			if (status === 'OK') {
				routeVisual.setDirections(response);
			}
		});
	}
	
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		console.log('Your browser does not have a geolocation!');
	}

	function handleError(e) {
		console.log(e);
	}
	


})();