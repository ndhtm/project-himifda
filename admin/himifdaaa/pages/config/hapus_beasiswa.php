<?php

	include 'koneksi.php';

	$id = $_GET ['id'];

	$hapus 	 = "DELETE FROM info_beasiswa WHERE id='$id'";
	$query	 = mysqli_query($connect, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../index.php?halaman=data_info_beasiswa'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>