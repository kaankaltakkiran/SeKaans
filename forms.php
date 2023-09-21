<?php
$activeTitle="Form List";
$activePage='formList';
require 'ustHtml.php';

$hedefKlasor = "./FORMLAR/";

// Klasördeki dosyaları al
$dosyalar = scandir($hedefKlasor);

// "." ve ".." girdilerini kaldır
$dosyalar = array_diff($dosyalar, array(".", ".."));

// Dosya listesini alfabetik sıraya göre sırala
sort($dosyalar);

if (count($dosyalar) === 0) {
  echo '
  <div class="alert text-center alert-warning mt-3 alert-dismissible fade show" role="alert">
  No files have been uploaded yet.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  ';
} else {
  echo '
  <div class="container">
  <div class="alert text-center alert-success mt-3" role="alert">
  Uploaded Files
  </div>
  </div>
  ';
  echo "<ul>";
  foreach ($dosyalar as $dosya) {
    echo "<li><a href=\"$hedefKlasor$dosya\" download>$dosya</a></li>";
  }
  echo "</ul>";
}
?>


<?php require 'altHtml.php'; ?>