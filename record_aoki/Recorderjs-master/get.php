<?php

 $file=$_FILES['fname']['tmp_name'];
 $url=$_POST['url'];

// $filename=$_POST['fname'];

//$decodeData=base64_decode($file);

//echo $file;
//echo $url;

$urlpices=explode("/", $url);

echo $urlpices[3];
/*echo $_FILES['fname']['name'];
echo $_FILES['fname']['type'];
echo $_FILES['fname']['error'];
echo $_FILES['fname']['size']; */
//echo $file;
rename($file,"./sample/$urlpices[3].wav");
/*$fp=fopen($filename,'wb');
fwrite($fp,$decodeData);
fclose($fp);*/

echo 'sucusess';
?>