<!DOCTYPE html>
<html>
<head>
	<title>acceuil</title>
	<link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body style="background-color: #4ba89c;">

<?php
include'connection.php';
$bdd=maConnection();
$email= $_GET['email'];  
$mdp=$_GET['mdp'];
$id=$_GET['id'];

if($email=="admin" && $mdp=="admin"){
try{
  
$query=$bdd->prepare("SELECT * FROM user WHERE  email=? and mdp=?");
$query->execute(array($email,$mdp));
$name=$query->fetch();


  if($name){

  ?>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" style="color:#4caf50" onclick="location.reload()">Projet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acceuil.php">Home</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="acc.php"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>

		

<div class="acceuil">
	    <form method="GET" action="" name="monform">

	      	<center>

             <font size="5px" color="#efed40">
               Bienvenue  <?php echo "Admin" ;?> 
             </font>
             <input type="number" name="id" value="<?php echo $name['id_user'] ?>" style="visibility: hidden;"> 
             <input type="text" name="nom" value="<?php echo $name['email'] ?>" style="visibility: hidden;"> 
             <input type="text" name="pwd" value="<?php echo $name['mdp'] ?>" style="visibility: hidden;"> 
            </center>
          

	        <center>
	            <table  class ="table1"  >
		            <tr>
			          <td style="position: relative; width:500px ;height:400px">
				        <center>
                
               <input type="submit" class="arrondi2"  value=""  onclick="gere()" />

	                    </center>
                       </td>

                       <td style="position: relative; width:500px ;height:400px">
				        <center>
                
               <input type="submit" class="arrondi2"  value=""  onclick="ajouter()" />

	                    </center>
                       </td>

                     
                    </tr>
                    <tr>
	                  <td> 
	    	            <h2>
	    	            	<font color="#efed40" size="5px">
	    	            		<center>
	    	            		   Gérer projet 
	    	            	    </center>
	    	            	</font>
	    	            </h2>
	                  </td> 

                    <td> 
	    	            <h2>
	    	            	<font color="#efed40" size="5px">
	    	            		<center>
	    	            		   ajouter Emp 
	    	            	    </center>
	    	            	</font>
	    	            </h2>
	                  </td> 
                    </tr>

                </table>
            </center>

	    	<script type="text/javascript">
  
 
  function gere(){
    document.forms['monform'].action = 'gereprojet.php';
  
    document.forms['monform'].submit();
  }
  function ajouter(){
    document.forms['monform'].action = 'ajouteremp.php';
  
    document.forms['monform'].submit();
  }
</script>
        </form>

    </div>



<?php
}

}

catch (Exception $e) {
  $bdd->rollBack();
  header('location:conn.php');
}
}

else{
$query=$bdd->prepare("SELECT * FROM user WHERE  email=? and mdp=?");
$query->execute(array($email,$mdp));
$name=$query->fetch();

if($name){

		
?>
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" style="color:#4caf50" onclick="location.reload()">Projet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acc.php">Home</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="acc.php"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>

		

<div class="acceuil">
	    <form method="GET" action="" name="monform">

	      	<center>

             <font size="5px" color="#efed40">
               Bienvenue  <?php echo $name['nom'] ;?> 
             </font>
             <input type="number" name="id" value="<?php echo $name['id_user'] ?>" style="visibility: hidden;"> 
            </center>
          

	        <center>
	            <table  class ="table1"  >
		            <tr>
			          <td style="position: relative; width:500px ;height:400px">
				        <center>
                
               <input type="submit" class="arrondi2"  value=""  onclick="m()" />

	                    </center>
                       </td>

                     
                    </tr>
                    <tr>
	                  <td> 
	    	            <h2>
	    	            	<font color="#efed40" size="5px">
	    	            		<center>
	    	            		   Mes projet 
	    	            	    </center>
	    	            	</font>
	    	            </h2>
	                  </td> 

                    </tr>

                </table>
            </center>

	    	<script type="text/javascript">
  
 
  function m(){
    document.forms['monform'].action = 'acceuilemp.php';
  
    document.forms['monform'].submit();
  }
</script>
        </form>

    </div>
 
 </body>
</html>
<?php		
		
		 
}
}



?>