<?php
// Author Name : Mr.cakil
// Information List : 7339 list
// contact here : mrcakil@programmer.net
// and here : N1ghtpe0ple@protonmail.com
// Facebook : Putra AR (id = N1ghtpe0ple)

@system("clear");
$blue="\033[1;34";
$cyan="\033[1;36m";
$green="\033[1;34m";
$okegreen="\033[92m";
$lightgreen="\033[1;32m";
$white="\033[1;37m";
$purple="\033[1;35m";
$red="\033[1;31m";
$yellow="\033[1;33m";

print "$cyan
                                                
  __            _        _____ _       _         
 |  |   ___ ___|_|___   |   __|_|___ _| |___ ___ 
 |  |__| . | . | |   |  |   __| |   | . | -_|  _|
 |_____|___|_  |_|_|_|  |__|  |_|_|_|___|___|_|  
           |___|                                 

$white ==============================[$yellow Ver.2.5$white ]=======

$okegreen By$red   :$white N1ght.Hax0r
$okegreen List$red :$white 7339 list

$white ==============[$yellow IT Sharing Group$white ]==============

$okegreen 01$red :$white Find login panel
$okegreen 02$red :$white Brute login
$okegreen 03$red :$white Credits
";
echo "
$okegreen Menu$red >$white ";
$menu = trim(fgets(STDIN));
if ($menu == '01' OR $menu == '1')
	{
		echo "$okegreen \n Target (Without http://)$red >$white ";
		$target = trim(fgets(STDIN));
		echo "$okegreen Use Default List (Y/N)?$red  >$white ";
		$pilihan = trim(fgets(STDIN));

		if ($pilihan == 'Y' OR $pilihan == 'y')
			{
				$list = "list.txt";
			}
		else
			{
				echo "$okegreen List$red >$white ";
				$list = trim(fgets(STDIN));
			}
		if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target))
			{
				$targetnya = "http://$target";
			}
		else
			{
				$targetnya = $target;
			}
		echo "$yellow \n [!]==// Opening $list ...";
		$buka = fopen("$list","r");
		$ukuran = filesize("$list");
		$baca = fread($buka,$ukuran);
		$lists = explode("\r\n",$baca);

		echo "$okegreen\n [!]==// Please Wait...
		";

		foreach($lists as $login)
			{
				$log = "$targetnya/$login";
				$ch = curl_init("$log");
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_exec($ch);
				$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				curl_close($ch);
				if($httpcode == 200)
					{
						$handle = fopen("$target.txt", "a+");
						fwrite($handle, "$log\n");
						print "\n$okegreen  [".date('H:m:s')."]==//$white $log =>$okegreen OK";
					}
				else
					{
						print "\n$red  [".date('H:m:s')."]==//$white $log =>$red ERROR";
					}
			}
		echo "$lightgreen

[!]==// Result OK reported to $target.txt\n\n $white ";
	}

if ($menu == '02' OR $menu == '2')
	{
		print "$yellow                                                
  _____           _            _____             
 |     |___ _____|_|___ ___   |   __|___ ___ ___ 
 |   --| . |     | |   | . |  |__   | . | . |   |
 |_____|___|_|_|_|_|_|_|_  |  |_____|___|___|_|_|
                       |___|                     

$white";
	}

if ($menu == '02' OR $menu == '2')
	{
		print "

$white";
	}
?>
