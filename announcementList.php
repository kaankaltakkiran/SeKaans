<?php
$activeTitle="Announcement List";
$activePage='announcementList';
require 'ustHtml.php';
?>
<div class="container">
  <div class="row justify-content-center">


<div class='row text-center'>
  <h1 class='alert alert-primary mt-3'>Announcements</h1>
</div>


<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Release Date</th>
      <th>Announcement Title</th>
    </tr>
  </thead>
  <tbody>

    <?php

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM announcements 
                           WHERE CURDATE() BETWEEN startingdate AND enddate
                           ORDER BY startingdate DESC");
    $SORGU->execute();
    $announcements = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($announcements as $announcement) {
      $DuyuruTarihi = $announcement['startingdate'];
      $DuyuruTarihi = date("d.m.Y", strtotime($DuyuruTarihi));
      echo "
        <tr>
          <th>{$DuyuruTarihi}</th>
          <td><a href='duyuru.goster.php?id={$announcement['announcementid']}'>{$announcement['title']}</a></td>
      </tr> 
      ";
    }
    ?>

  </tbody>
</table>
</div>
</div>
<?php require 'altHtml.php'; ?>