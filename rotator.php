<?php
 
$urls[] = "www.web.telegram.org";
$urls[] = "www.facebook.com";
$urls[] = "www.google.com";
 
 
srand  ((double) microtime( )*1000000);
$random = rand(0,count($urls));
 
header ("location:" . $urls[$random]);
exit;
?>