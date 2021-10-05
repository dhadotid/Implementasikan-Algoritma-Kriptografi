<?php
include 'phpseclib/Crypt/AES.php';

$plaintext = 'Selamat Malam!';
$key = '12736sdhuwh';

$aes = new Crypt_AES();
$aes->setKey($key);
$chipper = $aes->encrypt($plaintext);
$dekrip = $aes->decrypt($chipper);


echo "Plaintext = $plaintext<hr>";
echo "Chipper = $chipper<hr>";
echo "Dekrip = $dekrip<hr>";
?>