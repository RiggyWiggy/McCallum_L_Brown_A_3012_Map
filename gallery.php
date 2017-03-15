<?php
include('admin/phpscripts/connect.php');

  $sqlGrab = "SELECT * FROM tbl_imgs";

  $fullScalImg = mysqli_query($link, $sqlGrab);
  $fullScalThumbs = mysqli_query($link, $sqlGrab);
  $initialLoad = mysqli_query($link, $sqlGrab);
?>

<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Chantry Island</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/app.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CLora:400,700" rel="stylesheet"></head>
<body>
<h1 class="hide">Chantry Island</h1>
<header id="topNav">
  <section class="row">
  <h2 class="hide">Navigation Container</h2>
    <nav class="small-12 large-8 columns large-push-2 end">

       <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="large">
       <h2 class="hide">Main Navigation</h2>

        <button class="menu-icon float-right" type="button" data-toggle> </button>
      </div>
      <div id="main-menu">
        <div class="small-8 small-centered columns"> <a href="index.html"><img src="images/logo.svg" alt="logo" id="logo"></a> </div>
        <ul id="menuLinks">
          <li><a href="about.html">About</a></li>
          <li><a href="newsandevents.html">News & Events</a></li>
          <li><a href="booking.html">Booking</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="donate.html">Donations</a></li>
                  <li><a href="volunteers.html">Volunteers</a></li>
        </ul>
      </div>
    </nav>
    <div class="small-12 large-1 large-offset-1 columns large-pull-10"> <a href="index.html"><img src="images/logo.svg" alt="logo" id="logoDesktop"></a> </div>
  </section>
</header>


<section class="gallery">
  <h2 class="hide">Chantry Island Gallery</h2>
  <section class="row">
    <div class="large-10 large-centered columns">
      <h2 class="topHeader text-center">Gallery</h2>
      <p>Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.</p>
    </div>
  </section>


 <?php
$fullImg = mysqli_fetch_array($fullScalImg);
echo "<div id='mainImg-{$fullImg['img_id']}' class='hide full-img-cont'>";
 echo "<img class='closer' id='closer-{$fullImg['img_id']}' src='images/closer.png' alt='Closer'>";
echo "<div class='fullImg'>";

 //will make prev and next into SVGs later on
 echo "<img class='prev arrow' id='prev' src='images/left-arrow.png' alt='Left Arrow'>";
 echo "<img class='next arrow' id='next' src='images/right-arrow.png' alt='Right Arrow'>";
 echo "<img src='images/gallery/bedroom1.jpg' class='full-gal-img' alt='{$fullImg['img_title']}'>";
 echo "<p class='imgDescription'>{$fullImg['img_desc']}";
 echo "</p>";
 echo "</div>";
 echo "<div class='popUpThumbsCont'>";
 while ($fullThumbs = mysqli_fetch_array($fullScalThumbs)){
   /**echo "<div id='mainImg-{$row['img_id']}' class='full-img-cont hide'>";
   echo "<img class='closer' id='closer-{$row['img_id']}' src='images/closer.png' alt='Closer'>";
   //will make prev and next into SVGs later on
   echo "<img class='prev arrow' id='prev-{$row['img_id']}' src='images/left-arrow.png' alt='Left Arrow'>";
   echo "<img class='next arrow' id='next-{$row['img_id']}' src='images/right-arrow.png' alt='Right Arrow'>";
   echo "<img src='images/gallery/{$row['img_src']}' class='full-gal-img' alt='{$row['img_title']}'>";
   echo "</div>";**/
   echo "<div class='popUpThumbs'>";
   echo "<img class='galImg-screen' id='thumb-{$fullThumbs['img_id']}' src='images/gallery/{$fullThumbs ['img_thumb']}' alt='{$fullThumbs ['img_title']}'>";
   echo "</div>";
 }
 echo "</div>";
 echo "</div>";
   echo "<section class='galImgCont row small-4 large-12 medium-6 ' id='workGallery'>";
