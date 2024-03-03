<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT * FROM subscribers WHERE email_sub='$subscriberemail'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql1="INSERT INTO subscribers(email_sub) VALUES('$subscriberemail')";
$lastInsertId=mysqli_query($koneksidb, $sql1);
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
 <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/script1.js" defer></script>


<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      <div class="col-md-5">
          <h6>GARASi 006</h6>
          <p>Kami adalah perusahaan yang bergerak di bidang penyewaan mobil.</p>
        </div>
        <div class="col-md-3">
          <h6>Tentang Kami</h6>
          <ul>

        
          <li><a href="page.php?type=aboutus">Tentang Kami</a></li>
            <li><a href="page.php?type=faqs">FAQs</a></li>
            <li><a href="page.php?type=privacy">Privacy</a></li>
          <li><a href="page.php?type=terms">Terms of use</a></li>
               <li><a href="admin/">Admin Login</a></li>
          </ul>
        </div>
         <div class="col-md-3">
          <h6>Info Kontak</h6>
          <ul>

        
          <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="page.php?type=aboutus"> Rental Mobil Jl Raya Klampok no 208 Singosari Malang</a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="">082132898708 </a></li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="">  garasi006@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
          <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2019 Rental Mobil. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
</body>