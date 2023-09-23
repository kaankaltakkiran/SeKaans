<?php
$activeTitle="Login";
$activePage='login';
require 'ustHtml.php';
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
  require_once('db.php');

  $sql = "SELECT * FROM users WHERE email = :eposta_form AND password = :parola_form";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':eposta_form', $_POST['eposta_form']);
  $SORGU->bindParam(':parola_form', $_POST['parola_form']);

  $SORGU->execute();

  $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);
/*   var_dump($CEVAP);
   echo "Gelen cevap " .  count($CEVAP) . " adet satırdan oluşuyor"; */
  if (count($CEVAP) == 1) {
    //echo "<h1>GİRİŞ BAŞARILI!</h1>";
    //Session başlatma
    @session_start();
    $_SESSION['isLogin'] = 1;
    $_SESSION['adsoyad'] = $CEVAP[0]['name']; // Kullanıcının adını al
    $_SESSION['id'] = $CEVAP[0]['userid']; // Kullanıcının ID'sini al
    $_SESSION['rol'] = $CEVAP[0]['role']; // Kullanıcının ROL'ünü al
    header("location: index.php");
    die();
  } else {
    echo '
    <div class="container">
    
<div class="alert mt-3 text-center alert-danger alert-dismissible fade show" role="alert">
INCORRECT EMAIL or PASSWORD!...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
';
    //header("location: hata.php");
    //die();
  }
}
?>

<div class='row text-center offset-3 col-6 mt-3'>
  <h1 class='alert alert-primary'>Login</h1>
</div>
<div class="container">
  <div class="row">


<form method="POST">
<div class="col-6 offset-3">
  <div class="form-floating mb-3">
  <input type="text" name="eposta_form" class="form-control" id="ınputEmail" placeholder="Plase Write Email">
  <label for="ınputEmail">Email</label>
</div>
</div>
<div class="col-6 offset-3">
<div class="form-floating mb-3">
  <input type="password" name="parola_form" class="form-control" id="ınputPassword" placeholder="Plase Write Email">
  <label for="ınputPassword">Password</label>
</div>
</div>
<div class="d-grid col-md-6  mx-auto">
            <!--   <a class="btn btn-primary btn-lg" type="submit"  role="button">Add Person
              <i class="bi bi-send"></i>
              </a> -->
              <button type="submit" class="btn btn-primary">Sıgn In</button>
            </div>
</div>
</div>

<?php
  require 'altHtml.php';
  ?>
