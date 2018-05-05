// MENU BUTTON
$(document).ready(function(){

	$('.click').click(function(){
		$('.burger-icon').toggleClass('active');
		 
		if ($('.burger-icon').hasClass('active')) {
		  $('.menu').addClass('menu-response');
		  $('.menu-item').show();

		  setTimeout(function(){	
				$('.menu-item').css('opacity','0.8');
				$('.menu-item').hover(function() {
  				$(this).css('opacity','1');
				}, function () {
					$(this).css('opacity','0.8');
				});
				  //$('.menu-item').css('transform','translateY(0px)');
			  }, 200);
			}
			
			else {
				$('.menu').removeClass('menu-response');
				$('.menu-item').css('opacity','0');
				//$('.menu-item').css('transform','translateY(40px)');
        		
        setTimeout(function(){	
          $('.menu-item').hide();
        }, 500);
        
			}
		  return false;
	});
});

// GOOGLE MAPS
function googleMap() {

	var mapColors = [
		{
	    "featureType": "landscape.natural",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#ebece7"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.business",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#e6e3db"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.business",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#a9a19f"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.park",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#e6e3db"
	      }
	    ]
	  },
	  {
	    "featureType": "water",
	    "elementType": "geometry.fill",
	    "stylers": [
	      {
	        "color": "#a9a19f"
	      }
	    ]
	  },
	  {
	    "featureType": "water",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#ddcec4"
	      }
	    ]
	  },
	  {
	    "featureType": "water",
	    "elementType": "labels.text.stroke",
	    "stylers": [
	      {
	        "color": "#a9a19f"
	      }
	    ]
	  }
	];

	var location = {lat: -17.901381, lng: 25.828455};

	var center = {lat: -17.919511, lng: 25.836437};
	var map;
	var marker;

	function initMap() {
	  map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 14,
	    center: center,
	    styles: mapColors
	  });

		marker = new google.maps.Marker({
		  position: location,
		  map: map,
		  title: "Wedding Venue"
		});
	}

	initMap();

	var latLng = new google.maps.LatLng(center.lat, center.lng);
	map.panTo(latLng);
	marker.setPosition( new google.maps.LatLng(location.lat, location.lng));
}






