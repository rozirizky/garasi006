<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status=1;
$sql = "UPDATE contactus SET status='$status' WHERE  id_cu='$eid'";
$query = mysqli_query($koneksidb,$sql);
$msg="Pesan sudah dibaca.";
}

 ?>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Contact Us Queries</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">User queries</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>Email</th>
											<th>Telp</th>
											<th>Pesan</th>
											<th>Tgl. Posting</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php 
$sql = "SELECT * from contactus";
$query = mysqli_query($koneksidb,$sql);
$no=0;
while($result=mysqli_fetch_array($query))
{	$no++;
	?>	
										<tr>
											<td><?php echo $no;?></td>
											<td><?php echo htmlentities($result['nama_visit']);?></td>
											<td><?php echo htmlentities($result['email_visit']);?></td>
											<td><?php echo htmlentities($result['telp_visit']);?></td>
											<td><?php echo htmlentities($result['pesan']);?></td>
											<td><?php echo htmlentities($result['tgl_posting']);?></td>
											<?php if($result['status']==1){?>
											<td>Sudah Dibaca</td><?php } else {?>
											<td><a href="manage-conactusquery.php?eid=<?php echo htmlentities($result['id_cu']);?>" onclick="return confirm('Tandai sudah dibaca?')" >Baca</a></td>
											<?php } ?>
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
