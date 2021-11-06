<?php
	@session_start();

	session_destroy();

	echo "กำลังกลับหน้าหลัก กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
	//header("Location: index.php");
var_dump($sql); exit;

?>
<meta charset="utf-8">