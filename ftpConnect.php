<?php 
function fx_FtpConnect($ftp_server, $ftp_user, $ftp_pass){
	$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 
	if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {continue;}
}
?>
