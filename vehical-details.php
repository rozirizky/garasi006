<?php 
session_start();
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);
?>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Listing-Image-Slider-->

<?php 
$vhid=intval($_GET['vhid']);
$sql = "SELECT mobil.*, merek.* from mobil, merek WHERE merek.id_merek=mobil.id_merek AND mobil.id_mobil='$vhid'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
while($result = mysqli_fetch_array($query))
{ 
  $_SESSION['brndid']=$result['id_merek'];  
?>  
<br><br><br><br>
<style type="text/css">
  .fa-check{
    color: green;
  }
  .fa-close{
    color: red;
  }

</style>
<section id="listing_img_slider">
  <div>
    <center><img src="admin/img/vehicleimages/<?php echo htmlentities($result['image1']);?>" class="img-responsive" alt="image" width="800">
    </center>
  </div>
 
</section>

<section class="listing-detail" style="margin-top : -50px">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h1><?php echo htmlentities($result['nama_merek']);?>, <?php echo htmlentities($result['nama_mobil']);?></h1>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <h2 style="color: #F5313D;"><?php echo htmlentities(format_rupiah($result['harga']));?> <span style="color:#000;">/hari</span><h>
         
        </div>
      </div>
    </div>

    <center>
    
        <div class="main_features" style="margin-bottom: 30px;margin-top: -30px;">
          <ul>
        
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5><?php echo htmlentities($result['bb']);?></h5>
              <p>Tipe Bahan Bakar</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5><?php echo htmlentities($result['seating']);?> </h5>
              <p>Jumlah Kursi</p>
            </li>
          </ul>
        </div>
        </center>

        <div class="row">
      <div class="col-md-8">
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo htmlentities($result['deskripsi']);?></td>
                    </tr>
                  </tbody>
                </table>



                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Air Conditioner</td>
<?php if($result['AirConditioner']==1)
{
?>
<td><i class="fa fa-check "  aria-hidden="true"></i></td>
<?php } else { ?> 
   <td><i class="fa fa-close" aria-hidden="true"></i></td>
   <?php } ?> </tr>

<tr>
<td>AntiLock Braking System</td>
<?php if($result['AntiLockBrakingSystem']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else {?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<tr>
<td>Power Steering</td>
<?php if($result['PowerSteering']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>
                   

<tr>

<td>Power Windows</td>

<?php if($result['PowerWindows']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>
                   
 <tr>
<td>CD Player</td>
<?php if($result['CDPlayer']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<tr>
<td>Leather Seats</td>
<?php if($result['LeatherSeats']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<tr>
<td>Central Locking</td>
<?php if($result['CentralLocking']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<tr>
<td>Power Door Locks</td>
<?php if($result['PowerDoorLocks']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
                    </tr>
                    <tr>
<td>Brake Assist</td>
<?php if($result['BrakeAssist']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php  } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<tr>
<td>Driver Airbag</td>
<?php if($result['DriverAirbag']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
 </tr>
 
 <tr>
 <td>Passenger Airbag</td>
 <?php if($result['PassengerAirbag']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else {?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<tr>
<td>Crash Sensor</td>
<?php if($result['CrashSensor']==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

                  </tbody>
                </table>
              </div>
        
          
      <?php }} ?>
   
      
        
     <div class="col-md-4">


        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5 align="center"><i class="fa fa-envelope" aria-hidden="true"></i>Pesan Sekarang</h5>
          </div>
          <form method="post" action="booking_mobil.php" onSubmit="return valid();">
      <input type="hidden" class="form-control" name="id" value=<?php echo $vhid;?> required>
 <label>Masukan Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="masukan nama" required>
      <br>
          <label>Tanggal mulai</label>
        <input type="date" class="form-control" name="fromdate" placeholder="To Date(dd/mm/yyyy)" required><br>
        <label>Tanggal selesai</label>
        <input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required><br>
    
              <div class="form-group" align="center">
                <button class="btn" align="center" type="submit">Pesan Sekarang</button>
              </div>
             
          </form>
        </div>


</div>

</div>


<?php 
$bid=$_SESSION['brndid'];
$sql1="SELECT tblvehicles.*, tblbrands.*from tblvehicles, tblbrands WHERE tblbrands.id_merek=tblvehicles.VehiclesBrand AND tblvehicles.VehiclesBrand='$bid'";
$query1 = mysqli_query($koneksidb,$sql1);
if(mysqli_num_rows($query1)>0)
{
while($result = mysqli_fetch_array($query1))
{ 
 ?>      

        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result['id']);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result['Vimage1']);?>" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['BrandName']);?> , <?php echo htmlentities($result['VehiclesTitle']);?></a></h5>
              <p class="list-price"><?php echo htmlentities(format_rupiah($result['PricePerDay']));?></p>
          
              <ul class="features_list">
                
             <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result['SeatingCapacity']);?> seats</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result['ModelYear']);?> model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result['FuelType']);?></li>
              </ul>
            </div>
          </div>
        </div>
 <?php }} ?>       

      </div>
    </div>
    <!--/Similar-Cars--> 
    
  </div>
</section>
<!--/Listing-detail--> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

</html>