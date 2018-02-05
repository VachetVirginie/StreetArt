
<?php
 header('Content-type: text/html; charset=ISO-8859-1');
 if(isset($_POST['lat']) && isset($_POST['lng'])){
  $lat = addslashes($_POST['lat']);
  $lng = addslashes($_POST['lng']);
 
  $db = mysql_connect("localhost", "root", "");
  $select = mysql_select_db(blogPHP, $db);
  mysql_query('INSERT INTO Article (lat,lng)
               VALUES ("'.$lat.'","'.$lng.'")');
  echo 'Vos coordonnées ont bien été insérées en base de données.';
 }else
   echo 'Problème rencontré dans les valeurs passées en paramètres';
?>