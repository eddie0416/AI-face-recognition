<?php
	include("connMySQL.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') { //以 POST 方式接收網頁傳來的資料
		$name = $_POST['name'];
		$time = $_POST['time'];
		
		$delete_query = "DELETE FROM `check_record` WHERE `name` ='$name' AND `time` ='$time'";

        $result = mysqli_query($link, $delete_query);

        if($result){
			echo "pass";
		    }else{
			echo "fail";
		    }
	}
	mysqli_close($link); //斷開與資料庫的連結
?>
