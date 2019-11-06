<?php
class my{
	public function getAccount(){
		$data = array(
			'multiple' => array(
				'host' 			=> array('smtp-relay.gmail.com'),		// host your smtp
				'username' 		=> array('one@exovin3.business'),	// username your smtp
				'password'		=> array('thariqalfa'),				// password your smtp
				'secure'		=> array('tls'),						// secure your smtp ex : ssl/tls
				'port'			=> array('587')							// port your smtp ex : 25, 80, 465, 587
			),
			'frommail'		=> 'zrandmailapple', // if u want random mail zrandmail (just string and number) or zrandmailapple (includes the apple name)
			'fromname'		=> 'Apple',	// if u want random name fill with zrandname (apple)
			'priority'		=> 1,					// priority 1 = urgent
			'subject'		=> 'Re: Confirm iTunes Purchase.',		// if u want random subject fill with zrandsubject (apple)
			'letter'		=> 'letter.html',		// letter name at letter/
			'language'		=> 'us',					// Language ex : ru,en,id,nl
			'duplicate'		=> true, 					// false = delete duplicate
			'emaillist'		=>'list.txt',				// name emailist at mailist/
			'delay'			=> array(
				'email'			=> 10,				// send email for delay time
				'time'			=> 12				// delay time 
			)
		);
		return $data;
	}

	public function getApiKey(){
		$apikey = array(
			'apikey' 			=> 'Z4209350-6fa-4314-91bb-d9f25c0e4e9d',		// your valid api key
		);
		return $apikey;
	}
}
?>