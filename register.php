<?php
$activeTitle="Register";
$activePage='register';
require 'ustHtml.php';
?>
<div class="container">
<div class='row text-center justify-content-center  mt-3'>
  <div class="col-12 col-md-8 col-lg-6">
  <h1 class='alert alert-primary'>Register</h1>
  </div>
</div>
</div>
<?php 
if (isset($_POST['form_name'])) {
  header("location: login.php");
}
?>
<div class="container">
<form method="POST" class="needs-validation"novalidate>
<div class="row justify-content-center">
    
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
   
  <div class="form-floating mb-3">
  <input type="text" name="form_name" class="form-control" id="ınputName" placeholder="Plase Write Name" required>
  <label for="ınputName">Name</label>
  <div class="invalid-feedback">
  Plase Write Name
    </div>
</div>
<div class="form-floating mb-3">
  <input type="email" name="form_email" class="form-control" id="ınputEmail" placeholder="Plase Write Email" required>
  <label for="ınputEmail">Email address</label>
  <div class="invalid-feedback">
  Plase Write Email
    </div>
</div>
<div class="form-floating mb-3">
  <input type="password" name="form_password" class="form-control" id="ınpuPassword" placeholder="Plase Write Password" required>
  <label for="ınputEmail">Password</label>
  <div class="invalid-feedback">
  Plase Write Password
    </div>
</div>
<div class="form-floating mb-3">
  <input type="date" name="form_date" class="form-control" id="ınputDate" placeholder="Plase Write Birthday" required>
  <label for="ınputEmail">Birthday</label>
  <div class="invalid-feedback">
  Plase Write Birthday
    </div>
</div>

<div class="form-floating mb-3">
  <input type="text" name="form_degree" class="form-control" id="ınputDegree" placeholder="Plase Write Degree" required>
  <label for="ınputDegree">Degree</label>
  <div class="invalid-feedback">
  Plase Write Degree
    </div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3">

<div class="form-floating mb-3">
  <input type="text" name="form_unit" class="form-control" id="ınputUnit "placeholder="Plase Write Unit" required>
  <label for="ınputUnit">Unit</label>
  <div class="invalid-feedback">
  Plase Write Unit
    </div>
</div>
<div class="form-floating mb-4">
  <input type="text" name="form_number" class="form-control" id="ınputNumber" placeholder="Plase Write Phone Number" required>
  <label for="ınputNumber">Phone Number</label>
  <div class="invalid-feedback">
  Plase Write Phone Number
    </div>
</div>
<div class="form-floating mb-3">
  <input type="text" name="form_companyname" class="form-control" id="ınputCompanyName" placeholder="Plase Write Company Name" required>
  <label for="ınputEmail">Company Name</label>
  <div class="invalid-feedback">
  Plase Write Company Name
    </div>
</div>
<div class="form-floating mb-3">
<textarea class="form-control" name="from_address" placeholder="Plase Write Address" id="floatingTextarea" required></textarea>
  <label for="ınputAddress">Address</label>
  <div class="invalid-feedback">
  Plase Write Address
    </div>
</div>
<div class="d-grid col-12    mx-auto">
            <!--   <a class="btn btn-primary btn-lg" type="submit"  role="button">Add Person
              <i class="bi bi-send"></i>
              </a> -->
              <button type="submit" class="btn btn-primary">Sıgn Up</button>
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
   $personPassword = $_POST['form_password'];
   $personPassword = password_hash($personPassword, PASSWORD_DEFAULT);   
   $personDate = $_POST['form_date']; 
  $personDegree = $_POST['form_degree'];
  $personUnit = $_POST['form_unit'];
  $personNumber = $_POST['form_number'];
   $personCompanyName = $_POST['form_companyname'];
   $personAddress = $_POST['from_address']; 
 
  //sql sorgusu
  $sql = "INSERT INTO users (name, email,degree,unit,phonenumber,password,companyname,address,date) VALUES (:form_name, :form_email,:form_degree,:form_unit,:form_number,'$personPassword',:form_companyname,:form_address,:form_date)";
  $SORGU = $DB->prepare($sql);
  //post verilerini sql sorgusuna bağla
  $SORGU->bindParam(':form_name',  $personName);  
   $SORGU->bindParam(':form_email', $personEmail);
  /* $SORGU->bindParam(':form_password', $personPassword);   */
  $SORGU->bindParam(':form_date', $personDate);  
  $SORGU->bindParam(':form_degree',  $personDegree);
  $SORGU->bindParam(':form_unit',  $personUnit);
  $SORGU->bindParam(':form_number',  $personNumber);
  $SORGU->bindParam(':form_companyname',  $personCompanyName);
   $SORGU->bindParam(':form_address',  $personAddress); 
 
  $SORGU->execute();
  }
  ?>

  <?php
  require 'bottom.php';
  ?>
