<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/../vendor/autoload.php';

$mailbox = '{imap.gmail.com:993/imap/ssl}';
$username = '...@gmail.com';
$accessToken = '...';

@include 'variables.php';

$imap = imap2_open($mailbox, $username, $accessToken, );

$countMessages = imap2_num_msg($imap);

echo "This mailbox contains: $countMessages emails.\n";
