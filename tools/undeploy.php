<?php 

$folder_path = "data.txt"; 

$files = glob($folder_path.'/*'); 

foreach($files as $file) { 

	if(is_file($file)) 
		rmdir($file); 
} 
?>
