<?php
$rss = $_GET['rss'];
// make sure that some page is really being called
if ($rss && $rss != ""){
	// make sure that an http call is being made - otherwise there's access to any file on machine...
	if ((strpos($rss, "http://") === 0) || (strpos($rss, "https://") === 0)){
		readfile($rss);
	}
}

?>