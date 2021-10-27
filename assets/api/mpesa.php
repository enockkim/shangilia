<?php
if(array_key_exists('BuyTicket', $_POST)) {
            BuyTicket();
        }
        else if(array_key_exists('Donate', $_POST)) {
            Donate();
        }
        function BuyTicket() {


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
    "BusinessShortCode": 174379,
    "Password": "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjExMDIzMTUyNjAw",
    "Timestamp": "20211023152600",
    "TransactionType": "CustomerPayBillOnline",
    "Amount": "1",
    "PartyA": 254708374149,
    "PartyB": 174379,
    "PhoneNumber": 254712490863,
    "CallBackURL": "https://portal.lifewaychristianacademy.sc.ke/paybill/confirmation.php",
    "AccountReference": "Shangilia Group",
    "TransactionDesc": "Ticket Payment"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer cBjqGlDyqMEyR26c2cLI5M5eBOPQ',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
header("Location: ../../index.php");
exit();
        }
        function Donate() {
            echo "This is the donate button.";
        }

        ?>