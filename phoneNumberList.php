<?php
$activeTitle="Phone Number List";
$activePage='phoneNumberList';
require 'ustHtml.php'; ?>
<div class="container">
<div class='row text-center'>
  <h1 class='alert alert-primary mt-3'>Phone Number List</h1>
</div>
<form method="GET">
  <p class="text-center">
  Enter Name, Unit Or Phone Number: <input type="text" name="name_form">
    <input type="submit" value="Search" class="btn btn-primary">
  </p>

</form>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Degree</th>
      <th>Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <?php

    require_once('db.php');

    if (isset($_GET['name_form'])) {
      // Formdan gelen kişileri göster...
      $ArananAd = $_GET['name_form'];
      $ArananAd = "%{$ArananAd}%";
    } else {
      $ArananAd = "";
    }

    $sql = "SELECT * FROM users 
            WHERE 
              name LIKE :name_form OR
              email   LIKE :name_form OR
              degree   LIKE :name_form OR
              phonenumber LIKE :name_form
              LIMIT 50";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':name_form', $ArananAd);

    $SORGU->execute();

    $users = $SORGU->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
      echo "
    <tr>
      <td>{$user['name']}</td>
      <td>{$user['email']}</td>
      <td>{$user['degree']}</td>
      <td>{$user['phonenumber']}</td>
   </tr> 
  ";
    }

    ?>

  </tbody>
</table>
</div>

<?php require 'altHtml.php'; ?>