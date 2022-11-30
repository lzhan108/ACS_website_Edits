<?php

	if (file_exists('visitcount.txt')) 
	{
		$fil = fopen('visitcount.txt', 'r');
		$dat = fread($fil, filesize('visitcount.txt')); 
		echo $dat+1;
		fclose($fil);
		$fil = fopen('visitcount.txt', 'w');
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('visitcount.txt', 'w');
		fwrite($fil, 1);
		echo '1';
		fclose($fil);
	}
?>