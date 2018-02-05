<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE24Sg4vYQzgP4y_Fq0fMw1iG_en6dgnU&callback=initMap&libraries=places">
    </script>
    <title>Document</title>
</head>
<body>



<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Google Maps JavaScript API v3 Example: Info Window Simple</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDE24Sg4vYQzgP4y_Fq0fMw1iG_en6dgnU"></script>
<script type="text/javascript">

function initialize() {
	
	var myLatlng = [];
	
	<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("blogPHP");

	//on recupere la latitude longitude nom de la structure
	$reponse = mysql_query("SELECT lat,lng FROM Article");
	
	while($coordonnees = mysql_fetch_assoc($reponse))
	{
		echo 'myLatlng.push(new google.maps.LatLng('. $coordonnees['lat'] .', '. $coordonnees['lng'] .'));';
	}
	?>
	
	for(var i = 0; i < myLatlng.length; i++ )
	{
		// mon traitement avec le tableau de coordonnees
		// exemple : 
		alert(myLatlng[i]);
	}
}

</script>

 
</body>
</html>