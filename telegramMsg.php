<?php
function TelegramdanMesajGonder($Mesaj)
{
  $Token    = ""; // ENV dosyasından alınacak
  $AliciAdi = "";// ENV dosyasından alınacak

  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.telegram.org/bot{$Token}/sendMessage",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
      'text' => "{$Mesaj}",
      'disable_web_page_preview' => false,
      'disable_notification' => false,
      'reply_to_message_id' => null,
      'chat_id' => "{$AliciAdi}"
    ]),
    CURLOPT_HTTPHEADER => [
      "accept: application/json",
      "content-type: application/json"
    ],
  ]);

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

/*   if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  } */
}