<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourment</title>
<meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0"></meta>
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<!--<link rel="stylesheet" href="{{asset('css/style.css')}}">-->
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/w3.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/slider.css')}}">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next', 
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">

  <header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="index.html"><img src="/storage/images/logo.png" alt=""></a></h1>

        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
              <li class=""><a href="/">Home</a></li>
              <li class="with_ul"><a href="/aboutus">About Us</a>
              </li>
              <li class="current"><a href="/menu">Menu</a></li>
              <li class=""><a href="/blog">Blog</a></li>
              <li class=""><a href="/contacts">Contacts</a></li>
              <li class=""><a href="#">Login</a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>

        <div class="clear"></div>
      </div>
    </div>
  </header>






  
  <div class="content">
    <div class="container_12">
      <div class="grid_6">
        <h2>Our Menu</h2>
        <p class="col2 inn1"><a href="#">Integer non metus justo ac posuere turpis. Integer iaculis porta metus, in aliquam orci vehicula sit amet. Suspendisse turpis mauris, laoreet ac aliquet a lobortis in massa. Etiam tortor metus, tincidunt vel congue etu</a></p>
        <p>Aenean sed nunc lorem, nec ornare nibh. Pellentesque vitae sem odio. Vivamus vulputate est eget elit rutrum a consectetur justo aliquet. Aliquam hendrerit consectetur mi, non molestie massa venenatis quis. Integer aliquet euismod nisl, et sagittis sem scelerisque sit amet. Etiam dapibus, tellus et imperdiet pulvinar, urna nunc consectetur enim, in </p>
        <div class="menu">
          <div class="grid_3 alpha"> <img src="/storage/images/page3_img1.jpg" alt="" class="img_inner">
            <h3><a href="#">Donec</a></h3>
          </div>
          <div class="grid_3 omega"> <img src="/storage/images/page3_img2.jpg" alt="" class="img_inner">
            <h3><a href="#">Murtyio</a></h3>
          </div>
          <div class="grid_3 alpha"> <img src="/storage/images/page3_img3.jpg" alt="" class="img_inner">
            <h3><a href="#">Holity as Polfh</a></h3>
          </div>
          <div class="grid_3 omega"> <img src="/storage/images/page3_img4.jpg" alt="" class="img_inner">
            <h3><a href="#">Kiperty</a></h3>
          </div>
          <div class="grid_3 alpha"> <img src="/storage/images/page3_img5.jpg" alt="" class="img_inner">
            <h3 class="mb0"><a href="#">Gyloit</a></h3>
          </div>
          <div class="grid_3 omega"> <img src="/storage/images/page3_img6.jpg" alt="" class="img_inner">
            <h3 class="mb0"><a href="#">Liotymer</a></h3>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="grid_5 prefix_1">
        <h2 class="head2">Chef’s Secrets</h2>
        <ul class="list l1">
          <li><a href="#"> Maecenas malesuada sapien</a></li>
          <li><a href="#">Etiam tortor metus, tincidunt vel gtcongue</a></li>
          <li><a href="#">Pellentesque vitae sem odio</a></li>
          <li><a href="#"> Lorem ipsum dolor sit amet, con</a></li>
          <li><a href="#">Provide preferred vendor's list</a></li>
          <li><a href="#">Vivamus vulputate est eget elit s tellus et</a></li>
          <li><a href="#"> Nam blandit metus eget pretium</a></li>
          <li><a href="#"> Aaecenas koalesuada sapien</a></li>
          <li><a href="#">Ttiam tortor metus tiklioidunt vel</a></li>
          <li><a href="#">Eellentesque vitae sem odiokhoy</a></li>
          <li><a href="#"> Okoem ipsum dolor sit amet df</a></li>
          <li><a href="#">Rovide preferred vendor's listko frefrwq hu</a></li>
          <li><a href="#">Vvamus vulputate est eet elit</a></li>
          <li class="mb0"><a href="#"> Am blandit metus eet pretium</a></li>
        </ul>
        <h2 class="head1">Wine List</h2>
        <ul class="list">
          <li><a href="#"> Koalesuada  libero</a></li>
          <li><a href="#">Ortor metus vel</a></li>
          <li><a href="#">Eellentesque vitae sem</a></li>
          <li><a href="#"> Ipsum</a></li>
          <li><a href="#">Rovide preferred</a></li>
          <li><a href="#">Vulputate est</a></li>
          <li><a href="#"> Bandit metus</a></li>
        </ul>
      </div>
      <div class="clear"></div>








      
      
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li class="current"><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="menu.html">Menu</a></li>
              <li><a href="portfolio.html">Blog</a></li>
              <li><a href="contacts.html">Contacts</a></li>
              <li><a href="">Login</a></li>
            </ul>
          </nav>
        </div>
        <div class="grid_6">
          <h3>Email Updates</h3>
          <p class="col1">Join our digital mailing list and get news<br>
            deals and be first to know about events</p>
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <label class="email">
              <input type="email" value="Enter e-mail address" >
              <a href="#" class="btn" data-type="submit">subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12"> Gourmet Traditional Restaurant &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="#">Sir_James</a> </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>