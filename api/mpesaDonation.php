<?php
  include('authorization.php');

  $Response = GetAccessToken();

  $ResponseObj = json_decode($Response);

  $AccessToken = $ResponseObj->access_token;


  date_default_timezone_set('Africa/Nairobi');
  $Date = date('YmdHms', time());

  $ShortCode = 174379;
  // $Amount = $_POST['amount'];
  // $PhoneNumber = $_POST['PhoneNumber'];
  $Amount = "1";
  $PhoneNumber = "254712490863";
  $CallBackURL = "https://portal.lifewaychristianacademy.sc.ke/paybill/confirmation.php";

  $Password = base64_encode($ShortCode."bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919".$Date);

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      "BusinessShortCode": '.$ShortCode.',
      "Password": '.$Password.',
      "Timestamp": '.$Date.',
      "TransactionType": "CustomerPayBillOnline",
      "Amount": '.$Amount.',
      "PartyA": '.$PhoneNumber.',
      "PartyB": '.$ShortCode.',
      "PhoneNumber": '.$PhoneNumber.',
      "CallBackURL": '.$CallBackURL.',
      "AccountReference": "Shangilia Group",
      "TransactionDesc": "Ticket Payment"
  }',
    CURLOPT_HTTPHEADER => array(
      'Authorization: Bearer '.$AccessToken,
      'Content-Type: application/json'
    ),
  ));

  
  $response = curl_exec($curl);
  
  curl_close($curl);
  echo $response;
  