<?php
/*$config = array(
    "digest_alg" => "sha1",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
$res = openssl_pkey_new($config);
// Extract the private key from $res to $private_key
openssl_pkey_export($res, $private_key);

// Extract the public key from $res to $pubKey
$public_key = openssl_pkey_get_details($res);
$public_key = $public_key["key"];
echo 'Public key :'.$public_key. '</br></br>';
echo 'Private key :'.$private_key.'</br></br>';*/

$private_key = '-----BEGIN PRIVATE KEY----- 
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDH5qjqDVC3U1Ef edjfd1x6L/zCpl/yojcjMu42Idu0PR1ElcN0E/IVRpsGXkfUGJwJf077Rdgn4BnH fX9rjVyCVBlWeG7ll72g1ub1xUmi/GEleuUH2wzGYkBI8FG47XnYE2iqJNfL9y9m orpKxsP3hSZU+Ex/u16zVUPpJOKJLLx8jYYvYlg5E/hZKTYywYklDn6tChmReQAv KIuq+vDLh+nAIj0/todb0VkjFdPpCsNHhf0zPw8FuqfAPz+9k8rO2W9AYXUJ2Y6M JuvzKhurfU+TFIS2DCx4pyArLQG75azj/LxWx7GvvWk0LlIc9GPfMYXk9/w/YcJZ /2PL9xBTAgMBAAECggEAP6FXcTEN2V0G/IrvkqpO4IH35gnJjtU90dF7a/W5FpVB hLxbO87Bhy4zWIKYQJYYzRkeDfO8i2zVJ9/1uEmGAeI9Mn4hZqm3bcQaPm8vMlc9 oQ2Oa8K5PUi3B8Cfcsr8tt/uuAIEQuOKzhPMUtMUO+zBN9jVmO8OhO0GMedQyLLJ qOutNrvqQYOW3F2QpNOgieWZxSKQSiYyJ+g+EY/wP8ac+/spVbFCSeV9hF4dRavQ x9sol8GeF4nEQC2F065/x3ApKJo/YdifZHNteK4ZFnLYXxVxe27AqMAUoELdPS23 AjzeIZnVCuGwCyQViDz3lipB6dQ8/nd2/IXtHaH9YQKBgQDrHzipZDXZZDZJZh3d 3MqYhgi/JOo06E/VlxhiG1EEjJ1p7lo4qq20Nk9Yfd3tVK4TUhi634miv/T/bmBy kq+KtfwR2B+xRI6BSUlRsvaMcBaMsgbTlAXV7ix5GLDS1How+/lox2ctcTQKrccQ iEbW5N7EAneXiVoelCkefPsvAwKBgQDZpsxNItQ5ppEULeHEtvTyipnC4pmJkkrs Dl6nB4vC5MUPr4RV6JXQiwKBuI0CZvGDVJ5/+ydLP1sRbXjfY3XMpU2FWsPrKWS1 gV4c3pXViszW6EvKxSAFh3zuOCc4VyRa2/OQpJIZQDV38RqvTFFeKN8rUnqdmBGp AC2An4JwcQKBgHqtwK/JpLs4KYckrAK+GEt67Adn6HgQms80VjmiTSSVhfDmt9aH X7j++WmPywLxQx67oEGpLzRm+hto6RP+627xw4NABFFHFx/oMERbn37pYSqqHRu6 SU01R6krs99dlCAI6Tq9iF1SirfjslEy+dtYcc9OBj5gIVCBN+87gQgnAoGAaHeG 1/8/new09lqPYrvuFfwwkTnyN/XfwC2lgMY+bu0fKMg13IYmYlJWgazzAZQnl8Gl 0gfadGOUcmj4+z/h6rfs3XUTVGwpynStl22+vSBB8WTN/CVhmUXO0QhiysgIyxOH dIWJGlWXVFqFVF5tL6SueTy9Xab/0v4i2Pm2wgECgYEAqI4cdGk/z0ynhFpS/5hB tBSu7KO3IqCi35Gnu47SsoQLUeV1UDecazryjepQj3boXHwsIbvVSO2mFsgeeb4/ SuHFYQEZso+yVC2VM/sv97sDSb2rdHdlkgH/JeOItXAFbBI8qCqp36YYtfLh24aW lNpNCHaWS5NXMhesC3hYeZw= 
-----END PRIVATE KEY-----';

$public_key = '-----BEGIN PUBLIC KEY----- 
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAx+ao6g1Qt1NRH3nY33dc ei/8wqZf8qI3IzLuNiHbtD0dRJXDdBPyFUabBl5H1BicCX9O+0XYJ+AZx31/a41c glQZVnhu5Ze9oNbm9cVJovxhJXrlB9sMxmJASPBRuO152BNoqiTXy/cvZqK6SsbD 94UmVPhMf7tes1VD6STiiSy8fI2GL2JYORP4WSk2MsGJJQ5+rQoZkXkALyiLqvrw y4fpwCI9P7aHW9FZIxXT6QrDR4X9Mz8PBbqnwD8/vZPKztlvQGF1CdmOjCbr8yob q31PkxSEtgwseKcgKy0Bu+Ws4/y8Vsexr71pNC5SHPRj3zGF5Pf8P2HCWf9jy/cQ UwIDAQAB 
-----END PUBLIC KEY-----';

$data = '{"data":"makes life worth living makes life  makes life worth living makes "}';

echo "data in:\n$data\n\n</br></br>";

$encrypted = $e = NULL;
openssl_seal($data, $encrypted, $e, array(trim($public_key)));

$sealed_data = base64_encode($encrypted);
$encreptedData = base64_encode($e[0]);

//echo "sealed data:\n$sealed_data\n\n</br></br>";
echo "Encrepted Data:\n$encreptedData\n\n</br></br>";

$input = base64_decode($sealed_data);
$einput = base64_decode($encreptedData);

$plaintext = NULL;
openssl_open($input, $plaintext, $einput, trim($private_key));

echo "data out:\n$plaintext\n</br></br>";