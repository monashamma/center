<html>

<body style="background-color: rgb(109, 104, 104);">
<div class="container"style="max-width:90%"; >
<?php
$id=$_GET["id"];
include_once("connect.php");
$select_query = "SELECT * FROM languages where id=".$id; 
$result = mysqli_query($connexion,$select_query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC)

?>
    <div class="row">
        <form method="post" action="./index.php?page=updatelanguage">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label  >name</label>
                <input  class="form-control" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label  >price</label>
                <input class="form-control" name="price" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-group"> 
                <label  >nbofhour</label>
                <input class="form-control" name="nbofhour" value="<?php echo $row['nbofhour']; ?>">
            </div>
        
            <div class="form-group">
                <input type="submit" value="save" name="submit" class="btn btn-primary form-control">     
            </div>
        </form>
    </div>
</div>

</body>



</html>



