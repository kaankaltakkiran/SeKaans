<?php
$activePage='imageDisplay';
$activeTitle="Image Form";
require 'ustHtml.php';
require 'loginControl.php';
@session_start();
?>
<?php if($_SESSION['rol']==2){ ?>
<div class="container">
    <div class="row">

<form action="uploadImage.php" class="text-center mt-4" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <button type="submit" class="btn btn-primary" name="submit"> Upload <i class="bi bi-upload"></i> </button>
</form>
</div>
</div>
<?php } ?>
<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" class="img-fluid mt-2" alt="" />

<?php }
}else{ ?>
<div class="container">
    <div class="row">
      <div class="alert text-center mt-3 alert-danger alert-dismissible fade show" role="alert">
      image not found!!!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
</div>
<?php } ?>

<?php require 'bottom.php'; ?>