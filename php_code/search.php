<?php
	include("connMySQL.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') { //以 POST 方式接收網頁傳來的資料
		$name = $_POST['name'];
		$date = $_POST['date'];
		

        $serch_query = "SELECT '$name' FROM check_record WHERE CAST(time AS DATE) = '$date'"; 
        #python端如果name欄位是all,要post "*" 過來php

        $result = mysqli_query($link, $search_query);

            
        $row_count = mysqli_num_rows($result);
        $counter = 0;
        
        while ($row = mysqli_fetch_assoc($result)) {
            $counter++;
        
            echo $row['name'] . "已於" . $row['time'] . "簽到成功！";
        
            // 如果不是最後一筆，加上逗號
            if ($counter < $row_count) {
                echo ', ';
            }
        }
	}
	mysqli_close($link); //斷開與資料庫的連結
?>
