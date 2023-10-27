<?php


// $api_url = "https://api.example.com/books";


// $ch = curl_init($api_url);


// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// $response = curl_exec($ch);


// curl_close($ch);


// if (!$response) {
//     die("Error accessing the API");
// }


// $data = json_decode($response, true);

// print_r($data);




$api_url = "https://api.example.com/weather";


$ch = curl_init($api_url);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$response = curl_exec($ch);


curl_close($ch);


if (!$response) {
    die("Error accessing the API");
}


$xml = simplexml_load_string($response);


echo "Temperature: " . $xml->temperature;
echo "Condition: " . $xml->condition;
?>


