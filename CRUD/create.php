<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <?php require_once 'components/boot.php'?>
</head>
<body>
    <h1>Add Media</h1>
    <form action="./actions/a_create.php" method="post" enctype="multipart/form-data">
        <label for="name">Title</label>
        <input class="form-control" type="text" name="title" id="title">
        <label for="image">Image (link)</label>
        <input class="form-control" type="text" name="image" id="image">
        <label for="price">Short Description</label>
        <textarea class="form-control" name="short_description" id="description" cols="30" rows="4"></textarea> 
        <!--checkbox start-->       
        <label for="type">Type</label><br>
        <input class="" type="radio" name="type" id="type"><label for="type" value="BOOK">Book</label>
        <input class="" type="radio" name="type" id="type"><label for="type" value="DVD">DVD</label>
        <input class="" type="radio" name="type" id="type"><label for="type" value="CD">CD</label><br>
        <!--checkbox end-->
        <label for="name">Author</label>
        <input class="form-control" type="text" name="author_first_name" placeholder="first name" id="title">
        <input class="form-control" type="text" name="author_last_name" placeholder="last name" id="title">
        <label for="name">Publisher</label>
        <input class="form-control" type="text" name="publisher_name" id="pub_name" placeholder="name">
<!--         <input class="form-control" type="date" name="publish_date" id="pub_date" placeholder="address">
 -->        <textarea name="publisher_address" id="pub_ad" cols="30" rows="4"></textarea><br>
        <label for="name">ISBN CODE</label>
        <input class="form-control" type="number" name="ISBN_code" id="ISBN">
         <!--checkbox start-->       
        <label for="media_status">Availability</label><br>
        <input class="" type="radio" name="media_status" id="type"><label for="media_status" value="available">available</label>
        <input class="" type="radio" name="media_status" id="media_status"><label for="media_status" value="reserved">reserved</label>
        <br>
        <!--checkbox end-->
        <button class='btn btn-success' type="submit">Insert Product</button>
        <a href="index.php"><button class='btn btn-warning' type="button">Home</button></a>



    </form>
</body>
</html>