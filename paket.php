<?php 
session_start();
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);

?>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 



<div class="container">
  <div class="row">

    <?php $query = mysqli_query($koneksidb,"SELECT * FROM paket") ?>
    <?php while ($result = mysqli_fetch_array($query)) {
      ?>
    
    <div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box">
  <img src="admin/img/vehicleimages/<?php echo $result['img1'] ?>" class="img-responsive car thumbnail" alt="image">
 <ul>
<li><?php echo $result['days'] ?>&nbsp;&nbsp;Day</li>
<li><?php echo $result['night'] ?>&nbsp;&nbsp;Night</li>
</ul>
</div>
  <div class="car-title-m">
    <h6><a href="paket-detail.php?id=<?php echo $result['id'] ?>" ><?php echo $result['nama_paket'] ?></a></h6><br>
    <p class="card-text"><?php echo format_rupiah($result['harga'])  ?><p>
   <a href="paket-detail.php?id=<?php echo $result['id'] ?>" class="btn">Read More</a>
   
  </div>
</div>
    </div>
<?php } ?>
  </div>
</div>
<br><br>
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

</html>