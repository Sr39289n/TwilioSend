<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = " "; //add sid
$token  = " "; //add auth token
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create(" ", // add your own number to send message to 
                           array( 
                               "from" => "+12672744008",       
                               "body" => "Hello from Shreyas Rathod CS 643 Fall 2018" 
                           ) 
                  ); 
 
print($message->sid);