<?php
 	@session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สมัครสมาชิก</title>
</head>

<body>
	<form id="form1" name="form1" method="post">

  <center><img src="images/h18.png" width="375" height="59" alt=""/></p>
      </center>
  <p><br>
    
    &nbsp;
    &nbsp;<br>
    <br>
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <label for="textfield">ชื่อ (Name) :</label>
    <input type="text" name="name" autofocus required>
    &nbsp;
    &nbsp;
     &nbsp;
    &nbsp; 
	  &nbsp;
    &nbsp;
    <label for="textfield">นามสกุล (Surname) :</label>
    <input type="text" name="surname" autofocus required>
   </p>

    &nbsp;
    &nbsp;
    &nbsp;
	&nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;

    <label for="tel">เบอร์โทรติดต่อ (Tel) :</label>
    <input type="tel" name="tel" id="tel" autofocus required>
    &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <label for="email"> อีเมล์ (Email) :</label>
    <input type="email" name="email" id="email" autofocus required>
    &nbsp;
    &nbsp;
	  &nbsp;
    &nbsp;
&nbsp;<br>
    </p>
  <p><br>
    &nbsp;
    &nbsp;
    &nbsp;
    ที่อยู่ปัจจุบันที่ติดต่อได้ (Address Present) : <br> 
  </p>
  <center><textarea name="address present" rows="5" cols="170"></textarea></center>
	</select>
    <br>
	&nbsp;
	&nbsp;
	&nbsp;<b><br></b>
Password : <br> 
  </p>
 <textarea name="Password" ></textarea>
	</select>
	<br>
  	<br>
  	<br>
Confirm Password : <br> 
<textarea name="Confirm Password" type="Password"></textarea>
	  <center>
		  <p><font  color="red" >*กรุณากรอกข้อมูลให้ครบถ้วน</font><p>
		    <input type="submit" name="Submit" value="ยืนยันการสมัคร">
		
      <input type="reset" name="reset"  value="ยกเลิก">
<a href="index.php" class="btn btn-primary"  >เลือกสินค้า</a> 
</center>	

</form>
<?php
		if (isset($_POST['Submit'])){		
			;
			echo $_POST['aname']."<br>";
			echo $_POST['name']."<br>";
			echo $_POST['surname']."<br>";
			echo $_POST['identity card no']."<br>";
			echo $_POST['tel']."<br>";
			echo $_POST['email']."<br>";
			echo $_POST['address present']."<br>";
			echo $_POST['Password']."<br>";
			
		}
	?>


</hr>
</body>
</html>
</body>
</html>