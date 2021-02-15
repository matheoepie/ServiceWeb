<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://127.0.0.1:8000/Offers/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array (
    'Name' => $_POST['Name'],
    'Reference' => $_POST['Reference'],
    'Description' => $_POST['Description'],
    'Begin_date' => $_POST['Begin_date'],
    'Period' => $_POST['Periode'],
    'Publication_date' => date('Y-m-d'),
    'user_id' => $_SESSION['id']
  ), 
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
header('Location: index.php')
?>