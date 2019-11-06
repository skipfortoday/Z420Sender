<?php
/* Kiiara Ayden & Rachel Yankov */
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
echo "\033[34m                   / /--__  ~~--__  `~,~		|________/     |__/|________/ \______/ \n";
echo "\033[34m                    /     ~~--__  ~-',		\n";
echo "\033[34m                   /            ~~--'		\n";
echo "\n";
echo "\n";
echo "\033[3".$rand."m================================== Z402 Sender Ready ==================================\n";
echo "Format : apikey/data/contact/linkfb/active/true/expired/2000-12-22 \n";
echo "Enter your new data : ";
$data       = rtrim(fgets( STDIN));

$checking 	= file_get_contents('https://kiiaraayden.com/index.php/Z420S/Z420newuser/'. $data);
$json = json_decode($checking);
echo str_replace("\ ", '', $json->message);
?>