<?php
$activeTitle="Announcement";
require 'ustHtml.php';
require_once('db.php');
require 'loginControl.php';

$sql = "SELECT * FROM announcements   WHERE announcementid = :id";
$SORGU = $DB->prepare($sql);
$SORGU->bindParam(':id',$_GET['id']);
$SORGU->execute();
$announcement = $SORGU->fetchAll(PDO::FETCH_ASSOC);

echo "
<div class='container'>
<div class='row text-center'>
  <h3 class='alert alert-primary mt-3'>{$announcement[0]['title']}</h3>
</div>
</div>
";
echo "
<div class='container'>
<div class='row text-center'>
  <p class=''>{$announcement[0]['announcement']}</p>
</div>
</div>
";

/* echo nl2br($DUYURU[0]['announcement']); */
echo "<br><hr>";
echo "
<div class='container'>
<div class='row text-center'>
<i class='text-muted'>" . date("d.m.Y", strtotime($announcement[0]['startingdate'])) . " Tarihinde yayınlanmıştır.</i>
</div>
</div>
";
/* echo "<i class='text-muted'>" . date("d.m.Y", strtotime($DUYURU[0]['startingdate'])) . " Tarihinde yayınlanmıştır.</i>"; */

require 'altHtml.php';
?>
