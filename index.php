<?php 
session_start();
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);

?>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section" style="background-color:#F0EEED;background-image:url(assets/images/car-banner.png)">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content" style="margin-top: 50px">
            <div class="teks"style="background-color:rgba(11, 11, 11, 0.5);padding: 15px ">
                <h1>Cari Mobil untuk kenyamanan anda.</h1>
            <p>Kami Punya beberapa pilihan untuk anda. </p>
            </div>
            <div style="margin-top: 20px">
            <a href="car-listing.php" class="btn">Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Mobil Untuk Anda</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php 
$sql = "SELECT mobil.*, merek.* FROM mobil, merek WHERE merek.id_merek = mobil.id_merek";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
while($results = mysqli_fetch_array($query))
{

?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($results['id_mobil']);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($results['image1']);?>" class="img-responsive car thumbnail" alt="image" ></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($results['bb']);?></li>
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($results['seating']);?> Seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=<?php echo htmlentities($results['id_mobil']);?>"><?php echo htmlentities($results['nama_merek']);?> , <?php echo htmlentities($results['nama_mobil']);?></a></h6><br>
<p><?php echo htmlentities(format_rupiah($results['harga']));?> /Hari</p>
</div>
<div class="inventory_info_m">

<a href="vehical-details.php?vhid=<?php echo htmlentities($results['id_mobil']);?>" class="btn">Read More</a>
</div>
</div>
</div>
<?php }}?>
</div>
</div>
</div>
</div>
</section>
       
      </div>
    </div>

    <section class="section-padding gray-bg" style="margin-top:-80px">
  <div class="container">
    <div class="row">       <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Paket Tour Untuk Anda</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php 
$sql = "SELECT * FROM paket ";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
while($results = mysqli_fetch_array($query))
{

?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="paket-detail.php?id=<?php echo htmlentities($results['id']);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($results['img1']);?>" class="img-responsive car thumbnail" alt="image" ></a>
<ul>
<li><?php echo htmlentities($results['days']);?> Day</li>
<li><?php echo htmlentities($results['night']);?> Night</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="paket-detail.php?id=<?php echo htmlentities($results['id']);?>"><?php echo htmlentities($results['nama_merek']);?> , <?php echo htmlentities($results['nama_paket']);?></a></h6><br>
<p><?php echo htmlentities(format_rupiah($results['harga']));?> /Hari</p>
</div>
<div class="inventory_info_m">

<a href="paket-detail.php?id=<?php echo htmlentities($results['id']);?>" class="btn">Read More</a>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>

  </div>
</div>
</section>
<!-- /Resent Cat --> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

</html>