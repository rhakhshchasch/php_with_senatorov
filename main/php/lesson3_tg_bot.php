<?php 

$bot_token = '6256030793:AAFVO4aBuG4CdVjhqxV8vcRxFh1iqJRLcsk';
$api_url = 'https://api.telegram.org/bot' . $bot_token . '/';
$update = file_get_contents('php://input');

var_dump($update);