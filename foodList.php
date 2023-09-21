<?php
$activeTitle="Food List";
$activePage='foodList';
require 'ustHtml.php';

require_once 'db.php';

$SORGU = $DB->prepare("SELECT * FROM foodlist WHERE id = 1");
$SORGU->execute();
$MENU = $SORGU->fetchAll(PDO::FETCH_ASSOC);
// var_dump($MENU);

$GUN = date("N"); // 1-7 arası değer alır. Pazartesi için 1 vb.

?>
<div class="container">
<div class='row text-center'>
  <h1 class='alert alert-primary mt-3'>Weekly Food Menu</h1>
</div>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <!-- gün değeri hangi güne eşitse o günün arkaplan rengini mavi yaptım -->
      <th <?php if ($GUN == 1) echo " class='bg-info' "; ?>>Monday</th>
      <th <?php if ($GUN == 2) echo " class='bg-info' "; ?>>Tuesday</th>
      <th <?php if ($GUN == 3) echo " class='bg-info' "; ?>>Wednesday</th>
      <th <?php if ($GUN == 4) echo " class='bg-info ' "; ?>>Thursday</th>
      <th <?php if ($GUN == 5) echo " class='bg-info' "; ?>>Friday</th>
      <th <?php if ($GUN == 6) echo " class='bg-info' "; ?>>Saturday </th>
      <th <?php if ($GUN == 7) echo " class='bg-info' "; ?>>Sunday</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<!--     nl2br fonksiyonu ile veritabanında alt alta yazılan değerlerin alt alta görünmesini sağladım. -->
      <td><?php echo nl2br($MENU[0]['day1']); ?></td>
      <td><?php echo nl2br($MENU[0]['day2']); ?></td>
      <td><?php echo nl2br($MENU[0]['day3']); ?></td>
      <td><?php echo nl2br($MENU[0]['day4']); ?></td>
      <td><?php echo nl2br($MENU[0]['day5']); ?></td>
      <td><?php echo nl2br($MENU[0]['day6']); ?></td>
      <td><?php echo nl2br($MENU[0]['day7']); ?></td>
      </td>
    </tr>
  </tbody>
</table>
</div>
<?php
require 'altHtml.php';
?>