<?php
include '../common/connect.php'; 
$removeid = $_POST['id'];
$removeimage = $_POST['original_img'];
$delsql = "UPDATE workshop_album_list SET original_img = '' WHERE album_id =".$removeid;			
mysql_query($delsql);
echo (realpath("./uploads/".$removeimage));


echo "1";
?>