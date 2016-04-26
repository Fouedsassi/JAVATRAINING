<?php
 
require_once "config.php";
 
function createOrder($gatewayId, $productId, $ccNumber, $cvvCode, $expMonth, $expYear) {
  
  global $AppId, $ApiKey, $backendEnv;
  
  /***
      CREATE TO GET CONTACT ID
  ***/
  
  $url = "https://api.ontraport.com/1/objects";
  
   $data = '{
     "objectID":"0",
    "firstname":"Airwolf",
    "lastname":"GatewayID-'.$gatewayId.'",
    "email":"gatewayID_'.$gatewayId.'test@ontraport.com"
   }';
  
   $headers = array(
       "Api-Appid:$AppId",
       "Api-Key:$ApiKey",
       "X-op-env:$backendEnv"
   );
  
   $session = curl_init($url);
   curl_setopt($session, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($session, CURLOPT_POSTFIELDS, $data);
   curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
   curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
   $result = curl_exec($session);
   curl_close($session);
  
   $result = json_decode($result, true);
   $contactId = $result["data"]["id"];
  
  /***
      CHARGE TRANSACTION, CREATE PAYMENT PLAN SET TO CHARGE ONE MORE TIME (NEXT DAY)
  ***/
  
  $url = "https://api.ontraport.com/1/transaction/processManual";
  
  $data = '{
    "objectID": 0,
    "contact_id": '.$contactId.',
    "chargeNow": "chargeNow",
    "invoice_template": 1,
    "gateway_id": '.$gatewayId.',
    "offer": {
      "products": [
        {
          "quantity": 1,
          "owner": 1,
          "id": '.$productId.',
          "price": [
            {
              "price": "10.00",
              "payment_count": 2,
              "unit": "day"
            }
          ],
          "trial": [
            {
              "price":"10.00",
              "payment_count":"1",
              "unit":"month"
            }
          ],
         "type": "payment_plan"
        }
      ],
      "hasTaxes": false,
      "hasShipping": false,
      "delay": 0,
      "subscription_count": 2,
      "subscription_unit": "day"
    },
    "billing_address": {
        "address": "1234 Any St.",
        "address2": "Apt. 0",
        "city": "Santa Barbara",
        "state": "CA",
        "zip": "93101",
        "country": "US"
      },
    "payer": {
      "ccnumber": "'.$ccNumber.'",
      "code": "'.$cvvCode.'",
      "expire_month": '.$expMonth.',
      "expire_year": '.$expYear.'
    }
  }';
  
  echo "\nSTART TRANSACTION FOR GATEWAY ID $gatewayId\n";
  
  $session = curl_init($url);
  curl_setopt($session, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($session, CURLOPT_POSTFIELDS, $data);
  curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($session);
  curl_close($session);
  echo $result;
  
  $result = json_decode($result, true);
   
  $invoiceId  = $result["data"]["invoice_id"];
  
  echo "\nEND TRANSACTION FOR ".'GATEWAY'." ID $gatewayId\n\n";
 
  return $invoiceId;
   
}
 
function refundTransaction($invoiceId) {
 
  /***
    REFUND MOST RECENT TRANSACTION USING INVOICE_ID
  ***/
 
  global $AppId, $ApiKey, $backendEnv;
 
  $url = "https://api.ontraport.com/1/transaction/refund";
 
  $data = '{
      "objectID": 0,
      "ids": ['.$invoiceId.']
   }';
 
  $headers = array(
      "Api-Appid:$AppId",
      "Api-Key:$ApiKey",
      "X-op-env:$backendEnv"
  );
 
  echo "START REFUND FOR INVOICE ID $invoiceId\n";
 
  $session = curl_init($url);
  curl_setopt($session, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($session, CURLOPT_POSTFIELDS, $data);
  curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($session);
  curl_close($session);
 
  echo $result;
 
  echo "\nEND REFUND FOR INVOICE ID $invoiceId\n";
}
 
function createOrder_existing($gatewayId, $productId, $ccNumber, $cvvCode, $expMonth, $expYear, $contactId) {
 
  /***
    THIS IS ONLY NEEDED IF TESTING AN EXISTING PAYER (CONTACT W/ CREDIT CARD).
    FOR EXAMPLE, MANUALLY CREATE PAYER IN OLD AIRWOLF > DEV TRANSFERS TO NEW AIRWOLF > 
    RUN THIS ON THAT CONTACT.
  ***/
 
  global $AppId, $ApiKey, $backendEnv;
 
  $url = "https://api.ontraport.com/1/transaction/processManual";
 
  $data = '{
    "objectID": 0,
    "cxontact_id": '.$contactId.',
    "chargeNow": "chargeNow",
    "invoice_template": 1,
    "gateway_id": '.$gatewayId.',
    "offer": {
      "products": [
        {
          "quantity": 1,
          "owner": 1,
          "id": '.$productId.',
          "price": [
            {
              "price": "5.00",
              "payment_count": 2,
              "unit": "day"
            }
          ],
         "type": "payment_plan"
        }
      ],
      "hasTaxes": false,
      "hasShipping": false,
      "delay": 0,
      "subscription_count": 2,
      "subscription_unit": "day"
    }
  }';
 
  $headers = array(
      "Api-Appid:$AppId",
      "Api-Key:$ApiKey",
      "X-op-env:$backendEnv"
  );
 
  echo "START TRANSACTION FOR GATEWAY ID $gatewayId\n";
 
  $session = curl_init($url);
  curl_setopt($session, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($session, CURLOPT_POSTFIELDS, $data);
  curl_setopt($session, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($session);
  curl_close($session);
 
  echo $result;
 
  echo "\nEND TRANSACTION FOR ".'GATEWAY'." ID $gatewayId\n";
}