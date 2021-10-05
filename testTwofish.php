<?php
include 'phpseclib/Crypt/Twofish.php';

$plaintext = 'Selamat Malam!';
$key = '12736sdhuwh';

$twofish = new Crypt_Twofish();
$twofish->setKey($key);
$chipper = $twofish->encrypt($plaintext);
$dekrip = $twofish->decrypt($chipper);


echo "Plaintext = $plaintext<hr>";
echo "Chipper = $chipper<hr>";
echo "Dekrip = $dekrip<hr>";
?>