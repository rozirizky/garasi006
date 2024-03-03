<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0){	
header('location:index.php');
}else{
?>



	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Tambah Mobil</h2>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
									<div class="panel-heading">Form Tambah Mobil</div>
								<div class="panel-body">
									<form method="post" name="theform" action="tambahmobilact.php" class="form-horizontal" onsubmit="return valid(this);" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-2 control-label">Nama Mobil<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="vehicletitle" class="form-control" required>
										</div>
										<label class="col-sm-2 control-label">Pilih Merek<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<select class="form-control" name="brandname" required="" data-parsley-error-message="Field ini harus diisi" >
												<option value="">== Pilih Merek ==</option>
													<?php
														$mySql = "SELECT * FROM merek ORDER BY id_merek";
														$myQry = mysqli_query($koneksidb, $mySql);
														while ($myData = mysqli_fetch_array($myQry)) {
															if ($myData['id_merek']== $dataMerek) {
															$cek = " selected";
															} else { $cek=""; }
															echo "<option value='$myData[id_merek]' $cek>$myData[nama_merek] </option>";
														}
													?>
											</select>
										</div>
									</div>
																				
									<div class="hr-dashed"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Deskripsi Mobil<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<textarea class="form-control" name="vehicalorcview" rows="3" required></textarea>
										</div>
										
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Harga /Hari<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="number" min="0" name="priceperday" class="form-control" required>
										</div>
										<label class="col-sm-2 control-label">Jenis Bahan Bakar<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<select class="form-control" name="fueltype" required>
											<option value=""> == Pilih Jenis Bahan Bakar == </option>
											<option value="Bensin">Bensin</option>
											<option value="Diesel">Diesel Solar</option>
											</select>
										</div>
									</div>

									
										<label class="col-sm-2 control-label">Kapasitas Tempat Duduk<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="number" min="1" name="seatingcapacity" class="form-control" required>
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
										
									</div>

								
									<div class="hr-dashed"></div>									
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
							<div class="panel-heading">Accessories</div>
								<div class="panel-body">

									<div class="form-group">
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
												<label for="airconditioner"> Air Conditioner </label>
											</div>
										</div>
									
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
												<label for="powerdoorlocks"> Power Door Locks </label>
											</div>
										</div>
									
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
												<label for="antilockbrakingsys"> AntiLock Braking System </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
												<label for="brakeassist"> Brake Assist </label>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="powersteering" name="powersteering" value="1">
												<label for="inlineCheckbox5"> Power Steering </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
												<label for="driverairbag">Driver Airbag</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
												<label for="passengerairbag"> Passenger Airbag </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
												<label for="powerwindow"> Power Windows </label>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="cdplayer" name="cdplayer" value="1">
												<label for="cdplayer"> CD Player </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox h checkbox-inline">
												<input type="checkbox" id="centrallocking" name="centrallocking" value="1">
												<label for="centrallocking">Central Locking</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="crashcensor" name="crashcensor" value="1">
												<label for="crashcensor"> Crash Sensor </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="leatherseats" name="leatherseats" value="1">
												<label for="leatherseats"> Leather Seats </label>
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