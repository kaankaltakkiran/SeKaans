<?php
$activeTitle="Request List Management";
$activePage='requestList';
require 'ustHtml.php';
require_once 'db.php';
require 'loginControl.php';
require 'authorizationControl.php';

if (isset($_POST['talepid_form'])) {
  // Güncelleme yapan sorgu
  $sql = "UPDATE requests 
          SET requestnot = :islemnotu_form, 
          status = :talepdurum_form 
          WHERE requestid = :talepid_form";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':islemnotu_form',  $_POST['islemnotu_form']);
  $SORGU->bindParam(':talepdurum_form', $_POST['talepdurum_form']);
  $SORGU->bindParam(':talepid_form',    $_POST['talepid_form']);
  $SORGU->execute();
  echo '
  <div class="container">
        <div class="row">
      <div class="alert text-center mt-3 alert-success alert-dismissible fade show" role="alert">
      Request Updated...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
      </div>
    ';
}

?>
<div class="container">
<div class='row text-center'>
  <h1 class='alert alert-primary mt-3'>Request Management</h1>
</div>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Requests Date<br>Priority<br>Status</th>
      <th>Requesting<br>Degree<br>Unit<br>Phone Number</th>
      <th>Request</th>
      <th>Process</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $SORGU = $DB->prepare("
                SELECT 
                requests.*, 
                users.name, 
                users.degree, 
                users.unit, 
                users.phonenumber, 
                units.unitname
                FROM 
                units, requests, users
                WHERE 
                requests.requesting = users.userid AND
                requests.targetunit = units.unitid
    ");
    $SORGU->execute();
    $talepler = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($talepler as $talep) {
      $Oncelik = "";
      if ($talep['priority'] == 0) $Oncelik = "Normal";
      if ($talep['priority'] == 1) $Oncelik = "İmmediate";
      if ($talep['priority'] == 2) $Oncelik = "Critical";

      $Durum = "";
      if ($talep['status'] == 0) $Durum = "New";
      if ($talep['status'] == 1) $Durum = "In Process";
      if ($talep['status'] == 2) $Durum = "Finalize";
      $TALEBI = nl2br($talep['request']);

      echo "
    <tr>
      <th>{$talep['requestid']}</th>
      <td>{$talep['requestsdate']}<br>
          {$Oncelik}<br>
          {$Durum}<br>
      </td>
      <td>{$talep['name']}<br>
          {$talep['degree']}<br>
          {$talep['unit']}<br>
          {$talep['phonenumber']}<br>
          </td> 
      <td>{$TALEBI}<br><b style='color:darkred;'>{$talep['requestnot']}</b></td>
      <td>";
    ?>
      <form method="POST">
        <input type="hidden" name="talepid_form" value="<?php echo $talep['requestid']; ?>">
        <input type="text" size="23px" name="islemnotu_form" placeholder="Process Note...">
        <br>
        <select name="talepdurum_form" class="mt-2">
          <option value='0'>New</option>
          <option value='1'>In Process</option>
          <option value='2'>Finalize</option>
        </select>
        <input type="submit" class="btn btn-primary btn-sm" value="Save Changes...">
      </form>
    <?php
      echo "      
      </td>
   </tr> 
  ";
    }

    ?>

  </tbody>
</table>

</div>


<?php require 'bottom.php'; ?>