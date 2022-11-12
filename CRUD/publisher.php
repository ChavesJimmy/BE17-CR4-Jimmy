<?php 
require_once "./actions/db_connect.php";
$publisherName =$_GET['publisher_name'] ;
$sql = "SELECT * FROM medias WHERE publisher_name = 'JUMP' ";
//I figured out the query i need to use, but can't find a way to put a variable instead of the actual value (here: JUMP)
$result = mysqli_query($connect, $sql);
$tbody = "";
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        

    $tbody .=$row['title'] . "<br>";}}
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <tbody>
            <?php echo $tbody ?>
        </tbody>
    </body>
    </html>