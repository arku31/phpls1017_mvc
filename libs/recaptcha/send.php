<?php
require __DIR__."/../../vendor/autoload.php";
$remoteIp = $_SERVER['REMOTE_ADDR'];
$gRecaptchaResponse = $_REQUEST['g-recaptcha-response'];
$recaptcha = new \ReCaptcha\ReCaptcha("6LcMqhoTAAAAAJ9nssS4b2Rh-0ggo3cYyJjCXSbZ");
$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
if ($resp->isSuccess()) {
   echo "Успех, капча пройдена";
} else {
    echo "Поражен вашей неудачей, сударь";
}