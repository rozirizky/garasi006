<?php 

include('includes/config.php');

$id=intval($_POST['id']);
$penginapan=$_POST['penginapan'];
$transportasi=$_POST['transportasi'];
$makan=$_POST['makan'];
$tiket=$_POST['tiket'];
$leader=$_POST['leader'];
$snack=$_POST['snack'];
$air=$_POST['air'];
$dokumentasi=$_POST['dokumentasi'];
$nama_paket = $_POST['nama_paket'];
$tujuan = $_POST['tujuan'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$destinasi = $_POST['destinasi'];
$makan_sehari = $_POST['makan_sehari'];
$days = $_POST['days'];
$night = $_POST['night'];




$query = mysqli_query($koneksidb,
	"UPDATE `paket` SET `nama_paket`='$nama_paket',`tujuan_wisata`='$tujuan',`deskripsi`='$deskripsi',`destinasi`='$destinasi',`harga`='$harga',penginapan = '$penginapan',transportasi = '$transportasi',makan = '$makan',tiket = '$tiket',leader='$leader',snack='$snack',air='$air',dokumentasi='$dokumentasi',days = '$days',night = '$night', makan_sehari = '$makan_sehari'  WHERE id = '$id'");
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'paket.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'mobiledit.php?id=$id'; 
		</script>";
}
?>
 ?>
