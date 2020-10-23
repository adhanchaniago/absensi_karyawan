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
?>

<form method="post" class="form-horizontal" name="form1" id="form1" enctype="multipart/form-data" onsubmit="return validateForm()"  />
	<div class="control-group">
		<label class="control-label" style="text-align: left;">NIP</label>
		<div class="controls">
			<input type="text" name="nid" id="nid">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Nama Karyawan</label>
		<div class="controls">
			<input type="text" name="nama" id="nama" class="input-xlarge">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Tanggal Lahir</label>
		<div class="controls">
			<input type="text" name="tanggal_lahir" id="tanggal_lahir">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Tempat Lahir</label>
		<div class="controls">
			<input type="text" name="tempat_lahir" id="tempat_lahir">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Jenis Kelamin</label>
		<div class="controls">
			<input type="text" name="jenis_kelamin" id="jenis_kelamin">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Agama</label>
		<div class="controls">
			<input type="text" name="agama" id="agama">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Alamat</label>
		<div class="controls">
			<input type="text" name="alamat" id="alamat">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Kota</label>
		<div class="controls">
			<input type="text" name="kota" id="kota">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Provinsi</label>
		<div class="controls">
			<input type="text" name="provinsi" id="provinsi">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Telepon Rumah</label>
		<div class="controls">
			<input type="text" name="telp_rumah" id="telp_rumah">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Handphone</label>
		<div class="controls">
			<input type="text" name="handphone" id="handphone">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Email</label>
		<div class="controls">
			<input type="text" name="email" id="email">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Status Perkawinan</label>
		<div class="controls">
			<input type="text" name="status_perkawinan" id="status_perkawinan">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Status Karyawan</label>
		<div class="controls">
			<input type="text" name="status_karyawan" id="status_karyawan">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Jabatan</label>
		<div class="controls">
			<input type="text" name="jabatan" id="jabatan">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Departemen</label>
		<div class="controls">
			<input type="text" name="departemen" id="departemen">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" style="text-align: left;">Photo</label>
		<div class="controls">
			<input type="text" name="photo" id="photo" value="" onClick="window.open('<?php echo $baseurl; ?>includes/imguploads/index.php','popuppage','width=600,toolbar=0,resizable=0,scrollbars=no,height=400,top=100,left=100');"/>
			<input type="hidden" name="ext" id="ext" />
			<input type="hidden" name="nfile" id="nfile" />
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<input type="submit" name="simpan" class="btn btn-medium btn-primary" value="Simpan Data" />&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=admin&page=karyawan'">
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
			if (file_exists($upload_dir) && is_writable($upload_dir)) 
			{
				file_put_contents($upload_dir.$namabaru,fopen($_POST['photo'], 'r'));	
			}
			else 
			{
				echo 'Upload directory is not writable, or does not exist.';
			}
		}
		else
		{
			mysqli_query($conn, "Insert into karyawan values ('".$_POST['nid']."','".$_POST['nama']."','".$_POST['tanggal_lahir']."','".$_POST['tempat_lahir']."','".$_POST['jenis_kelamin']."','".$_POST['agama']."','".$_POST['alamat']."','".$_POST['kota']."','".$_POST['provinsi']."','".$_POST['telp_rumah']."','".$_POST['handphone']."','".$_POST['email']."','".$_POST['status_perkawinan']."','".$_POST['status_karyawan']."','".$_POST['jabatan']."','".$_POST['departemen']."','')");
			echo "<script>alert('Berhasil ditambahkan')</script>";
			echo "<script>window.location='?cat=admin&page=karyawan'</script>";
		}
		$q = mysqli_query($conn, "Insert into karyawan values ('".$_POST['nid']."','".$_POST['nama']."','".$_POST['tanggal_lahir']."','".$_POST['tempat_lahir']."','".$_POST['jenis_kelamin']."','".$_POST['agama']."','".$_POST['alamat']."','".$_POST['kota']."','".$_POST['provinsi']."','".$_POST['telp_rumah']."','".$_POST['handphone']."','".$_POST['email']."','".$_POST['status_perkawinan']."','".$_POST['status_karyawan']."','".$_POST['jabatan']."','".$_POST['departemen']."','".$namabaru."')");
		if($q)
		{
			echo "<script>alert('Berhasil ditambahkan')</script>";
			echo "<script>window.location='?cat=admin&page=karyawan'</script>";
		}
	}
?>

<?php
	ob_end_flush();
?>
