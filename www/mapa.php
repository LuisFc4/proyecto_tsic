
<!DOCTYPE html>
<?php include('includes/header.php'); ?>
<html>
<head> 
    <meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
    <title>Maps JavaScript API</title>
	<style> 
  	  #map {
        height: 100%;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	</style> 
</head>  
	<body>
		<div id ="map"> </div> 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap" async defer></script>
	<script>
		
      var map;
  	 function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat:19.33120611787187, lng: -99.18466348673101},
          zoom: 13,
        });
        var marker = new google.maps.Marker({
          position: {lat: 19.33120611787187, lng:-99.18466348673101},
          map: map,
	  title: 'Acuario de Gijón'
        });
      }

      
	</script>

	</body> 
</html>