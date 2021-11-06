<meta charset="utf-8">

<?php

if(isset($_GET['id'])){
	include_once("connectdb.php");
	$sql = "DELETE FROM `product`WHERE`product`.`p_id` = '{$_GET['id']}'";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้");
	
	@unlink("images/".$_GET['id'].".".$_GET['ext']);
	
	echo "<script>";
	echo "alert('ลบข้อมูลหนังสือสำเร็จ');";
	echo "window.location='a.php';";
	echo "</script>";
		
}
?>
	<?php
	@session_start();

	session_destroy();

	echo "กำลังลบข้อมูล กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=a.php\">";
	//header("Location: index.php");

?>
<meta charset="utf-8">
	