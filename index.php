<?php
$activeTitle="SeKaans";
$activePage='index';
require 'ustHtml.php';
require 'loginControl.php';
//Session başlatma
@session_start();
?>
    <!--Welcome Message Start-->
      <div class="container">
        <div class="row">
          <div class="col-6">
          <h1 class="text-center text-danger mt-1">Welcome</h1>
          <h3 class="text-center text-muted">Name: <?php echo $_SESSION['adsoyad']; ?></h3>
          <p class="text-center text-danger"><?php
           date_default_timezone_set('Europe/Istanbul'); // Türkiye saat dilimine göre tarih ve saat ayarla
          $date_and_time = date("Y-m-d H:i:s"); // Yıl-Ay-Gün Saat:Dakika:Saniye formatında tarih ve saat
         echo "Date And Time: " . $date_and_time;
?></p>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What Is This Page?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Welcome</strong> SeKaans Project, It is a page that company employees can use.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      SeKaans Company  About
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="https://github.com/kaankaltakkiran/SeKaans" target="_blank" rel="noopener noreferrer" class="mx-2"><img width="35" height="35" src="https://img.icons8.com/plasticine/50/github.png" alt="github"/></a>

      <a href="https://www.linkedin.com/in/durdu-kaan-kaltakk%C4%B1ran-aba776223/?originalSubdomain=tr" target="_blank" rel="noopener noreferrer" class="mx-2"><img width="35" height="35" src="https://img.icons8.com/fluency/50/linkedin.png" alt="linkedin"/></a>

          <a href="https://github.com/kaankaltakkiran" target="_blank" rel="noopener noreferrer" class="mx-2"><img width="35" height="35" src="https://img.icons8.com/ios-filled/50/twitterx--v1.png" alt="twitterx--v1"/></a>


          <a href="https://github.com/kaankaltakkiran" target="_blank" rel="noopener noreferrer" class="mx-2"><img width="35" height="35" src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="instagram-new--v1"/></a>

      </div>
    </div>
  </div>
</div>
</div>
<div class="col-6">
<?php
      require 'map.php';
    ?>
</div>
        </div>
      </div>
    
        <!--Welcome Message End-->
    <!--  Section Start -->
    <?php if($_SESSION['rol']==2){ ?>
      <div class="container-fluid my-3 ">
        <div class="row g-4">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 " style="width: 18rem;">
              <img src="./public/img/person.png" class="card-img-top" alt="Person img">
              <div class="card-body">
                <h5 class="card-title">Person List</h5>
                <p class="card-text">Only Admin Access</p>
                <a href="personManagement.php" class="btn btn-danger mt-3">Person Management</a>
              </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card h-100 " style="width: 18rem;">
            <img src="./public/img/food.jpg" class="card-img-top" alt="Food img">
            <div class="card-body">
              <h5 class="card-title">Food List</h5>
              <p class="card-text">Only Admin Access</p>
              <a href="foodManagement.php" class="btn btn-danger mt-1">Food Management</a>
            </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 " style="width: 18rem;">
          <img src="./public/img/form.jpg" class="card-img-top" alt="Form img">
          <div class="card-body">
            <h5 class="card-title">Form List</h5>
            <p class="card-text">Only Admin Access</p>
            <a href="formLoad.php" class="btn btn-danger" style="margin-top: 35px;">Form Management</a>
          </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 " style="width: 18rem;">
        <img src="./public/img/Req Management.jpg" class="card-img-top " alt="Request img">
        <div class="card-body">
          <h5 class="card-title">Request List</h5>
          <p class="card-text">Only Admin Access</p>
          <a href="requestManagement.php" class="btn btn-danger mt-5">Request Management</a>
        </div>
      </div>
  </div>
      
          </div>
      </div>
      <!--  Section End -->
      <?php } ?>
      <?php if ($_SESSION['rol'] == 1) { ?>
 <!--  Footer Start -->
 <div class="container-fluid">
        <footer class="py-3 my-4 bg-secondary-subtle fixed-bottom ">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 ">Home</a></li>
            <li class="nav-item"><a href="personList.php" class="nav-link px-2">Person List</a></li>
            <li class="nav-item"><a href="foodList.php" class="nav-link px-2">Food List</a></li>
            <li class="nav-item"><a href="forms.php" class="nav-link px-2">Form List</a></li>
            <li class="nav-item"><a href="phoneNumberList.php" class="nav-link px-2">Phone Number List</a></li>
            <li class="nav-item"><a href="phoneNumberList.php" class="nav-link px-2">Request List</a></li>
            <li class="nav-item"><a href="announcementList.php" class="nav-link px-2">Announcement List</a></li>
            <li class="nav-item"><a href="rss.php" class="nav-link px-2">News</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 SeKaans Company</p>
        </footer>
      </div>
      <!--  Footer End -->
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
</html>
        <?php } ?>
        <?php if ($_SESSION['rol'] == 2) { ?>
 <!--  Footer Start -->
 <div class="container-fluid">
        <footer class="py-3 my-4 bg-secondary-subtle">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 ">Home</a></li>
            <li class="nav-item"><a href="personList.php" class="nav-link px-2">Person List</a></li>
            <li class="nav-item"><a href="foodList.php" class="nav-link px-2">Food List</a></li>
            <li class="nav-item"><a href="forms.php" class="nav-link px-2">Form List</a></li>
            <li class="nav-item"><a href="phoneNumberList.php" class="nav-link px-2">Phone Number List</a></li>
            <li class="nav-item"><a href="phoneNumberList.php" class="nav-link px-2">Request List</a></li>
            <li class="nav-item"><a href="announcementList.php" class="nav-link px-2">Announcement List</a></li>
            <li class="nav-item"><a href="rss.php" class="nav-link px-2">News</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 SeKaans Company</p>
        </footer>
      </div>
      <!--  Footer End -->
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
</html>
          <?php } ?>

