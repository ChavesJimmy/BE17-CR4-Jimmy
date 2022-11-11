<?php 
require_once "./actions/db_connect.php";
$sql = "SELECT * FROM medias";
$result = mysqli_query($connect, $sql);
$tbody = "";
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $tbody .= "
        <div class='card mb-3 col-5' style='max-width: 540px;'>
  <div class='row g-0'>
    <div class='col-md-4 leftCard'>
      <img src=' ". $row['image'] ."' class='img-fluid rounded-start'>
      <div id='buttons'>
        <a href='details.php?id=".$row['id']."'>Details</a>
        <a href=''>Update</a>
        <a href='delete.php?id=" .$row['id']."'>Delete</a>
      </div>
    </div>
    <div class='col-md-8 rightCard'>
      <div class='card-body'>
        <h5 class='card-title'>Title : " . $row['title'] . "</h5>
        <p class='card-text'>Description : " . $row['short_description']."</p>
        <p class='card-text'>Author : ".$row["author_first_name"]." ".$row["author_last_name"]."<br>
        Type: ".$row['type']."<br>
        </p>
        <div id='status'>".$row["media_status"]."</div>
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
    <?php require_once "./components/boot.php"?>
</head>
<body>
    <tbody>
        <h1>Big Library Jimmy</h1>
        <div class="row">
        <?php 
        echo $tbody
        ?>
        <div class="col-8">
            <a href="./create.php">Create</a>
        </div>
        </div>
    </tbody>
</body>
</html>