<!DOCTYPE html>
<html>
<head>
	<title>REsults</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
<div  class="container-fluid">
	<div class="row">
	   <div class="col-lg-12"> <h1><u>Search Results in decreasing order of RATING </u> </h1> 
 			<div class="list-group">
             <a href="#" class="list-group-item active">
             	<?php
                 $conn=mysqli_connect("localhost","root","","search");

      				$la=$_POST['lang'];
					$mod=$_POST["mode"];
//select $la db and $mod column and display the link with the order of $mod list in descending order
					$a="SELECT link FROM $la ORDER BY $mod";
					$ins=mysqli_query($conn,$a);
					while($row = mysqli_fetch_assoc($ins))
						{
						echo $row['link']."<br><br><br>";

						}    
						?>

             </a>  
             


 			</div>

</body>
</html>

