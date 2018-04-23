#!/usr/bin/env php
<?php
# Hash3r v1
# By bl33dz (github: @bl33dz)
error_reporting(0);

function show_algos() {
	$algos = hash_algos();
	$n = count($algos);
	$i = 1;
	print "[+] Supported algos:\n";
	foreach($algos as $algo) {
		$a = ($i == $n) ? "\"$algo\"" : "\"$algo\", ";
		print $a;
		$i = $i+1;
	}
}
function help($x) {
	print "[+] Usage:
$ $x hash <algo> <string> # Hashing string
$ $x show_algos # Show supported algorithm
$ $x help # Show this help";
}
function banner() {
	print '
 /$$                           /$$                
| $$                          | $$                
| $$$$$$$   /$$$$$$   /$$$$$$$| $$$$$$$   /$$$$$$ 
| $$__  $$ |____  $$ /$$_____/| $$__  $$ /$$__  $$
| $$  \ $$  /$$$$$$$|  $$$$$$ | $$  \ $$| $$  \__/
| $$  | $$ /$$__  $$ \____  $$| $$  | $$| $$      
| $$  | $$|  $$$$$$$ /$$$$$$$/| $$  | $$| $$      
|__/  |__/ \_______/|_______/ |__/  |__/|__/
	       [ by bl33dz ]'.PHP_EOL.PHP_EOL;
}
banner();

if($argv[1] == "help") {
	help($argv[0]);
} elseif($argv[1] == "show_algos") {
	show_algos();
} elseif($argv[1] == "hash") {
	$hash = hash($argv[2], $argv[3]);
	if(!$hash) {
		print "[-] Err: Unknown algorithm.\n\n";
		exit;
	}
	print "[+] String: ".$argv[3].PHP_EOL."[+] Algorithm: ".$argv[2].PHP_EOL."[+] Result: ".$hash.PHP_EOL."[+] Length: ".strlen($hash);
} else {
	print "[-] Err: Invalid argument\n[+] Type \"".$argv[0]." help\"";
}

print "\n\n";
