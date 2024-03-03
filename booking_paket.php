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
$sql1 = "SELECT * FROM paket WHERE id ='$id'";
$query1 = mysqli_query($koneksidb,$sql1);
$result = mysqli_fetch_array($query1);
$nama = $_POST['nama'];
$tanggal = $_POST['todate'];
$date = date('d/m/Y',strtotime($tanggal));
?>

	<section class="user_profile inner_pages">
	<div class="container">
	
	
	<div class="user_profile_info">	
		<div class="col-md-12 col-sm-10">
        <form  > 
        		<label>Nama</label>
			<input type="text" class="form-control" value="<?php echo $nama;?>"readonly>
            <div class="form-group">
            				<label>Paket</label>
				<input type="text" class="form-control" value="<?php echo $result['nama_paket'] ?>" readonly>
				<br>
			<label>Tanggal Mulai</label>
				<input type="date" class="form-control" value="<?php echo $tanggal ?>" readonly>
							<label>Total</label>
				<input type="text" class="form-control" value="<?php echo format_rupiah($result['harga']) ?>" readonly>			
            </div>
		
           
			<br>			
			<div class="form-group">
                <a href="https://wa.me/628979312997?text=Saya%20ingin%20memesan%0Apaket%20tour%20:%20<?php echo $result['nama_paket'] ?>%0APada%20Tanggal%20:%20<?php echo $date ?>%0ATotal%20Pembayaran%20:%20<?php echo format_rupiah($result['harga']) ?>" class="btn" style="width:100%">Pesan Sekarang</a>
            </div>
        </form>
		</div>
		</div>
      </div>
</section>
<!--/my-vehicles--> 
<?php include('includes/footer.php');?>

</html>
