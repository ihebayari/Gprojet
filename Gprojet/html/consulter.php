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
<body style="background-color: #4ba89c;"><form method="GET" action ="acceuilemp.php" name="formation">
	
<header> <?php include'header.php' ; ?></header>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
      <li class="active"><a href="acceuil.php">Home</a></li>
     
    </ul>
  
  </div>
</nav>

	<div class="modif">
	
	
	<h2>consuter</h2>
	<p> ID
<input type="text" name="id" value="<?php echo $id ?>" readonly="" >
</p>

	<p> Nom projet
<input type="text" name="nom" value="<?php echo $nom ?>" readonly="">
</p>
	<p> details
<input type="text" name="detail" value="<?php echo $proj ?> " readonly="">
</p>


 <input   class="btn" type="submit" value="return " >
</div>
</form>
<br> <br> <br> <br> <br>

</body>
</html>


