<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สมุดเยี่ยม</title>
</head>

<body>
<p><a href="index.php">เขียนสมุดเยี่ยม</a> | 
	<center></center><form id="form1" name="form1" method="post" action="add_guestbook.php">
  <table width="400" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td width="85" bgcolor="#DBBDBE">ชื่อ</td>
      <td width="308" bgcolor="#A3A8A8"><input name="pname" type="text" id="pname" /></td>
    </tr>
    <tr>
      <td bgcolor="#94C5E9">E-mail</td>
      <td bgcolor="#F1D29E"><input name="pemail" type="text" id="pemail" /></td>
    </tr>
    <tr>
      <td bgcolor="#D7E79E">ข้อความ</td>
      <td bgcolor="#E9B6F3"><textarea name="pmessage" cols="30" rows="4" id="pmessage"></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#DBA2ED">&nbsp;</td>
      <td bgcolor="#81E7D2"><input type="submit" name="Submit" value=" บันทึก " /> <input type="reset" name="Submit2" value=" ยกเลิก " /></td>
    </tr>
  </table>

</form>
</body>
</html>