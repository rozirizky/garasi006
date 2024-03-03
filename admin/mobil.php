<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/format_rupiah.php');
include('includes/library.php');
if(strlen($_SESSION['alogin'])==0){	
	header('location:index.php');
} else{ ?>

	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Kelola Mobil</h2>
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Mobil</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											
											<th scope="col" class="column-primary"data-header="Paket Liburan"><span>Nama Mobil</span></th>
											<th scope="col">Merek</th>
											<th scope="col">Harga</th>
											<th scope="col">Type BB</th>
											
											<th scope="col" class="column-primary"><a href="tambahmobil.php"><span class="fa fa-plus-circle"></span>Tambah Mobil</a></th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$nomor = 0;
										$sqlmobil = "SELECT mobil.*, merek.* FROM mobil, merek WHERE mobil.id_merek=merek.id_merek ORDER BY mobil.id_mobil ASC";
										$querymobil = mysqli_query($koneksidb,$sqlmobil);
										while ($result = mysqli_fetch_array($querymobil)){
											$nomor++;
											?>
											
												<tr>
												<td data-header="Nama Mobil" class="title"><?php echo htmlentities($result['nama_mobil']);?></td>
												<td data-header="merek" ><?php echo htmlentities($result['nama_merek']);?></td>
												<td data-header="Harga" ><?php echo format_rupiah($result['harga']);?></td>
												<td data-header="Type BB" ><?php echo htmlentities($result['bb']);?></td>
												<th scope="row">
													<div class="toolbox">
														<a href="mobiledit.php?id=<?php echo $result['id_mobil'];?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
														<a href="mobildel.php?id=<?php echo $result['id_mobil'];?>" onclick="return confirm('Apakah anda akan menghapus <?php echo $result['nama_mobil'];?>?');"><i class="fa fa-close"></i></a></td>
													</div>
												</th>
											</tr>
										<?php } ?>
									</tbody>
								</table>
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