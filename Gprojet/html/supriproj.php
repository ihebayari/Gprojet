
<?php
include'connection.php';
$base=maConnection();
$id=$_GET['id'];
$table ="projet";
$req="DELETE FROM $table WHERE id_projet ='$id'";
$req=$base->query($req);
$sup=$req->rowCount();
$user = $req->fetchOBject();
header("location:gereprojet.php");
?>