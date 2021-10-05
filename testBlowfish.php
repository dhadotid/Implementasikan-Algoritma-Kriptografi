<?php
include 'phpseclib/Crypt/Blowfish.php';

$plaintext = 'Selamat Malam!';
$key = '12736sdhuwh';

$blowfish = new Crypt_Blowfish();
$blowfish->setKey($key);
$chipper = $blowfish->encrypt($plaintext);
$dekrip = $blowfish->decrypt($chipper);


echo "Plaintext = $plaintext<hr>";
echo "Chipper = $chipper<hr>";
echo "Dekrip = $dekrip<hr>";
?>