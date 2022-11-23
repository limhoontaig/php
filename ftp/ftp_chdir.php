<?php
// connect and login FTP server

$ftp_server = "192.168.0.29";
$ftp_conn = ftp_connect($ftp_server) or die ("Could not connect to $ftp_server");
$ftp_username = "limht";
$ftp_userpass = "1";
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

