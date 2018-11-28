<?php
	include "database.php";
	
	$id = $_POST['id'];

	$queri = mysqli_query($db, "SELECT * FROM registration WHERE registrationid='$id'");
	

	$data = mysqli_fetch_array($queri);

			$nomor = $data['registrationid'];
			$nama = $data['patientid'];
			$dokter = $data['docterid'];
			$jabatan = $data['registrationdate'];
			$jeniskelamin = $data['uniqecode'];
			$status = $data['datetimecheckup'];
			$username = $data['statuss'];
			$a = $data['category'];
			$b = $data['datediag'];
			$c = $data['complaint'];
			$d = $data['weight'];
			$e = $data['bloodpress'];
			$f = $data['temp'];
			$diagnosa = $data['diagnose'];
?>