<?php

require 'twilio-php/Services/Twilio.php';

//defaults
$call_blacklist=array();
$sms_blacklist=array();
//config
require '../../config.php';
//check for existing config
if (empty($account_sid) || empty($auth_token) || empty($sender_number) ){
  die("You have to specifiy the important parameters in the config file.");
}

$is_https = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on';
$http_protocol = $is_https ? 'https' : 'http';
$base_root = $http_protocol . '://' . $_SERVER['HTTP_HOST'];
$base_url = $base_root.rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');

//arguments
$to=$_REQUEST['to'];
$sms_message=urldecode($_REQUEST['sms_message']);
$call_message=urldecode($_REQUEST['call_message']);

$client = new Services_Twilio($account_sid, $auth_token); 

if($sms_message != "" && !in_array($to,$sms_blacklist)){
  $client->account->messages->create(array(  
	'From' => $sender_number, 
        'To'   => $to,
	'Body' => $sms_message,   
  ));
}

if($call_message != "" && !in_array($to,$call_blacklist)){
  $client->account->calls->create($sender_number, $to, $base_url.'/call.php?message='.urlencode($call_message), array( 
	'StatusCallback' => $base_url.'/callback.php?message='.urlencode($call_message), 
	'IfMachine' => 'Continue', 
  ));
}

