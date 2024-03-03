<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0){	
header('location:index.php');}
else{
?>	
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kelola Merek</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Merek</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
							else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr align="center">
										<th>No</th>
										<th>Nama Merek</th>

										<th><a href="tambahmerek.php"><span class="fa fa-plus-circle"></span>Tambah Merek</a></th>
										</tr>
									</thead>
									<tbody>

									<?php 
										$nomor = 0;
										$sqlmerek = "SELECT * FROM merek";
										$querymerek = mysqli_query($koneksidb,$sqlmerek);
										while ($result = mysqli_fetch_array($querymerek)) {
											$nomor++;
											?>
										<tr align="center">
											<td><?php echo htmlentities($nomor);?></td>
											<td><?php echo htmlentities($result['nama_merek']);?></td>
											
											<td>                               
											<a href="merekdel.php?id=<?php echo $result['id_merek'];?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $result['nama_merek'];?>?');"><i class="fa fa-close"></i>Delete</a></td>
										</tr>
										<?php }?>
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