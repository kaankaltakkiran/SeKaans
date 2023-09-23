<?php
$activeTitle="SeKaans";
$activePage='index';
require 'ustHtml.php';
//Session başlatma
@session_start();
?>
    <!--Welcome Message Start-->
      <div class="container">
        <div class="row">
          <h1 class="text-center text-danger mt-1">Welcome</h1>
          <h3 class="text-center text-muted">Name: <?php echo $_SESSION['adsoyad']; ?></h3>
          <p class="text-center text-danger"><?php
          $date_and_time = date("Y-m-d H:i:s"); // Yıl-Ay-Gün Saat:Dakika:Saniye formatında tarih ve saat
         echo "Date And Time: " . $date_and_time;
?></p>
        </div>
      </div>
        <!--Welcome Message End-->
    <!--  Section Start -->
      <div class="container-fluid my-3 ">
        <div class="row g-4">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 " style="width: 18rem;">
              <img src="./public/img/person.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Person List</h5>
                <p class="card-text">Only Admin Access</p>
                <a href="#" class="btn btn-danger mt-3">Person Management</a>
              </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card h-100 " style="width: 18rem;">
            <img src="./public/img/food.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Food List</h5>
              <p class="card-text">Only Admin Access</p>
              <a href="foodManagement.php" class="btn btn-danger mt-1">Food Management</a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 " style="width: 18rem;">
          <img src="./public/img/form.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Form List</h5>
            <p class="card-text">Only Admin Access</p>
            <a href="#" class="btn btn-danger" style="margin-top: 35px;">Form Management</a>
          </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 " style="width: 18rem;">
        <img src="./public/img/phone.jpeg" class="card-img-top " alt="...">
        <div class="card-body">
          <h5 class="card-title">Phone Number List</h5>
          <p class="card-text">Only Admin Access</p>
          <a href="#" class="btn btn-danger mt-1">Phone Number Management</a>
        </div>
      </div>
  </div>
      
          </div>
      </div>
      <!--  Section End -->

<?php
require 'altHtml.php';
?>