echo "<h3 class='hide'>Gallery Thumbnails";
echo "</h3>";
  while ($row = mysqli_fetch_array($initialLoad)){
    /**echo "<div id='mainImg-{$row['img_id']}' class='full-img-cont hide'>";
    echo "<img class='closer' id='closer-{$row['img_id']}' src='images/closer.png' alt='Closer'>";
    //will make prev and next into SVGs later on
    echo "<img class='prev arrow' id='prev-{$row['img_id']}' src='images/left-arrow.png' alt='Left Arrow'>";
    echo "<img class='next arrow' id='next-{$row['img_id']}' src='images/right-arrow.png' alt='Right Arrow'>";
    echo "<img src='images/gallery/{$row['img_src']}' class='full-gal-img' alt='{$row['img_title']}'>";
    echo "</div>";**/

    echo "<img class='galImg' id='{$row['img_id']}' src='images/gallery/{$row['img_thumb']}' alt='{$row['img_title']}'>";

  }
    echo "</section>";
   ?>

<div class="gallery-footer-note large centered row">
  <p>If you have photos of Chantry Island that you would like to share with us, connect with our <a href="https://www.facebook.com/ChantryIsland/?hc_ref=PAGES_TIMELINE">Facebook</a> page.</p>
</div>
<section class="row">
  <div class="small-4 small-centered large-2 large-centered columns" id="arrow">
  <h4 class="hide">Donation Arrow</h4>
  <a href="#"><img src="images/arrow.svg" alt="Up Arrow"></a> </div>
</section>
<section class="row">
  <div class="small-12 large-12 large-centered columns" id="backToTop">
    <h4 class="hide">Back To Top</h4>
  <a href="#">Back To Top</a> </div>
</section>
</section>
<footer id="footerCon">
  <section class="row">
    <div class="small-12 large-4 columns">
      <h4>Sitemap</h4>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="newsandevents.html">News & Events</a></li>
        <li><a href="booking.html">Booking</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="donate.html">Donations</a></li>
                <li><a href="volunteers.html">Volunteers</a></li>
      </ul>
      <br>
      <h4>Connect</h4>
      <div class="footerSocial">
        <ul>
          <li><a href="contact.html#message"><img src="images/email.svg" alt="E-mail"></a></li>
          <li><a href="http://www.facebook.com/MarineHeritageSociety"><img src="images/facebook.png" alt="Facebook"></a></li>
          <li><a href="http://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA?feature=watch"><img src="images/youtube.svg" alt="Youtube"></a></li>
        </ul>
      </div>
    </div>
    <div class="small-12 large-4 columns">
      <h4>Contact Us</h4>
      <ul>
        <li class="footerContact">By Phone</li>
        <li><a href="tel:+519-797-5862">Call: 519-797-5862</a></li>
        <li><a href="tel:+1-866-797-5862">Toll Free: 1-866-797-5862</a></li>
      </ul>
      <ul>
        <li class="footerContact">By Mail</li>
        <li>Marine Heritage Society</li>
        <li>86 Saugeen Street</li>
        <li>Southampton, Ontario</li>
        <li>Canada, N0H 2L0</li>
      </ul>
    </div>
    <div class="small-12 large-4 columns">
      <h4>Other Attractions</h4>
      <ul>
        <li><a href="http://www.saugeenshores.ca/">Saugeen Shores</a></li>
        <li><a href="http://www.brucemuseum.ca/">Bruce County Museum & Cultural Centre</a></li>
        <li><a href="http://www.brucecoastlighthouses.com/">Bruce Coast Lighthouse Tour</a></li>
        <li><a href="http://www.explorethebruce.com/">Explore the Bruce</a></li>
        <li><a href="http://www.southamptontennisclub.ca/">Southampton Tennis Club</a></li>
      </ul>
    </div>
  </section>
</footer>


<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
