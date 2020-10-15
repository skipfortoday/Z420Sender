<?php
date_default_timezone_set("Asia/Jakarta");
// last update on 17/03/2020
// Import PHPMailer classes ikethe global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
require('setting.php');
require('loader.php');

$setting      	= new setting;
$loader 	   	= new loader;

$rand = rand(1,9);
echo "\033[34m                 ,/{}		 \n";
echo "\033[34m                ,/  {|		 \n";
echo "\033[34m            ,,,/    {|,		 \n";
echo "\033[34m      __--~~        {| ~-,	 \n";
echo "\033[34m__--~~              {     `\ \n";
echo "\033[34m                        ,__ \		   	 /$$$$$$$$/$$   /$$  /$$$$$$   /$$$$$$ \n";
echo "\033[34m                       `,\{),\,			|_____ $$| $$  | $$ /$'__  $$ /$$'_  $$\n";
echo "\033[34m                      __-~  `_ ~-_ 		     /$$/| $$  | $$|__/  \ $$| $$$$\ $$\n";
echo "\033[34m                   _-~        ~~-_`~-_ 	    	    /$$/ | $$$$$$$$  /$$$$$$/| $$ $$ $$\n";
echo "\033[34m                  '               `~-_`~-__ 	   /$$/  |_____  $$ /$'____/ | $$\ $$$$\n";
echo "\033[34m                  `,                  `~-\_|	  /$$/         | $$| $$      | $$ \ $$$\n";
echo "\033[34m                   `,      _-----___    _,'	 /$$$$$$$$     | $$| $$$$$$$$|  $$$$$$/\n";
echo "\033[34m                   / /--__  ~~--__  `~,~	|________/     |__/|________/ \______/ \n";
echo "\033[34m                    /     ~~--__  ~-',		\n";
echo "\033[34m                   /            ~~--'		\n";
echo "\n";
echo "\n";
echo "\033[3".$rand."m================================== Z402 Sender Ready ==================================\n";
$messageTitle 	= json_encode(['version' => 'v1.6', 'message' => 'Open source Z420Sender']);
$expired 	= json_encode(['expired' => 'true', 'message' => 'Open source Z420Sender']);
$checking 	= json_encode(['valid' => 'true', 'message' => 'Open source Z420Sender']);
$access 	= json_encode(['access' => 'true', 'message' => 'Open source Z420Sender', 'ip' => 'Todo Updated Get IP']);

$messageTitleJson 	= json_decode($messageTitle);
$expiredjson 	= json_decode($expired);
$checkingjson 	= json_decode($checking);
$accessjson 	= json_decode($access);
$version = $messageTitleJson->version;

