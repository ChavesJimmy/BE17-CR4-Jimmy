<?php 
require_once "./actions/db_connect.php";
    $publisher = $_GET['publisher_name'];
    $sql = "SELECT * FROM medias WHERE publisher_name = '$publisher' ";
    $result = mysqli_query($connect, $sql);
    $tbody = "";
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$tbody .="<div class='card mb-3'>
<div class='row g-0'>
  <div class='col-md-4'>
    <img src='".$row['image']."' >
  </div>
  <div class='col-md-8'>
    <div class='card-body'>
      <h2 class='card-text'>".$row['title']."</h2>
      
    </div>
  </div>
</div>
</div>";}}
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once "./components/boot.php"?>
        <link rel="stylesheet" href="./style/stylePublisher.css">
        <title>Publisher</title>
    </head>
    <body>
        <h1>All medias from <?php echo $publisher?></h1>
        <tbody>
            <?php echo $tbody ?>
        </tbody>
        <div class="butn"><a href="./index.php">BACK HOME</a></div>
    </body>
    </html>