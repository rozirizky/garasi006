<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0){	
header('location:index.php');
}else{
?>

<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>


	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Tambah Paket</h2>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
									<div class="panel-heading">Form Tambah Mobil</div>
								<div class="panel-body">
									<form method="post" name="paket" action="tambahpaketact.php" class="form-horizontal" 
									enctype="multipart/form-data">
									<div class="form-group" >
										<label class="col-sm-2 control-label">Nama Paket<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="nama_paket" class="form-control" required>
										</div>
										<label class="col-sm-2 control-label">Tujuan Wisata<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="tujuan" class="form-control" required>
										</div>
										<label class="col-sm-2 control-label">hari<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="days" class="form-control"  placeholder="days" required>
											<input type="text" name="night" class="form-control" placeholder="night" required>
										</div>
										<label class="col-sm-2 control-label">makan<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="makan_sehari" class="form-control " required>
										</div>

						

										<div class="mt-3x">
										<label class="col-sm-2  control-label">Harga<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="harga" class="form-control"  required>
											</div>
										</div>
										
									</div>							
									<div class="form-group">
										<label class="col-sm-2 control-label">Deskripsi<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<textarea class="form-control" name="deskripsi" rows="3" ></textarea>
										</div>

									</div>

							
									<div class="form-group">
										<label class="col-sm-2 control-label">Destinasi</label>
										<div class="col-sm-4">
											<textarea class="form-control" rows="5" cols="50" name="destinasi"  placeholder="Package Details" required>
											
											</textarea> 
										</div>
									</div>
									<div class="hr-dashed"></div>

									<div class="form-group">
										<div class="col-sm-12">
											<h4><b>Upload Gambar</b></h4>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-4">
											Gambar 1<span style="color:red">*</span><input type="file" name="img1" accept="image/*" required>
										</div>
										<div class="col-sm-4">
											Gambar 2<span style="color:red">*</span><input type="file" name="img2" accept="image/*" required>
										</div>
										
										<div class="col-sm-4">
											Gambar 3<span style="color:red">*</span><input type="file" name="img3" accept="image/*" required>
										</div>
										<div class="col-sm-4">
											Gambar 4<span style="color:red">*</span><input type="file" name="img4" accept="image/*" required>
										</div>
										
										
									</div>

								
									<div class="hr-dashed"></div>									
								</div>
							</div>
						</div>
					</div>

				<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
							<div class="panel-heading">Fasilitas</div>
								<div class="panel-body">

									<div class="form-group">
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="airconditioner" name="penginapan" value="1">
												<label for="penginapan">Penginapan</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="airconditioner" name="transportasi" value="1">
												<label for="transportasi">Transportasi</label>
											</div>
										</div>
									
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="powerdoorlocks" name="makan" value="1">
												<label for="makan">Makan</label>
											</div>
										</div>
									
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="antilockbrakingsys" name="tiket" value="1">
												<label for="tiket"> Tiket Wisata</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="brakeassist" name="leader" value="1">
												<label for="leader"> Tour Leader </label>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="powersteering" name="snack" value="1">
												<label for="snack"> Welocome Snack </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="driverairbag" name="air" value="1">
												<label for="air">Air Mineral</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="passengerairbag" name="dokumentasi" value="1">
												<label for="dokumentasi"> Free Dokumentasi </label>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="form-group">
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<button class="btn btn-primary" type="submit">Save changes</button>
												<button class="btn btn-default" type="reset">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
					</div>
				</div>
				
			</div>
		</div>
	</div>
</form>



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