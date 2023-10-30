<?php
$activeTitle="Food List Management";
$activePage='foodList';
require 'ustHtml.php';
require_once 'db.php';
require 'loginControl.php';
require 'authorizationControl.php';
?>
<div class="container">
  <div class="row">


<div class='row text-center'>
  <h1 class='alert alert-primary mt-3'>Food Menu Management</h1>
</div>

<?php
if (isset($_POST['day1_form'])) {

  $sql = "UPDATE foodlist SET 
          day1 = :day1_form,
          day2 = :day2_form,
          day3 = :day3_form,
          day4 = :day4_form,
          day5 = :day5_form,
          day6 = :day6_form,
          day7 = :day7_form
          WHERE id = 1";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':day1_form',  $_POST['day1_form']);
  $SORGU->bindParam(':day2_form',  $_POST['day2_form']);
  $SORGU->bindParam(':day3_form',  $_POST['day3_form']);
  $SORGU->bindParam(':day4_form',  $_POST['day4_form']);
  $SORGU->bindParam(':day5_form',  $_POST['day5_form']);
  $SORGU->bindParam(':day6_form',  $_POST['day6_form']);
  $SORGU->bindParam(':day7_form',  $_POST['day7_form']);

  $SORGU->execute();
  echo '
      <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
        Menü güncellendi...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
}
require_once 'db.php';
$SORGU = $DB->prepare("SELECT * FROM foodlist WHERE id = 1");
$SORGU->execute();
$MENU = $SORGU->fetchAll(PDO::FETCH_ASSOC);
// var_dump($MENU);

?>

<form method="POST">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><textarea name='day1_form' style="width:100px; height:150px;"><?php echo $MENU[0]['day1'] ?></textarea></td>
        <td><textarea name='day2_form' style="width:100px; height:150px;"><?php echo $MENU[0]['day2'] ?></textarea></td>
        <td><textarea name='day3_form' style="width:100px; height:150px;"><?php echo $MENU[0]['day3'] ?></textarea></td>
        <td><textarea name='day4_form' style="width:100px; height:150px;"><?php echo $MENU[0]['day4'] ?></textarea></td>
        <td><textarea name='day5_form' style="width:100px; height:150px;"><?php echo $MENU[0]['day5'] ?></textarea></td>
        <td><textarea name='day6_form' style="width:100px; height:150px;"><?php echo $MENU[0]['day6'] ?></textarea></td>
        <td><textarea name='day7_form' style="width:100px; height:150px;"><?php echo $MENU[0]['day7'] ?></textarea></td>
        </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" class="btn btn-primary">Save Menu <i class="bi bi-save"></i> </button>
</form>
</div>
</div>
<?php
require 'altHtml.php';
?>