<?php
$arr = [
    'tds_data' => rand(0,3500),
    'ph_data' => rand(6,8),
    'water_temp_data' => rand(0,100),
    'water_level_data' => rand(0,100),
    'water_flow_speed_data' => rand(10,75),
    'air_temp_data' => rand(18,46),
];
header('Content-Type: application/json; charset=utf-8');
 // echo gettype(json_encode($arr));
 
echo json_encode($arr);
// echo json_encode($arr['tds_data']);
exit();

	// $message ='Your message';

////////////////////////////get
 //  	$url = 'http://127.0.0.1:8000/api/registerr?email=habyaliiiddddiii@gmail.com&password=1234567&name=hamada';

 //     $ch = curl_init();
 //     curl_setopt($ch, CURLOPT_URL, $url);
 //     curl_setopt($ch, CURLOPT_POST, 0);
 //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 //     $response = curl_exec ($ch);
 //     $err = curl_error($ch);  
 //     curl_close ($ch);
 //     return $response;
///////////////////////////////////////post
    $data1 = [
        'name' => 'said',
        'email' => 'maherali@gmail.com',
        'password' => '1234567',
    ];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://127.0.0.1:8000/api/registerr",// your preferred url
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30000,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($data1),
        CURLOPT_HTTPHEADER => array(
            "accept: */*",
            "accept-language: en-US,en;q=0.8",
            "content-type: application/json",
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        print_r(json_decode($response));
    }
?>