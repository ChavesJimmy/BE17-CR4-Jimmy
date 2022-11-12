<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <?php require_once 'components/boot.php'?>
    <link rel="stylesheet" href="./style/styleForm.css">
</head>
<body>
    <h1>Add Media<br>
(all fields are mandatory)</h1>
    <form action="./actions/a_create.php" method="post" enctype="multipart/form-data" id=form>
        <label for="name">Title</label>
        <input class="form-control" type="text" name="title" id="title">
        <label for="image">Image (link)</label>
        <input class="form-control" type="text" name="image" id="image">
        <label for="price">Short Description</label>
        <textarea class="form-control" name="short_description" id="description" cols="30" rows="4"></textarea> 
        <!--select start-->       
        <label for="type">Type</label>
        <select name="type" id="">
            <option value=""></option>
            <option value="BOOK">BOOK</option>
            <option value="DVD">DVD</option>
            <option value="CD">CD</option>
        </select><br>
        <!--select end-->
        <label for="author">Author</label>
        <input class="form-control" type="text" name="author_first_name" placeholder="first name" id="title">
        <input class="form-control" type="text" name="author_last_name" placeholder="last name" id="title"><br>
        <label for="publisher">Publisher</label>

        <input class="form-control" type="text" name="publisher_name" id="pub_name" placeholder="name">
        <textarea name="publisher_address" id="pub_ad" cols="30" rows="4"  placeholder="address"></textarea><br>
        <label for="date">Publish date</label>
        <input class="form-control" type="date" name="publish_date" id="pub_date" placeholder="date of publication">
        <br>
        <label for="ISBN">ISBN CODE</label>
        <input class="form-control" type="number" name="ISBN_code" id="ISBN"><br>
         <!--select start-->       
        <label for="media_status">Status</label>
        <select name="media_status">
            <option value="available">AVAILABLE</option>
            <option value="reserved">RESERVED</option>

        </select><br>
        
        <!--select end-->
        <a id="insert"><button class='btn btn-success w-25 p-3 rounded-circle' type="submit">Insert Product</button></a>
        <a class='home' href="index.php">BACK HOME</a>



    </form>
</body>
</html>