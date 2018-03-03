<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h1 class="text-center" style="color: #e2383f;"><br>Result</h1>
<?php

 	//1.รับค่จากหน้าที่แล้วมา ส่งค่ามาเป็น POST
	//$thb = $_POST['attribute name'];
	$thb = $_POST['thb'];
	$type = $_POST['type'];

	echo "<br>";

	echo "ค่าที่กรอกคือ ".$thb;
	echo "<br>";
	echo "สกุลเงินที่ใช้คำนวณ ".$type;
	echo "<br>";

	if ($type=='usd') {
		$result = $thb/31.2273;
	} elseif ($type=='jyp') {
		$result = $thb/28.9814;
	} elseif ($type=='krw') {
		$result = $thb/0.0293;
	} elseif ($type=='gbp') {
		$result = $thb/43.3292;
	} elseif ($type=='eur') {
		$result = $thb/38.2737;
	}

	echo "Result = ".$result."<br><br>";
	echo "<br>";


	///////// 2 //////////

	// if ($type=='usd') {
	// 	$rate =0.31;
	// } elseif ($type=='jyp') {
	// 	$rate =0.21;
	// } elseif ($type=='krw') {
	// 	$rate =0.11;
	// } elseif ($type=='gbp') {
	// 	$rate =0.50;
	// } elseif ($type=='eur') {
	// 	$rate =0.40;
	// }
	// echo "Result =".thb*rate;

	///////// 3 //////////

	// switch ($type) {
	// 	case 'usd':
	// 		$rate =0.31;
	// 		break;
	// 	case 'jyp':
	// 		$rate =0.21;
	// 		break;
	// 	case 'krw':
	// 		$rate =0.11;
	// 		break;
	// 	case 'gbp':
	// 		$rate =0.50;
	// 		break;
	// 	case 'eur':
	// 		$rate =0.40;
	// 		break;
		
	// 	default:
	// 		$rate =0;
	// 		break;

	// 	echo "Result =".thb*rate;


	
	require 'connect.php';

	$sql = "INSERT INTO exch481_history(thb,calculated,currency) VALUES($thb,$result,'$type')";

	// echo "<br>".$sql;
	$sql_exe = $conn->query($sql);
	// print($sql_exe);

?>

					<table class="table table-bordered">
					    <thead>
					        <tr>
					            <th>ราคา</th>
					            <th>แลกเปลี่ยน</th>
					            <th>สกุลเงิน</th>
					            <th>วัน เวลา</th>
					            <th>ทำการลบ</th>
					        </tr>
					    </thead>
					     


	<?php
	// echo "<br>";
	$sql = "SELECT * FROM exch481_history ORDER BY dateRecord DESC";
	$sql_exe = $conn->query($sql);

	while ($row = mysqli_fetch_assoc($sql_exe)) {
		echo $row['thb'].
		" Exchange to ".
		$row['currency'].
		"=".
		$row['calculated'].
		" ".
		$row['dateRecord'];

		?>

		<a href="delete.php?id=<?php echo $row['recordID']?> &thb=<?php echo $row['thb']?>">Delete</a>

		<?php 

					     while ($row = mysqli_fetch_assoc($sql_exe)) {
					     	echo "<tbody>
					     	<td>".$row['thb']."</td>"
					     	."<td>".$row['calculated']."</td>"
					     	."<td>".$row['currency']."</td>"
					     	."<td>".$row['dateRecord']."</td>"
					     	."<td>"."<a href='delete.php?id=".$row['recordID']."&.thb=".$row['thb']."'>DELETE</a>"."</td></tbody>";

					     } ?>
					</table>


		<?php
		echo "<br>";
		//$array['key-field name'];
	}
	$conn->close();


	?>	
			</div>
		</div>
	</div>



</body>
</html>


