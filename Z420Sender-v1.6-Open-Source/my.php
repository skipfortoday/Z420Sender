<?php
$hostname[] 	= 'smtp-relay.gmail.com';
$username[] 	= 'test@example.com';
$password[] 	= 'test123';
$secure[] 		= 'tls';
$port[] 		= '587';

// $hostname[] 	= 'smtp-relay.gmail.com';
// $username[] 	= 'user@borutohokage.com';
// $password[] 	= 'afra2109';
// $secure[] 		= 'tls';
// $port[] 		= '587';

$link[] 		= 'thariqalfa.com'; // link 
// $link[] 		= 'alfaben.cf';


$frommail 		= 'costumerservice.[#zrandstring3#].serviceupdate.[#zrandstring2#][#zrandnumber2#]-letter@company.example.com';
$fromname 		= 'Company Support';
$subject 		= 'Re: [ IP CONFIRMATION ] [ LOGIN STATMENT REPORT ] New Login in Other Device.';
$sensoremail 	= false;  // FALSE = OFF, true ON

$priority 		= 1; // 1 = HIGH
$mailtype 		= 'microsoft'; // type mail yg mau di spam (beda header mail)
$letter 		= 'letter.html';
$attachment 	= '';
$language 		= 'us';
$duplicate 		= false; // FALSE = OFF, true ON
$removeaftersend = true; // FALSE = OFF, true ON
$emaillist 		= 'list.txt';

$email 			= 3;
$delay 			= 2;

?>
