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
      <h5 class='card-title'>Title : ".$row["title"]."<br>
      ISBN CODE :".$row['ISBN_code']."<br>TYPE :".$row['type']."<br>Published: ".$row['publish_date']."<br></h5>
      <div class='author'>
      <div class='card-text'><h4>Author infos:</h4>
        First Name: ".$row['author_first_name']."<br>
        Last Name: ".$row['author_last_name']."<br>
      </div></div>
      <div class='publisher'>
      <div class='card-text'><h4>Publisher infos: </h4>
        Name: ".$row['publisher_name']."<br>
        Address: ".$row['publisher_address']."<br>
        
      </div></div>
      <div class='card-text status'>Status : <div id='".$row['media_status']."'>".$row['media_status']."</div>
      
      </div>
      <div id='button'><a href='./index.php'>BACK HOME</a></div>
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
    <link rel="stylesheet" href="./style/styleDetail.css">
</head>
<body>
    <h1>Media Details</h1>
    <tbody>
        <?php echo $tbody ?>
    </tbody>
</body>
</html>