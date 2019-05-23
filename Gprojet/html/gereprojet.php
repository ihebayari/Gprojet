<?php

include'connection.php';
$bdd=maConnection(); 
try{
 $reponse = $bdd->query("SELECT * FROM projet");
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
	<h2 style="margin-top: 5% ;text-align: justify;"> <font size="15px" color="#efed40" translate="-20px">Gestion  des projets</font> </h2>
	<img src="../images/gestion.png" style="margin-top: 7% ;" class="user">
		    <form method="GET" action="" name="monform">
		<center>
        <table class="table2" border="3" >
        	<tr>   <td style="position: relative; width:200px ;height:30px">
	                     <center> 
                           <input style="font-size:25px;" type="submit" class="btn"  value="Ajouter" onclick="a()" />
                         </center>
                     </td>
                 </tr>
                <tr>
                    <td><center><font size="5px" color="#efed40">id</font></center></td>
                    <td><center><font size="5px" color="#efed40">Nom</font></center></td>
                    <td><center><font size="5px" color="#efed40">detail</font></center></td>
                       <td colspan="3"><center><font size="5px" color="#efed40">Fct</font></center></td>
                </tr>
            <?php 
            while ($row = $reponse->fetch())
{
              ?>
                <tr>
                    <td><center><input style="text-align: center ; font-size: 25px;" type="text" name="id" value =" <?php echo $row ['id_projet'];?> " readonly ></center></td>
                    <td><center><?php echo $row ['Nprojet'];?></center></td>
                    <td><center><?php echo $row['dprojet'];?></center></td>
                       <td style="position: relative; width:200px ;height:30px">
	                     <center> 
                           <input style="font-size:25px;"  type="submit" class="btn"  value="Modifier" onclick="m()" />
                         </center>
                     </td>
                        <td style="position: relative; width:200px ;height:30px">
	                     <center> 
                           <input  style="font-size:25px;"  type="submit" class="btn"  value="Supprimer" onclick="s()" />
                         </center>
                     </td>
                     <td style="position: relative; width:200px ;height:30px">
	                     <center> 
                           <input  style="font-size:25px;"  type="submit" class="btn"  value="affecter" onclick="aff()" />
                         </center>
                     </td>
                </tr>
          


  <?php
                 
                  }
           

            ?>
                    </table>
    </center>
    	<script type="text/javascript">
  function m(){
    document.forms['monform'].action = 'modifproj.php';
   
    document.forms['monform'].submit();
  }
    function a(){
    document.forms['monform'].action = 'ajoutproj.php';
   
    document.forms['monform'].submit();
  }
 
  function s(){
    document.forms['monform'].action = 'supriproj.php';
  
    document.forms['monform'].submit();
  }
  function aff(){
    document.forms['monform'].action = 'affecter.php';
  
    document.forms['monform'].submit();
  }
</script>
</form>
</p>
</body>

</html>
<?php }
  catch (Exception $e) {
                $bdd->rollBack();
               
                }    ?>