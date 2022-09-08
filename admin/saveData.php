<?php

$conn = mysqli_connect("localhost","root","","aliya") or die(mysqli_connect_errno());
 if (isset($_FILES['fileToUpload'])) {
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = (explode('.', $file_name));
    $new_name = time()."_".basename($file_name);
        $target = "upload/".$new_name;

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $target);
        }else{
            print_r($errors);
            die();
        }
    }
$name = mysqli_real_escape_string($conn,$_POST['name']);
$description = mysqli_real_escape_string($conn,$_POST['desc']);
$types = mysqli_real_escape_string($conn,$_POST['types']);
$price = mysqli_real_escape_string($conn,$_POST['price']);


$sql = "INSERT INTO test3 (full_name,images,descriptions,types,price) VALUES('{$name}','{$new_name}','{$description}','{$types}','{$price}')";

$result = mysqli_query($conn,$sql) or die();

header("location:http://localhost/php/test2/admin/index.php");


?>