<?php
 	@session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เข้าสู่ระบบ</title>
</head>

<body>
	<center><img src="images/h6.png" width="375" height="69" alt=""/></center>
	
	<table bgcolor="#B5D7B0" align="center" width="346" height="206" border="0" cellpadding="2" cellspacing="1">
	  <tbody>
	    <tr>
	      <td>
			  <form action=" " method="post">
		
	
			<center>Username <input type="text" name="auser" required autofocus> <br>
		Password <input type="password" name="apwd" required> <br>
		<input type="submit" name="Submit" value="Login"></center>
				  </form>
			</td>
        </tr>
      </tbody>
</table>
	<p>&nbsp;</p>
	<?php
		if(isset($_POST['Submit'])) {
			include_once("connectdb.php");
			$sql = "select * from admin where a_user='{$_POST['auser']}' and a_pwd='".md5($_POST['apwd'])."' limit 1 ";
			$rs = mysqli_query($conn, $sql) ;
			//var_dump($sql); exit;
			$num = mysqli_num_rows($rs);
			
			if($num > 0) {
				$data = mysqli_fetch_array($rs);
				$_SESSION['admin'] = $data['a_id'];
				$_SESSION['aname'] = $data['a_name'];
				echo "<script>";
				echo "window.location='a.php';";
				echo "</script>";
			}else{
				echo "<script>";
				echo "alert('Login ไม่สำเร็จ');";
				echo "window.location='index.php';";
				echo "</script>";
			}
		}
	?>
	
</body>
</html>