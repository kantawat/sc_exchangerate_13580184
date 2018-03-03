<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, intitial-scale-1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
	.container {
		margin-top: 100px; 
		width: 60%;
	}
	.row {
		background-color: #e2383f; 
		border:1px solid #f7f7f7; 
		border-radius: 5px;
	}
	h2,h4{
		color:#fff;
	}
	 {
		color: #fff;
	}
	.btn.center-block {
		margin-top: 30px; 
		margin-bottom: 50px; 
		width: 300px; 
		height: 50px; 
		background-color: #fff; 
		color: #e2383f;

	}

</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-20 center-block">
				<form action="calculator-result.php" method="post">
					<h2 class="text-center"><br>เครื่องคำนวณอัตราการแลกเปลี่ยน</h2>
					<div class="col-md-6 text-left"><h4 style="width: 30%; margin-left: 150px;"><br>จำนวนเงินไทย</h4>


						<input class="form-control" placeholder="กรุณาใส่ค่าเป็นตัวเลข" aria-label="กรุณาใส่ค่าเป็นตัวเลข" aria-describedby="basic-addon2" type="text" name="thb" style="width: 300px; margin-left: 50px;">
					</div>

					<div class="col-md-6 text-right">
						<h4 style="width: 50%; margin-left: 90px;"><br>สกุลเงินที่ต้องการคำนวณ</h4>
					
						<select class="btn btn-default dropdown-toggle" name="type" style="width: 300px; margin-right: 50px;">
							<option value="usd">USD</option>
							<option value="jyp">JYP</option>
							<option value="krw">KRW</option>
							<option value="gbp">GBP</option>
							<option value="eur">EUR</option>
						</select><br><br><br><br>

					</div>

					<button class="btn center-block" type="submit"><strong>SUBMIT</strong></button>
		
				</form>
			</div>
		</div>

	</div>

</body>
</html>