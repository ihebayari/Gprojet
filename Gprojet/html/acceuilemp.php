<?php
$id= $_GET['id'];
include'connection.php';
$bdd=maConnection();

try{
   
  
    $rep = $bdd->query("SELECT id_projet FROM user_projet WHERE id_user= '$id'"); 
   

        ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
   <body style="background-color: #4ba89c;">

	
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" style="color:#4caf50" onclick="location.reload()">Stage</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acc.php">Home</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="acc.php"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>
	<p>
	<h2 style="margin-top: 5% ;text-align: justify;"> <font size="15px" color="#efed40" translate="-20px">Mes projets</font> </h2>
	<img src="../images/gestion.png" style="margin-top: 7% ;" class="user">
		    <form method="GET" action="" name="monform">
		<center>
        <table class="table2" border="3" >
                <tr>
                    <td><center><font size="5px" color="#efed40">id</font></center></td>
                    <td><center><font size="5px" color="#efed40">Nom</font></center></td>
                    <td><center><font size="5px" color="#efed40">detail</font></center></td>
                       
                </tr>
            <?php 
             
              foreach( $rep as $row1 ) {
	
                $idp= $row1['id_projet'];
              
               
           
            
                $projct = $bdd->query("SELECT * FROM projet WHERE id_projet= '$idp'");
           
            
    
    
            while ($row = $projct->fetch())
{ 
              ?>
             
                <tr>
                    <td><center><input style="text-align: center ; font-size: 25px;" type="text" name="id_pro" value =" <?php echo $row ['id_projet'];?> " readonly ></center></td>
                    <td><center><?php echo $row ['Nprojet'];?></center></td>
                    <td><center><?php echo $row['dprojet'];?></center></td>
                      
                     
          


  <?php
                 
                  }
                }
           
                
            ?>
                    </table>
                  
    </center>
   
 
</form>
</p>
</body>

</html>
<?php 

       
}
  catch (Exception $e) {
                $bdd->rollBack();
               
                }    ?>