<?php

$curl_handle = curl_init();

$url = "http://dummy.restapiexample.com/api/v1/employees";

curl_setopt($curl_handle, CURLOPT_URL, $url);


curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

$response_data = json_decode($curl_data);


$user_data = $response_data->data;


$user_data = array_slice($user_data, 0, 4);



echo json_encode($user_data, JSON_PRETTY_PRINT);

?>