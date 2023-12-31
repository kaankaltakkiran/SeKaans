
<?php
$activeTitle="Person List";
$activePage='personList';
require 'ustHtml.php';
require 'loginControl.php';

?>

    <div class="container">
      <div class="row">
      <div class='row justify-content-center text-center'>
        <div class="col-sm-4 col-md-6 col-lg-8">
  <h1 class='alert alert-primary mt-2'>Person List</h1>
  </div>
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
    </tr>
  </thead>
  <tbody>
  </div>

    <?php

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM users LIMIT 20");
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
   </tr> 
  ";
    }
    ?>

  </tbody>
</table>
</div>
  <?php
  require 'altHtml.php';
  ?>
