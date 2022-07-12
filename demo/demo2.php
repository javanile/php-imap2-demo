<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__.'/../vendor/autoload.php';

$mailbox = '{imap.gmail.com:993/imap/ssl}';
$username = '_______________@gmail.com';
$accessToken = 'ya29._______________';

@include 'variables.php';

echo "UTF7 Decode: ".imap_utf7_decode("\x5A\x6F\xEB")."\n";
echo "UTF7 Encode: ".imap_utf7_encode("\x5A\x6F\xEB")."\n";
echo "Convert to UTF8: ".imap_utf8("\x5A\x6F\xEB")."\n";

die();

$imap = imap2_open($mailbox, $username, $accessToken, OP_XOAUTH2);

/*
imap_timeout


imap_createmailbox
imap_getmailboxes
imap_mail_move
imap_delete

imap_fetchstructure
imap_fetchbody
imap_body
imap_fetchmime
imap_headerinfo

imap_errors
imap_last_error

imap_num_msg

imap_expunge
imap_close
*/
