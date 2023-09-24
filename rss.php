<?php
$activeTitle="News";
$activePage='news';
require 'ustHtml.php';
require 'loginControl.php';

    $URL       = "https://www.haberturk.com/rss/kategori/gida.xml";
    $xml       = simplexml_load_file($URL);
    $json_str  = json_encode($xml); // $mxl değişkeninin JSON karşılığını içeren bir dizge döndürür. 
    $arr_sonuc = json_decode($json_str, TRUE); // Kodlanmış bir JSON dizgesini çözümler ve PHP değişkenine çevirir. 
    // echo "<pre>"; print_r($arr_sonuc); die();

    $Haberler  = $arr_sonuc["channel"]["item"];
    // echo "<pre>"; print_r($Haberler); die();
    

    echo " <div class='container'>
    
    <div class='row text-center offset-3 col-6 mt-3'>
    <h1 class='alert alert-primary'>News</h1>
  </div>";
    echo '
    <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-12">
    <table class="table table-bordered table-striped">
    <thead>
      <tr>
       
      </tr>
    </thead>
    <tbody>
    </div>
    </div>
    </div>
    ';
/*     <th>News İmage</th>
    <th>News Text</th> */
    $c=0;
    foreach ($Haberler as $key => $haber) {
        $c++;
        if($c > 6) continue;
        $resim = $haber['enclosure']['@attributes']['url'];
        $link  = $haber['link'];
        $baslik= $haber['title'];
        $ozet  = $haber['description'];
        echo "<tr>
                <td>
                    <img src='$resim'  class='img-fluid'>
                </td>
                <td>
                    <a href='{$link}'>{$baslik}</a>
                    <br>
                    $ozet
                </td>
            </tr>
        ";
        
    }
    echo "</table>";
    require 'altHtml.php';
?>
