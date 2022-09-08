<?php

session_start();
if (isset($_SESSION['fullname'])) {

}else{
  header("location:http://localhost/php/test2/admin/signin.php");
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <div class="row justify-content-center">
           <div class="col-sm-12">
           
           </div>
            <div class="card p-5 col-sm-6">
              <div class="row">
                <div class="col-sm-7">
                <h3>ADD BLOG</h3>
                </div>
                <div class="col-sm-5">
                 <h3><?php echo $_SESSION['fullname']; ?> <a href="logout.php" class="btn "><i class="fa-solid fa-lock"></i></a></h3> 
                </div>
              </div>
            <form action="saveData.php" method="post"  enctype="multipart/form-data"  >
                        <div class="form-group mt-3">
                          <label for="fullname">PRODUCT NAME</label>
                              <input type="text" name="name" class="form-control">
                        </div>
      
                        <div class="form-group mt-3">
                          <input type="file" name="fileToUpload" >
                        </div>

                        
                        <div class="form-group mt-4" >
                    <label for="disabledSelect" class="form-label">Disabled select menu</label>
                    <select id="disabledSelect" name="types" class="form-select">
                        <option disbaled> SELECT THE TYPE</option>
                        <option value="1"> Populer</option>
                        <option value="2"> MODERN</option>
                        <option value="3"> CLASSICAL</option>
                    </select>
                </div>
                        
                     
                   
                        <div class="mb-3 mt-3">
                          <label for="exampleFormControlTextarea1" class="form-label">PRODUCT DESCRIPTION </label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-3">
                          <label for="fullname">PRODUCT NAME</label>
                              <input type="text" name="price" class="form-control">
                        </div>
      
                    <div style="text-align:right ;">
                      <button class="btn btn-primary mt-4" name="submit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                    </div>
                     </form>
               
            </div>
        </div>
     </div> 
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>