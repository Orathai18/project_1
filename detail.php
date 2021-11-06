
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NC SHOP</title>
</head>

<body>
	
<?php
		
	include_once("../i/connectdb.php");
	$sql ="SELECT * FROM product";
	$rs = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_array($rs)){
		echo "<img src='images/{$data['p_id']}.{$data['p_type']}' width='140'><br>";
		echo "รหัสสินค้า: ".$data['p_id']."<br>";
		echo "ขื่อสินค้า: ".$data['p_title']."<br>";
		echo "รายละเอียดสินค้า: ".$data['p_detail']."<br>";
		echo "ราคา: ".$data['p_price']." บาท<br>";
		
		
	}
	?>
	</body>
</html>