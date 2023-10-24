<?php 
// Include the database configuration file 
include_once 'dbConfig.php'; 
require 'ustHtml.php';
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "uploads/"; 
 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
                if($insert){ 
                 /*    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";  */
                    echo '
                    <div class="container">
                    
                <div class="alert mt-3 text-center alert-info alert-dismissible fade show" role="alert">
                The file has been uploaded successfully.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                </div>
                <div class="row text-center">
           <p><a href="imageDisplay.php" class="btn btn-warning btn-sm "> Image Form </a></p>
</div>
                ';
                header("location: imageDisplay.php");
                die();   
                }else{ 
                    /* $statusMsg = "File upload failed, please try again."; */
                    echo '
                      <div class="container">
                      
                  <div class="alert mt-3 text-center alert-info alert-dismissible fade show" role="alert">
                  File upload failed, please try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  </div>
                  <div class="row text-center">
                  <p><a href="imageDisplay.php" class="btn btn-warning btn-sm "> Image Form </a></p>
       </div>
                  ';
                     
                }  
            }else{ 
                /* $statusMsg = "Sorry, there was an error uploading your file."; */
                echo '
                <div class="container">
                
            <div class="alert mt-3 text-center alert-info alert-dismissible fade show" role="alert">
            "Sorry, there was an error uploading your file.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            <div class="row text-center">
            <p><a href="imageDisplay.php" class="btn btn-warning btn-sm "> Image Form </a></p>
 </div>
            ';  
            } 
        }else{ 
         /*    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; */ 
            echo '
            <div class="container">
            
        <div class="alert mt-3 text-center alert-info alert-dismissible fade show" role="alert">
        Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
        <div class="row text-center">
        <p><a href="imageDisplay.php" class="btn btn-warning btn-sm "> Image Form </a></p>
</div>
        '; 
        } 
    }else{ 
       /*  $statusMsg = 'Please select a file to upload.';  */
        echo '
        <div class="container">
        
    <div class="alert mt-3 text-center alert-danger alert-dismissible fade show" role="alert">
    Please select a file to upload.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </div>
    <div class="row text-center">
    <p><a href="imageDisplay.php" class="btn btn-warning btn-sm "> Image Form </a></p>
</div>
    '; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
<?php require 'altHtml.php'; ?>