<?php
require 'ustHtml.php';
?>
<div class='row text-center offset-3 col-6 mt-3'>
  <h1 class='alert alert-primary'>New Person Form</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-6">
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
              <a class="btn btn-primary btn-lg" href="container.html" role="button">Add Person
              <i class="bi bi-send"></i>
              </a>
            </div>
</div>
</div>

  
</div>

  <?php
  require 'altHtml.php';
  ?>
