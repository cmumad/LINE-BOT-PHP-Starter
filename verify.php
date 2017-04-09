<?php
$access_token = 'sC/w+xrDW5qRDImgJFDtNPlRpiAQ6rq5subnWJJPiKEkPSkoK7hlmSaB8Gc8RPoUr6XkoePaB2hLTDlSXPpfA6S833pe2yhv1kmgm5Tn7HO4l20x7PnOd5i6S/MvzOmVTRYBiWyw/TV0Olej4YP6GwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
