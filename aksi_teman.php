<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id=$_GET['id'];
	$row = mysqli_query($koneksi, "DELETE FROM daftar_teman WHERE id = '$id'");
	header('location:teman.php');
}

elseif ($act=='input'){
	$nama = $_POST["nama"];
	$tanggal_lahir = $_POST["tanggal_lahir"];
	$alamat = $_POST["alamat"];
	$no_hp = $_POST["no_hp"];
	$email = $_POST["email"];

	$sql = "INSERT INTO daftar_teman VALUES ('','$nama','$tanggal_lahir', '$alamat', '$no_hp', '$email')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:teman.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id = $_POST["id"];
	$nama = $_POST["nama"];
	$tanggal_lahir = $_POST["tanggal_lahir"];
	$alamat = $_POST["alamat"];
	$no_hp = $_POST["no_hp"];
	$email = $_POST["email"];

	$sql = "UPDATE daftar_teman SET nama='$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat', no_hp='$no_hp', email='$email' WHERE id='$id'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:teman.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
