var settings = {
    "url": "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest",
    "method": "POST",
    "timeout": 0,
    "headers": {
      "Authorization": "Bearer NW6DIYql0dShECntF2ILBrvtAbuc",
      "Content-Type": "application/json",
      "Access-Control-Allow-Origin" : "*"
    },
    "data": JSON.stringify({
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
    }),
  };
  
  $.ajax(settings).done(function (response) {
    console.log(response);
  });

