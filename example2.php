<?php


$config = array(
    "digest_alg" => "sha1",
    "private_key_bits" => 4096,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
$res = openssl_pkey_new($config);
// Extract the private key from $res to $privKey
openssl_pkey_export($res, $privKey);

// Extract the public key from $res to $pubKey
$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];
echo 'Public key :'.$pubKey. '</br></br>';
echo 'Private key :'.$privKey.'</br></br>';
$data = 'plaintext data goes here';

// Encrypt the data to $encrypted using the public key
openssl_public_encrypt($data, $encrypted, $pubKey);

// Decrypt the data using the private key and store the results in $decrypted
openssl_private_decrypt($encrypted, $decrypted, $privKey);

echo $decrypted;


echo '</br></br>--------------------------------------------------------------------------------------------------------</br></br>';
$private_key = openssl_get_privatekey(file_get_contents('user2/private.key'));
$public_key = openssl_get_publickey(file_get_contents('user2/public.pem'));

$data = '{"data":"makes life worth living makes life"}';

echo "data in:\n$data\n\n</br></br>";

$encrypted = $e = NULL;
openssl_seal($data, $encrypted, $e, array($public_key));

$sealed_data = base64_encode($encrypted);
$envelope = base64_encode($e[0]);

echo "sealed data:\n$sealed_data\n\n</br></br>";
echo "envelope:\n$envelope\n\n</br></br>";

$input = base64_decode($sealed_data);
$einput = base64_decode($envelope);

$plaintext = NULL;
openssl_open($input, $plaintext, $einput, $private_key);

echo "data out:\n$plaintext\n</br></br>";