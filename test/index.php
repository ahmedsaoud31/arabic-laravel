<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

Use Arabic\Arabic;

$arabicText = 'إضافة اللغة العربية لإطار العمل لارافيل';
$len = 40;
echo Arabic::cut($arabicText, $len);
