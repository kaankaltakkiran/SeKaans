<?php
$activeTitle="Login";
$activePage='login';
require 'ustHtml.php';
$connect = mysqli_connect("localhost", "root", "root", "sekaans");
$connect->set_charset("utf8mb4");
?>
<?php
//Session başlatma
@session_start();

// Eğer zaten giriş yapmışsa, index.php'ye yönlendir
if (isset($_SESSION['isLogin'])) {
  // Oturum açmış
  header("location: index.php");
  die();
}


if (isset($_POST['eposta_form'])) {
  // Form gönderildi
  // 1.DB'na bağlan
  // 2.SQL hazırla ve çalıştır
  // 3.Gelen sonuç 1 satırsa GİRİŞ BAŞARILI değilse, BAŞARISIZ

  if(empty($_POST["eposta_form"]) || empty($_POST["parola_form"]))  
  {  
       echo '
                      <div class="container">
                      
                  <div class="alert mt-3 text-center alert-info alert-dismissible fade show" role="alert">
                  Both Fields are required...
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  </div>
                  ';    
  }  
  else  
  {  
       $useremail = mysqli_real_escape_string($connect, $_POST["eposta_form"]);  
       $userpassword = mysqli_real_escape_string($connect, $_POST["parola_form"]);  
       $query = "SELECT * FROM users WHERE email = '$useremail'";  
       $result = mysqli_query($connect, $query);  
       if(mysqli_num_rows($result) > 0)  
       {  
            while($row = mysqli_fetch_array($result))  
            {  
                 if(password_verify($userpassword, $row["password"]))  
                 {  
                      //return true;  
                     //echo "<h1>GİRİŞ BAŞARILI!</h1>";
                     //Session başlatma
                     @session_start();
                     $_SESSION['isLogin'] = 1;
                     $_SESSION['adsoyad'] = $row['name']; // Kullanıcının adını al
                     $_SESSION['id'] = $row['userid']; // Kullanıcının ID'sini al
                     $_SESSION['rol'] = $row['role']; // Kullanıcının ROL'ünü al
                    header("location: index.php");
                    die();    
                 }  
                 else  
                 {  
                      //return false;  
                      //echo $userpassword;
                      //echo $row["password"];
                      echo '
                      <div class="container">
                      
                  <div class="alert mt-3 text-center alert-danger alert-dismissible fade show" role="alert">
                  PASSWORDS NOT MATCH!!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  </div>
                  ';  
                 }  
            }  
       }   
       else  
       {  
        echo '
        <div class="container">
        
    <div class="alert mt-3 text-center alert-danger alert-dismissible fade show" role="alert">
    INCORRECT EMAIL or PASSWORD!...
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </div>
    ';
       }  
  }  
  
}
?>
<div class="container">
<div class='row text-center justify-content-center  mt-3'>
  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
  <h1 class='alert alert-primary'>Login</h1>
</div>
</div>
<div class="container">
  <div class="row">
<form method="POST">
  <div class="row justify-content-center">
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
  <div class="form-floating mb-3">
  <input type="text" name="eposta_form" class="form-control" id="ınputEmail" placeholder="Plase Write Email">
  <label for="ınputEmail">Email</label>
  </div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
<div class="form-floating mb-3">
  <input type="password" name="parola_form" class="form-control" id="ınputPassword" placeholder="Plase Write Email">
  <label for="ınputPassword">Password</label>
</div>
</div>
</div>
<div class="d-grid col-12 col-sm-6 col-md-4 col-lg-3  mx-auto">
            <!--   <a class="btn btn-primary btn-lg" type="submit"  role="button">Add Person
              <i class="bi bi-send"></i>
              </a> -->
              <button type="submit" class="btn btn-primary">Sıgn In</button>
            </div>
</div>
</div>
</div>

<?php
  require 'altHtml.php';
  ?>
