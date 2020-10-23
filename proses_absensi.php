<!-- <?php 
		include("_db.php");
	    include "excel_reader2.php";

	 	//mengambil isi file xls
	 	$data = new Spreadsheet_Excel_Reader($_FILES['fileabsen']['tmp_name']);

	 	//menghitung jumlah baris data yang ada
	 	$jumlah_baris = $data->rowcount($sheet_index=0);

	 	//jumlah default data yang berhasil di import
	 	$data_gagal = 0;
	 	$berhasil = 0;
	 	for($i=2; $i<=$jumlah_baris; $i++){

	 		//menangkap data dan memasukkan ke variabel sesuai kolomnya masing-masing
	 		$nama = $data->val($i, 1);
	 		$scanner = $data->val($i, 2);
	 		
			mysqli_query($conn, "Insert into imabsensi values ('','$nama', '$scanner')");

	 	$berhasil++;
	 	}
  ?> -->