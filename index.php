<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeKaans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!--  Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Offcanvas navbar large">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SeKaans</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark bg-primary" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">SeKaans</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="personList.php">Person list</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Food List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Form List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Phone Number List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!--  Navbar End -->
    <!--Welcome Message Start-->
      <div class="container">
        <div class="row">
          <h1 class="text-center text-danger mt-1">Welcome</h1>
          <h3 class="text-center text-muted">Name</h3>
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
              <a href="#" class="btn btn-danger mt-1">Food Management</a>
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

      <!--  Footer Start -->
      <div class="container-fluid">
        <footer class="py-3 my-4 bg-secondary-subtle">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 active">Home</a></li>
            <li class="nav-item"><a href="personList.php" class="nav-link px-2">Person List</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Food List</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Form List</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2">Phone Number List</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 SeKaans Company</p>
        </footer>
      </div>
      <!--  Footer End -->
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>