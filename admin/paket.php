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
						<h2 class="page-title">Kelola Paket</h2>
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Paket</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											
											<th scope="col" class="column-primary"data-header="Paket Liburan"><span>Nama Paket</span></th>
											<th scope="col">harga</th>
											<th scope="col">tujuan</th>
											<th scope="col">deskripsi</th>
											<th scope="col">destinasi</th>
											<th scope="col" class="column-primary"><a href="tambahpaket.php"><span class="fa fa-plus-circle"></span>Tambah paket</a></th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$nomor = 0;
										$sqlpaket = "SELECT * FROM paket ORDER BY id DESC";
										$querypaket = mysqli_query($koneksidb,$sqlpaket);
										while ($result = mysqli_fetch_array($querypaket)){
											$nomor++;
											?>
										<tr>
												<td data-header="Nama Paket" class="title"><?php echo htmlentities($result['nama_paket']);?></td>
												<td data-header="harga" ><?php echo format_rupiah($result['harga']);?></td>
												<td data-header="tujuan" ><?php echo htmlentities($result['tujuan_wisata']);?></td>
												<td data-header="deskripsi" ><?php echo htmlentities($result['deskripsi']);?></td>
												<td data-header="destinasi" ><?php echo htmlentities($result['destinasi']);?></td>
												<th scope="row">
													<div class="toolbox">
														<a href="paketedit.php?id=<?php echo $result['id'];?>"><i class="fa fa-edit"></i></a>
														<a href="paketdel.php?id=<?php echo $result['id'];?>" onclick="return confirm('Apakah anda akan menghapus <?php echo $result['nama_paket'];?>?');"><i class="fa fa-close"></i></a></td>
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
