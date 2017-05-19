<?php 
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db		= 'ss_blog';

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (mysqli_errno($koneksi)) {
	echo mysqli_error($koneksi);
}