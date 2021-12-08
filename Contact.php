<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

$json = file_get_contents('php://input');
print_r($json);
// $name = $_POST["firstname"].' '.$_POST["lastname"];
// $email = $_POST["email"];
// $phone = $_POST["phonenumber"];
// $message = $_POST["message"];
// $company = '';
// $country = '';

// $postingData = array(
//   "dataform_id"=>"pbynssdk2f",
//   "dataform"=>"/api/1/dataform/pbynssdk2f/",
//   "fields"=>array(
//       "name"=>$name,
//       "email"=>$email,
//       "phone"=>$phone,
//       "message"=>$message,
//       "company"=>$company,
//       "country"=>$country,
//       "source"=>"Beylikduzu Website",
//   ),
//   "use_field_slug"=> true
// );

// $jsonData = json_encode($postingData);


// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://cuengine.orgzit.com/api/1/record/',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_HTTPHEADER => array(
//     'Authorization: ApiKey bilalkeskin_94:7e16941c8cb6a8c4630a9890e91900fc09ad7184',
//     'Content-Type: application/json'
//   ),
//   CURLOPT_POSTFIELDS =>$jsonData,
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;


?>
