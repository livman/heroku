<?php

if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
//check for ip from share internet
$ip = "SHARE=".$_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
// Check for the Proxy User
$ip = 'PROXY='.$_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
$ip = 'REMOTE='.$_SERVER["REMOTE_ADDR"];
}

// This will print user's real IP Address
// does't matter if user using proxy or not.
echo $ip;
?>
