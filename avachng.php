<?php
	require("header.php");

	//загружаем изображение пользователя
    $path_to_90_directory    = 'avatars/';//папка, куда будет загружаться картинка       
         
    if(preg_match('/[.](JPG)|(jpg)|(gif)|(GIF)|(png)|(PNG)$/',$_FILES['fupload']['name']))//проверка формата исходного изображения
    {                 
        $filename =    $_FILES['fupload']['name'];
        $source =    $_FILES['fupload']['tmp_name']; 
        $target =    $path_to_90_directory . $filename;
        move_uploaded_file($source,$target);//загрузка оригинала в папку $path_to_90_directory
		
		$result2 = mysql_query ("UPDATE users SET img = '$target' WHERE id='$id'");
	}
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=ava.php'></head></html>");
?>