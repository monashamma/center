<?php
include_once("connect.php");
$id=$_GET["id"];
$delete_query="delete from languages where id=".$id;
$result=mysqli_query($connexion,$delete_query);

if($result){
    echo "data delected successfuly";
    header('location:index.php?page=languages');
}


?>
