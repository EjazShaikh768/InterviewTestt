<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <div class="row justify-content-center">
            <center><h3>ADD BLOG</h3></center>
            <div class="card p-5 col-sm-6">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group mt-3">
                          <label for="email">EMAIL</label>
                              <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                          <label for="password">PASSWORD</label>
                              <input type="password" name="password" class="form-control">
                        </div>
                        <div style="text-align:right ;">
                        <button class="btn btn-primary mt-4" name="submit" style="width:180px ;margin-right:50px; background-color:grey;">SUBMIT</button>
                        </div>
                     </form>
            </div>
        </div>
     </div> 
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

<?php
       if (isset($_POST['submit'])) {
        $conn = mysqli_connect("localhost","root","","aliya") or die(mysqli_connect_errno());

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);


       $sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' ";
       $result = mysqli_query($conn,$sql) or die();
       if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['email'] = $row['email'];

                header("location:http://localhost/php/test2/admin/index.php");
         }
        }
       }
         




?>