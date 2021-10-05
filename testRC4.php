<?php
include 'phpseclib/Crypt/RC4.php';

$plaintext = 'Selamat Malam!';
$key = '12736sdhuwh!@#!@#';

$des = new Crypt_RC4();
$des->setKey($key);
$chipper = $des->encrypt($plaintext);
$dekrip = $des->decrypt($chipper);


echo "Plaintext = $plaintext<hr>";
echo "Chipper = $chipper<hr>";
echo "Dekrip = $dekrip<hr>";
?>