<?php
	require_once("connect.inc");

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$hinfo = mysqli_get_host_info($link);

	var_dump(str_replace('/','', $hinfo));

	mysqli_close($link);
	print "done!";
?>