<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/../vendor/autoload.php';

$mailbox = '{imap.gmail.com:993/imap/ssl}';
$username = '_______________@gmail.com';
$accessToken = 'ya29._______________';

@include 'variables.php';

$imap = imap2_open($mailbox, $username, $accessToken, OP_XOAUTH2);

$countMessages = imap2_num_msg($imap);
$lastMessage = imap2_body($imap, $countMessages);

echo "This mailbox contains: $countMessages emails.\n";
#echo "Last message is:\n $lastMessage";
