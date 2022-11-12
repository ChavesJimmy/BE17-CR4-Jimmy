<?php 
require_once "./actions/db_connect.php";
$sql = "SELECT * FROM medias";
$result = mysqli_query($connect, $sql);
$tbody = "";
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $tbody .= "
        <div id='card' class='card mb-3 col-sm-10 col-md-5 m-auto'>
  <div class='row g-0'>
    <div class='col-md-6 leftCard'>
      <img src=' ". $row['image'] ."' class='imgCard'>
      <div id='buttons'>
        <a class='details' href='details.php?id=".$row['id']."'>Details</a>
        <a class='update' href='update.php?id=".$row['id']."'>Update</a>
        <a class='delete' href='delete.php?id=" .$row['id']."'>Delete</a>
      </div>
    </div>
    <div class='col-md-5 rightCard'>
      <div class='card-body'>
        <h5 class='card-title'>" . $row['title'] . "</h5>
        <p class='descr'>Description : " . $row['short_description']."</p>
        <p class='author'>Author : ".$row["author_first_name"]." ".$row["author_last_name"]."<br>
        Type: ".$row['type']."<br>
        </p>
        <p class='pub'> Publisher :<br><a href='publisher.php?publisher_name=".$row['publisher_name']."'>".$row["publisher_name"]."</a></p>

        <div id='".$row["media_status"]."'>".$row["media_status"]."</div>
      </div>
    </div>
  </div>
</div>
        
        
        
        
        ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./style/style.css">
    <?php require_once "./components/boot.php"?>
</head>
<body>
    <tbody>
        <h1>Big Library Jimmy</h1>
        <div class="row box">
        <?php 
        echo $tbody
        ?>
        <div class="col-12" id="crea">
            <a id="create" href="./create.php">Add new Media</a>
        </div>
        </div>
    </tbody>
</body>
</html>