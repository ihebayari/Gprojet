<?php 

$id= $_GET['id']; 
include'connection.php';
$base=maConnection();
try{

$req="select * from projet where id_projet='$id'";

$rep=$base->query($req);


foreach( $rep as $row ) {
	
    $nom= $row['Nprojet'];
    $proj= $row['dprojet'];
   
}

}

  catch (Exception $e) {
                $bdd->rollBack();
               
                }      ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body style="background-color: #4ba89c;"><form method="GET" action ="update2.php" name="formation">
	
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a href="modok2.php">
      <a class="navbar-brand" href="modok2.php" style="color:#4caf50" >projet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acceuil.php">Home</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="acc.php"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>

	<div class="modif">
	
	
	<h2>Modification</h2>
	<p> ID
<input type="text" name="id" value="<?php echo $id ?>" readonly="" >
</p>

	<p> Nom projet
<input type="text" name="nom" value="<?php echo $nom ?>" required>
</p>
	<p> details
<input type="text" name="detail" value="<?php echo $proj ?> " required>
</p>


 <input   class="btn" type="submit" value="Confirmer Modification " >
</div>
</form>
<br> <br> <br> <br> <br>

</body>
</html>