echo $messageTitleJson->version . " ". $messageTitleJson->message."\n\n";
if ($checkingjson->valid == 'true') {
	if ($expiredjson->expired == 'true') {
		if ($accessjson->access == 'true') {
			echo "============ Accessing Z420 : ".$accessjson->access.", your ip ".$accessjson->ip ." valid on Z420 server =============\n";
			try {
				$account 		= $loader->getAccount();
				if ($account['duplicate'] == true) {
					$setting->duplicate('mailist/'.$account['emaillist'].'', $account['duplicate']);
					echo "Wait a second, cleaning your emailist [".$account['emaillist']."]. \n";
					sleep(10);
				}else{
					echo "Emailist no changes [".$account['emaillist']."]. \n";
				}
				
				$mailist 		= $setting->getMailist('mailist/'.$account['emaillist'].'', $account['duplicate']);
				$emaillist 		= $mailist['list'];
				$filter 		= $setting->getFilterMail('mailist/'.$account['emaillist'].'', $account['duplicate']);
				
				echo "Microsoft   : ". $filter['microsoft']. "\n";
				echo "Yahoo 	    : ". $filter['yahoo']. "\n";
				echo "Google 	    : ". $filter['google']. "\n";
				echo "Aol 	    : ". $filter['aol']. "\n";
				echo "Others 	    : ". $filter['others']. "\n";
				echo "========== Waiting a second, for sender access your ISP, checking network speed.  ===========\n";
				$sended = 1;
				$delay = 0;
				$start = microtime(true);
				$end = 0;
				$result = count($emaillist);
				// array_unshift($emaillist, 'rrahmadiniv@hotmail.com', 'rrahmadini@aol.com', 'rahmadini@yahoo.com');
				foreach ($emaillist as $key => $email) {
					$randmailapple 	= $setting->random_mail_apple();
					$randmail 		= $setting->random_mail();
					$randsubject 	= $setting->random_subject();
					$randname 		= $setting->random_name();
					$randstring2 	= $setting->random_string_lowercase(2);
					$randstring3 	= $setting->random_string_lowercase(3);
					$randstring4 	= $setting->random_string_lowercase(4);
					$randstring5 	= $setting->random_string_lowercase(5);
					$randnumber2 	= $setting->random_number(2);
					$randnumber3 	= $setting->random_number(3);
					$randnumber4 	= $setting->random_number(4);
					$randnumber5 	= $setting->random_number(5);
					$date 			= $setting->getDate();
					$randcountry = $setting->random_country();
					$randip = $setting->random_IP();

					$elapsed = $end  - $start;
					$end = microtime(true);
					
					$email  = trim(strtolower($email));
					$total 	= count($account['multiple']['username']) - 1;
					$mix 	= rand(0, $total);

					$total2 = count($account['link']) - 1;
					$mix2 	= rand(0, $total2);

					if ($account['sensoremail'] == true) {
						$emailsensored = str_replace(array('a', 'i', 'u', 'e', 'o'), array('*', '*', '*', '*', '*'), $email);
					}else{
						$emailsensored = $email;
					}

					$feature = array(
						'[#email#]'   => $emailsensored,
						'[#country#]' => $randcountry,
						'[#ip#]'      => $randip,
						'[#zrandnumber2#]'  => $randnumber2,
						'[#zrandnumber3#]'  => $randnumber3,
						'[#zrandnumber4#]'  => $randnumber4,
						'[#zrandnumber5#]'  => $randnumber5,
						'[#zrandstring2#]'  => $randstring2,
						'[#zrandstring3#]'  => $randstring3,
						'[#zrandstring4#]'  => $randstring4,
						'[#zrandstring5#]'  => $randstring5,
						'[#date#]'    => $setting->getDate(),
						'[#browser#]' => $setting->random_browser(),
						'[#link#]' 	=> $account['link'][$mix2]
					);

					$mail 			= new PHPMailer(true);                          // Passing `true` enables exceptions
					// Server settings
					// $mail->SMTPDebug = 1;                                 // Enable verbose debug output
					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = $account['multiple']['host'][$mix];  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = $account['multiple']['username'][$mix];                 // SMTP username
					$mail->Password = $account['multiple']['password'][$mix];                           // SMTP password
					$mail->SMTPSecure = $account['multiple']['secure'][$mix];                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = $account['multiple']['port'][$mix];                                    // TCP port to connect to
					$mail->SMTPOptions = array(
						'ssl' => array(
							'verify_peer'  => false,
							'verify_peer_name'  => false,
							'allow_self_signed' => true
						)
					);

					//Recipients
					if ($account['frommail'] == 'zrandmail') {
						$frommail = $randmail;
					}elseif ($account['frommail'] == 'zrandmailapple') {
						$frommail = $randmailapple;
					}else{
						$myfeature = array(
							'[#zrandnumber2#]'  => $randnumber2,
							'[#zrandnumber3#]'  => $randnumber3,
							'[#zrandnumber4#]'  => $randnumber4,
							'[#zrandnumber5#]'  => $randnumber5,
							'[#zrandstring2#]'  => $randstring2,
							'[#zrandstring3#]'  => $randstring3,
							'[#zrandstring4#]'  => $randstring4,
							'[#zrandstring5#]'  => $randstring5
						);
						$custom = $account['frommail'];
						$frommail = $setting->getFrommailSetting($myfeature, $custom);
					}

					if ($account['fromname'] == 'zrandname') {
						$fromname = $randname;
					}else{
						$myfeature = array(
							'[#zrandnumber2#]'  => $randnumber2,
							'[#zrandnumber3#]'  => $randnumber3,
							'[#zrandnumber4#]'  => $randnumber4,
							'[#zrandnumber5#]'  => $randnumber5,
							'[#zrandstring2#]'  => $randstring2,
							'[#zrandstring3#]'  => $randstring3,
							'[#zrandstring4#]'  => $randstring4,
							'[#zrandstring5#]'  => $randstring5
						);
						$custom = $account['fromname'];
						$fromname = $setting->getFromnameSetting($myfeature, $custom);
					}
					$mail->setFrom($frommail, $fromname);
					$mail->addAddress($email);

					if ($account['attachment'] != '') {
						// $attachment = file_get_contents($account['attachment']);
						$mail->AddAttachment('attachment/'. $account['attachment']);
					}

					//Content
					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->setLanguage($account['language']);
					$mail->Priority 	= $account['priority'];
					if ($account['mailtype'] == 'microsoft') {
						if ($account['priority'] == 1) {
							$mail->XMailer = "Gibberish";
							$mail->AddCustomHeader("Importance: High");
							$mail->AddCustomHeader("X-MSMail-Priority: High");	// Not sure if Priority will also set the Importance header:
						}
					}elseif ($account['mailtype'] == 'yahoo') {
						$mail->AddCustomHeader("From: EGROUPS");
						$mail->AddCustomHeader("Importance: High");
					}elseif ($account['mailtype'] == 'aol') {
						
					}else{

					}
					$mail->Encoding         = 'base64';
					$mail->CharSet          = 'UTF-8';
					// $mail->ContentType      = 'text/html;charset=utf-8';
					$mail->ContentType      = 'plain/text';
					$mail->MessageDate      = $setting->getDate();
					if ($account['subject'] != 'zrandsubject') {
						$myfeature = array(
							'[#email#]'   => $email,
							'[#country#]' => $randcountry,
							'[#ip#]'      => $randip,
							'[#zrandnumber2#]'  => $randnumber2,
							'[#zrandnumber3#]'  => $randnumber3,
							'[#zrandnumber4#]'  => $randnumber4,
							'[#zrandnumber5#]'  => $randnumber5,
							'[#zrandstring2#]'  => $randstring2,
							'[#zrandstring3#]'  => $randstring3,
							'[#zrandstring4#]'  => $randstring4,
							'[#zrandstring5#]'  => $randstring5,
							'[#date#]'    => $setting->getDate(),
							'[#browser#]' => $setting->random_browser()
						);

						$custom = $account['subject'];
						$subject = $setting->getSubjectSetting($myfeature, $custom);
					}else{

						$subject = $randsubject;
					}
					$mail->Subject = $subject;
					$mail->msgHTML($setting->getLetter($feature, 'letter/'.$account['letter'].''));


					if ($mail->send()) {
						$info = 'Has send';
					}else{
						$info = 'Fail send';
					}

					$hours = number_format($elapsed + $account['delay']['time'], 0, '.', '');
					$minutes = $hours % 3600;
					$second = $minutes % 3600;
					// if ($email != 'rachelyankov@hotmail.com' && $email != 'rachelyankov@aol.com' && $email != 'rachelyankov@yahoo.com') {
						if ($delay === $account['delay']['email']){
							echo "Waiting ".$account['delay']['time']." second, ".number_format($hours / 3600, 0)." hours ".number_format($minutes / 60, 0)." minutes and ".number_format($second % 60, 0)." second elapsed, with ratio ".$account['delay']['email']." req / ".$account['delay']['time']." second.\n";
							sleep($account['delay']['time']);
							echo $version.' ['.date('H:m:s').' from '.$account['emaillist'].']['.$sended.'/'.$mailist['total'].'] '.$info.' to '.$email.' SMTP => '. $account['multiple']['username'][$mix];
							$delay = 0;
						}
						else{
							echo $version.' ['.date('H:m:s').' from '.$account['emaillist'].']['.$sended.'/'.$mailist['total'].'] '.$info.' to '.$email.' SMTP => '. $account['multiple']['username'][$mix];
						}
						echo "\n";
					// }
					if ($account['remove'] == true) {
						$file = 'mailist/'. $account['emaillist'];
						$array = file($file);
						unset($array[0]);
						$fp = fopen($file, 'w+');

						foreach($array as $line){
							fwrite($fp,$line); 
						}
						fclose($fp);
					}


					$sended++;
					$delay++;
				}
				echo "\n";
				echo "\n";
				echo "\033[3".$rand."m================================= Success Spammed Z420 =================================\n";
				echo "\033[3".$rand."m================================= Z420 Sender 2020 ".$version." ================================\n";
			} catch (Exception $e) {
				echo 'Message could not be sent.';
				echo 'Z420Sender Error: ' . $mail->ErrorInfo;
			}
		}else{
			echo "\033[3".$rand."m======= Accessing Z420 : ".$accessjson->access.", your ip ".$accessjson->ip." not valid on Z420 server ========\n";
			echo "\033[3".$rand."m============================== Coba Lagi ===============================\n";
			echo "\033[3".$rand."m=================================== Z420 Sender 2020 ".$version." ==================================\n";
		}
	}else{
		echo "\033[3".$rand."m============================ ".$expiredjson->message." =============================\n";
		echo "\033[3".$rand."m=================================== Z420 Sender 2020 ".$version." ==================================\n";

	}
}else{
	echo "\n";
	echo "\n";
	echo "\033[3".$rand."m=========================== Apikey tidak valid ============================\n";
	echo "\033[3".$rand."m=============================== Ada Masalah? Kontak Alfaben ===============================\n";
	echo "\033[3".$rand."m=================================== Z420 Sender 2020 ".$version." ===================================\n";
}
