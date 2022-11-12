<?php 
require_once 'actions/db_connect.php';
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM medias WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $ISBN = $data["ISBN_code"];
        $description = $data["short_description"];
        $type = $data["type"];
        $authorFirstName = $data["author_first_name"];
        $authorLastName = $data["author_last_name"];
        $publisherName=$data['publisher_name'];
        $publisherAddress=$data['publisher_address'];
        //$publishDate = $data['publish_date'];
        $status = $data['media_status'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
 } else {
    header("location: error.php");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a_update</title>
    <?php require_once 'components/boot.php'?>
    <link rel="stylesheet" href="./style/styleForm.css">

</head>
<body>
    <h1>Update Media</h1>
    <form action="./actions/a_update.php" method="post" enctype="multipart/form-data" id=form>
        <label for="name">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="<?php echo $title ?>">
        <label for="image">Image (link)</label>
        <input class="form-control" type="text" name="image" id="image" value="<?php echo $image ?>">
        <label for="price">Short Description</label>
        <textarea class="form-control" name="short_description" id="description" cols="30" rows="4" ><?php echo $description ?></textarea> 
        <!--select start-->       
        <label for="type">Type</label>
        <select name="type" value="<?php echo $type ?>">
            <option value="<?php echo $type ?>"><?php echo $type ?></option>
            <option value="BOOK">BOOK</option>
            <option value="DVD">DVD</option>
            <option value="CD">CD</option>
        </select><br>
        <!--select end-->
        <label for="author">Author</label>
        <input class="form-control" type="text" name="author_first_name" placeholder="first name" id="title" value="<?php echo $authorFirstName ?>">
        <input class="form-control" type="text" name="author_last_name" placeholder="last name" id="title" value="<?php echo $authorLastName ?>"><br>
        <label for="publisher">Publisher</label>
        <input class="form-control" type="text" name="publisher_name" id="pub_name" placeholder="name"  value="<?php echo $publisherName ?>" >
        <textarea class="form-control" name="publisher_address" id="pub_ad" cols="30" rows="4"  placeholder="address" value="<?php echo $publisherAddress ?>" ><?php echo $publisherAddress ?></textarea><br>
        <label for="date">Publish date</label>
        <input class="form-control" type="date" name="publish_date" id="pub_date" placeholder="date of publication" value="<?php echo $publishDate ?>" >
        <br>
        <label for="ISBN">ISBN CODE</label>
        <input class="form-control" type="number" name="ISBN_code" id="ISBN"  value="<?php echo $ISBN ?>"><br>
         <!--select start-->       
        <label for="media_status">Status</label>
        <select name="media_status"  value="<?php echo $status ?>">
            <option value="<?php echo $status ?>"><?php echo $status ?></option>
            <option value="available" value="<?php echo $status ?>">AVAILABLE</option>
            <option value="reserved" value="<?php echo $status ?>">RESERVED</option>

        </select><br>
        
        <!--select end-->
        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
        <button class="btn btn-success w-25 m-auto" type= "submit">Save Changes</button>
        <a class="home" href="index.php">Back</a>



    </form>
</body>
</html>