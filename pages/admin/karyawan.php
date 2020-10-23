<div align="left">
	<h1>Data Karyawan</h1>
</div>

<div align="right">
	<button class="btn btn-medium btn-primary" type="button" onClick="window.location='?cat=admin&page=addkaryawan'">Tambah Data</button>
</div>
<span class="span8">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
  <tr>
    <td>NIP</td>
    <td>Nama Karyawan</td>
    <td>Photo</td>         
    <td>&nbsp;</td>
  </tr>
<?php
  $rw=mysqli_query($conn, "SELECT * FROM karyawan");
  if(mysqli_num_rows($rw))
  {
	while($s=mysqli_fetch_array($rw))
	{
?>
	  <tr>
		<td><?php echo $s['nid']; ?></td>
		<td><?php echo $s['nama']; ?></td>
		<td>  
<?php 
		if($s['photo'] != "")
		{
?>
			<img src="<?php echo $baseurl?>/uploads/karyawan/<?php echo $s['photo'] ?> " width="160">
<?php
		}
		else
		{
?>
			<img src="<?php echo $baseurl."uploads/files/no-avatar.jpg"; ?>" width="160">
<?php
		}
?>	
		</td>
		<td><a href="?cat=admin&page=editkaryawan&id=<?php echo sha1($s['nid']); ?>">Edit</a> - <a href="?cat=admin&page=karyawan&del=1&id=<?php echo sha1($s['nid']); ?>">Hapus</a> - <a href='printkaryawan.php?nid=<?php echo ($s['nid']); ?>'>Print</a></td>
	  </tr>
<?php
	}
  }
?>  
</table>
</span>

<?php
	if(isset($_GET['del']))
	{
		$ids = $_GET['id'];
		$ff = mysqli_query($conn, "Delete from karyawan Where sha1(nid)='".$ids."'");
		if($ff)
		{
			echo "<script>window.location='?cat=admin&page=karyawan'</script>";
		}
	}
?>
	
<script type="text/javascript">
	$(document).ready(function()
	{
		$("div.lightbox").bind("shown",function()
		{
			console.log("Shown Event",$(this).attr('id'));
		});
	});
</script>