<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    #banner{
        height: 100%;
        background-image: url("photo-1636953056323-9c09fdd74fa6.jpg");
    }
    .navbar-nav li a{
        color: white;
    }
    

    .search-container{
    background: #fff;
    height: 30px;
    border-radius: 30px;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.8s;
    /*box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    inset -7px -7px 10px 0px rgba(0,0,0,.1),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
   text-shadow:  0px 0px 6px rgba(255,255,255,.3),
              -4px -4px 6px rgba(116, 125, 136, .2);
  text-shadow: 2px 2px 3px rgba(255,255,255,0.5);*/
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}

.search-container:hover > .search-input{
    width: 400px;
}

.search-container .search-input{
    background: transparent;
    border: none;
    outline:none;
    width: 0px;
    font-weight: 500;
    font-size: 16px;
    transition: 0.8s;

}

.search-container .search-btn .fas{
    color: #5cbdbb;
}

@keyframes hoverShake {
  0% {transform: skew(0deg,0deg);}
  25% {transform: skew(5deg, 5deg);}
  75% {transform: skew(-5deg, -5deg);}
  100% {transform: skew(0deg,0deg);}
}

.search-container:hover{
  animation: hoverShake 0.15s linear 3;
}
</style>
</head>
  <body>
    <div class="container-fluid" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
                                  <li class="nav-item">
                                    <a class="nav-link  active " aria-current="page" href="#" style="color: rgb(132, 119, 95);">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                  </li>
                                </ul>
                                <div class="text-center " style="color:white; margin-right: 20rem;">
                                    KONTRAKO
                                </div>
                                <span class="navbar-text"  style="color:white">
                                  <a href="" class="btn btn-primary"> Get Started</a>
                                </span>
                              </div>
                            </div>
                          </nav>
                    </div>
                    <div class="col-sm-7 mt-5">
                        <h1  style="color:white; font-size: 3.5rem;">
                            Easy Way to find the property according to Your choice
                        </h1>
                        <h5 class="mt-5" style="color: rgb(170, 156, 130);">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                             voluptatibus nam exercitationem iste ullam esse velit, ad maioresofficia.</h5>
                    </div>
                    <div class="card col-sm-9 mt-5">
                        <div class="row">
                            <div class="col-sm-3 ">
                                <div class="btn-group">
                                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                      location
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                      <li><button class="dropdown-item" type="button">Action</button></li>
                                      <li><button class="dropdown-item" type="button">Another action</button></li>
                                      <li><button class="dropdown-item" type="button">Something else here</button></li>
                                    </ul>
                                  </div>

                                  <h6>Jakarta , Indonesia</h6>
                            </div>
                            <div class="col-sm-3">
                                <div class="btn-group">
                                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                      Property Type
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                      <li><button class="dropdown-item" type="button">Action</button></li>
                                      <li><button class="dropdown-item" type="button">Another action</button></li>
                                      <li><button class="dropdown-item" type="button">Something else here</button></li>
                                    </ul>
                                  </div>

                                  <h6>Minimalist House</h6>
                            </div>
                            <div class="col-sm-4">
                                <div class="btn-group">
                                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                      Price Range
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                      <li><button class="dropdown-item" type="button">Action</button></li>
                                      <li><button class="dropdown-item" type="button">Another action</button></li>
                                      <li><button class="dropdown-item" type="button">Something else here</button></li>
                                    </ul>
                                  </div>

                                  <h6>Rp.2,000,000 - Rp. 5,000,000</h6>
                            </div>
                            <div class="col-sm-1 mt-3 ">
       <form action="<?php $_SERVER['PHP_SELF']; ?>" class="search-container" method="get">
       <input type="text" name="search" placeholder="Search..." class="search-input">
        <button name="searchBTn" class="search-btn btn-primary">
                <i class="fas fa-search"></i>      
</button>
      </form>
    </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3 mt-4 pb-5" style="color:rgb(170, 156, 130) ;">
                        <h5> <a href=""><i class="fa-sharp fa-solid fa-circle-check"></i></a> 100% best quality Guarantee</h5>
                    </div>
                    <div class="col-sm-3 mt-4" style="color:rgb(170, 156, 130) ;">
                        <h5> <a href=""><i class="fa-sharp fa-solid fa-circle-check"></i></a> More affordable price</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
<div class="row">
                     
<?php
  $conn0 = mysqli_connect("localhost","root","","aliya") or die(mysqli_connect_errno());
