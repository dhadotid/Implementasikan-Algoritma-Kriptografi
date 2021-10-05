<?php
include 'phpseclib/Crypt/RC2.php';

$plaintext = 'Selamat Pagi!';
$key = '12736sdhuwh!@#!@#';

$des = new Crypt_RC2();
$des->setKey($key);
$chipper = $des->encrypt($plaintext);
$dekrip = $des->decrypt($chipper);


echo "Plaintext = $plaintext<hr>";
echo "Chipper = $chipper<hr>";
echo "Dekrip = $dekrip<hr>";
?>