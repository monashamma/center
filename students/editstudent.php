<html>
    <!--
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
-->
 <body style="background-color: rgb(109, 104, 104);">
<div class="container"  >
<?php
$id=$_GET["id"];
include_once("connect.php");
$select_query = "SELECT * FROM students where id=".$id; 
$result = mysqli_query($connexion,$select_query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC)

?>



    <div class="row">
        <form method="post" action="./index.php?page=updatestudent">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label  >Name</label>
                <input  class="form-control" name="Name" value="<?php echo $row['fullname']; ?>">
            </div>
            <div class="form-group">
                <label  >phone</label>
                <input class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
            </div>
            <div class="form-group"> 
                <label  >email</label>
                <input class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group"> 
                <label  >Adresse</label>
                <input  class="form-control" name="adresse" value="<?php echo $row['adresse']; ?>">
            </div>
            <div class="form-group"> 
                <label  >Age</label>
                <input class="form-control" name="age" value="<?php echo $row['age']; ?>">
            </div>
            <div class="form-group"> 
                <label  >educ_lvl</label>
                <input  class="form-control" name="educ_lvl" value="<?php echo $row['educ_lvl']; ?>">
            </div>

            <div class="form-group"> 
                <label  >pic</label>
                <input   type="file" class="form-control" name="pic" value="<?php echo $row['pic']; ?>">
            </div>

            <div class="form-group">
                <input type="submit" value="save" name="submit" class="btn btn-primary form-control">     
            </div>
        </form>
    </div>
</div>

</body>



</html>



