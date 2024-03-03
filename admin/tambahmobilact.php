<?php
include('includes/config.php');
error_reporting(0);
$vehicletitle=$_POST['vehicletitle'];
$brand=$_POST['brandname'];
$nopol=$_POST['nopol'];
$vehicleoverview=$_POST['vehicalorcview'];
$priceperday=$_POST['priceperday'];
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seatingcapacity=$_POST['seatingcapacity'];
$airconditioner=$_POST['airconditioner'];
$powerdoorlocks=$_POST['powerdoorlocks'];
$antilockbrakingsys=$_POST['antilockbrakingsys'];
$brakeassist=$_POST['brakeassist'];
$powersteering=$_POST['powersteering'];
$driverairbag=$_POST['driverairbag'];
$passengerairbag=$_POST['passengerairbag'];
$powerwindow=$_POST['powerwindow'];
$cdplayer=$_POST['cdplayer'];
$centrallocking=$_POST['centrallocking'];
$crashcensor=$_POST['crashcensor'];
$leatherseats=$_POST['leatherseats'];
$vimage1=$_FILES["img1"]["name"];

move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);

$sql 	= "INSERT INTO mobil (nama_mobil,id_merek,nopol,deskripsi,harga,bb,tahun,seating,image1,
			AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,
			PowerWindows,CDPlayer,CentralLocking,CrashSensor,LeatherSeats)
			VALUES ('$vehicletitle','$brand','$nopol','$vehicleoverview','$priceperday','$fueltype','$modelyear','$seatingcapacity',
			'$vimage1','$airconditioner','$powerdoorlocks','$antilockbrakingsys',
			'$brakeassist','$powersteering','$driverairbag','$passengerairbag','$powerwindow','$cdplayer','$centrallocking',
			'$crashcensor','$leatherseats')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'mobil.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahmobil.php'; 
		</script>";
}

?>