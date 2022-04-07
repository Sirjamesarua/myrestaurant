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
              <li class="current"><a href="/">Home</a></li>
              <li class="with_ul"><a href="/aboutus">About Us</a>
              </li>
              <li class=""><a href="/menu">Menu</a></li>
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

<!--
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt=""></li>
          <li><img src="images/slide1.jpg" alt=""></li>
          <li class="mb0"><img src="images/slide2.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>-->

      <div class="landingpage" style="background-image: url(../storage/images/slide.jpg);">
          <div style="background-color:rgba(255,255,255,0.3);height: 100%;padding: 15% 15%;" class="w3-center">
              <b style="font-size: 450%;font-family: 'poppins', sans-serif;font-weight: 500;color: #030403;line-height: 30px" class="">Get Started <br><br />With a Healthier You</b><br><br><br>
              <p style="font-size:150%;"> We make eating healthy convenient and delicious so you can have more time to do the things you love. </p><br>
              <a href="#" class="w3-border-large w3-round-xlarge w3-border-white w3-text-white w3-padding-large" style="background-color: #5fa022; font-size: 200%;">Get Started</a>
          </div>
      </div>


  <div class="content page1">
    <div class="container_12">
      <div class="grid_7">
        <h2>Welcome</h2>
        <div class="page1_block col1"> <img src="/storage/images/welcome_img.png" alt="">
          <div class="extra_wrapper">
            Aenean nonummy hendrerit mau rellus porta. Fusce suscipit varius m sociis natoque penaibet magni parturient montes nasetur ridiculumula dui. <br>
            <a href="#" class="btn">more</a> </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="grid_5">
        <h2>Features</h2>
        <ul class="list">
          <li><a href="#">Unlimited consultations and/or planning</a></li>
          <li><a href="#">Expert advice on traditions, customs, aetiquette</a></li>
          <li><a href="#">Determine and stay within budget</a></li>
          <li><a href="#">Choosing the right Wedding Venue</a></li>
          <li><a href="#">Provide preferred vendor's list</a></li>
          <li><a href="#">Assist with wedding scheme and design</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>










  <section class="">
        <div class="">
          <br />
          <br />
          <br />
          <br />
          <div class="w3-center">
            <center><h1 class="" style="font-size:200%;"> How It Works </h1></center>
          </div>
        </div>


        <br />
        <br />
        <div class="container" style="">
            <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3-center" style="">
                                  <img loading="lazy" class=" " src="/storage/images/menu.svg" alt="PLACE ORDER" title="PLACE ORDER" style="height:120px;">
                                              <h2 style="font-size: 17px;color: #000;text-align: center;">PLACE ORDER</h2>
                                              <p style="font-size: 15px;color: #000;text-align: center;">Select from our wide variety of signature dishes, custom, or specialty meal options. Pick up in Baton Rouge or choose between in-store pickup or delivery in the New Orleans Metro Area</p>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3-center" style="">
                                  <img loading="lazy" class=" " src="/storage/images/cook.svg" alt="COOK" title="COOK" style="height:120px;">
                                              <h2 style="font-size: 17px;color: #000;text-align: center;">COOK</h2>
                                              <p style="font-size: 15px;color: #000;text-align: center;">Our staff will carefully prepare, cook, and package all of your meals and have them fresh and ready to go!</p>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3-center" style="">
                                  <img loading="lazy" class=" " src="/storage/images/deliver.svg" alt="PICKUP / DELIVER" title="PICKUP / DELIVER" style="height:120px;">
                                              <h2 style="font-size: 17px;color: #000;text-align: center;">PICKUP / DELIVER</h2>
                                              <p style="font-size: 15px;color: #000;text-align: center;">You choose whether to pick up your meals in our very own brick and mortar location or even choose a delivery method in case you are busy. We never want you to miss out</p>
                          </div>
            </div>
        </div>

  </section>  
      











      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
          <h2>Best Choice</h2>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
          <ul class="carousel1">
            <li>
              <div><img src="/storage/images/page1_img1.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="/storage/images/page1_img2.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="/storage/images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="/storage/images/page1_img4.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="/storage/images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
          </ul>
        </div>
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