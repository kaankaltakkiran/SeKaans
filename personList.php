
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="personList.php">Person list</a>
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

    <div class="container">
      <div class="row">
      <div class='row text-center'>
  <h1 class='alert alert-primary mt-2'>Personel Yönetimi</h1>
</div>

<div class='row text-end'>
  <p><a href='insert.php' class="btn btn-primary btn-sm "> Yeni Personel Ekle </a></p>
</div>
  
   <!-- tablo ile personel listeleme -->
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>UserId</th>
      <th>Name</th>
      <th>Email</th>
      <th>Degree</th>
      <th>Unit</th>
      <th>PhoneNumber</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  </div>
    </div>



    <?php

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM users");
    $SORGU->execute();
    $users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($users as $user) {
      echo "
    <tr>
      <th>{$user['userid']}</th>
      <td>{$user['name']}</td>
      <td>{$user['email']}</td>
      <td>{$user['degree']}</td>
      <td>{$user['unit']}</td>
      <td>{$user['phonenumber']}</td>
      <td><a href='update.php?id={$user['id']}' class='btn btn-success btn-sm'>Update</a></td>
      <td><a href='delete.php?id={$user['id']}' class='btn btn-danger btn-sm'>Delete</a></td>
   </tr> 
  ";
    }
    ?>

  </tbody>
</table>
  <!--  Footer Start -->
  <div class="container-fluid">
        <footer class="py-3 fixed-bottom mb-2 bg-secondary-subtle">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 ">Home</a></li>
            <li class="nav-item"><a href="personList.php" class="nav-link px-2 active">Person List</a></li>
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
