<?php	# ส่วนที่ใช้ติดต่อฐานข้อมูล #
	$host = "localhost" ;				// ชื่อโฮสต์
	$user = "root" ;					// ชื่อผู้ใช้
	$pwd="12345678" ;					// รหัสผ่าน
	$dbName = "project" ;				// ชื่อฐานข้อมูล

	mysql_connect($host , $user, $pwd) or die ("ติดต่อฐานข้อมูลล้มเหลว") ;				// เชื่อมต่อฐานข้อมูล
	mysql_select_db("$dbName") or die ("เลือกฐานข้อมูลล้มเหลว") ;							// เลือกฐานข้อมูล
	mysql_query("SET NAMES utf8") ;					// ทำให้สนับสนุนฟอนต์ภาษาไทย
?>