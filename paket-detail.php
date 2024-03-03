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
$id=intval($_GET['id']);
$sql = "SELECT * from paket WHERE id = '$id'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
$result = mysqli_fetch_array($query)

  
?>  

<style type="text/css">
  .fa-check{
    color: green;
  }
  .fa-close{
    color: red;
  }

.wrapper{
  display: flex;
 
  position: relative;

}
.wrapper i{
  top: 50%;
  height: 44px;
  width: 44px;
  color: #343F4F;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #fff;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.9);
}
.wrapper i:hover{
  background: #f2f2f2;
}
.wrapper i:first-child{
  left: -22px;
  display: none;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.carousel.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel.dragging img{
  pointer-events: none;
}
.carousel img{
  height: 200px;
  object-fit: cover;
  user-select: none;
  margin-left: 14px;
  width: calc(100% / 3);
}
.carousel img:first-child{
  margin-left: 0px;
}
@media screen and (max-width: 900px) {
  .carousel img{
    width: calc(100% / 2);
  }
}
@media screen and (max-width: 550px) {
  .carousel img{
    width: 100%;
  }
}

.sld{
margin-top: 100px;
}
#left{
  z-index: 1000;
}
</style>

<div class="container sld">
<div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
              <img src="admin/img/vehicleimages/<?php echo htmlentities($result['img1']);?>" alt="img" draggable="false" >

              <img src="admin/img/vehicleimages/<?php echo htmlentities($result['img2']);?>" alt="img" draggable="false">
 
              <img src="admin/img/vehicleimages/<?php echo htmlentities($result['img3']);?>" alt="img" draggable="false">

              <img src="admin/img/vehicleimages/<?php echo htmlentities($result['img4']);?>" alt="img" draggable="false">
      
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
  </div>
<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-10">
        <h2 ><?php echo htmlentities($result['nama_paket']);?>(<?php echo $result['days'] ?>D<?php echo $result['night'] ?>N), <?php echo htmlentities($result['tujuan_wisata']);?></h4>
          <h4 style="color: #F5313D;"><?php echo htmlentities(format_rupiah($result['harga']));?></h5>
  
      </div>
    <div class="col-md-4">
       
      </div>
    </div>

    
        <div class="row">
      <div class="col-md-8">
                <table >
                  <thead>
                    <tr>
                      <th colspan="2">Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo ($result['deskripsi']);?></td>
                    </tr>
                  </tbody>
                </table>

                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Destinasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <td><?php echo ($result['destinasi']);?></td> 
                    </tr>
                    </tbody>
                  </table>

                     <table>
                  <thead>
                    <tr>
                      <th colspan="2">Fasilitas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                     
                      <?php if($result['penginapan']==1)
{
?>
 <td>Penginapan <?php echo $result['night'] ?> Malam</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else {?>
</tr>
<?php } ?>

<?php if($result['transportasi']==1)
{
?>
<tr>
<td>Transportasi</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>

<?php } else {?>
</tr>
<?php } ?>



<?php if($result['makan']==1)
{
?>
<tr>
<td>Makan <?php echo $result['makan_sehari'] ?>x</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
</tr>
<?php } ?>

                   





<?php if($result['tiket']==1)
{
?>
<tr>
<td>Tiket Wisata</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
</tr>
<?php } ?>


<?php if($result['leader']==1)
{
?>
                  <tr>
<td>Tour Leader</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
</tr>
<?php } ?>



<?php if($result['snack']==1)
{
?>
<tr>
<td>Snack</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
</tr>
<?php } ?>


<?php if($result['air']==1)
{
?>

<tr>
<td>Air Mineral</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
</tr>
<?php } ?>


<?php if($result['dokumentasi']==1)
{
?>
<tr>
<td>Dokumentasi</td>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
</tr>
<?php } ?>
                    
                  
                  </tbody>
                </table>
              </div>
        
                  
                  

      
      
     <div class="col-md-4">


        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5 align="center"><i class="fa fa-envelope" aria-hidden="true"></i>Pesan Sekarang</h5>
          </div>
          <form method="post" action="booking_paket.php" onSubmit="return valid();">
      <input type="hidden" class="form-control" name="id" value=<?php echo $id;?> required>
 <label>Masukan Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="masukan nama" required>
      <br>
          <label>Tanggal mulai</label>
        <input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required><br>
    
              <div class="form-group" align="center">
                <button class="btn" align="center" type="submit">Pesan Sekarang</button>
              </div>
             
          </form>
        </div>


</div>

</div>
</div>

</section>

<!--/Listing-detail--> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

</html>