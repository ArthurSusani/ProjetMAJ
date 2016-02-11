
		function initMap() {
			var latLng = new google.maps.LatLng(49, 5);
			var myOptions = {
				zoom : 10,
				center : latLng,
			}
			var myMap = new google.maps.Map(document.getElementById('map'), myOptions);

			var marker = new google.maps.Marker({
					position: latLng,
					map:myMap,
				});
		}
		
		