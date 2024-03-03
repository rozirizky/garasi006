<?php 

include('includes/config.php');
error_reporting(0);
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
$makan_sehari = $_POST['makan_sehari'];
$days = $_POST['days'];
$night = $_POST['night'];
$destinasi = $_POST['destinasi'];
$img1 = $_FILES['img1']['name'];
$img2 = $_FILES['img2']['name'];
$img3 = $_FILES['img3']['name'];
$img4 = $_FILES['img4']['name'];
$tmp_img1 =$_FILES['img1']['tmp_name'];
$tmp_img2 =$_FILES['img2']['tmp_name'];
$tmp_img3 =$_FILES['img3']['tmp_name'];
$tmp_img4 =$_FILES['img4']['tmp_name'];
$harga = $_POST['harga'];

$query = mysqli_query($koneksidb,"INSERT INTO paket VALUES('','$nama_paket','$tujuan','$deskripsi','$destinasi','$img1','$img2','$img3','$img4','$harga','$days','$night','$makan_sehari','$penginapan','$transportasi','$makan','$tiket','$leader','$snack','$air','$dokumentasi')");

move_uploaded_file($tmp_img1,"img/vehicleimages/".$img1);
move_uploaded_file($tmp_img2,"img/vehicleimages/".$img2);
move_uploaded_file($tmp_img3,"img/vehicleimages/".$img3);
move_uploaded_file($tmp_img4,"img/vehicleimages/".$img4);

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

