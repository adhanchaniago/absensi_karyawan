<?php

include("_db.php");

if(isset($_GET['nid'])){
	$nid= $_GET['nid'];
}

?>

<title>Data Karyawan</title>
<center>
<h1>DATA KARYAWAN SUARA MERDEKA</h1>
</center>
<br>

<pre>
<?php
	$sql = "SELECT * FROM karyawan WHERE nid = '$nid'";
	$query = mysqli_query($conn, $sql);

	$karyawan = mysqli_fetch_array($query);
		echo 'NIP 			: '.$karyawan['nid']. '</br/>' . 'Nama 			: '.$karyawan['nama'].'</br/>' . 'Tanggal Lahir 		: '.$karyawan['tanggal_lahir'].'</br/>' . 'Tempat Lahir 		: '.$karyawan['tempat_lahir'].'</br/>'. 'Jenis Kelamin 		: '.$karyawan['jenis_kelamin'].'</br/>'. 'Agama 			: '.$karyawan['agama'].'</br/>'. 'Alamat 			: '.$karyawan['alamat'].'</br/>'. 'Kota 			: '.$karyawan['kota'].'</br/>'. 'Provinsi 		: '.$karyawan['provinsi'].'</br/>'. 'Telepon Rumah 		: '.$karyawan['telp_rumah'].'</br/>'. 'Handphone 		: '.$karyawan['handphone'].'</br/>'. 'Email 			: '.$karyawan['email'].'</br/>'. 'Status Perkawinan 	: '.$karyawan['status_perkawinan'].'</br/>'. 'Status Karyawan 	: '.$karyawan['status_karyawan'].'</br/>'. 'Jabatan 		: '.$karyawan['jabatan'].'</br/>'. 'Departemen 		: '.$karyawan['departemen'].'</br/>';
	
?>
</pre>

<script>
	
	window.print();

</script>