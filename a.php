
<!doctype html>
<html>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<head>
<meta charset="utf-8">
<title>ระบบจัดหารสินค้า</title>
   
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <style>
    body {
        background-color: #FFFDFD;
        }
        .a {
           
             font-size: 15px ;
             font-weight: bold ;
             color: black;
         }
        .b {
             
             font-size: 15px;
             font-weight: bold;
             color: black;
             
         }
    </style>
    
</head>  

<body>
   
    <?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) 
?>
    
    
    
<div class="a"><img src="images/h2.png" width="100%" height="194" alt=""/></div> 
   
   
       
    <?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
    ?>

    <a href="shop.php?pt=<?=$data2['pt_id'];?>" class="dropdown-item"><?=$data2['pt_name'];?></a>  

    <?php } ?>
		  <div></div>
        
         <div class="b"> 
           <p>ชื่อผู้ใช้งาน : Admin
  <?=$_SESSION['aname']?>
           </p>
           <p>&nbsp; </p>
         </div>
        
          <a href="logout.php"><button type="button" class="btn btn-danger"><div class="b">ออกจากระบบ</div></button></a>
	&nbsp;
	&nbsp;
		  <a href="add.php"><button type="button" class="btn btn-info"><div class="b">เพิ่มข้อมูลสินค้า</div></button></a>
	&nbsp;
	&nbsp;
<a href="admin_view.php"><button type="button" class="btn btn-danger"><div class="b">รายการสั่งซื้อ</div></button></a>
	&nbsp;
	&nbsp;
<a href="showmember.php"><button type="button" class="btn btn-info"><div class="b">รายชื่อลูกค้า</div></button></a>
	
	
  </div>
</nav>
   
    


<br><br>
 <center><img src="images/h8.png" width="375" height="59" alt=""/></center>
<p>

<?php
		
	include_once("connectdb.php");
	
	$sql ="SELECT * FROM `product`";
	$rs = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_array($rs)){
		echo "<img src='images/{$data['p_picture']}' width='200'><br>";
		echo "รหัสสินค้า: ".$data['p_id']."<br>";
		echo "ขื่อสินค้า: ".$data['p_name']."<br>";
		echo "รายละเอียดสินค้า: ".$data['p_detail']."<br>";
		echo "ราคา: ".$data['p_price']." บาท<br>";
		echo "<a href='add1.php?id={$data['p_id']}'>แก้ไข</a> | ";
		echo "<a href='d.php?id={$data['p_id']}&picture={$data['p_picture']}' onClick='return confirm(\"ยืนยันการลบ?\");'>ลบ</a> <hr>" ;
	
	}
	
	mysqli_close($conn);
	?>
	
</body>
</html>