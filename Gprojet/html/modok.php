<?php

$id= $_GET['id']; ?>
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
      <a class="navbar-brand" href="" style="color:#4caf50" onclick="location.reload()">projet</a>
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

           
             <input type="number" name="id" value="<?php echo $id ?>" style="visibility: hidden;"> 
            </center>

	        <center>
	            <table  class ="table1"  >
		            <tr>
			         
                     <td style="position: relative; width:500px ;height:400px">
	                     <center> 
                           <input type="submit" class="arrondi2"  value="" onclick="p()" />
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

                    </tr>

                </table>
            </center>

	    	<script type="text/javascript">

 
  function m(){
    document.forms['monform'].action = 'gereprojet.php';
  
    document.forms['monform'].submit();
  }
</script>
        </form>

    </div>

  		
  </footer>
 </body>
</html>