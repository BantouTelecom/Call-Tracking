<?php
	require "fullcourt.php";
	require "db.php";
	define('AGENT_NUMBER', '81XXXXXXXX'); //set this to the phone number you'd like calls forwarded to
	$ApiVersion = "0.1";
	$AccountSid = "FCxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
	$AuthToken = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

	function format_phone($phone)
	{
		$phone = preg_replace("/[^0-9]/", "", $phone);

		if(strlen($phone) == 8)
			return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
		elseif(strlen($phone) == 10)
			return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phone);
		else
			return $phone;
	}

?>
