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
					
						<h2 class="page-title">Edit Paket</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Form Edit Paket</div>
									<div class="panel-body">
										<?php 
										$id=intval($_GET['id']);
										$sql ="SELECT * FROM paket WHERE id ='$id'";
										$query = mysqli_query($koneksidb,$sql);
										$result = mysqli_fetch_array($query);
										?>

										<form method="post" class="form-horizontal" name="theform" action ="paketeditact.php" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-2 control-label">Nama Paket<span style="color:red">*</span></label>
											<div class="col-sm-4">
												<input type="hidden" name="id" class="form-control" value="<?php echo $id;?>" required>
												<input type="text" name="nama_paket" class="form-control" value="<?php echo htmlentities($result['nama_paket']);?>" required>
											</div>

											<div class="form-group">
											<label class="col-sm-2 control-label">Harga <span style="color:red">*</span></label>
											<div class="col-sm-4">
												<input type="text" name="harga" class="form-control" value="<?php echo htmlentities($result['harga']);?>" required>
											</div>
											<label class="col-sm-2 control-label">hari<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="days" class="form-control"  placeholder="days" value = "<?php echo htmlentities($result['days']);?>"required>
											<input type="text" name="night" class="form-control" placeholder="night" value = "<?php echo htmlentities($result['night']);?>" required>
										</div>
										<label class="col-sm-2 control-label">makan<span style="color:red">*</span></label>
										<div class="col-sm-4">
											<input type="text" name="makan_sehari" class="form-control " value="<?php echo htmlentities($result['makan_sehari']);?> " required>
										</div>
											
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Tujuan Wisata <span style="color:red">*</span></label>
											<div class="col-sm-4">
												<input type="text" name="tujuan" class="form-control" value="<?php echo htmlentities($result['tujuan_wisata']);?>" required>
											</div>
											
										</div>
																					
										<div class="hr-dashed"></div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Deskripsi<span style="color:red">*</span></label>
											<div class="col-sm-4">
												<textarea class="form-control" name="deskripsi" rows="3" required><?php echo $result['deskripsi']?></textarea>
											</div>
											
										</div>



										

											<div class="form-group">
											<label class="col-sm-2 control-label">Destinasi<span style="color:red">*</span></label>
											<div class="col-sm-4">
												<textarea class="form-control" name="destinasi" rows="3" required><?php echo ($result['destinasi']);?></textarea>
											</div>
											
										</div>

										
										
										<div class="hr-dashed"></div>								
										
										<div class="form-group">
											<div class="col-sm-12">
												<h4><b>Gambar</b></h4>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-4">
												Gambar 1 <img src="img/vehicleimages/<?php echo htmlentities($result['img1']);?>" width="300" height="200" style="border:solid 1px #000">
												<a href="changeimage1.php?imgid=<?php echo htmlentities($result['id'])?>">Ganti Gambar 1</a>
											</div>
											<div class="col-sm-4">
												Gambar 2 <img src="img/vehicleimages/<?php echo htmlentities($result['img2']);?>" width="300" height="200" style="border:solid 1px #000">
												<a href="changeimage2.php?imgid=<?php echo htmlentities($result['id'])?>">Ganti Gambar 1</a>
											</div>
											<div class="col-sm-4">
												Gambar 3 <img src="img/vehicleimages/<?php echo htmlentities($result['img3']);?>" width="300" height="200" style="border:solid 1px #000">
												<a href="changeimage3.php?imgid=<?php echo htmlentities($result['id'])?>">Ganti Gambar 1</a>
											</div>
											<div class="col-sm-4">
												Gambar 4 <img src="img/vehicleimages/<?php echo htmlentities($result['img4']);?>" width="300" height="200" style="border:solid 1px #000">
												<a href="changeimage4.php?imgid=<?php echo htmlentities($result['id'])?>">Ganti Gambar 1</a>
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
												<?php if($result['penginapan']==1)
												{?>
													<div class="checkbox checkbox-inline">
														<input type="checkbox" id="inlineCheckbox1" name="penginapan" checked value="1">
														<label for="inlineCheckbox1"> penginapan </label>
													</div>
												<?php } else { ?>
													<div class="checkbox checkbox-inline">
														<input type="checkbox" id="inlineCheckbox1" name="penginapan" value="1">
														<label for="inlineCheckbox1"> penginapan </label>
													</div>
												<?php } ?>
											</div>
											<div class="col-sm-3">
												<?php if($result['transportasi']==1)
												{?>
													<div class="checkbox checkbox-inline">
														<input type="checkbox" id="inlineCheckbox1" name="transportasi" checked value="1">
														<label for="inlineCheckbox2"> Transportasi</label>
													</div>
												<?php } else {?>
													<div class="checkbox checkbox-success checkbox-inline">
														<input type="checkbox" id="inlineCheckbox1" name="transportasi" value="1">
														<label for="inlineCheckbox2"> Transportasi </label>
													</div>
												<?php }?>
											</div>
											<div class="col-sm-3">
											<?php if($result['makan']==1)
											{?>
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" name="makan" checked value="1">
													<label for="inlineCheckbox3">  Makan </label>
												</div>
											<?php } else {?>
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" name="makan" value="1">
													<label for="inlineCheckbox3"> Makan </label>
												</div>
											<?php } ?>
											</div>
											<div class="col-sm-3">
											<?php if($result['tiket']==1)
											{?>
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" name="tiket" checked value="1">
													<label for="inlineCheckbox3"> Tiket Wisata </label>
												</div>
											<?php } else {?>
												<div class="checkbox checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" name="tiket" value="1">
													<label  for="inlineCheckbox3"> Tiket Wisata </label>
												</div>
											<?php } ?>
											</div>
									</div>
									<div class="form-group">
										<div class="col-sm-3">
										<?php if($result['snack']==1)
										{?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="snack" checked value="1">
												<label for="inlineCheckbox1"> Welocome Snack </label>
											</div>
										<?php } else {?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="snack" value="1">
												<label for="inlineCheckbox1">Welocome Snack </label>
											</div>
										<?php } ?>
										</div>
										<div class="col-sm-3">
										<?php if($result['air']==1)
										{?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="air" checked value="1">
												<label for="inlineCheckbox2">Air Mineral</label>
											</div>
										<?php } else { ?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="air" value="1">
												<label for="inlineCheckbox2">Air Mineral</label>
											</div>
										<?php } ?>
										</div>
										<div class="col-sm-3">
										<?php if($result['dokumentasi']==1)
										{?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="dokumentasi" checked value="1">
												<label for="inlineCheckbox3">  Free Dokumentasi </label>
											</div>
										<?php } else { ?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="dokumentasi" value="1">
												<label for="inlineCheckbox3">  Free Dokumentasi </label>
											</div>
										<?php } ?>
										</div>
										<div class="col-sm-3">
										<?php if($result['leader']==1)
										{?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="leader" checked value="1">
												<label for="inlineCheckbox3">  Tour Leader </label>
											</div>
										<?php } else { ?>
											<div class="checkbox checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="leader" value="1">
												<label for="inlineCheckbox3">  Tour Leader </label>
											</div>
										<?php } ?>
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
												<button class="btn btn-primary" type="submit" style="margin-top:4%">Save changes</button>
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