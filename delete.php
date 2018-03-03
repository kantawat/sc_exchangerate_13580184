<!DOCTYPE html> 
<html> 
<head> 
<title>Calculator</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, intitial-scale-1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
	
</style>

</head> 
<body> 
	<div class="container center-block text-center" style="height: 190px; width: 200px; margin-top: 200px; margin-bottom: 200px; border-radius: 5px;"> 
		<div class="row">
				
					<?php 

				$id = $_REQUEST['id']; 
				$thb = $_REQUEST['thb']; 

			$sql = "DELETE FROM exch481_history WHERE recordID = $id"; 

				require 'connect.php'; 

				$sql_exe = $conn -> query($sql); 

				if($sql_exe) { 
				echo "<br><br><strong>Delete complete</strong><br>"; 
				echo "ID ".$id; 
				echo " THB ".$thb; 
				header("Refresh:,url=index.php",true,5); 
				}else{ 
				echo "Delete failed"; 
				//	echo $sql; 
				} 

				?> 
				<br><br><a href="index.php?" style=" color:#fff; margin-top: 200px; background-color: #e2383f;  border-radius: 5px; padding: 20px;">BACK</a> 

				</div>

				</div> 

</body> 
</html