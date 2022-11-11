<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$db_name= "be17_cr4_jimmy_biglibrary";

$connect = mysqli_connect($localhost, $user, $pass, $db_name);

//if (!$conn){
    //echo "There is an error";
//}
try {
    $connect = mysqli_connect($localhost, $user, $pass, $db_name);
    //echo "connected";
} catch (Exception $th) {
    echo "failed to connect: " . mysqli_connect_error();
};
function var_dump_pretty($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}