<?php
/**
 * Automatically upload the file with cURL.
 */
$file = array('userfile'=>'@/home/jason/todo.sh'); // add '@' before the dir

$ch = curl_init();

// Note: this URL must be the action="sth.php" URL in upload form
curl_setopt($ch, CURLOPT_URL, 'http://chnlab.3322.org/upload_file.php');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $file);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$output = curl_exec($ch);
if ($error = curl_error($ch)) {
	die($error);
}

curl_close($ch);
print $output . '<br />';
?>
