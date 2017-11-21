<?php
require_once "vendor/autoload.php";

$data = [
  'username' => 'aasdasdasd',
  'password' => 123457856
];

$is_valid = GUMP::is_valid($data, array(
    'username' => 'required|alpha_numeric',
    'password' => 'required|max_len,100|min_len,6'
));

var_dump($is_valid);

if ($is_valid) {
//    registerUser();
}