<?php
session_start();
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "TEFLAcademyUK";
$notweets = 30;
$consumerkey = "AoVtp4euxDQIvfDTy4nmxw";
$consumersecret = "0aKo9Mp4QmlwlY2erKLHUtnbUVPN2O4G2EMnD4wlQQ";
$accesstoken = "538615014-xmV4pxbI84RBAFJKyieTOnZCyNcBzLKODuRLuJOB";
$accesstokensecret = "1sSp5jLXYjE3syqOSVpCqE38xfSbAT8f0xo96F4dhHl8N";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>