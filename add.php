<?php
@session_start();

include_once("connectdb.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูลสินค้า</title>
	<link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body><center>
  <img src="images/h11.png" width="375" height="59" alt=""/>

	<form method="post" action="" enctype="multipart/form-data">
		<p><h4><b><font size="+2">รหัส: </font></b><input type="text" name="p_id" required></h4></p>
		<p><h4><b><font size="+2">ชื่อสินค้า : </font></b><input type="text" name="p_name" required autofocus></h4></p
	<p><h4><b><font size="+2">รายละเอียด: </font></b><input type="text" name="p_detail" value="<?=$data['p_detail'];?>" required></h4></p>
		<p><h4><b><font size="+2">ราคา : </font></b><input type="text" name="p_price" required></h4></p>
		<p><h4><b><font size="+2">ประเภทสินค้า : </font></b><input type="text" name="p_type" required></h4></p>
		<p><h4><b><font size="+2">รูปสินค้า  </font></b><input type="file" name="p_picture" required></h4></p>
		<h4><input class="btn btn-danger" type="submit" name="Submit" value="เพิ่มข้อมูล">
		<b><a class="btn btn-warning" href="back_office.php">ย้อนกลับ</a></b></h4>	
</form>
	</center>
	
	<?php
	if(isset($_POST['Submit'])) {
		$p_id = $_POST['p_id'] ;
		$p_name = $_POST['p_name'] ;
		$p_price = $_POST['p_price'] ;
		$p_type = $_POST['p_type'] ;
		$p_ext = $_POST['p_ext'] ;
	
		//$path = $_FILES['p_picture']['name'];
		//$ext = @pathinfo($path, PATHINFO_EXTENSION);
		
		if(move_uploaded_file($_FILES["p_picture"]["tmp_name"],"images/".$p_id."."."png")){
		$image = $p_id."."."png";
			
		$sql = "INSERT INTO `product` (`p_id`, `p_name`, `p_detail`,`p_price`,`p_picture`,`p_type`) 
		VALUES ($p_id, '{$p_name}','NULL', '{$p_price}', '{$image}','{$p_type}') ; ";
		//var_dump($sql) ; exit ;
		mysqli_query($conn, $sql) or die ("เพิ่มข้อมูลไม่ได้");
		//$pid = mysqli_insert_id($conn);
		
		//copy($_FILES['p_ext']['tmp_name'], "images/".$pid.".".$ext);
		
		echo "<script>";
		echo "alert('เพิ่มข้อมูลสินค้าสำเร็จ') ; " ;
		echo "window.location='a.php' ; " ;
		echo "</script>" ;
		echo "Copy/Upload Complete<br>";

	}
	}
	?>
</body>
</html>