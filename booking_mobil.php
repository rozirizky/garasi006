
<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/format_rupiah.php');
?>

<?php include('includes/header.php');?>
<!--Page Header-->
<!-- /Header --> 

<?php 
$id = intval($_POST['id']);
$sql1 = "SELECT mobil.*, merek.* from mobil, merek WHERE merek.id_merek=mobil.id_merek AND mobil.id_mobil='$id'";
$query1 = mysqli_query($koneksidb,$sql1);
$result = mysqli_fetch_array($query1);
$nama = $_POST['nama'];
$mulai = $_POST['fromdate'];
$selesai = $_POST['todate'];
$start = date('d/m/Y',strtotime($mulai));
$finish =date('d/m/Y',strtotime($selesai));
$durasi = $finish - $start;
$total = $result['harga']*$durasi;

?>

	<section class="user_profile inner_pages">
	<div class="container">
	
	
	<div class="user_profile_info">	
		<div class="col-md-12 col-sm-10">
        <form  > 
        		<label>Nama</label>
			<input type="text" class="form-control" value="<?php echo $nama;?>"readonly>
            <div class="form-group">
            				
				<label>Mobil</label>
				<input type="text" class="form-control" value="<?php echo $result['nama_mobil'] ?>" readonly>

				<br>
			<label>Tanggal Mulai</label>
				<input type="date" class="form-control" value="<?php echo $mulai ?>" readonly>
				<label>Tanggal selesai</label>
				<input type="date" class="form-control" value="<?php echo $selesai ?>" readonly>
				<label>durasi</label>
				<input type="text" class="form-control" value="<?php echo $durasi ?>" readonly>

							<label>Harga/hari</label>
				<input type="text" class="form-control" value="<?php echo format_rupiah($result['harga']) ?>" readonly>	
					<label>Total</label>
				<input type="text" class="form-control" value="<?php echo format_rupiah($total) ?>" readonly>	

            </div>
		
           
			<br>			
			<div class="form-group">
                <a href="https://wa.me/628979312997?text=Saya%20ingin%20menyewa%0AMobil%20:%20<?php echo $result['nama_mobil'] ?>%0AHarga/hari%20:%20<?php echo $result['harga'] ?>%0Adurasi%20:%20<?php echo $durasi ?>%20hari%0Amulai%20Tanggal%20:%20<?php echo $start ?>%0Asampai%20Tanggal%20:%20<?php echo $finish ?>%0ATotal%20Pembayaran%20:%20<?php echo format_rupiah($total) ?>" class="btn" style="width:100%">Pesan Sekarang</a>
            </div>
        </form>
		</div>
		</div>
      </div>
</section>
<!--/my-vehicles--> 
<?php include('includes/footer.php');?>

</html>
