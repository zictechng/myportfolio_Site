<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title> Abel - Portfolio</title>
   <meta name="description" content ='Abel Uwadia, A Full Stack Developer | Mobile App Developer | Website Developer | Accelerating Growth for Business.' />
    <meta name='keywords' content='Online business, Virtual funds, Sale paypal funds, sale paypal, exchange rate, current exchange rate, Bitcoin, Payoneer, Work from home, oza, oza mobile' />
    <meta content="I have over 6 years of experience building, and deploying several applications for start-up  and established businesses." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="https://oza-mobile-website.onrender.com/assets/images/favicon.svg" />

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
  
   <!-- CSS here -->
  <?php include('cssSection.php')?>
</head>

<body>
   <!-- pre loader area start -->
   <div id="preloader">
      <div class="preloader">
          <span></span>
          <span></span>
      </div>
  </div>
  <!-- pre loader area end -->

   <?php include('headerSection.php')?>
   <!-- tp-header-area-end -->

   <!-- mobile-menu-area -->
   <?php include('mobileMenuSection.php')?>
   <!-- mobile-menu-area-end -->

   <!-- tp-offcanvus-area-start -->
   <?php include('sideBarSection.php')?>

   <div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->

   <main>
   <!-- tp-hero-area-start -->
   <?php include('heroSection.php')?>
   <!-- tp-hero-area-end -->

   <!--creative-area-start -->
   <?php include('creativeSection.php')?>
   <!--creative-area-end -->

   <!--bran-area start -->
   <?php include('brandSection.php')?>
   <!--bran-area end -->

   <!-- service-area-start -->
   <?php include('serviceSection.php')?>
   <!-- service-area-end -->

   <!-- project-area-start -->
   <?php include('projectSection.php')?>
   <!-- project-area-end -->

   <!-- testimonial-area start-->
   <?php //include('testimonySection.php') ?>
   <!-- testimonial-area-end -->

   <!-- blog-area-start -->
   <?php //include('blogSection.php')?>
   <!-- blog-area-end -->

   <!-- news-letter-area-start -->
   <?php //include('newSection.php')?>
   <!-- news-letter-area-end -->

   </main>

   <!-- footer-area-start -->
   <?php include('footer.php')?>
   <!-- footer-area-end -->


   <!-- backto-top-area-start -->
   <button class="scroll-top scroll-to-target d-md-none" data-target="html">
      <i class="far fa-angle-double-up"></i>
  </button>
   <!-- backto-top-area-end -->

   <?php include('javascript.php')?>
   <!-- JS here -->
   
</body>
</html>