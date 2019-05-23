<!DOCTYPE html>
<html>
<head>
	<title>inscription</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body  style="background-color: #4ba89c;">
	<header> <?php include'header.php' ; ?></header>

<form method="GET" action ="validinscri.php" name="formation">

	<div class="registerBox">
	<img src="../image/user.PNG" class="user">
	
	<h2>Inscription</h2>

<p> Nom
<input type="text" name="nom" placeholder="votre nom " >
</p>

<p> Votre E-mail 
<input type="E-mail" name="email" placeholder="votre e-mail " >
</p>
<p> Votre mot de passe
<input type="password" name="psw" placeholder="********"  required>
</p>

<input  class="btn"  type="submit" value="inscription">
</div>
</form>



</body>
</html>