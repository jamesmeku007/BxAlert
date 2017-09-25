<?php
$access_token = 'WxKDvoOwjqEcavsyp2EgSc/r26ObPDUEeIorQFc2QUp2VXxSJ4NDRPOaUl8dMl3eohxvcchUbYRbdr6bIqdD8C7kaOakpfp8kcUIdA1tn+oN75yKct2BiwFrnto9hfDyam4bzJGKsHKHfLhQ00LEJQdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
