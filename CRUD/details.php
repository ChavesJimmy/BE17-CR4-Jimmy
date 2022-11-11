<?php 
require_once "./actions/db_connect.php";
$tbody = "";

if ($_GET['id']){
    $id = $_GET['id'];
    $sql = "SELECT * FROM medias WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    //var_dump_pretty($sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $tbody = "<div class='card mb-3'>
    <img src='".$row["image"]."' class='card-img-top'>
    <div class='card-body'>
      <h5 class='card-title'>".$row["title"]."</h5>
      <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
    </div>
  </div>"
    ;}
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <h2>Product Details</h2>
    <tbody>
        <?php echo $tbody ?>
    </tbody>
</body>
</html>