<?php
include_once ("connect.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $price=$_POST["price"];
    $nbofhour=$_POST["nbofhour"];
   


    $insert_query="insert into languages (name,price,nbofhour) 
    values('".$name."',".$price.",".$nbofhour.")";
    $result=mysqli_query($connexion,$insert_query);
    echo $insert_query;
    if($result){
        echo "data inserted successfuly";
        header('location:index.php?page=languages');
       

     
    }
}
?>
