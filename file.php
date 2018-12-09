<?php 

	//readfile('test.txt');


	//Открывает файл 
	/*$mytext = "Записываю новую строку...";

	$file = fopen("test.txt", "a");

	fwrite($file, $mytext);

	fclose($file);

	readfile('test.txt');*/


	//Открывает файл
	/*	$handle = fopen("test.txt", "r");

		if($handle) {
			while (($line = fgets($handle)) !== false) {
				echo $line;
			}
			fclose($handle);
		}*/


//Создает новый файл
/*$file = fopen("test2.txt", "w");
fclose($file);*/

//Открывает содержимое файла
$file = file_get_contents('test2.txt');
echo $file;

?>