if (isset($_GET['searchBTn'])) {
  $search_trm = mysqli_real_escape_string($conn0 , $_GET['search']);
  
}
  $sql0 = "SELECT * FROM test3  WHERE full_name   LIKE '%{$search_trm}%' OR descriptions   LIKE '%{$search_trm}%'  OR price   LIKE '%{$search_trm}%' ";
  $result0 = mysqli_query($conn0 , $sql0)or die();
  if (mysqli_num_rows($result0) > 0) {
      while ($rows = mysqli_fetch_assoc($result0)) {

                                  ?>
                                    <div class="col-sm-3 mt-3">
                                        <div class="card" style="width:100%;">
                                            <img src="admin/upload/<?php echo $rows['images']; ?>" class="card-img-top" alt="..." style="width:100%;height:200px;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $rows['full_name']; ?></h5>
                                              <p class="card-text"><?php echo $rows['descriptions']; ?></p>
                                              <p>Rp. <?php echo $rows['price']; ?></p>
                                            </div>
                                          </div>
                                    </div>
                                    <?php
                                    }
                                  }
                                  
                                  ?>
                                </div>
</div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-5 text-center">
                            <h2>Our Property</h2>
                            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h5>
                        </div>
                    </div>
                </div>
                <div class="container my-5">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Populer</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="modern-tab" data-bs-toggle="tab" data-bs-target="#modern-tab-pane" type="button" role="tab" aria-controls="modern-tab-pane" aria-selected="false" >Modern</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="classical-tab" data-bs-toggle="tab" data-bs-target="#classical-tab-pane" type="button" role="tab" aria-controls="classical-tab-pane" aria-selected="false" >Classical</button>
                            </li>
                          </ul>
                          <div class="container tab-content justify-content-center" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="row">
                                  <?php
                                  $conn = mysqli_connect("localhost","root","","aliya") or die(mysqli_connect_errno());
                                  $sql = "SELECT * FROM test3 WHERE types = '1' ";
                                  $result = mysqli_query($conn,$sql) or die();
                                  if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                  ?>
                                    <div class="col-sm-3 mt-3">
                                        <div class="card" style="width:100%;">
                                            <img src="admin/upload/<?php echo $row['images']; ?>" class="card-img-top" alt="..." style="width:100%;height:200px;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $row['full_name']; ?></h5>
                                              <p class="card-text"><?php echo $row['descriptions']; ?></p>
                                              <p>Rp. <?php echo $row['price']; ?></p>
                                            </div>
                                          </div>
                                    </div>
                                    <?php
                                    }
                                  }
                                  
                                  ?>
                                </div>
                                  
                            </div>
                            <div class="tab-pane fade" id="modern-tab-pane" role="tabpanel" aria-labelledby="modern-tab" tabindex="0">
                            <div class="row">
                            <?php
                                  $conn1= mysqli_connect("localhost","root","","aliya") or die(mysqli_connect_errno());
                                  $sql1 = "SELECT * FROM test3 WHERE types = '2' ";
                                  $result1 = mysqli_query($conn1,$sql1) or die();
                                  if (mysqli_num_rows($result1) > 0) {
                                    while($row1 = mysqli_fetch_assoc($result1)){
                                  ?>
                                    <div class="col-sm-3 mt-3">
                                        <div class="card" style="width:100%;">
                                            <img src="admin/upload/<?php echo $row1['images']; ?>" class="card-img-top" alt="..." style="width:100%;height:200px;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $row1['full_name']; ?></h5>
                                              <p class="card-text"><?php echo $row1['descriptions']; ?></p>
                                              <p>Rp. <?php echo $row1['price']; ?></p>
                                            </div>
                                          </div>
                                    </div>
                                    <?php
                                    }
                                  }
                                  ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="classical-tab-pane" role="tabpanel" aria-labelledby="classical-tab" tabindex="0">
                            <div class="row">
                            <?php
                                  $conn3= mysqli_connect("localhost","root","","aliya") or die(mysqli_connect_errno());
                                  $sql3 = "SELECT * FROM test3 WHERE types = '2' ";
                                  $result3 = mysqli_query($conn1,$sql1) or die();
                                  if (mysqli_num_rows($result1) > 0) {
                                    while($row3 = mysqli_fetch_assoc($result3)){
                                  ?>
                                    <div class="col-sm-3 mt-3">
                                        <div class="card" style="width:100%;">
                                            <img src="admin/upload/<?php echo $row3['images']; ?>" class="card-img-top" alt="..." style="width:100%;height:200px;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $row3['full_name']; ?></h5>
                                              <p class="card-text"><?php echo $row3['descriptions']; ?></p>
                                              <p>Rp. <?php echo $row3['price']; ?></p>
                                            </div>
                                          </div>
                                    </div>
                                    <?php
                                    }
                                  }
                                  ?>
                                </div>
                            </div>
                          </div>
                          
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
