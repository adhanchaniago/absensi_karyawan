<script>
	function validateForm()
	{
		var x=document.forms["form1"]["nid"].value;
		var x1=document.forms["form1"]["nama"].value;
		var x2=document.forms["form1"]["tanggal_lahir"].value;
		var x3=document.forms["form1"]["tempat_lahir"].value;
		var x4=document.forms["form1"]["jenis_kelamin"].value;
		var x5=document.forms["form1"]["agama"].value;
		var x6=document.forms["form1"]["alamat"].value;
		var x7=document.forms["form1"]["kota"].value;
		var x8=document.forms["form1"]["provinsi"].value;
		var x9=document.forms["form1"]["telp_rumah"].value;
		var x10=document.forms["form1"]["handphone"].value;
		var x11=document.forms["form1"]["email"].value;
		var x12=document.forms["form1"]["status_perkawinan"].value;
		var x13=document.forms["form1"]["status_karyawan"].value;
		var x14=document.forms["form1"]["jabatan"].value;
		var x15=document.forms["form1"]["departemen"].value;
		var x16=document.forms["form1"]["photo"].value;
		if (x==null || x=="")
		{
		  alert("Isi NIP");
		  return false;
		}
		if (x1==null || x1=="")
		{
		  alert("Isi Nama Karyawan");
		  return false;
		}
		if (x2==null || x2=="")
		{
		  alert("Isi Tanggal Lahir");
		  return false;
		}
		if (x3==null || x3=="")
		{
		  alert("Isi Tempat Lahir");
		  return false;
		}
		if (x4==null || x4=="")
		{
		  alert("Isi Jenis Kelamin");
		  return false;
		}
		if (x5==null || x5=="")
		{
		  alert("Isi Agama");
		  return false;
		}
		if (x6==null || x6=="")
		{
		  alert("Isi Alamat");
		  return false;
		}
		if (x7==null || x7=="")
		{
		  alert("Isi Kota");
		  return false;
		}
		if (x8==null || x8=="")
		{
		  alert("Isi Provinsi");
		  return false;
		}
		if (x9==null || x9=="")
		{
		  alert("Isi Nomor Telepon Rumah");
		  return false;
		}
		if (x10==null || x10=="")
		{
		  alert("Isi Nomor Handphone");
		  return false;
		}
		if (x11==null || x11=="")
		{
		  alert("Isi Email");
		  return false;
		}
		if (x12==null || x12=="")
		{
		  alert("Isi Status Perkawinan");
		  return false;
		}
		if (x13==null || x13=="")
		{
		  alert("Isi Status Karyawan");
		  return false;
		}
		if (x14==null || x14=="")
		{
		  alert("Isi Jabatan");
		  return false;
		}
		if (x15==null || x15=="")
		{
		  alert("Isi Departemen");
		  return false;
		}
		if (x16==null || x16=="")
		{
		  alert("Foto tidak ada, dipilih secara default");
		  return true;
		  x16="default";
		}
	}
</script>

<?php
	ob_start();
	$ids = $_GET['id'];
	$q = mysqli_query($conn, "Select * from karyawan where sha1(nid)='".$ids."'");
	$r = mysqli_fetch_array($q);
?>

