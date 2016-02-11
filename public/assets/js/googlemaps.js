
		function initMap() {
			var latLng = new google.maps.LatLng(49.310755, 5.78109);
			var myOptions = {
				zoom : 17,
				center : latLng,
			}
			var myMap = new google.maps.Map(document.getElementById('map'), myOptions);

			var marker = new google.maps.Marker({
					position: latLng,
					map:myMap,
				});
		}
		
		