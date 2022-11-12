<?php
require_once 'db_connect.php';

if ($_POST) {    
    $title = $_POST["title"];     
    $image = $_POST["image"];  
    $ISBN = $_POST["ISBN_code"];
    $description = $_POST["short_description"];
    $type = $_POST["type"];
    $authorFirstName = $_POST["author_first_name"];
    $authorLastName = $_POST["author_last_name"];
    $publisherName=$_POST['publisher_name'];
    $publisherAddress=$_POST['publisher_address'];
    $publishDate = $_POST['publish_date'];
    $status = $_POST['media_status'];
    $id = $_POST['id'];  

    $sql = "UPDATE medias SET title= '$title', image='$image' ,ISBN_code = $ISBN, short_description = '$description', type ='$type', author_first_name='$authorFirstName', author_last_name ='$authorLastName', publisher_name='$publisherName', publisher_address = '$publisherAddress', publish_date = '$publishDate', media_status = '$status' WHERE id = {$id}";

   if (mysqli_query($connect, $sql) === TRUE) {
       $class = "success";
       $message = "The record was successfully updated";
   } else {
       $class = "danger";
       $message = "Error while updating record : <br>" . mysqli_connect_error();
   }
   mysqli_close($connect);    
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot.php'?> 
   </head>
   <body>
       <div class="container">
           <div class="mt-3 mb-3">
               <h1>Update request response</h1>
           </div>
           <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
               <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
           </div>
       </div>
   </body>
</html>