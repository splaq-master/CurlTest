<?php

$postfields = array();
$postfields["action"] = "submit";
$postfields["author"] = "Spammer";
$postfields["email"] = "spammer@spam.com";
$postfields["url"] = "http://www.iamaspammer.com/";
$postfields["comment"] = "I am a stupid spammer.";
$postfields["comment_post_ID"] = "9";
$postfields["comment_parent"] = "0";
//Url of the form submission
$url = "http://localhost/wordpress/?p=1";
$useragent = "Mozilla/5.0";
$referer = $url; 

//Initialize CURL session
$ch = curl_init($url);
//CURL options
curl_setopt($ch, CURLOPT_POST, true);
//We post $postfields data
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
//We define an useragent (Mozilla/5.0)
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
//We define a refferer ($url)
curl_setopt($ch, CURLOPT_REFERER, $referer);
//We get the result page in a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//We exits CURL
$result = curl_exec($ch);
curl_close($ch);

//Finally, we display the result
echo $result;
?>