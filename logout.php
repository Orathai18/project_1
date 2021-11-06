<?php
setcookie('name','',time()-(86400 * 30), "/");
setcookie('user','',time()-(86400 * 30), "/");

session_start();
session_destroy();

echo"<script>
window.location='index.php';</script>";
 ?>
 ?>
