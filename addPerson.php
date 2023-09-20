<?php
require 'ustHtml.php';
?>
<div class='row text-center offset-3 col-6 mt-3'>
  <h1 class='alert alert-primary'>New Person Form</h1>
</div>
<?php 
if (isset($_POST['form_name'])) {
echo '
<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
Person Added...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
?>
<div class="container">
  <div class="row">
    <div class="col-6">
      <form method="POST">
  <div class="form-floating mb-3">
  <input type="text" name="form_name" class="form-control" id="ınputName" placeholder="Plase Write Name">
  <label for="ınputName">Name</label>
</div>
<div class="form-floating mb-3">
  <input type="email" name="form_email" class="form-control" id="ınputEmail" placeholder="Plase Write Email">
  <label for="ınputEmail">Email address</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="form_degree" class="form-control" id="ınputDegree" placeholder="Plase Write Degree">
  <label for="ınputDegree">Degree</label>
</div>
</div>
<div class="col-6">

<div class="form-floating mb-3">
  <input type="text" name="form_unit" class="form-control" id="ınputUnit "placeholder="Plase Write Unit">
  <label for="ınputUnit">Unit</label>
</div>
<div class="form-floating mb-4">
  <input type="text" name="form_number" class="form-control" id="ınputNumber" placeholder="Plase Write Phone Number">
  <label for="ınputNumber">Phone Number</label>
</div>
<div class="d-grid col-md-12  mx-auto">
            <!--   <a class="btn btn-primary btn-lg" type="submit"  role="button">Add Person
              <i class="bi bi-send"></i>
              </a> -->
              <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
</div>
</div>
</form>
</div>

<?php
//Form da post istediği var mı?
if (isset($_POST['form_name'])) {
  
  require_once('db.php');
  
  $personName = $_POST['form_name'];
  $personEmail = $_POST['form_email'];
  $personDegree = $_POST['form_degree'];
  $personUnit = $_POST['form_unit'];
  $personNumber = $_POST['form_number'];

  //sql sorgusu
  $sql = "INSERT INTO users (name, email,degree,unit,phonenumber) VALUES (:form_name, :form_email,:form_degree,:form_unit,:form_number)";
  $SORGU = $DB->prepare($sql);
  //post verilerini sql sorgusuna bağla
  $SORGU->bindParam(':form_name',  $personName);
  $SORGU->bindParam(':form_email', $personEmail);
  $SORGU->bindParam(':form_degree',  $personDegree);
  $SORGU->bindParam(':form_unit',  $personUnit);
  $SORGU->bindParam(':form_number',  $personNumber);

  $SORGU->execute();
  
  }
  ?>

  <?php
  require 'altHtml.php';
  ?>
