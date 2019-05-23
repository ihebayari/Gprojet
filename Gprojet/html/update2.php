



<?php 
$id=$_GET['id'];
$nom= $_GET['nom'];  
$de=$_GET['detail'];	
	
include ('connection.php');
$bdd =  maConnection();
try{

$bdd->exec("UPDATE projet set Nprojet='$nom',dprojet='$de'where id_projet='$id' ");


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body style="background-color: #4ba89c;">
<div class="acceuil">
	
		 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" style="color:#4caf50" onclick="location.reload()">projet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acceuil.php">Home</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="acceuil.php"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>
<form action="modok2.php" method="GET">
<input type="number" name="id" value="<?php echo $id ?>" style="visibility: hidden;"> 
 <input   class="btn" type="submit" value="Cliquez ici pour retourner à  la page des projet " style="width: 70%;height: 70px; margin-top: 20%;margin-left:20%; border-color: #000000;font-style:italic;font-size: 30px  ">
</form>
</div>
</body>
</html>
<?php


 
}
  catch (Exception $e) {
                $bdd->rollBack();
                header('location:modifproj.php');
            }



