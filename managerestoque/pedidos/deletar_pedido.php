<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("qrteste",$con);
mysql_query("DELETE FROM pedido WHERE id='" . $_GET["userId"] . "'");
header("Location:../index.php");
?>