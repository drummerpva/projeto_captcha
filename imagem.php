<?php
session_start();
header("Content-Type: image/jpg");
$n = $_SESSION['captcha'];

$imagem = imagecreate(100, 50);
imagecolorallocate($imagem, 200, 200, 200);

$fontColor = imagecolorallocate($imagem, 20, 20, 20);
imagettftext($imagem, 40, -15, 21, 30, $fontColor, __DIR__.'/Ginga.otf', $n);

imagejpeg($imagem,null,100);