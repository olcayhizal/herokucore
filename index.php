<?php

$userid = "";
if(isset($_GET['userid'])){$userid = $_GET['userid'];}

$hashtag = "";
if(isset($_GET['hashtag'])){$hashtag = $_GET['hashtag'];}

if($userid != ""){
		$url = "https://i.instagram.com/api/v1/users/$userid/info/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_TIMEOUT,10);
        ob_start();
        $result=curl_exec($ch);
        echo $result;
}

if($hashtag != ""){
	  	$url = "https://www.instagram.com/explore/tags/$hashtag/?__a=1";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);    // we want headers
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_TIMEOUT,10);
        ob_start();
        $result=curl_exec($ch);
        ob_end_clean();
        echo $result;
}