<?php
$activeTitle="Person List";
$activePage='personList';
require 'ustHtml.php';
require 'loginControl.php';

//Sesion konusu gelince kendi idsini silememeli.

require_once('db.php');
//silenecek id yi al
$id= $_GET['id'];

$sql = "DELETE FROM users WHERE userid = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo '
<div class="alert text-center mt-3 alert-success alert-dismissible fade show" role="alert">
Person Added...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
?>

<div class='row text-center'>
  <p><a href='personList.php' class="btn btn-primary btn-sm"> Geri Dön </a></p>
</div>

<?php require 'altHtml.php'; ?>