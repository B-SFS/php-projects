<?php
$json_data = json_decode(file_get_contents("./cv's.json"));
// var_dump($json_data);
foreach ($json_data as $key => $email) {
    if($json_data[$key]->email_address == $_POST['email']){
        header("Location: ./CV/".$json_data[$key]->cv_name.".html");
    }
}

die("CV Not Found!!!");

?>