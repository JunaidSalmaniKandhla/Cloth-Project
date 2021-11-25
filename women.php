<?php  require_once 'inc/head.php';?>
<body>
<?php  require_once 'inc/header.php';?>
    <style type="text/css">
        .card {
            margin: 5px;
        }
        h3 {
            margin-top: 20px;
        }
        li.nav-item {
             margin-top: 2px;
            color: #fff;
            background-color: #343a40;
        }
        a.nav-link {
            color: white;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #343a40;
        }
        .hoverable:hover {
            transition: box-shadow .25s;
            box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        nav#myScrollspy {
            position: fixed;
            top: 120px;
        }
        [data-aos][data-aos][data-aos-duration="400"], body[data-aos-duration="400"] [data-aos] {
                    transition-duration: 1.4s;
                }
          @media only screen and (max-device-width: 600px) {
            nav#myScrollspy {
                position: relative;
                top: 0px;
                  }
                }
    </style>
    <h1 class="text-center my-4">Welcome to Womens Wear</h1>
    <section class="menbrand" data-spy="scroll" data-target="#myScrollspy" data-offset="1">

        <div class="container-fluid">
            <div class="row">
                <nav class="col-lg-2 col-md-2 col-sm-2 ">
                    <ul class="nav nav-pills flex-column sticky-top" style="z-index:0">
                        <li class="nav-item">
                          <a class="nav-link" href="#gown">Gowns & Indo Western Dresses</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#saree">Sarees </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#lehnga">Lehengas and Lanchas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#suits">Suits</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#kurti">Kurti Legging</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#cardigan">Cardigans & Coats</a>
                        </li>
                    </ul>
                </nav>

                <div class="col  content">
                    <div id="gown">
                        <h3>Gowns & Indo Western Dresses</h3>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Gown" class="thumb"><img class="card-img-top img-fluid" src="images/women/gown/gown1.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Fancy Gown</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Fancy Gown" class="thumb"><img class="card-img-top img-fluid" src="images/women/gown/fancygown1.jpg" alt="Card image" style="width:100%" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Fancy Gown</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Fancy Gown" class="thumb"><img class="card-img-top img-fluid" src="images/women/gown/fancygown2.jpg" alt="Card image" style="width:100%" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2"> Fancy Gown</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Indo Gown" class="thumb"><img class="card-img-top img-fluid" src="images/women/gown/indo.jpg" alt="Card image" style="width:100%" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                    <h4 class="card-title my-2">Indo Western Dress</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Indo Western Gown " class="thumb"><img class="card-img-top img-fluid" src="images/women/gown/indowes.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Indo Western Dress</h4>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Indo Western Gown " class="thumb"><img class="card-img-top img-fluid" src="images/women/gown/index.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Indo Western Dress</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gown Ends Here -->

                    <div id="saree">
                        <h3>Sarees</h3>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Silk Saree" class="thumb"><img class="card-img-top img-fluid" src="images/women/saree/silk.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Silk Sarees</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Cotton Saree" class="thumb"><img class="card-img-top img-fluid" src="images/women/saree/cotton1.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Cotton Sarees</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Cotton Saree" class="thumb"><img class="card-img-top img-fluid" src="images/women/saree/cotton2.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Cotton Sarees</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Chiffon Saree" class="thumb"><img class="card-img-top img-fluid" src="images/women/saree/chiffon.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Chiffon Sarees</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Catalogue Sarees" class="thumb"><img class="card-img-top img-fluid" src="images/women/cardigans&coats/cardigans.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Catalogue Sarees</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Bridal Sarees" class="thumb"><img class="card-img-top img-fluid" src="images/women3.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Bridal Sarees</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- End of saree -->

                    <div id="lehnga">
                        <h3>Lehengas & Lanchas</h3>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Bridal Saree" class="thumb"><img class="card-img-top img-fluid" src="images/women/lehnga&laccha/b2.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Bridal Lehnga</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Bridal Lehnga" class="thumb"><img class="card-img-top img-fluid" src="images/women/lehnga&laccha/b4.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Bridal lehenga </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Bridal Lehnga" class="thumb"><img class="card-img-top img-fluid" src="images/women/lehnga&laccha/b5.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Bridal lehenga </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Girlish Pattern" class="thumb"><img class="card-img-top img-fluid" src="images/women/lehnga&laccha/g1.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Girlish Lancha</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Girlish Pattern" class="thumb"><img class="card-img-top img-fluid" src="images/women/lehnga&laccha/g2.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Girlish Lancha</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md"></div>
                        </div>
                    </div>
                    <!-- End of Lehnga & Lancha here -->

                    <div id="suits">
                        <h3>Suits</h3>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Frock Suit" class="thumb"><img class="card-img-top img-fluid" src="images/women/suits/frock-suit.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Frock Suit</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Fabric Suit" class="thumb"><img class="card-img-top img-fluid" src="images/women/suits/fabric-suit.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Fabric Suit</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Patiala Suit" class="thumb"><img class="card-img-top img-fluid" src="images/women/suits/patiala-suit.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Patiala Suit</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Straight Suit" class="thumb"><img class="card-img-top img-fluid" src="images/women/suits/straight-suit.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Straight Suit</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md"></div>
                            <div class="col-md"></div>
                        </div>
                    </div>
                    <!-- End of Suits here -->

                    <div id="kurti">
                        <h3>Kurti & Legging</h3>
                        <div class="row">
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Woollen Kurtis" class="thumb"><img class="card-img-top img-fluid" src="images/women/Kurti/kurti.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Woollen Kurtis</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Fancy Kurti" class="thumb"><img class="card-img-top img-fluid" src="images/women/Kurti/index1.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Fancy Kurti</h4>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Fancy Kurti" class="thumb"><img class="card-img-top img-fluid" src="images/women/Kurti/index.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Fancy Kurti</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of kurti Saree -->

                    <div id="cardigan">
                        <h3>Cardigans & Coats</h3>
                        <div class="row">
                            <!--<div class="col-md">-->
                            <!--    <div class="card hoverable" data-aos="fade-down-right">-->
                            <!--        <a href="#" title="Cardigan" class="thumb"><img class="card-img-top img-fluid" src="images/women/cardigans&coats/cardigans.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>-->
                                    
                            <!--        <div class="card-body text-center">-->
                            <!--            <h4 class="card-title my-2">Cardigans</h4>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="col-md">
                                <div class="card hoverable" data-aos="fade-down-right">
                                    <a href="#" title="Cardigans & Coats" class="thumb"><img class="card-img-top img-fluid" src="images/women/cardigans&coats/coats.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>
                                    
                                    <div class="card-body text-center">
                                        <h4 class="card-title my-2">Coats Jackets</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md"></div>
                            <div class="col-md"></div>
                            <!--<div class="col-md">-->
                            <!--    <div class="card hoverable" data-aos="fade-down-right">-->
                            <!--        <a href="#" title="Cardigans Design" class="thumb"><img class="card-img-top img-fluid" src="images/women/cardigans&coats/cardigans-designs.jpg" alt="Card image" style="width:100%" data-toggle="modal" data-target=".modal-profile-lg"></a>-->
                                    
                            <!--        <div class="card-body text-center">-->
                            <!--            <h4 class="card-title my-2">Cardigans Coats</h4>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <!-- End of cardigan & design Saree -->

    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
<?php  require_once 'inc/footer.php';?>
</body>

</html>