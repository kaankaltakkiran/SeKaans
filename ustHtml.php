<?php
@session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo$activeTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
            <?php if ($_SESSION['isLogin'] == 1) { ?>
              <li class="nav-item">
              <a class="nav-link  <?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a>
              </li>
              <a class="nav-link  <?= ($activePage == 'personList') ? 'active':''; ?>" href="personList.php">Person List</a>
              <li class="nav-item">
                <a class="nav-link  <?= ($activePage == 'foodList') ? 'active':''; ?>" href="foodList.php">Food List</a>
              </li>
              <li class="nav-item">
              <a class="nav-link  <?= ($activePage == 'formList') ? 'active':''; ?>" href="forms.php">Form List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?= ($activePage == 'phoneNumberList') ? 'active':''; ?>" href="phoneNumberList.php">Phone Number List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?= ($activePage == 'requestList') ? 'active':''; ?>" href="requestList.php">Request List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?= ($activePage == 'announcementList') ? 'active':''; ?>" href="announcementList.php">Announcement List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <?php } ?>
              <?php if ($_SESSION['isLogin'] == 0) { ?>
              <li class="nav-item">
              <a class="nav-link  <?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link  <?= ($activePage == 'register') ? 'active':''; ?>" href="register.php">Register</a>
              </li>
              <li class="nav-item">
              <a class="nav-link  <?= ($activePage == 'login') ? 'active':''; ?>" href="login.php">Login</a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!--  Navbar End -->