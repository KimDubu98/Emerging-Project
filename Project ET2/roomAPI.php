<?php
include 'config.php';
$listData = array(
  "title" => $_POST['room_name']
);

$json_obj = json_encode($listData);
$create_space = callforAPI('POST', 'https://webexapis.com/v1/rooms', $json_obj, $accessToken);

header("location: http://localhost/SWC/Project%20ET2/createRoom.php");
?>
