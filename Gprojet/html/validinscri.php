<?php
include ('connection.php');
$bdd=maConnection();
$nom = $_GET['nom'];
$email = $_GET['email'];
$pwd = $_GET['psw']; 

 if($nom  && $email && $pwd)
    {

try{
$bdd->beginTransaction();
                $bdd->exec("insert into user (nom, email, mdp) values ('$nom','$email','$pwd')");
                $bdd->commit(); 
                header('location:conn.php');

  }
  catch (Exception $e) {
                $bdd->rollBack();
                echo "Failed: " . $e->getMessage();
                }
            }
else {?>
    <script> alert( 'Merci de remplir tous les champs')</script> <?php ;}


?> 