<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body  style="background-color: #4ba89c;">

		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="modok2.php" style="color:#4caf50" >Projet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acceuil.php">Home</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="acc.php"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>

<form method="GET" action ="validajoutemp.php" name="formation">
	<div class="registerBox">

	
	<h2>Ajouter Emp</h2>
	<p>  nom 
<input type="text" name="nom" placeholder="saisir le nom du emp" required>
</p>
	<p> E-mail
<input type="E-mail" name="email" placeholder="saisir E-mail " required>
</p>
<p> password
<input type="password" name="psw" placeholder="saisir password " required>
</p>

<input type="number" name="id" value="<?php echo $name['id_user'] ?>" style="visibility: hidden;"> 

 <input  class="btn"  type="submit" value="ajouter" name="ajout"></a>
</div>
</form>


</body>
</html>