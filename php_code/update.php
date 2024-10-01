<?php
	include("connMySQL.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') { //以 POST 方式接收網頁傳來的資料
		$name = $_POST['name'];
		$time = $_POST['time'];
		
		$insert_query = "INSERT INTO `check_record`(`name`, `time`)VALUES ('$name','$time')";
        $result = mysqli_query($link, $insert_query);

        if($result){
			echo "pass";
		    }else{
			echo "fail";
		    }
	}
	mysqli_close($link); //斷開與資料庫的連結
?>
