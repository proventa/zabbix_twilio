<?php
#configuration part for the php part of the twilio oncall alert scripts
#

#REQUIRED: The account SID 
#$account_sid = ''; 

#REQUIRED: the Autorization token
#$auth_token = ''; 

#REQUIRED: the sender number
#$sender_number='';

#A blacklist of numbers that are not called
$call_blacklist=array();

#A blacklist of numbers that don't receive sms
$sms_blacklist=array();

