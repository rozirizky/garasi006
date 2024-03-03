<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0){
	header('location:index.php');
}else{
if(isset($_POST['update'])){
	$image1=$_FILES["img2"]["name"];
	$id=$_GET['imgid'];
	move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
	$sql="update paket set img2 ='$image1' WHERE id ='$id'";
	$query	= mysqli_query($koneksidb, $sql);
	echo "<script type='text/javascript'>
			alert('Berhasil ganti gambar.');
			document.location = 'paketedit.php?id=$id'; 
		</script>";
}
?>

	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Gambar Mobil 1</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Gambar Mobil 1 Details</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">

											<div class="form-group">
											<label class="col-sm-4 control-label">Gambar Mobil  Sekarang</label>
												<?php 
												$id=intval($_GET['imgid']);
												$sql ="SELECT * from paket where id ='$id'";
												$query	= mysqli_query($koneksidb, $sql);
												$cnt=1;
												while ($result = mysqli_fetch_array($query)){
												?>
												<div class="col-sm-8">
													<img src="img/vehicleimages/<?php echo htmlentities($result['img2']);?>" width="300" height="200" style="border:solid 1px #000">
												</div>
											<?php }?>
											</div>

											<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $id; ?>"required>
											<label class="col-sm-4 control-label">Upload Gambar 1 Baru<span style="color:red">*</span></label>
												<div class="col-sm-8">
													<input type="file" name="img1" accept="image/*" required>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
								
													<button class="btn btn-primary" name="update" type="submit">Update</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
				
			
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
<?php } ?>