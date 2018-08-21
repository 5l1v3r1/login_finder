<?php
// Author Name : Mr.cakil
// Information List : 4001 list
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

print "$purple
[!]==============================================[!]
[!]==//$okegreen             Admin Finder$purple             //==[!]
[!]==//$red                  V2$purple                  //==[!]
[!]==============================================[!]
[!]==//$yellow  Author$red   >>$okegreen  Mr.cakil$purple               //==[!]
[!]==//$yellow  Recoder$red  >>$okegreen  N1ght.Hax0r$purple            //==[!]
[!]==//$yellow  List$red     >>$okegreen  4001 list$red ($yellow Updated$red )$purple  //==[!]
[!]==============================================[!]
[!]==||$yellow              Thanks to$purple               ||==[!]
[!]==============================================[!]
[!]==||$okegreen IndoXploit - IndoSec - AnonCyberTeam$purple ||==[!]
[!]==||$okegreen  LamonganXploiter - Terkedjoed Team$purple  ||==[!]
[!]==||$okegreen     99syndicate - N45HT - AnonSec$purple    ||==[!]
[!]==============================================[!]
";

echo "$lightgreen 
[?]==// Target (Without http://) >> $white";
$target = trim(fgets(STDIN));
echo "$lightgreen [?]==// Use Default list (Y/N)?\n [+]==>> ";
$pilihan = trim(fgets(STDIN));

if ($pilihan == 'Y' OR $pilihan == 'y')
{
	$list = "list.txt";
}
else
{
	echo "$lightgreen [?]==// List >> $white";
	$list = trim(fgets(STDIN));
}
if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target)){
	$targetnya = "http://$target";
}else{
	$targetnya = $target;
}
echo "$yellow
[!]==// Opening $list ...";
$buka = fopen("$list","r");
$ukuran = filesize("$list");
$baca = fread($buka,$ukuran);
$lists = explode("\r\n",$baca);

echo "$okegreen
[!]==// Please Wait...
";

foreach($lists as $login){
	$log = "$targetnya/$login";
	$ch = curl_init("$log");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	if($httpcode == 200){
		 $handle = fopen("$target.txt", "a+");
		fwrite($handle, "$log\n");
		print "\n$okegreen  [".date('H:m:s')."]==//$white $log =>$okegreen Ditemukan";
	}else{
		print "\n$red  [".date('H:m:s')."]==//$white $log =>$red Tidak Ditemukan";
	}
}
echo "$lightgreen

[!]==// Result ada di $target\n\n $white ";
  
?>
