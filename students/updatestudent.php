<?php
include_once("connect.php");
if(isset($_POST["submit"])){
$id=$_POST["id"];
$name= $_POST["Name"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$educ_lvl= $_POST["educ_lvl"];
$age= $_POST["age"];
$adresse= $_POST["adresse"];
$insert_query="update students set fullname='".$name."',phone='".$phone."',email='".$email."',educ_lvl='".$educ_lvl."',age=".$age.",adresse='".$adresse."' where id=".$id;
$result = mysqli_query($connexion, $insert_query);                                                                              


 if($result){
    echo "data inserted successfully";
    header('location:index.php');

            }
}
?>

