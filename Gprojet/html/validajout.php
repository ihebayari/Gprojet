<?php
include ('connection.php');
$bdd=maConnection();
$nom = $_GET['nom'];
$dproj= $_GET['dproj'];


 if($nom && $dproj)
    {

try{
$bdd->beginTransaction();
                $bdd->exec("insert into projet (Nprojet,dprojet) values ('$nom','$dproj')");
                $bdd->commit(); 
                header('location:gereprojet.php');

  }
  catch (Exception $e) {
                $bdd->rollBack();
                echo "Failed: " . $e->getMessage();
                }
            }
else {?>
    <script> alert( 'Merci de remplir tous les champs')</script> <?php ;}


?> 