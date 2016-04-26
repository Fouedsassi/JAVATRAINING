<?php

// Construct contact data in XML format
$data = <<<STRING
<contact>
<Group_Tag name="Contact Information">
<field name="First Name">Foued</field>
<field name="Last Name">API</field>
<field name="E-Mail">foued+API@ontraport.com</field>
</Group_Tag>
<Group_Tag name="Sequences and Tags">
<field name="Contact Tags">contact API</field>
<field name="Sequences">7</field>
</Group_Tag>
</contact>
STRING;

$data = urlencode(urlencode($data));

// Replace the strings with your API credentials located in Admin > OfficeAutoPilot API Instructions and Key Manager
$appid = "2_12652_bDo3fZFnO";
$key = "eP8Zs7NXV50PKOw";

//Set your request type and construct the POST request
$reqType= "add";
$postargs = "appid=".$appid."&key=".$key."&return_id=1&reqType=".$reqType. "&data=" . $data;
$request = "https://api.moon-ray.com/cdata.php";

//Start the curl session and send the data
$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $postargs);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

//Store the response from the API for confirmation or to process data
$response = curl_exec($session);

//Close the session
curl_close($session);

//Set your header type to XML and print the response to the screen
header("Content-Type: text/xml");
echo $response;