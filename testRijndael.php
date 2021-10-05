<?php
include 'phpseclib/Crypt/Rijndael.php';

$plaintext = 'Selamat Malam!';
$key = '12736sdhuwh';

$rijndael = new Crypt_Rijndael();
$rijndael->setKey($key);
$chipper = $rijndael->encrypt($plaintext);
$dekrip = $rijndael->decrypt($chipper);


echo "Plaintext = $plaintext<hr>";
echo "Chipper = $chipper<hr>";
echo "Dekrip = $dekrip<hr>";
?>