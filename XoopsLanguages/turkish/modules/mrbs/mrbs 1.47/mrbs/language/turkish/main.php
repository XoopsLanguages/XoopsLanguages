<?php
$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

?>