<?php 
require_once "db_connect.php";

if($_POST){    
    $title = $_POST["title"];     
    $image = $_POST["image"];  
    $ISBN = $_POST["ISBN_code"];
    $description = $_POST["short_description"];
    $type = $_POST["type"];
    $authorFirstName = $_POST["author_first_name"];
    $authoLastName = $_POST["author_last_name"];
    $publisherName=$_POST['publisher_name'];
    $publisherAddress=$_POST['publisher_address'];
    //$publishDate = $_POST['publish_date'];
    $status = $_POST['media_status'];


    $uploadError = "";

    $sql = "INSERT INTO medias (title, image, ISBN_code, short_description, type, author_first_name, author_last_name, publisher_name, publisher_address/* , publish_date */, media_status) VALUES ('$title','$image' ,$ISBN , '$description', '$type', '$authorFirstName', '$authoLastName', '$publisherName', '$publisherAddress', /* '$publishDate', */ '$status')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "upload success";
    }else{
        $class="danger";
        $message ="Error, something went wrong. Try again!";

    }
    mysqli_close($connect);
}else{
    header("location: ../error.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a_create</title>
    <?php require_once '../components/boot.php'?>

</head>
<body>
<div class="container">
           <div class="mt-3 mb-3">
               <h1>Create request response</h1>
           </div>
           <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>
</body>
</html>