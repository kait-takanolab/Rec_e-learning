<?php

 $file=$_FILES['fname']['tmp_name'];

// $filename=$_POST['fname'];

//$decodeData=base64_decode($file);

echo $file;
echo $_FILES['fname']['name'];
echo $_FILES['fname']['type'];
echo $_FILES['fname']['error'];
echo $_FILES['fname']['size'];
//echo $file;
rename($file,"./uploaded_audio2.wav");
/*$fp=fopen($filename,'wb');
fwrite($fp,$decodeData);
fclose($fp);*/

echo 'sucusess';
?>