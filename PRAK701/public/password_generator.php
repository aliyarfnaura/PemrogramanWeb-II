<?php
$password = 'inipasswordnaura16';
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo "Password asli: $password<br>";
echo "Hash-nya: $hashed";