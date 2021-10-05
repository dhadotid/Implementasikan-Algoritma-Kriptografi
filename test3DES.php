<?php
include 'phpseclib/Crypt/TripleDES.php';

$plaintext = 'Selamat Malam!';
$key = '12736sdhuwh!@#!@#';

$des = new Crypt_TripleDES();
$des->setKey($key);
$chipper = $des->encrypt($plaintext);
$dekrip = $des->decrypt($chipper);


echo "Plaintext = $plaintext<hr>";
echo "Chipper = $chipper<hr>";
echo "Dekrip = $dekrip<hr>";
?>