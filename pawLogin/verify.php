<?php
$url = 'http://51.91.103.54:2650/login/verify/'.$add;
// Initialize a CURL session.
$ch = curl_init();
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
$result = json_decode($result);
$status = $result->status;
if ($status == "yes") {
	$sender = $result->account;
} else {
	$sender = "No transactions received 😭";
}

?>