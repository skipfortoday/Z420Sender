								Z420 Sender v1.0

ApiKey = Accessing Z420 Sender u must have ApiKey, 1 Apikey => 1 Day, MAX 2 IP can accessing

***** Active Letter command *****
[#email#] 			=> Get email
[#country#] 		=> Get random country
[#ip#] 				=> Get random IP
[#zrandnumber2#] 	=> Get random number 2 digit
[#zrandnumber3#] 	=> Get random number 3 digit
[#zrandnumber4#] 	=> Get random number 4 digit
[#zrandnumber5#] 	=> Get random number 5 digit
[#zrandstring2#] 	=> Get random string 2 digit
[#zrandstring3#] 	=> Get random string 3 digit
[#zrandstring4#] 	=> Get random string 4 digit
[#zrandstring5#] 	=> Get random string 5 digit
[#date#] 			=> Get date
[#browser#] 		=> Get random browser
[#link#] 			=> Get rando link from button

***** my.php random feature *****
zrandmail 	=> Random sender mail
zrandmailapple	=> Random sender mail include apple name
zrandname 	=> Random sender name include apple name
zrandsubject	=> Random subject apple

---- Active Sender Mail & Name command my.php ----
[#zrandnumber2#] 	=> Get random number 2 digit
[#zrandnumber3#] 	=> Get random number 3 digit
[#zrandnumber4#] 	=> Get random number 4 digit
[#zrandnumber5#] 	=> Get random number 5 digit
[#zrandstring2#] 	=> Get random string 2 digit
[#zrandstring3#] 	=> Get random string 3 digit
[#zrandstring4#] 	=> Get random string 4 digit
[#zrandstring5#] 	=> Get random string 5 digit

---- Active Subject command my.php ----
[#email#] 			=> Get email
[#country#] 		=> Get random country
[#ip#] 				=> Get random IP
[#zrandnumber2#] 	=> Get random number 2 digit
[#zrandnumber3#] 	=> Get random number 3 digit
[#zrandnumber4#] 	=> Get random number 4 digit
[#zrandnumber5#] 	=> Get random number 5 digit
[#zrandstring2#] 	=> Get random string 2 digit
[#zrandstring3#] 	=> Get random string 3 digit
[#zrandstring4#] 	=> Get random string 4 digit
[#zrandstring5#] 	=> Get random string 5 digit
[#date#] 			=> Get date
[#browser#] 		=> Get random browser 

---- Priority setting ----
Priority => 1 : Highest
			2 : High
			3 : Normal
			4 : Low
			5 : Very Low

---- Duplicate setting ----
Duplicate => 	true : delete duplicate
				false : dont delete duplicate

my.php setting and filling

Multiple SMTP
Ex : Make 2 SMTP

SMTP 1
host 		= smtp-relay.gmail.com
username 	= one@kiiara.business
password	= thariqalfa
secure		= tls		
port		= 587

SMTP 2
host 		= smtp.gmail.com
username 	= alfaben@gmail.com
password	= alfaben			
secure		= ssl				
port		= 465


Example :
**************************************************************************************************
$apikey 		= 'Z4201234-aaa-bbbb-ccc-dddddddddddd';

// SMTP 1
$hostname[] 	= 'smtp-relay.gmail.com';
$username[] 	= 'one@kiiara.business';
$password[] 	= 'thariqalfa';
$secure[] 		= 'tls';
$port[] 		= '587';

// SMTP 2
$hostname[] 	= 'smtp.gmail.com';
$username[] 	= 'alfaben@gmail.com';
$password[] 	= 'alfaben';
$secure[] 		= 'ssl';
$port[] 		= '65';

$frommail 		= 'notice@icloud.apple.com';
$fromname 		= 'Apple Letter Purchase';

$priority 		= 1;
$subject 		= 'Re: Confirm your card declined.';
$letter 		= 'letter.html';
$language 		= 'us';
$duplicate 		= true;
$emaillist 		= 'list.txt';

// link 1
$link[]			= 'kiiaraayden.com';
// link 2
$link[] 		= 'kiiaraayden.id';

// setting ratio. ex : req 10/4 second
$email  		= 10;
$delay  		= 4;

**************************************************************************************************

/* TIPS & TRICK */
if your letter hmtl code advoid this tag :
=============== OUTLOOK ===============
- <form>
- <object>
- <frame>
- <iframe>
- <object>
- make shortlink .ly/link prevent bounceing your letter
- dont not most tags on letter (.html)
- dont make port 80 (regular HTTP protocol port), 8080 (HTTP alternate port), or 443 (HTTPS port)

LOG Z420 Sender :
- ..........
- 20 Desember 2017 V1.0
- 21 Desember 2017 V1.1
- 01 Januari 2018 V1.2
- 13 Januari 2018 V1.3

Any have bug/error? contact me : https://facebook.com/riqalfa watch update on instagram thariqalfa
Thanks for your participation ~