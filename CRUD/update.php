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

</head>
<body>
<form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
               <table class="table">
                   <tr>
                       <th>Title</th>
                       <td><input class="form-control" type="text"  name="title" placeholder ="Product Name" value="<?php echo $title ?>"  /></td>
                   </tr> 
                   <tr>
                       <th>Image</th>
                       <td><input class="form-control" type="text" name= "image" value="<?php echo $image ?>" /></td>
                   </tr>
                   <tr>
                       <th>Description</th>
                       <td><input class="form-control" type="text"  name="short_description" placeholder ="Description" value="<?php echo $description ?>"  /></td>
                   </tr>
                   <tr>
                       <th>ISBN code</th>
                       <td><input class="form-control" type="number"  name="ISBN_code" placeholder ="ISBN code" value="<?php echo $ISBN ?>"  /></td>
                   </tr>                   <tr>
                       <th>Type</th>
                       <td><input class="form-control" type="text"  name="type" placeholder ="type" value="<?php echo $type ?>"  /></td>
                   </tr>                   <tr>
                       <th>Author</th>
                       <td><input class="form-control" type="text"  name="author_first_name" placeholder ="first name" value="<?php echo $authorFirstName ?>"  /></td>
                       <td><input class="form-control" type="text"  name="author_last_name" placeholder ="last name" value="<?php echo $authorLastName ?>"  /></td>
                   </tr>                   <tr>
                       <th>Publisher</th>
                       <td><input class="form-control" type="text"  name="publisher_name" placeholder ="name" value="<?php echo $publisherName ?>"  /></td>
                       <td><input class="form-control" type="text"  name="publisher_address" placeholder ="address" value="<?php echo $publisherAddress ?>"  /></td>
                       <td><input class="form-control" type="date"  name="publish_date" placeholder ="publish date" value="<?php echo $publishDate ?>"  /></td>
                   </tr>                   <tr>
                       <th>Status</th>
                       <td><input class="box"   name="media_status" placeholder ="status" value="<?php echo $status ?>"/>
                       <datalist>
                    <option value="available"></option>
                    <option value="reserved"></option>
                </datalist></td>
                   </tr>
                  

















                   <tr>
                       <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />

                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                       <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                       <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                   </tr>
               </table>
           </form>
</body>
</html>