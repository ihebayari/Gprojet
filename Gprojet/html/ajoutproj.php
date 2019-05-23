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
      <li class="active"><a href="acc.php">Home</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="acc.php"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>

<form method="GET" action ="validajout.php" name="formation">
	<div class="registerBox">

	
	<h2>Ajouter projet</h2>
	<p>  nom 
<input type="text" name="nom" placeholder="saisir le nom du projet" required>
</p>
	<p> details
<input type="text" name="dproj" placeholder="saisir detail " required>
</p>

	

 <input  class="btn"  type="submit" value="ajouter" name="ajout"></a>
</div>
</form>


</body>
</html>