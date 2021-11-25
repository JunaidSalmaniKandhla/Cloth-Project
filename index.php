<?php  require_once 'inc/head.php';?>
<body>
<?php  require_once 'inc/header.php';?>
    <!-- End of header -->

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators --> 
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/slide2.jpg" class="img-fluid" alt="Chicago">
                    <div class="carousel-caption ">
                        <h3 class="rotateInDownLeft">Welcome to <b>Vikas Saree and Menswear</b>.</h3>
                    <h3 class="rotateInDownRight">High Discount on all available brands.</h3>                    
                    </div>
                </div>
                <div class="carousel-item">
                    

                    <img src="images/slide1.jpg" class="img-fluid" alt="Los Angeles">
                    <div class="carousel-caption" >
                        <h3 class="rotateInDownLeft">Top Ladies design in Etah.</h3>
                        <h3 class="rotateInDownRight">Great deals on Bridal designs.</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" class="img-fluid" alt="New York">
                    <div class="carousel-caption ">
                    <h3 class="rotateIn">Style is something each of us already has all.</h3>
                    <h3 class="rotateInDownRight">We need to do is find it in yourself</h3>
                </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span  class="carousel-control-next-icon"></span>
            </a>

        </div>
        <section class="welcome ">
            <div class="container">
                <div class="row">
                    <div class="col-md-5"><img src="images/women1.jpg" class="img-fluid" data-aos="zoom-in-up"></div>
                    <div class="col-md-7">
                        <h1 class="text-center my-2">WELCOME TO VIKAS SAREE <br> & MENS WEAR</h1>
                        <p class="px-3">Looking to dress for a particular occasion? Visit our Shop <b>Vikas Saree Emporium</b> and look out for our top recommendations for work, party, weekend, college and gym for both men and women. </p>
                        <button type="button" class="btn btn-dark mx-3"><a href="about.php">About Us</a></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of welcome -->
        <style type="text/css">
            [data-aos][data-aos][data-aos-duration="400"], body[data-aos-duration="400"] [data-aos] {
                    transition-duration: 1.4s;
                }
        </style>
        <section class="brand">
            <div class="container">
                <h1 class="text-center my-4">MENS WEAR</h1>
                <div class="row">
                    <div class="col-md col-lg col-sm-6">
                        <div class="card hoverable slideInLeft">
                        <a href="#" title="VAN HUESEN" class="thumb"><img class="card-img-top img-fluid" src="images/vh.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                            <div class="card-body text-center">
                                <i class="far fa-heart fa-2x"></i>
                                <h4 class="card-title my-2"><span>VAN HUESEN</span></h4>
                                <a href="men.php" class="btn btn-dark">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-lg col-sm-6">
                        <div class="card hoverable slideInLeft">
                        <a href="#" title="ALLEN SOLLY" class="thumb"><img class="card-img-top img-fluid" src="images/as.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                            <div class="card-body text-center">
                                <i class="far fa-heart fa-2x"></i>
                                <h4 class="card-title my-2"><span>ALLEN SOLLY</span></h4>
                                <a href="men.php" class="btn btn-dark">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-lg ">
                        <div class="card hoverable slideInLeft">
                        <a href="#" title="MUFTI" class="thumb"><img class="card-img-top img-fluid" src="images/mufti.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                            <div class="card-body text-center">
                                <i class="far fa-heart fa-2x"></i>
                                <h4 class="card-title my-2"><span>MUFTI</span></h4>
                                <a href="men.php" class="btn btn-dark">See More</a>
                            </div>
                        </div>
                        <a href="men.php" class="btn btn-dark mt-2 float-right" >See More</a>
                    </div>
                </div>
                <!-- End of Mens Wear -->
                <h1 class="text-center my-4">WOMENS WEAR</h1>
                <div class="row mb-4">
                    <div class="col-md col-lg col-sm-6">
                        <div class="card hoverable slideInRight">
                            <!-- <img class="card-img-top img-fluid" src="images/women1.jpg" alt="Card image" style="width:100%"> -->
                    <a href="#" title="LEHNGA" class="thumb"><img class="card-img-top img-fluid" src="images/women1.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                            <div class="card-body text-center">
                                <i class="far fa-heart fa-2x"></i>
                                <h4 class="card-title my-2 text-uppercase"><span>lehenga </span></h4>
                                <a href="women.php" class="btn btn-dark">See More</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md col-lg col-sm-6">
                        <div class="card hoverable slideInRight">
                            <!-- <img class="card-img-top img-fluid" src="images/women2.jpg" alt="Card image" style="width:100%"> -->
                     <a href="#" title="SAREE" class="thumb"><img class="card-img-top img-fluid" src="images/women2.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                            <div class="card-body text-center">
                                <i class="far fa-heart fa-2x"></i>
                                <h4 class="card-title my-2 text-uppercase"><span>bridal sarees</span></h4>
                                <a href="women.php" class="btn btn-dark">See More</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md col-lg ">
                        <div class="card hoverable slideInRight">
                            <!-- <img class="card-img-top img-fluid" src="images/women3.jpg" alt="Card image" style="width:100%"> -->
                            <a href="#" title="Indo Western Dress" class="thumb"><img class="card-img-top img-fluid" src="images/women/gown/index.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                            <div class="card-body text-center">
                                <i class="far fa-heart fa-2x"></i>
                                <h4 class="card-title my-2 text-uppercase"><span>Indo Western Dresses</span></h4>
                                <a href="women.php" class="btn btn-dark">See More</a>
                            </div>
                        </div>
                        <a href="women.php" class="btn btn-dark mt-2 float-right" >See More</a>
                    </div>
                </div>
            </div>
        </section>


<?php  require_once 'inc/footer.php';?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>
<script>
    $('.responsive').slick({
  dots: true,
	prevArrow: $('.prev'),
	nextArrow: $('.next'),
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>