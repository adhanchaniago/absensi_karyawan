<?php
	$host	 = "localhost";
	$user	 = "root";
	$pass	 = "";
	$dabname = "absenkaryawandb";
	
	$foldername="absensi_karyawan";
	$conn = mysqli_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
	mysqli_select_db($conn, $dabname) or die('Could not select database.');
	
	$baseurl="http://localhost/".$foldername."/";
	$nama_usaha="Suara Merdeka - SEMARANG";
	$nama_aplikasi="APLIKASI ABSENSI BERBASIS WEB";
	$path_web=$_SERVER['DOCUMENT_ROOT']."/".$foldername."/";
	$label_footer="Copyright &copy; Suara Merdeka - SEMARANG ".date("Y");
?>