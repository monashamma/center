<?php
include_once ("connect.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $educ_lvl=$_POST["educ_lvl"];
    $age=$_POST["age"];
    $adresse=$_POST["adresse"];
    

    $user_id=$_SESSION["session_user_id"];

 
// here we get from form and save to file storage before database
var_dump($_FILES);
$targetDirectory = "images/students/";
$targetFile = $targetDirectory . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (optional)
if ($_FILES["pic"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
 //Allow certain file formats (optional)
if ($fileType !== "jpg" && $fileType !== "png" && $fileType !== "jpeg" && $fileType !== "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// echo $targetFile;
if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
   header('location:index.php?page=addstudent');
} else {
   // If everything is ok, try to upload file
   if (move_uploaded_file($_FILES["pic"]["tmp_name"], $targetFile)) {
       echo "The file " . basename($_FILES["pic"]["name"]) . " has been uploaded.";
   } else {
       echo "Sorry, there was an error uploading your file.";
   }
}


///////// file upload area


    
    


    $insert_query="insert into students (fullname,phone,email,educ_lvl,adresse,age,createdby,pic) 
    values('".$name."','".$phone."','".$email."','".$educ_lvl."','".$adresse."',".$age.",".$user_id.",'". $targetFile."')";
    $result=mysqli_query($connexion,$insert_query);
    echo $insert_query;
    if($result){
        echo "data inserted successfuly";
        header('location:index.php?page=students');
       

     
    }
}
?>