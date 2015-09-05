<?php

header('Content-type:image/png;');
session_start();
$imagen = imagecreate(100,35);
$image=imagecreatetruecolor(170, 60);

$black=imagecolorallocate($imagen, 0, 0, 0);
$white=imagecolorallocate($imagen, 255, 255, 255);
//$red=imagecolorallocate($imagen, 255, 0, 0);
imagefill($imagen, 50, 0, $white);
$code='';
$array=array('a','b','s','d','f','g','h','j','k','z','x','c','v','b','n','m','q','w','e','r','t','y','u','i','o','p','1','2','3','4','5','6','7','8','9','0');
for($i=0; $i<5; $i++){
	$code .=$array[rand(0,count($array)-1)];

}
$_SESSION["code_rand"] = $code;

imagestring($imagen, 5, 30, 10, $code, $black);


imagepng($imagen);

?>
