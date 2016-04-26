<?php
 
require_once "functions.php";
require_once "config.php";
 
/***
    TEST CREATE PAYER, INITIAL CHARGE AND PAYMENT PLAN CREATION, THEN REFUND
    Example:
    $gateway = createOrder($gatewayId, $productId, $ccNumber, $cvvCode, $expMonth, $expYear);
    refundTransaction($gateway);
***/
 
$dummy = createOrder(DUMMY_ID, DUMMY_PRODUCT, DUMMY_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$authNetCIM = createOrder(AUTHNETCIM_ID, AUTHNETCIM_PRODUCT, DUMMY_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$authNet = createOrder(AUTHNET_ID, AUTHNET_PRODUCT, AUTHNET_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$elavon = createOrder(ELAVON_ID, ELAVON_PRODUCT, DUMMY_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$eway = createOrder(EWAY_ID, EWAY_PRODUCT, EWAY_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$nmi = createOrder(NMI_ID, NMI_PRODUCT, DUMMY_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$payflowPro = createOrder(PAYFLOW_ID, PAYFLOW_PRODUCT, DUMMY_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$payJunction = createOrder(PAYJUNCTION_ID, PAYJUNCTION_PRODUCT, PAYJUNCTION_CARD, PAYJUNCTION_CVV, DUMMY_MONTH, DUMMY_YEAR);
$paypalPro = createOrder(PAYPALPRO_ID, PAYPALPRO_PRODUCT, PAYPALPRO_CARD, DUMMY_CVV, DUMMY_MONTH, PAYPALPRO_YEAR);
$stripe = createOrder(STRIPE_ID, STRIPE_PRODUCT, STRIPE_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
$payleap = createOrder(PAYLEAP_ID, PAYLEAP_PRODUCT, PAYLEAP_CARD, DUMMY_CVV, DUMMY_MONTH, DUMMY_YEAR);
//$usaEpay = createOrder();
//$qbms = createOrder();
//$worldPay = createOrder();
 
/***
refundTransaction($dummy);
refundTransaction($authNetCIM);
refundTransaction($authNet);
refundTransaction($elavon);
refundTransaction($eway);
refundTransaction($nmi);
refundTransaction($payflowPro);
refundTransaction($payJunction);
refundTransaction($paypalPro);
refundTransaction($stripe);
refundTransaction($payleap);
//refundTransaction($useEpay);
//refundTransaction($qbms);
//refundTransaction($worldPay);
***/