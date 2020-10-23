<!--NAVIGASI MENU UTAMA-->

<div class="leftmenu">
  <ul class="nav nav-tabs nav-stacked">
    <li class="active"><a href="dashboard.php"><span class="icon-align-justify"></span> Dashboard</a></li>
    
    <!--MENU ADMIN-->
    <?php
		if($_SESSION['login_hash']=="admin")
		{
	?>
			<li class="dropdown"><a href="#"><span class="icon-th-list"></span> Data Utama</a>
			  <ul>
			   <li><a href="?cat=admin&page=karyawan">Data Karyawan</a></li>
			   <li><a href="?cat=admin&page=user">User Management</a></li>
			  </ul>
			</li>      
    
	<!--MENU HRD-->
    <?php
		}
		elseif($_SESSION['login_hash'] == "hrd")
		{
	?>               
			<li class="dropdown"><a href="#"><span class="icon-pencil"></span> Laporan</a>
			  <ul>
				<li><a href="?cat=dosen&page=laporanmhs">Laporan (Karyawan)</a></li> 
			  </ul>
			</li>
  	<?php
		}
	?>
  </ul>
</div>
<!--leftmenu-->

</div>
<!--mainleft--> 
<!-- END OF LEFT PANEL -->