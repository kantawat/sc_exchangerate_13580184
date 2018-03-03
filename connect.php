<?php

	// if (@_SERVE['HTTP_HOST]'=='localhost') {
		// $DB_SERVE = 'localhost';
		// $DB_USER_READER = 'root';
		// $DB_PASS_READER = '';
		// $DB_NAME = 'exchange_rate';
		// echo "localhost";
	// } else {
		////// บนserve ที่เป็น imsu.co

		$DB_SERVE = 'localhost';
		$DB_USER_READER = 'u13580184';
		$DB_PASS_READER = 'fu9C:6Tg8k';
		$DB_NAME = 'db13580184';

	// } //คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVE,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);

	//ตรวจสอบว่าต่อสำเร็จไหม

	if ($conn -> connect_error) {
		die("connect failed".$conn -> connect_error);

	}
	mysqli_set_charset($conn,"utf8");




?>