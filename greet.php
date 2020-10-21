<?php
namespace MyGreeter;

class Client{

	public function __construct($timezone="Asia/Shanghai"){
		date_default_timezone_set($timezone);
	}
	
	public function getGreeting() 
	{

		$cur_hour = date('H');

		if($cur_hour<12) return "Good morning";

		if($cur_hour>=12 && $cur_hour<=18) return "Good afternoon";

		return "Good evening";
	}

}

//eg
$a = new \MyGreeter\Client();
echo $a->greeting();
