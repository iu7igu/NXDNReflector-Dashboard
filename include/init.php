<?php
//Some basic inits
$configs = getNXDNReflectorConfig();
if (!defined("TIMEZONE"))
   define("TIMEZONE", "UTC");
$logLines = getNXDNReflectorLog();

$reverseLogLines = $logLines;
array_multisort($reverseLogLines,SORT_DESC);
$lastHeard = getLastHeard($reverseLogLines);
$allHeard = getHeardList($reverseLogLines);
?>