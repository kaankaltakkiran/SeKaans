<?php
$activeTitle="Request List";
$activePage='requestList';
require 'ustHtml.php';
require_once('db.php');
require 'loginControl.php';
?>

<div class='row text-center offset-3 col-6 mt-3'>
  <h1 class='alert alert-primary'>Create Request</h1>
</div>

<?php
//Session öğrenince kim giriş yaptıysa otomatik onun idsini al
if (isset($_POST['talep_form'])) {

//Talep kaydetme işlemi
  $sql = "INSERT INTO requests 
          SET request = :talep_form,
          requestsdate = :taleptarihi,
         /*  requesting = :talepeden, */
          targetunit = :hedefbirim_form,
          priority = :oncelik_form,
          status = 0
          ";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':talep_form',  $_POST['talep_form']);
  $SORGU->bindParam(':taleptarihi', date("Y-m-d H:i:s"));
/*   $SORGU->bindParam(':talepeden', $_SESSION['id']); */
  $SORGU->bindParam(':hedefbirim_form', $_POST['hedefbirim_form']);
  $SORGU->bindParam(':oncelik_form', $_POST['oncelik_form']);

  $SORGU->execute();
  echo '
  <div class="container">
        <div class="row">
      <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
       Talebiniz kaydedildi...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
      </div>
    ';
}
?>



<?php

$SORGU = $DB->prepare("SELECT * FROM units ORDER BY unitname");
$SORGU->execute();
$birimler = $SORGU->fetchAll(PDO::FETCH_ASSOC);

$optionBirimler = "";
foreach ($birimler as $birim) {
  $optionBirimler = $optionBirimler . "<option value='{$birim['unitid']}'>{$birim['unitname']}</option>";
}

?>

<div class="container">
        <div class="row text-center">
<form method="POST">
  <p>Please write your request clearly.<br>
  Our staff will contact you as soon as possible.</p>
  <textarea name='talep_form' style="width: 500px; height:100px;"></textarea>

  <p><br>Target Unit:
    <select name="hedefbirim_form">
      <?php echo $optionBirimler; ?>
    </select>
  </p>
  <p>Priority:
    <select name="oncelik_form">
      <option value='0'>Normal</option>
      <option value='1'>İmmediate</option>
      <option value='2'>Critical</option>
    </select>
  </p>
  <p></p><input type="submit" class="btn btn-primary" value="Send Request"></p>
</form>

</div>
</div>
<?php require 'altHtml.php'; ?>