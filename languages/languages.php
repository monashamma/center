
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Project</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-0evHe/X+4u2/QPOqopOWt5hWvO/j8NQz/8UeIiN9Qh8vXv4bK4K5o18wX+j" crossorigin="anonymous">
 
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073YpUU+3oCdR+6z9t9kLNr3l0HZOIlwfrkbn/y5+Y+FRWHs9HQ+A5+iMn" crossorigin="anonymous"></script>

  <a href="./index.php?page=addlanguage">+add a new language</a>
  <?php
   include_once("connect.php");
  ?>


<div class="container">
<div class="row" >
<?php
   $colors=array('red','blue','yellow','green');
   $query_select="select * from languages";
   $resultlanguages = mysqli_query($connexion, $query_select);
   $i=0;
  while( $row=mysqli_fetch_array($resultlanguages, MYSQLI_ASSOC)){
?>

    <div class="col-md-3" style="background-color:<?php echo $colors[$i]; ?>;margin:10px; border-radius:10px;">
    
    <h1><?php echo $row['name']; ?></h1>
    <div><?php echo $row['price']; ?></div>
    <div><?php echo $row['nbofhour']; ?></div>
    <div><a href="./index.php?page=editlanguage&id=<?php echo $row ['id'];?>">Edit | </a>
         <a href="./indext.php?page=deletelanguage&id=<?php echo $row['id'];?>">Delete</a></div>
   

    </div>

<?php
$i++;
if($i==4){
    $i=0;}
}
?>
</div>
</div>
 </body>