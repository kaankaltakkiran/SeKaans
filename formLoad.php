<?php
require 'ustHtml.php';
require 'loginControl.php';

//Post islemi varsa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $hedefKlasor = "./FORMLAR/";
  $desteklenenTipler = ["pdf", "doc", "docx", "xls", "xlsx"];

  $dosya = $_FILES["dosya"];

  $dosyaIsmi = $dosya["name"];
  $dosyaTipi = strtolower(pathinfo($dosyaIsmi, PATHINFO_EXTENSION));

  if (!in_array($dosyaTipi, $desteklenenTipler)) {
    echo '
    <div class="container">
        <div class="row">
<div class="alert text-center mt-3 alert-warning alert-dismissible fade show" role="alert">
Only PDF, DOC and XLS files can be uploaded.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div>
';
  } else {
    $hedefYol = $hedefKlasor . $dosyaIsmi;
    if (move_uploaded_file($dosya["tmp_name"], $hedefYol)) {
      echo '
      <div class="alert text-center mt-3 alert-success alert-dismissible fade show" role="alert">
      The file has been uploaded successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';
    } else {
      echo '
      <div class="alert text-center mt-3 alert-danger alert-dismissible fade show" role="alert">
      An error occurred while uploading the file!!!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';
    }
  }
}
?>
<div class="container">
        <div class="row">
<p class="text-center mt-3">
  Sık kullanılan formlar sayfasına buradan dosya yüklemesi yapabilirsiniz.
</p>
<div class="text-center">
<form method="POST" action="" enctype="multipart/form-data">
Select File: <input type="file" name="dosya"><br>
  <input type="submit" class="btn btn-primary mt-3" value="Load">
</form>
</div>
</div>
</div>

<?php require 'altHtml.php'; ?>