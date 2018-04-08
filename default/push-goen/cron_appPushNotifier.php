#!/usr/bin/php
<?php
chdir ("/virtual/htdocs/default/push-kazuya/") ;

require_once '/virtual/htdocs/default/push-kazuya/AndroidPushNotifier.php';
require_once '/virtual/htdocs/default/push-kazuya/iosPushNotifier.php';

$android = new AndroidPushNotifier();
$android->push();
$ios = new iosPushNotifier();
$ios->push();
