<?php
// last update on 16/02/2018
class setting{
	public $string				= "a121212121212STUVWXYZ1234567890";
	public $number				= "11111111";

	public function duplicate($file, $duplicate = true){
		$data = file($file);
		if ($duplicate == 1) {
			$result = file_put_contents($file, implode(array_unique($data))); 
		}else{
			$result = $file;
		}
	}
	public function getFilterMail($file, $duplicate){
		$file = file_get_contents($file);

		if($file == ""){
			echo "\nEmailist not found.";
			exit;
		}

		if (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
			$file = explode("\r\n", $file);
		}else {
			$file = explode("\n", $file);
		}

		if($duplicate == 1){
			$file = array_unique($file);
		}elseif($duplicate == 2){
			$file = $file;
		}

		$keyhotmail = '@hotmail';
		$hotmail = array_filter($file, function ($item) use ($keyhotmail) {
			if (stripos($item, $keyhotmail) !== false) {
				return true;
			}
			return false;
		});

		$keylive = '@live';
		$live = array_filter($file, function ($item) use ($keylive) {
			if (stripos($item, $keylive) !== false) {
				return true;
			}
			return false;
		});

		$keymsn = '@msn';
		$msn = array_filter($file, function ($item) use ($keymsn) {
			if (stripos($item, $keymsn) !== false) {
				return true;
			}
			return false;
		});

		$keyoutlook = '@outlook';
		$outlook = array_filter($file, function ($item) use ($keyoutlook) {
			if (stripos($item, $keyoutlook) !== false) {
				return true;
			}
			return false;
		});

		$keypassport = '@passport';
		$passport = array_filter($file, function ($item) use ($keypassport) {
			if (stripos($item, $keypassport) !== false) {
				return true;
			}
			return false;
		});

		$keyyahoo = '@yahoo';
		$yahoo = array_filter($file, function ($item) use ($keyyahoo) {
			if (stripos($item, $keyyahoo) !== false) {
				return true;
			}
			return false;
		});

		$keygmail = '@gmail';
		$gmail = array_filter($file, function ($item) use ($keygmail) {
			if (stripos($item, $keygmail) !== false) {
				return true;
			}
			return false;
		});

		$keygooglemail = '@googlemail';
		$googlemail = array_filter($file, function ($item) use ($keygooglemail) {
			if (stripos($item, $keygooglemail) !== false) {
				return true;
			}
			return false;
		});

		$keyaol = '@aol';
		$aol = array_filter($file, function ($item) use ($keyaol) {
			if (stripos($item, $keyaol) !== false) {
				return true;
			}
			return false;
		});

		$keyyandex = '@yandex';
		$yandex = array_filter($file, function ($item) use ($keyyandex) {
			if (stripos($item, $keyyandex) !== false) {
				return true;
			}
			return false;
		});

		return array(
			'all' 		=> count($file),
			'microsoft' => count($hotmail + $live + $msn + $outlook + $passport), 
			'yahoo'  	=> count($yahoo), 
			'google' 	=> count($gmail + $googlemail), 
			'aol' 		=> count($aol), 
			'yandex'  	=> count($yandex), 
			'others'  	=> count($file) - count($hotmail + $live + $msn + $outlook + $passport + $yahoo + $gmail + $googlemail + $aol + $yandex)
		);
	}
	
	public function getMailist($file, $duplicate = false){
		$file = file_get_contents($file);

		if($file == ""){
			echo "\nEmailist not found.";
			exit;
		}

		if (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
			$file = explode("\r\n", $file);
		}else {
			$file = explode("\n", $file);
		}

		if($duplicate == 1){
			$file = array_unique($file);
		}elseif($duplicate == 0){
			$file = $file;
		}

		return array(
			'total' => count($file),
			'list'  => $file, 
		);
	}

	public function array_random(array $array) {
		return $array[array_rand($array, 1)];
	}

