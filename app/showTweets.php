<?php 


require_once('TwitterAPIExchange.php');


if(isset($_GET['function'])){
    if($_GET['function'] == 'callTwitterAPI'){
        $search = $_GET['search'];
        callTweet($search);
    }

}

function callTweet($search){
    $settings = array(
        'oauth_access_token' => "Your Access Token",
        'oauth_access_token_secret' => "Your Access Token Secret",
        'consumer_key' => "Your Consumer Key",
        'consumer_secret' => "Your Consumer Secret"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';

$requestMethod = "GET";

$getfield = "?q=$search&count=5";

$twitter = new TwitterAPIExchange($settings);
$twitter->setGetfield($getfield)
         ->buildOauth($url, $requestMethod)
         ->performRequest();

$string = json_decode($twitter->setGetfield($getfield)
         ->buildOauth($url, $requestMethod)
         ->performRequest(),$assoc = TRUE);


         if(array_key_exists("errors", $string)) {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
         header('Content-Type: application/json');
        print_r(json_encode($string));
         //$res = json_encode($string);
         //return $res;

}


function getTweetLocation($tweet){

    return $tweet['statuses'][0]['user']['location'];

}

function getTweetInfo($tweet){

    $tweet = $tweet['statuses'][0];
    $text = $tweet['text'];
    $name = $tweet['user']['name'];
    $screen_name = $tweet['user']['screen_name'];
    $profile_image = $tweet['user']['profile_image_url_https'];
    $created_at =$tweet['created_at'];
    $created_at = new DateTime($created_at);
    $created_at =  $created_at->format('j M Y');

    $array_tweet = array("text" => $text, "name" =>$name, "screen_name" =>$screen_name, "profile_image" => $profile_image, "created_at" => $created_at);

    return $array_tweet;

}

function getTweets($tweets){

    $tweets_content = $tweets['statuses'];
    $array_tweets = array();
    foreach($tweets_content as $tweet_content){
        $created_at =$tweet_content['created_at'];
        $created_at = new DateTime($created_at);
    $created_at =  $created_at->format('j M Y');
        $text = $tweet_content['text'];
        $name = $tweet_content['user']['screen_name'];
        $profile_image = $tweet_content['user']['profile_image_url_https'];

        $array_tweets []= array('text'=>$text, 'name' =>$name, 'profile_image' => $profile_image, "created_at" => $created_at);

    }

    return $array_tweets;

}



    






