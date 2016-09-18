<?php

/* This function returns the first forwarded IP match it finds
from the various HTTP Header fields that we may come across if incase we are behind a proxy.
*/
function forwarded_ip() {

$fields = array(
'HTTP_X_FORWARADED_FOR',
'HTTP_X_FORWARDED',
'HTTP_FORWARDED_FOR',
'HTTP_FORWARDED',
'HTTP_CLIENT_IP',
'HTTP_X_CLUSTER_CLIENT_IP',
) ;

foreach ($fields as $field) {
  if (isset($_SERVER[$field])) {
    $ip_array = explode(',',$_SERVER[$field]);
    foreach ($ip_array as $ip) {
      $ip = trim($ip);
      if (validate_ip($ip)) {
      return $ip;
    }
    }
  }
}

return 'None';

}

/* This function is used to validate IP address to make sure
that it's a valid IPV4 or IPV6 address and to filter out any private or restricted group of IP's
*/
function validate_ip($ip) {
  if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILETR_FLAG_NO_RES_RANGE)) {
    return false;
  } else {
    return true;
  }
}

?>
