<?php


$config['smtp_host'] = 'ssl://smtp.gmail.com';
$config['smtp_user'] = '#########@kharisma.ac.id';
$config['smtp_pass'] = '*********';
// $config['smtp_user'] = 'backend@kharisma.ac.id';
// $config['smtp_pass'] = 'BEnd_BA20';

$config['useragent'] = 'SISKA 4.0 Mailer';
$config['protocol'] = 'smtp';
$config['smtp_port'] = 465;

$config['smtp_timeout'] = 5;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 76;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['validate'] = FALSE;
$config['priority'] = 3;
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;
