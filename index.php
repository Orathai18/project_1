<?php
session_start();
	include("connectdb.php");
	
?>
<!doctype html>
<html>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<head>
<meta charset="utf-8">
<title>HOME</title>
</head>
<style>
	body {
		background-color: ;
		
	}
</style>
<body>
	
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tbody>
    <tr>
      <td><img src="images/h2.png" width="100%" height="194" alt=""/></td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tbody>
    <tr>
      <p><a href="index.php" class="btn btn-primary"  >หน้าหลัก</a>   
	  <a href="login.php" class="btn btn-primary">เข้าสู่ระบบ</a> 
	  <a href="basket.php" class="btn btn-primary">ตะกร้าสินค้า</a>
		<a href="guestbook.php" class="btn btn-primary">สมุดเยี่ยม</a> 
		  <a href="order.php" class="btn btn-primary">รายการสั่งซื้อ</a>
	  <a href="backoffice.php" class="btn btn-primary">ระบบหลังร้าน</a>
		  <a href="logout.php" class="btn btn-primary">ออกระบบ</a>
		<img src="images/h4.png" width=700" height="30" alt=""/>

    </tr>
  </tbody>
</table>
<table width="50%" border="0" cellspacing="1" cellpadding="2">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<?php
@session_start();
if(empty($_SESSION['aid'])){
  
}
echo "ชื่อผู้เข้าใช้งาน : ";
echo $_SESSION['aname']."<br>";
echo "<br>";
?>														
															 
<p>&nbsp;</p>
<table width="50%" border="0" cellspacing="1" cellpadding="2">
  <tbody>
    <tr>
      
    </tr>
  </tbody>
</table>

  <table width="100%" height="107" border="0" cellpadding="2" cellspacing="1">
  <tbody>
    <tr>
      <td width="17%"><table width="100%" height="107" border="0" cellpadding="2" cellspacing="1">
        <tbody>
          <tr>
            <td width="30%">&nbsp;</td>
            <td width="17%"><img src="images/01.jpg" width="163" height="147" alt=""/></td>
            <td width="17%"><img src="images/02.jpg" width="125" height="140" alt=""/></td>
            <td width="17%"><img src="images/03.jpeg" width="133" height="131" alt=""/></td>
            <td width="30%">&nbsp;</td>
            <td width="4%">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
  </table>
</center>

<h2><center>
  <p>
    <?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
?>
    
    <a href="index.php?pt=<?=$data2['pt_id'];?>" class="btn btn-info">
      <?=$data2['pt_name'];?>
      </a> |
    <?php } ?>
  </p>
</center>
</h2>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tbody>
    <tr>
      
    </tr>
  </tbody>
</table>
<table width="100%" height="39" border="0" cellpadding="2" cellspacing="1">
  <tbody>
    <tr>
      <td height="37"><img src="images/h5.png" width="400" height="55" alt=""/></td>
    </tr>
  </tbody>
</table>
<p><form class="form-inline" action="index.php" method="post">
  <fieldset>
  
  
  
  
  
  
  <?php
	@$kw = $_POST['kw'] ;
	@$pt = $_GET['pt'] ;
	if (isset($_GET['pt'])) {
		$s = "and (p_type = '$pt')"; 
	} else {
		$s = "";	
	}
	$sql = "select * from product where ( p_name like '%$kw%' or p_detail like '%$kw%' ) $s ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		if( ($i % 3) == 1) {
			echo "<div class='row' align='center' style='width:100%;'>";
		}
?>
</p>
</p>
<div class="col-md-4">
  <div class="thumbnail">
      <img src="images/<?=$data['p_picture'];?>" width="200" >
      <div class="caption">
        <h4><?=$data['p_name'];?></h4>
        <h4><?=number_format($data['p_price'],0);?> บาท</h4>
        
			
      </div>
    </div>
  </div>
<?php 
		if ( ($i % 3 ) == 0){
			echo "</div>";	
		}
	} // end while

	mysqli_close($conn);
?>

</body>
</html>