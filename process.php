<?php
include("db_conn.php");
$sql="INSERT INTO simple_board (name,title,content,time) VALUES ('$name','$title','$content','$time')";
ini_set('date.timezone','America/New_York');
$time=date("m-d-Y g:i:s"); 		
$finish="THANKS FOR YOUR FEEDBACK!";
mysql_query($sql); 
?>
<script>
alert("<?echo $finish?>");
location.href="main.php";
</script>