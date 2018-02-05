<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDC9Bs205kUPID2bl3D_QUnirTrxe0t4xc">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<head>
    <title>Blog</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <h2>Nouvel article</h2>
    <form action="insertionArticle.php" method="POST" enctype="multipart/form-data">
        <p>Titre de l'article: <input type="text" name="titre" /></p>
        <p>Commentaire: <br/><textarea name="commentaire" rows="10" cols="50"></textarea></p>
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p>
        <input type="file" name="photo"><br>
        <input type="text" id="adresse" value="saisissez votre adresse" /><br>
        <input type="button" onclick="geolocalise()" value="geolocaliser" /><br>
         Latitude : <input type="text" name="lat"id="lat" value="" /> <br>
         Longitude : <input type="text"name="lng" id="lng" value="" />
       

        <script type="text/javascript">
            /* Déclaration des variables globales */
            var geocoder = new google.maps.Geocoder();
            var addr, latitude, longitude;

            /* Fonction chargée de géolocaliser l'adresse */
            function geolocalise() {
                /* Récupération du champ "adresse" */
                addr = document.getElementById('adresse').value;
                /* Tentative de géocodage */
                geocoder.geocode({
                    'address': addr
                }, function(results, status) {
                    /* Si géolocalisation réussie */
                    if (status == google.maps.GeocoderStatus.OK) {
                        /* Récupération des coordonnées */
                        latitude = results[0].geometry.location.lat();
                        longitude = results[0].geometry.location.lng();
                        /* Insertion des coordonnées dans les input text */
                        document.getElementById('lat').value = latitude;
                        document.getElementById('lng').value = longitude;
                        /* Appel AJAX pour insertion en BDD */
                        var sendAjax = $.ajax({
                            type: "POST",
                            
                            data: 'lat=' + latitude + '&lng=' + longitude + '&adr=' + addr,
                            success: handleResponse
                        });
                    }

                    function handleResponse() {
                        $('#answer').get(0).innerHTML = sendAjax.responseText;
                    }
                });
            }
        </script>
        <br/><br/>
        <input type="submit" name="ok" value="Envoyer">
    </form>
    <br/>

</body>

</html>