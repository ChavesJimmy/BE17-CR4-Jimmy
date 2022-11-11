<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <?php require_once 'components/boot.php'?>
    <link rel="stylesheet" href="./style/styleCreate.css">
</head>
<body>
    <h1>Add Media</h1>
    <form action="./actions/a_create.php" method="post" enctype="multipart/form-data" id=form>
        <label for="name">Title</label>
        <input class="form-control" type="text" name="title" id="title">
        <label for="image">Image (link)</label>
        <input class="form-control" type="text" name="image" id="image">
        <label for="price">Short Description</label>
        <textarea class="form-control" name="short_description" id="description" cols="30" rows="4"></textarea> 
        <!--select start-->       
        <label for="type">Type</label><br>
        <select name="type" id="">
            <option value="BOOK">BOOK</option>
            <option value="DVD">DVD</option>
            <option value="CD">CD</option>
        </select><br>
        <!--select end-->
        <label for="name">Author</label>
        <input class="form-control" type="text" name="author_first_name" placeholder="first name" id="title">
        <input class="form-control" type="text" name="author_last_name" placeholder="last name" id="title">
        <label for="name">Publisher</label><br>

        <input class="form-control" type="text" name="publisher_name" id="pub_name" placeholder="name">
        <input class="form-control" type="date" name="publish_date" id="pub_date" placeholder="date of publication">
        <textarea name="publisher_address" id="pub_ad" cols="30" rows="4"  placeholder="address"></textarea><br>
        <label for="name">ISBN CODE</label>
        <input class="form-control" type="number" name="ISBN_code" id="ISBN">
         <!--select start-->       
        <label for="media_status">Status</label>
        <select name="media_status">
            <option value="available">AVAILABLE</option>
            <option value="reserved">RESERVED</option>

        </select><br>
        
        <!--select end-->
        <button class='btn btn-success' type="submit">Insert Product</button>
        <a href="index.php"><button class='btn btn-warning' type="button">Home</button></a>



    </form>
</body>
</html>