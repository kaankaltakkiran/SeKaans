<?php
$activeTitle="Person List";
$activePage='personList';
require 'ustHtml.php';
require 'loginControl.php';

require_once('db.php');

if (isset($_POST['form_name'])) {
  ///////////////////////////////////////
  /////////////////////////////////////// GÜNCELLEME İŞLEMİ
  ///////////////////////////////////////
  // echo "<pre>"; print_r($_POST);
  // echo "<pre>"; print_r($_GET);
//Update bilgileri alıp kaydetme işlemi
  $personName = $_POST['form_name'];
  $personEmail = $_POST['form_email'];
  $personDegree = $_POST['form_degree'];
  $personUnit = $_POST['form_unit'];
  $personNumber = $_POST['form_number'];
  $id= $_GET['id'];

  $sql = "UPDATE users SET name = :form_name, email = :form_email, degree=:form_degree, unit=:form_unit, phonenumber=:form_number WHERE userid = :id";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':form_name',  $personName);
  $SORGU->bindParam(':form_email', $personEmail);
  $SORGU->bindParam(':form_degree',  $personDegree);
  $SORGU->bindParam(':form_unit',  $personUnit);
  $SORGU->bindParam(':form_number',  $personNumber);
  $SORGU->bindParam(':id',$id);

  // die(date("H:i:s"));
  $SORGU->execute();  
}

$id= $_GET['id'];
//Seçilen idye göre bilgileri getirme
$sql = "SELECT * FROM users WHERE userid = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();

$users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
$user  = $users[0];

// echo "<pre>"; print_r($kullanicilar);
?>

    <div class='row text-center'>
      <h1 class='alert alert-primary mt-3'>Update Record</h1>
    </div>
    <div class="container">
  <div class="row">
    <?php
  if (isset($_POST['form_name'])) {
echo '
<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
Person Updated...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
?>
    <div class="col-6">
      <form method="POST">
  <div class="form-floating mb-3">
  <input type="text" name="form_name" class="form-control" id="ınputName" placeholder="Plase Write Name" value='<?php echo $user['name'];  ?>'>
  <label for="ınputName">Name</label>
</div>
<div class="form-floating mb-3">
  <input type="email" name="form_email" class="form-control" id="ınputEmail" placeholder="Plase Write Email" value='<?php echo $user['email']?>'>
  <label for="ınputEmail">Email address</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="form_degree" class="form-control" id="ınputDegree" placeholder="Plase Write Degree" value='<?php echo $user['degree']?>'>
  <label for="ınputDegree">Degree</label>
</div>
</div>
<div class="col-6">
<div class="form-floating mb-3">
  <input type="text" name="form_unit" class="form-control" id="ınputUnit "placeholder="Plase Write Unit" value='<?php echo $user['unit']?>'>
  <label for="ınputUnit">Unit</label>
</div>
<div class="form-floating mb-4">
  <input type="text" name="form_number" class="form-control" id="ınputNumber" placeholder="Plase Write Phone Number" value='<?php echo $user['phonenumber']?>'>
  <label for="ınputNumber">Phone Number</label>
</div>
<div class="d-grid col-md-12  mx-auto">
            <!--   <a class="btn btn-primary btn-lg" type="submit"  role="button">Add Person
              <i class="bi bi-send"></i>
              </a> -->
              <button type="submit" class="btn btn-success">Update Person</button>
              <a href='personList.php' class='btn btn-warning mt-1'>Back To Person List</a>
            </div>
</div>
</div>
</form>
</div>
 

 
  
<?php require 'altHtml.php'; ?>