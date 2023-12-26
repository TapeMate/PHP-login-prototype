<?php
// general HASHING:
// salt and pepper are paremeters of hashing in general terms
$sensitiveData = "Krossing";
// create 16 bytes of data for hashing in hexa decimal
// pepper and salt should be stored in a dif. database
$salt = bin2hex(random_bytes(16)); // Gerate rnd salt
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

// password HASHING:
// most parameters are given via build in password_hash method
$pwdSignup = "Krossing";

$options = [
    "cost" => 12
];

// updated via PHP standards by its self
// password_hash($pwd, PASSWORD_DEFAULT);

// PASSWORD_DEFAULT currently has BCRYPT inside it
// third factor is the s.c. cost factor for improved security
// storing cost option into array to not have error
// store the whole code in a variable called $hashedPwd
// hashedPwd in a database on production
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Krossing";
// compares the new hashed and the login password
if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are not the same!";
}
