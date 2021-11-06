<?php
@session_start();
	
	echo $_SESSION['aname']."<hr>" ;

?>
<?php
 include("connectdb.php");
        $id = $_GET['id'] ;
    
        $sql = "SELECT * FROM product WHERE p_id = '{$id}' ";
        $rs = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($rs);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แก้ไขข้อมูล</title>
</head>

<body>
    <center>
      <p><img src="images/h12.png" width="375" height="59" alt=""/></p>
      <p>&nbsp;</p>
    </center>
    <form method="post" action="" enctype="multipart/form-data">
    
        <center><p>ชื่อสินค้า
  <input type="text" name="p_name" required value="<?=$data['p_name'];?>"> <br>
        </p>
        <p><br>
          รายละเอียดสินค้า
          <textarea type="text" name="p_detail" required row="3" cols="30"><?=$data['p_detail'];?>
        </textarea> 
        </p>
        <p><br>
        <br>
          ราคาสินค้า: <input type="text" name="p_price" required value="<?=$data['p_price'];?>"> <br>
			<br>
          รหัส: <input type="text" name="p_id" required value="<?=$data['p_id'];?>"> <br>
        </p>
        <p><br>
          รูปสินค้า: <input type="file" name="p_picture" > <br>
        </p>
        </center><p><br>
          <center><input type="submit" name="Submit" value="บันทึกข้อมูล"></center>
        </p>
    
    </form>
    
<?php
	
	if(isset($_POST['Submit'])) {
		include("connectdb.php");
		$id = $_POST['p_id'] ;
		$p_name = $_POST['p_name'] ;
		$p_detail = $_POST['p_detail'] ;
		$p_price = $_POST['p_price'] ;
		
		
		
	
		//$path = $_FILES['p_picture']['name'];
		//$ext = @pathinfo($path, PATHINFO_EXTENSION);
		
		if(move_uploaded_file($_FILES["p_picture"]["tmp_name"],"images/".$id."."."png")){
		$image = $id."."."png";
			
		//$sql = "INSERT INTO `product` (`p_id`, `p_name`, `p_detail`,`p_price`,`p_picture`,`p_type`) 
		//VALUES (NULL, '{$p_name}','NULL', '{$p_price}', '{$image}','{$p_type}') ; ";
			
		//$sql = "UPDATE `product` SET `p_name` = '$p_name', 'p_detail' = '$p_detail', 'p_price' = '$p_price', 'p_picture' = '$image' WHERE `product`.`p_id` = '{$id}';";
			
		$sql = 	"UPDATE `product` SET `p_id` = '$id', `p_name` = '$p_name', `p_detail` = $p_detail', `p_price` = '$p_price', `p_picture` = '$image' WHERE `product`.`p_id` = '{$id};";
	
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