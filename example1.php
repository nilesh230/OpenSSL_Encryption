<?php
ini_set('display_errors', 1);
  // Create a private/public key pair
  $config = array(
      "digest_alg" => "sha1",
      "private_key_bits" => 2048,
      "private_key_type" => OPENSSL_KEYTYPE_RSA,
  );
  $resource = openssl_pkey_new($config);

  // Extract private key from the pair
  openssl_pkey_export($resource, $private_key);

  // Extract public key from the pair
  $key_details = openssl_pkey_get_details($resource);
  $public_key = $key_details["key"];

  $keys = array('private' => $private_key, 'public' => $public_key);
  
  echo $keys['public'].'</br></br>';
  echo $keys['private'].'</br></br>';
  

  
    $plaintext = "1234 hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello ";

  openssl_public_encrypt($plaintext, $encrypted, $keys['public']);
  
  echo '<b> Message: </b>'.$plaintext.'</br></br>';

  // Use base64_encode to make contents viewable/sharable
  $message = base64_encode($encrypted);

  echo '<b>Encrypted message with public key : </b>'.$message.'</br></br>';
  
  // Decode from base64 to get raw data
  $ciphertext = base64_decode($message);
  
  openssl_private_decrypt($ciphertext, $decrypted, $keys['private']);

  echo '<b>Decrypted message: </b>'.$decrypted;
?>