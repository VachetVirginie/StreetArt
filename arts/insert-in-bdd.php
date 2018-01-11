<?php

$host_name="localhost";
$user_name="root";
$password="";
$database="street";

$bdd = mysqli_connect($host_name, $user_name, $password, $database);
if (mysqli_connect_errno())
{
    echo "La connexion au serveur MySQL n'a pas abouti : " . mysqli_connect_error();
}

$req = mysqli_prepare($bdd, 'INSERT INTO tbl_places (lat, lng)');
if ($req === false) {
  echo 'erreur prepare';
  print_r(mysqli_error_list($bdd));
  die();
}
$res = mysqli_stmt_bind_param($req, 'ssssssss', $lat, $lng);
if ($res === false) {
  echo 'erreur bind param';
  print_r(mysqli_error_list($bdd));
  die();
}
$res = mysqli_stmt_execute($req);
if ($res === false) {
  echo 'erreur execute';
  print_r(mysqli_error_list($bdd));
  die();
}
