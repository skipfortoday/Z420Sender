<?php
// last update on 17/03/2018
class loader{
	public function getAccount(){
	require('my.php');
		$data = array(
			'multiple' => array(
				'host' 			=> $hostname,
				'username' 		=> $username,
				'password'		=> $password,
				'secure'		=> $secure,
				'port'			=> $port
			),
			'sensoremail'	=> $sensoremail,
			'frommail'		=> $frommail,
			'fromname'		=> $fromname,
			'priority'		=> $priority,
			'mailtype'		=> $mailtype,
			'subject'		=> $subject,
			'letter'		=> $letter,
			'attachment'	=> $attachment,
			'language'		=> $language,
			'duplicate'		=> $duplicate,
			'remove'		=> $removeaftersend,
			'emaillist'		=> $emaillist,
			'link'			=> $link,
			'delay'			=> array(
				'email'			=> $email,
				'time'			=> $delay 
			)
		);
		return $data;
	}
}
?>