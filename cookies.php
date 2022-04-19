<?php
$uid=$_REQUEST["uid"];
$pas=$_REQUEST["pas"];
setcookie("uid", $uid, time() + (86400 * 30), "/");
setcookie("pas", $pas, time() + (86400 * 30), "/");
header ("location:indexafterlogin.php");
?>