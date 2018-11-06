<?php
function ipMatch($ip, $cidrs, &$match = null) {
	foreach((array) $cidrs as $cidr) {
		list($subnet, $mask) = explode('/', $cidr);
		if(((ip2long($ip) & ($mask = ~ ((1 << (32 - $mask)) - 1))) == (ip2long($subnet) & $mask))) {
			$match = $cidr;
			return true;
		}
	}
	return false;
}

$gh_ips = array('192.30.252.0/22','185.199.108.0/22','140.82.112.0/20');
if (ipMatch($_SERVER['REMOTE_ADDR'], $gh_ips) === false) {
    header('Status: 403 Your IP is not on our list; This will be reported.', true, 403);
    mail('root', 'Unfuddle hook error: bad ip', $_SERVER['REMOTE_ADDR']);
    die(1);
}
$BRANCH = $_GET['branch'];
if (!empty($BRANCH)) {
    $output = shell_exec("cd /var/www/advent18.journocode.com/html; git pull origin {$BRANCH};");
    echo "<pre>$output</pre>";
}
die("done " . mktime());