	public function random_country(){
		$randcon = $this->array_random(
			array(
				'Uganda', 
				'Príncipe', 
				'Puerto Rico', 
				'Solomon Islands', 
				'Barbados', 
				'Mali', 
				'Tobago', 
				'Tanzania', 
				'Herzegovina', 
				'Caribbean Netherlands', 
				'Italy', 
				'Wallis',
				'Rwanda', 
				'Curaçao', 
				'Niger', 
				'Guinea', 
				'Brunei', 
				'St. Lucia', 
				'Romania', 
				'Nauru', 
				'Guam', 
				'Sri Lanka', 
				'Oman', 
				'Bhutan', 
				'Afghanistan', 
				'Qatar', 
				'Haiti', 
				'United Kingdom', 
				'Botswana', 
				'Miquelon', 
				'South Georgia',
				'North Korea', 
				'Guinea-Bissau', 
				'Mayotte', 
				'Yemen', 
				'Jamaica', 
				'Cape Verde', 
				'Antarctica', 
				'Isle of Man', 
				'Spain', 
				'Equatorial Guinea', 
				'Guadeloupe', 
				'Kiribati', 
				'Ethiopia', 
				'British Virgin Islands', 
				'Laos', 
				'Turks',
				'Chad', 
				'Uzbekistan', 
				'Morocco', 
				'Namibia', 
				'Åland Islands',
				'Uruguay', 
				'Burundi', 
				'Peru', 
				'Sierra Leone', 
				'Montserrat', 
				'Myanmar (Burma)', 
				'Russia', 
				'Svalbard',
				'St. Kitts',
				'Monaco', 
				'Argentina', 
				'Albania',
				'Jordan', 
				'Singapore', 
				'Bosnia',
				'Christmas Island', 
				'Brazil', 
				'Pitcairn Islands', 
				'Colombia', 
				'Andorra', 
				'Czech Republic', 
				'Tonga', 
				'St. Martin', 
				'Netherlands Antilles', 
				'Cuba', 
				'Portugal', 
				'Pakistan', 
				'São Tomé',
				'Western Sahara', 
				'Mozambique', 
				'Georgia', 
				'Costa Rica', 
				'Algeria', 
				'Vietnam', 
				'St. Vincent','Grenadines', 
				'Congo - Kinshasa', 
				'Iraq', 
				'Indonesia', 
				'Switzerland', 
				'Canada', 
				'Niue', 
				'Gibraltar', 
				'Turkmenistan', 
				'Sudan', 
				'China', 
				'Kuwait', 
				'Guatemala', 
				'Norfolk Island', 
				'Estonia', 
				'Moldova', 
				'Greece', 
				'South Sudan', 
				'Malawi', 
				'Palau', 
				'Gambia', 
				'Bulgaria', 
				'Libya', 
				'Aruba', 
				'Syria', 
				'Montenegro', 
				'Panama', 
				'Marshall Islands', 
				'Central African Republic', 
				'Bolivia',
				'Senegal', 
				'New Zealand', 
				'Poland', 
				'Timor-Leste', 
				'Greenland', 
				'Macau SAR China', 
				'Nigeria', 
				'Austria', 
				'Seychelles', 
				'Micronesia', 
				'Liechtenstein', 
				'Burkina Faso', 
				'India', 
				'Papua New Guinea', 
				'Cook Islands', 
				'Japan', 
				'Swaziland', 
				'Guernsey', 
				'France', 
				'Philippines', 
				'St. Barthélemy', 
				'Cameroon', 
				'St. Helena', 
				'Tokelau', 
				'Chile', 
				'Malta', 
				'Ireland', 
				'Iran', 
				'Zambia', 
				'Zimbabwe', 
				'Mexico', 
				'Jersey', 
				'Denmark', 
				'Croatia', 
				'San Marino', 
				'Sweden', 
				'Guyana', 
				'Lithuania', 
				'Kyrgyzstan', 
				'Hungary', 
				'Paraguay', 
				'Ghana', 
				'Trinidad',
				'Nevis', 
				'Somalia', 
				'American Samoa', 
				'Dominica', 
				'U.S. Virgin Islands', 
				'Dominican Republic', 
				'Belgium', 
				'Ecuador', 
				'New Caledonia', 
				'Luxembourg', 
				'Iceland', 
				'Mongolia', 
				'Belarus', 
				'Grenada', 
				'Tuvalu', 
				'Faroe Islands', 
				'Palestinian Territories', 
				'United States', 
				'Malaysia', 
				'Lebanon', 
				'Slovakia', 
				'Barbuda',
				'Kenya', 
				'South Africa', 
				'Maldives', 
				'Tunisia', 
				'Ukraine', 
				'Armenia', 
				'South Sandwich Islands', 
				'Kazakhstan', 
				'Côte d’Ivoire', 
				'Egypt', 
				'Thailand', 
				'Israel', 
				'Caicos Islands', 
				'Cambodia', 
				'Venezuela', 
				'Vanuatu', 
				'Tajikistan', 
				'Liberia', 
				'Lesotho', 
				'Netherlands', 
				'Fiji', 
				'Germany', 
				'El Salvador', 
				'Bahrain', 
				'Réunion', 
				'Turkey', 
				'Gabon', 
				'Australia', 
				'Finland', 
				'Eritrea', 
				'Martinique', 
				'Norway', 
				'Mauritania', 
				'Saudi Arabia', 
				'Futuna', 
				'Northern Mariana Islands', 
				'St. Pierre',
				'Togo', 
				'Angola', 
				'Vatican City', 
				'Azerbaijan', 
				'Jan Mayen', 
				'Macedonia', 
				'Falkland Islands', 
				'Honduras', 
				'Congo - Brazzaville', 
				'Kosovo', 
				'Hong Kong SAR China', 
				'Samoa', 
				'Antigua',
				'Mauritius', 
				'Nicaragua', 
				'Slovenia', 
				'Comoros', 
				'Sint Maarten', 
				'Bangladesh', 
				'Madagascar', 
				'French Guiana', 
				'Anguilla', 
				'Serbia', 
				'Nepal', 
				'Bahamas', 
				'Djibouti', 
				'Benin', 
				'Cocos (Keeling) Islands', 
				'Latvia', 
				'Cyprus', 
				'United Arab Emirates', 
				'French Polynesia', 
				'Taiwan', 
				'Cayman Islands', 
				'Bermuda', 
				'Suriname', 
				'South Korea', 
				'Belize'
			)
);
$random_country = rand(0,13);
switch($random_country)
{
	case 1:
	return $randcon;
	break;
	case 2:
	return $randcon;
	break;
	case 3:
	return $randcon;
	break;
	case 4:
	return $randcon;
	break;
	case 5:
	return $randcon;
	break;
	case 6:
	return $randcon;
	break;
	case 7:
	return $randcon;
	break;
	case 8:
	return $randcon;
	break;
	case 9:
	return $randcon;
	break;
	case 10:
	return $randcon;
	break;
	case 11:
	return $randcon;
	break;
	case 12:
	return $randcon;
	break;
	case 13:
	return $randcon;
	break;
	default:
	return $randcon;
	break;
}
}

public function random_ip(){
	$randIP= ''.mt_rand(0,255).'.'.mt_rand(0,255).'.'.mt_rand(0,255).'.'.mt_rand(0,255);
	$random_IP = rand(0,13);
	switch($random_IP)
	{
		case 1:
		return $randIP;
		break;
		case 2:
		return $randIP;
		break;
		case 3:
		return $randIP;
		break;
		case 4:
		return $randIP;
		break;
		case 5:
		return $randIP;
		break;
		case 6:
		return $randIP;
		break;
		case 7:
		return $randIP;
		break;
		case 8:
		return $randIP;
		break;
		case 9:
		return $randIP;
		break;
		case 10:
		return $randIP;
		break;
		case 11:
		return $randIP;
		break;
		case 12:
		return $randIP;
		break;
		case 13:
		return $randIP;
		break;
		default:
		return $randIP;
		break;
	}
}

public function random_browser(){
	$arr 	= $this->array_random(
		array('i686', 'x86_64')
	);
	$array 	= $this->array_random(
		array(
			'Mozilla/5.0 (Windows NT '.rand(5,6).'.'.rand(0,1).') Chrome'.rand(13, 15).'.0.'.rand(800, 899).'.0',
			'Mozilla/5.0 (X11; Linux '.$arr.') Chrome'.rand(13, 15).'.0.'.rand(800, 899).'.0',
			'Mozilla/5.0 (Macintosh; U; '.$arr.') Chrome'.rand(13, 15).'.0.'.rand(800, 899).'.0',
			'Mozilla/5.0 (Windows NT '.rand(5,6).'.'.rand(0,1).') Firefox/'.rand(5, 7).'.0',
			'Mozilla/5.0 (X11; Linux '.$arr.') Firefox/' .rand(5, 7).'.0',
			'Mozilla/5.0 (Macintosh; U; '.$arr.') Firefox/' .rand(5, 7).'.0',
			'Mozilla/5.0 (Windows NT '.rand(5,6).'.'.rand(0,1).') Firefox/'.rand(5, 7).'.0.1',
			'Mozilla/5.0 (X11; Linux '.$arr.') Firefox/'.rand(5, 7).'.0.1',
			'Mozilla/5.0 (Macintosh; U; '.$arr.') Firefox/'.rand(5, 7).'.0.1',
			'Mozilla/5.0 (Windows NT '.rand(5,6).'.'.rand(0,1).') Firefox/3.6.'.rand(1, 20),
			'Mozilla/5.0 (X11; Linux '.$arr.') Firefox/3.6.'.rand(1, 20),
			'Mozilla/5.0 (Macintosh; U; '.$arr.') Firefox/3.6.'.rand(1, 20),
			'Mozilla/5.0 (Windows NT '.rand(5,6).'.'.rand(0,1).') Firefox/3.8',
			'Mozilla/5.0 (X11; Linux '.$arr.') Firefox/3.8',
			'Mozilla/5.0 (Macintosh; U; '.$arr.') Firefox/3.8'
		)
	);
	return $array;
}

public function random_string($lenght){
	$variable = $this->string;
	$string   = '';
	for ($i = 0; $i < $lenght; $i++)
	{
		$post   = rand(0, strlen($variable)-1);
		$string .= $variable{$post};
	}
	return $string;
}

function random_string_lowercase($length) {
	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return strtolower($randomString);
} 

public function random_number($lenght){
	$variable = $this->number;
	$string   = '';
	for ($i = 0; $i < $lenght; $i++){
		$post   = rand(0, strlen($variable)-1);
		$string .= $variable{$post};
	}
	return $string;
}

public function random_mail_apple(){
	$random = rand(0,9); 
	switch ($random) { 
		case 0: 
		return $name = "apple-000websapps-".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@notifications-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".com"; 
		break;
		case  1: 
		return $name = "mailing-worldwide-apple".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@icloud-".strtolower($this->random_string(13)).".me.".$this->random_string_lowercase(5).".me"; 
		break; 
		case 2: 
		return $name = "newsicloud-apple".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@message-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".me"; 
		break; 
		case 3: 
		return $name = "apple-update-security".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@services-apple-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".com"; 
		break; 
		case 4: 
		return $name = "noticeimportant-partner".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@reminders-".strtolower($this->random_string(13)).".icloud.".$this->random_string_lowercase(5).".com"; 
		break; 
		case 5: 
		return $name = "apple-000websapps-".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@imessage-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".com"; 
		break; 
		case 6: 
		return $name = "newsicloud-apple".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@imessage.itunes-".strtolower($this->random_string(13)).".icloud.".$this->random_string_lowercase(5).".com"; 
		break; 
		case 7: 
		return $name = "apple-update-security".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@notifications-appleid-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".com"; 
		break; 
		case 8: 
		return $name = "clientupdate-fromhillmark".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@notifications.iMessage-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".com"; 
		break; 
		case 9: 
		return $name = "noticeimportant-partner".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@letter-notice-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".com"; 
		break;
		default: 
		return $name = "shorthills-update-store.appleid".$this->random_string_lowercase(8)."-noreply.".$this->random_string(4)."@shorthills.storeupdated-".strtolower($this->random_string(13)).".apple.".$this->random_string_lowercase(5).".com"; 
		break;
	}
}

public function random_mail(){
	$random_mail = rand(0,10);
	$string = "";
	$chars = "abcdefghijklmnopqrstuvwxyz";
	for($i=0;$i<1;$i++)
		$string.= substr($chars,rand(0,strlen($chars)),1);
	$from = $this->random_string(5);
	$from = $from."@".$this->random_string(5);
	$from = $from.".".$string."".$this->random_string(3);
	switch($random_mail){
		case 0:
		return strtolower($from);
		break;
		case 1:
		return strtolower($from);
		break;
		case 2:
		return strtolower($from);
		break;
		case 3:
		return strtolower($from);
		break;
		case 4:
		return strtolower($from);
		break;
		case 5:
		return strtolower($from);
		break;
		case 6:
		return strtolower($from);
		break;
		case 7:
		return strtolower($from);
		break;
		case 8:
		return strtolower($from);
		break;
		case 9:
		return strtolower($from);
		break;
		case 10:
		return strtolower($from);
		break;
		case 11:
		return strtolower($from);
		break;
		case 12:
		return strtolower($from);
		break;
		case 13:
		return strtolower($from);
		break;
		default:
		return strtolower($from);
		break;
	}
}

public function getDate(){
	$year 		= date(", Y");
	$month 		= date("M");
	$day 		= (date("d"));
	$date 	= ($day." ".$month.$year);
	return $date;
}

public function getLetter($getLetter = null, $letter = null){
	$letter = file_get_contents($letter);

	if($letter == ""){
		echo "\nLetter not found.";
		exit;
	}else{
		foreach ($getLetter as $key => $value){
			$letter = str_replace($key, $value, $letter);
		}
	}

	return $letter;
}

public function getFrommailSetting($frommail = null, $custom = null){
	$custom = $custom;

	if($custom == ""){
		echo "\nMail not found.";
		exit;
	}else{
		foreach ($frommail as $key => $value){
			$custom = str_replace($key, $value, $custom);
		}
	}

	return $custom;
}

public function getFromnameSetting($fromname = null, $custom = null){
	$custom = $custom;

	if($custom == ""){
		echo "\nName not found.";
		exit;
	}else{
		foreach ($fromname as $key => $value){
			$custom = str_replace($key, $value, $custom);
		}
	}

	return $custom;
}

public function getSubjectSetting($subject = null, $custom = null){
	$custom = $custom;

	if($custom == ""){
		echo "\Subject not found.";
		exit;
	}else{
		foreach ($subject as $key => $value){
			$custom = str_replace($key, $value, $custom);
		}
	}

	return $custom;
}

function random_subject(){ 
	$random = rand(0,10); 
	switch ($random) { 
		case 0: 
		$name = "Reminder : Fraud Login from Different IP"; 
		break; 
		case 1: 
		$name = "Reminder : Login Autorized Apple ID"; 
		break; 
		case 2: 
		$name = "Apple ID Login Activation ".$this->random_string(8).""; 
		break; 
		case 3: 
		$name = "Notice : Security Alert From Your Apple ID "; 
		break; 
		case 4: 
		$name = "Reminder : Apple ID Token ".$this->random_string(8).""; 
		break; 
		case 5: 
		$name = "Apple ID Notification #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
		break; 
		case 6: 
		$name = "Apple ID Security Notice #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
		break; 
		case 7: 
		$name = "Apple ID Locked #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
		break; 
		case 8: 
		$name = "Your Apple ID Has Be Disabled Notice #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). ""; 
		break; 
		case 9: 
		$name = "Your Apple ID Recicpt Order #" .rand(1,100). "." .rand(1,100). "." .rand(1,100). "." .rand(1,100). " Please Check Your Order."; 
		case 10; 
		$name = "Apple ID Disable Temporary Account #".rand(1,100).""; 
		break;
		default: 
		$name = "Apple ID Account Update #".rand(1,100).""; 
		break;

	} 
	return $name; 
}

function random_name(){ 
	$random = rand(0,17); 
	switch ($random) { 
		case 0: 
		$name = "AppleID"; 
		break;
		case 1: 
		$name = "Apple"; 
		break;
		case 3: 
		$name = "Apple Update"; 
		break;
		case 4: 
		$name = "Apple Security"; 
		break; 
		case 5: 
		$name = "Apple Notice"; 
		break;
		case 6: 
		$name = "iCloud Update"; 
		break;
		case 7: 
		$name = "iCloud"; 
		break;
		case 8: 
		$name = "iTunes Store"; 
		break;
		case 9: 
		$name = "iTunes"; 
		break;
		case 10: 
		$name = "Apple Inc"; 
		break;
		case 11: 
		$name = "Aррlе Support"; 
		break;
		case 12: 
		$name = "Apple Recovery"; 
		break;
		case 13: 
		$name = "Aррlе Apps"; 
		break;
		case 14: 
		$name = "iMessage"; 
		break;
		case 15: 
		$name = "secure@apple.com"; 
		break;
		case 16: 
		$name = "appleid@apple.com"; 
		break;
		case 17: 
		$name = "apple@apple.com"; 
		break;
		case 18:
		$name = "Apple Letter Order";
		break;
		default: 
		$name = 'security@apple.com'; 
		break;
	} 
	return $name; 
}
}
?>