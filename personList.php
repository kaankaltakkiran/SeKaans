
<?php
$activeTitle="Person List";
$activePage='personList';
require 'ustHtml.php';

?>

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
  <?php
  require 'altHtml.php';
  ?>
