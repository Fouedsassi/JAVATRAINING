<?php
 
/***
    SET API KEY/APP ID AND BACKEND ENVIRONMENT (HEADER) BELOW
     
    ENVIRONMENTS:
    OntraportProduction, OntraportStaging, OntraportFeature2, OntraportFeature3,
    OntraportFeature4, OntraportFeature5, OntraportFeature6, OntraportFeature7
***/
 
$AppId = "2_92154_OhBASTqbt";
$ApiKey = "6Wn7Rd61XaQi2sN";
$backendEnv = "";
 
/***
    GATEWAY IDs
***/
 
define("DUMMY_ID", 2);
define("AUTHNETCIM_ID", 4);
define("AUTHNET_ID", 3);
define("ELAVON_ID", 8);
define("EWAY_ID", 5);
define("NMI_ID", 6);
define("PAYFLOW_ID", 9);
define("PAYJUNCTION_ID", 10);
define("PAYLEAP_ID", 18);
define("PAYPALPRO_ID", 7);
define("QBMS_ID", 24);
define("STRIPE_ID", 11);
define("USAEPAY_ID", 12);
//define("WORLDPAY_ID", ???);
 
/***
    DEFAULT DUMMY CARD INFO
***/
 
define("DUMMY_CARD", 4111111111111111);
define("DUMMY_CVV", 123);
define("DUMMY_MONTH", 01);
define("DUMMY_YEAR", 2020);
 
/***
    TEST CARDS
    (If not listed here, the gateway probably accepts DUMMY_CARD)
***/
 
define("AUTHNET_CARD", 4007000000027);
define("EWAY_CARD", 444333222111);
define("PAYJUNCTION_CARD", 4444333322221111);
define("STRIPE_CARD", 4012888888881881);
define("PAYLEAP_CARD", 4005550000000019);
define("PAYPALPRO_CARD", 4012888888881881);
//define("QBMS_CARD", ???);
//define("USAEPAY_CARD", ???);
 
/***
    CVVs
    (If not listed here, the gateway probably accepts DUMMY_CVV)
***/
 
define("PAYJUNCTION_CVV", 999);
 
/***
    YEARS
    (If not listed here, the gateway probably accepts DUMMY_YEAR)
***/
 
define("PAYPALPRO_YEAR", 2017);
 
/***
    PRODUCTS
    (This is for better viewing of purchases in Contact Record / Sales Report)
***/
 
define("DUMMY_PRODUCT", 2);
define("AUTHNETCIM_PRODUCT", 4);
define("AUTHNET_PRODUCT", 3);
define("ELAVON_PRODUCT", 5);
define("EWAY_PRODUCT", 6);
define("NMI_PRODUCT", 7);
define("PAYFLOW_PRODUCT", 8);
define("PAYJUNCTION_PRODUCT", 9);
define("PAYLEAP_PRODUCT", 10);
define("PAYPALPRO_PRODUCT", 11);
define("QBMS_PRODUCT", 12);
define("STRIPE_PRODUCT", 18);
define("USAEPAY_PRODUCT", 14);
//define("WORLDPAY_PRODUCT", ???);