<form method="post" class="form-horizontal" name="form1" id="form1" enctype="multipart/form-data" onsubmit="return validateForm()"/>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">NIP</label>
		<div class="controls">
			<input name="nid" type="text" id="nid" value="<?php echo $r['nid']; ?>" readonly>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Nama Karyawan</label>
		<div class="controls">
			<input type="text" name="nama" id="nama" value="<?php echo $r['nama']; ?>" class="input-xlarge">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Tanggal Lahir</label>
		<div class="controls">
			<input name="tanggal_lahir" type="text" id="tanggal_lahir" value="<?php echo $r['tanggal_lahir']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Tempat Lahir</label>
		<div class="controls">
			<input name="tempat_lahir" type="text" id="tempat_lahir" value="<?php echo $r['tempat_lahir']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Jenis Kelamin</label>
		<div class="controls">
			<input name="jenis_kelamin" type="text" id="jenis_kelamin" value="<?php echo $r['jenis_kelamin']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Agama</label>
		<div class="controls">
			<input name="agama" type="text" id="agama" value="<?php echo $r['agama']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Alamat</label>
		<div class="controls">
			<input name="alamat" type="text" id="alamat" value="<?php echo $r['alamat']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Kota</label>
		<div class="controls">
			<input name="kota" type="text" id="kota" value="<?php echo $r['kota']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Provinsi</label>
		<div class="controls">
			<input name="provinsi" type="text" id="provinsi" value="<?php echo $r['provinsi']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Telepon Rumah</label>
		<div class="controls">
			<input name="telp_rumah" type="text" id="telp_rumah" value="<?php echo $r['telp_rumah']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Handphone</label>
		<div class="controls">
			<input name="handphone" type="text" id="handphone" value="<?php echo $r['handphone']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Email</label>
		<div class="controls">
			<input name="email" type="text" id="email" value="<?php echo $r['email']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Status Perkawinan</label>
		<div class="controls">
			<input name="status_perkawinan" type="text" id="status_perkawinan" value="<?php echo $r['status_perkawinan']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Status Karyawan</label>
		<div class="controls">
			<input name="status_karyawan" type="text" id="status_karyawan" value="<?php echo $r['status_karyawan']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Jabatan</label>
		<div class="controls">
			<input name="jabatan" type="text" id="jabatan" value="<?php echo $r['jabatan']; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Departemen</label>
		<div class="controls">
			<input name="departemen" type="text" id="departemen" value="<?php echo $r['departemen']; ?>">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<input type="submit" name="simpan" class="btn btn-medium btn-primary" value="Simpan Data" />&nbsp;&nbsp;
			<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=admin&page=karyawan'">&nbsp;&nbsp;
		</div>
	</div>
</form>

<?php
	if(isset($_POST['simpan']))
	{
		$eks = $_POST['ext'];
		$namabaru = $_POST['nid'].".".$eks;		
		$upload_dir = $path_web."uploads/karyawan/";
		if($_POST['photo'] != "")
		{
			if(file_exists($upload_dir) && is_writable($upload_dir)) 
			{
				file_put_contents($upload_dir.$namabaru,fopen($_POST['photo'], 'r'));	
			}
			else 
			{
				echo 'Upload directory is not writable, or does not exist.';
			}
			$q=mysqli_query($conn, "Update karyawan SET nama='".$_POST['nama']."',tanggal_lahir='".$_POST['tanggal_lahir']."',tempat_lahir='".$_POST['tempat_lahir']."',jenis_kelamin='".$_POST['jenis_kelamin']."',agama='".$_POST['agama']."',alamat='".$_POST['alamat']."',kota='".$_POST['kota']."',provinsi='".$_POST['provinsi']."',telp_rumah='".$_POST['telp_rumah']."',handphone='".$_POST['handphone']."',email='".$_POST['email']."',status_perkawinan='".$_POST['status_perkawinan']."',status_karyawan='".$_POST['status_karyawan']."',jabatan='".$_POST['jabatan']."',departemen='".$_POST['departemen']."',photo='".$namabaru."' Where nid='".$_POST['nid']."'") or die(mysqli_error());
			if($q)
			{
				echo "<script>alert('Berhasil diubah');window.location='?cat=admin&page=karyawan'</script>";
			}
		}
		else
		{
			$q=mysqli_query($conn, "Update karyawan SET nama='".$_POST['nama']."',tanggal_lahir='".$_POST['tanggal_lahir']."',tempat_lahir='".$_POST['tempat_lahir']."',jenis_kelamin='".$_POST['jenis_kelamin']."',agama='".$_POST['agama']."',alamat='".$_POST['alamat']."',kota='".$_POST['kota']."',provinsi='".$_POST['provinsi']."',telp_rumah='".$_POST['telp_rumah']."',handphone='".$_POST['handphone']."',email='".$_POST['email']."',status_perkawinan='".$_POST['status_perkawinan']."',status_karyawan='".$_POST['status_karyawan']."',jabatan='".$_POST['jabatan']."',departemen='".$_POST['departemen']."' Where nid='".$_POST['nid']."'") or die(mysqli_error());
			if($q)
			{
				echo "<script>alert('Berhasil diubah');window.location='?cat=admin&page=karyawan'</script>";
			}
		}	
	}
?>

<?php
	ob_end_flush();
?>