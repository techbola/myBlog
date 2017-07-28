<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="shortcut icon" href="img/techbola_icon.png" type="image/x-icon">
        <meta name="description" content="Website Developement, Front End Development, E-commerce, Seo. Contact me">
        <meta	name="keywords"	content="Web Developer In Nigeria, online store design, Website design, Web Development Services">
        <meta   name="googlebot"    content="index, follow" />
        <meta http-equiv="Content-Language"   CONTENT="EN">
        <meta name="robots"   content="index, follow">
        <meta name="Revist-After" content="7 days">
        <meta name="city" content="Lagos">
        <meta name="country"  content="Nigeria">
        <meta name="subject"  content="Website Design">
        <meta name="author"   content="TechBola">
        <meta name="copyright"    content="TechBola">
        <title>TechBola - Web Developer, Front End Developer, Digital Marketer</title>
        <!-- Bootstrap -->
        {!! Html::style('bootstrap/css/bootstrap.min.css') !!}

        <!--plugins-->
        {!! Html::style('css/animate.css') !!}
        {!! Html::style('css/flexslider.css') !!}
        {!! Html::style('css/owl.carousel.css') !!}
        {!! Html::style('css/owl.theme.css') !!}
        {!! Html::style('font-awesome/css/font-awesome.css') !!}
        {!! Html::style('themify-icons/themify-icons.css') !!}
      {!! Html::style('css/jasny-bootstrap.min.css') !!}

        <!--Revolution slider css-->
        {!! Html::style('rs-plugin/css/settings.css') !!}
        <link href="rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        {!! Html::style('css/rev-style.css') !!}
        <link href="css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
        <!--cube css-->
        {!! Html::style('cubeportfolio/css/cubeportfolio.min.css') !!}
        <!--custom css (comile from one-page.scss)-->
        {!! Html::style('css/one-page.css') !!}
        {!! Html::style('css/mystyle.css') !!}
        {!! Html::style('css/mobile.css') !!}

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86908064-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>
    <body data-spy="scroll">

        <!--Home section start-->

        <!--Main nav begin-->
        <nav class="navbar navbar-default navbar-static-top sticky">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/techbola.png" alt="" class="logo_img"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                    </ul>
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="index"><i class="fa fa-home fa-lg"></i> Home</a></li>
                        <li><a href="#about"><i class="fa fa-info-circle fa-lg"></i> About</a></li>
                        <li><a href="#services"><i class="fa fa-th-list fa-lg"></i> Services</a></li>
                        <li><a href="#work"><i class="fa fa-th fa-lg"></i> Portfolio</a></li>
                        <li><a href="blog" target="_blank"><i class="fa fa-th-large fa-lg"></i> Blog</a></li>
                        <li><a href="#contact"><i class="fa fa-map-marker fa-lg"></i> Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->

            </div><!--/.container -->
        </nav>
        <!--Main nav end-->

        <section id="slider" class=" clearfix">

            <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
            <div class="fullwidthbanner">
                <div class="tp-fullscreen-banner">
                    <ul>

                        <!-- SLIDE  -->
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="img/mockup4.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
                            <!-- MAIN IMAGE -->
                            <img src="img/mockup4.jpg"  alt="kenburns6"  data-bgposition="center bottom" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption title customin ltl tp-resizeme"
                                 data-x="center"
                                 data-y="150"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">
                                Welcome!
                            </div>

                            <div class="tp-caption subtitle customin ltl tp-resizeme"
                                 data-x="center"
                                 data-y="250"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1250"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">
                                <p class="lead">Let's Do Great Stuff Together.</span></p>
                            </div>

                            <div class="tp-caption customin scroll-to ltl tp-resizeme"
                                 data-x="center"
                                 data-y="320"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1550"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">

                                <a href="#services" class="btn btn-lg btn-primary btn-border-color" style="color:#fff;">
                                    <span>Services We Offer</span>
                                    <i class="fa fa-angle-double-right fa-lg"></i>
                                </a>
                                <a href="#work" class="btn btn-lg btn-border-color btn-tr">
                                    <span>Our Works</span>
                                    <i class="fa fa-angle-double-right fa-lg"></i>
                                </a>

                            </div>

                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="img/websharx-web-graphic-design-toronto-canada-company-milestones.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
                            <!-- MAIN IMAGE -->
                            <img src="img/websharx-web-graphic-design-toronto-canada-company-milestones.jpg"  alt="kenburns6"  data-bgposition="center bottom" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption title customin ltl tp-resizeme"
                                 data-x="center"
                                 data-y="150"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">
                                Welcome!
                            </div>

                            <div class="tp-caption subtitle customin ltl tp-resizeme"
                                 data-x="center"
                                 data-y="250"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1250"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">
                                <p class="lead">Let's Do Great Stuff Together.</span></p>
                            </div>

                            <div class="tp-caption customin scroll-to ltl tp-resizeme"
                                 data-x="center"
                                 data-y="320"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1550"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">

                                <a href="#services" class="btn btn-lg btn-primary btn-border-color" style="color:#fff;">
                                    <span>Services We Offer</span>
                                    <i class="fa fa-angle-double-right fa-lg"></i>
                                </a>
                                <a href="#work" class="btn btn-lg btn-border-color btn-tr">
                                    <span>Our Works</span>
                                    <i class="fa fa-angle-double-right fa-lg"></i>
                                </a>

                               </div>

                        </li>

                        <!-- SLIDE  -->
                        <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="img/Graphic-Design-background-edited-2.png" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
                            <!-- MAIN IMAGE -->
                            <img src="img/Graphic-Design-background-edited-2.png"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="right center">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption title customin ltl tp-resizeme"
                                 data-x="center"
                                 data-y="150"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">
                                Welcome!
                            </div>

                            <div class="tp-caption customin subtitle ltl tp-resizeme"
                                 data-x="center"
                                 data-y="250"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1250"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">
                                <p class="lead">Let's Do Great Stuff Together.</span></p>
                            </div>

                            <div class="tp-caption customin scroll-to ltl tp-resizeme"
                                 data-x="center"
                                 data-y="320"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1550"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 3;">

                                <a href="#services" class="btn btn-lg btn-primary btn-border-color" style="color:#fff;">
                                    <span>Services We Offer</span>
                                    <i class="fa fa-angle-double-right fa-lg"></i>
                                </a>
                                <a href="#work" class="btn btn-lg btn-border-color btn-tr">
                                    <span>Our Works</span>
                                    <i class="fa fa-angle-double-right fa-lg"></i>
                                </a>

                            </div>

                        </li>

                    </ul>
                </div>
            </div>

            <!-- END REVOLUTION SLIDER -->

        </section>


        <!--Home section end-->

        <!--about section start-->
        <section id="about">
            <div class="container">
                <div class="center-title">
                    <span class="center-line"></span>
                    <p>ABOUT US</p>
                    <h3>Web Design & Development, Graphic Design.</h3>
                </div>
                <div class="row">
                    <div class="col-md-7 margin-b-20">
                        <div class="about-quote">
                            <p>
                              " Whatever your needs are as long as they are in the Web Space we are the guys you should talk to.
                              <b>We</b> specialise in HTML, CSS, PHP, CodeIgniter, JavaScript, WordPress, BootStrap, MySql, Dreamweaver,
                              Photoshop and many other tools to produce creative, stylish, effective and highly engaging sites that users
                              will fall in love with. "
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="skills-wrapper wow animated bounceIn animated animated" data-wow-delay="0.2s">
                            <h3 class="heading-progress">HTML5 / CSS3 <span class="pull-right">95%</span></h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar">
                                </div>
                            </div>
                            <h3 class="heading-progress">PHP <span class="pull-right">92%</span></h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar">
                                </div>
                            </div>
                            <h3 class="heading-progress">Javascript <span class="pull-right">85%</span></h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar">
                                </div>
                            </div>
                            <h3 class="heading-progress">Wordpress <span class="pull-right">90%</span></h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar">
                                </div>
                            </div>
                            <h3 class="heading-progress">Graphic Design <span class="pull-right">90%</span></h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar">
                                </div>
                            </div>
                        </div>
                    </div><!--my skills-->
                </div><!--end row-->
                <div class="space-50"></div><!--spacer-->
            </div>
        </section>
        <!--end about section-->

        <!--services section start-->
        <section id="services">
            <div class="container">
                <div class="center-title">
                    <span class="center-line"></span>
                    <p>What We Do?</p>
                    <h3>We do our best with the following things</h3>
                </div>

                <div class="row special-feature">
                  <div class="col-md-3 col-sm-6 margin-b-20">
                      <div class="s-feature-box text-center wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="400ms">
                          <div class="mask-top">
                              <!-- Icon -->
                              <i class="ti-desktop"></i>
                              <!-- Title -->
                              <h4>Website Development</h4>
                          </div>
                          <div class="mask-bottom">
                              <!-- Icon -->
                              <i class="ti-desktop"></i>
                              <!-- Title -->
                              <h4>Website Development</h4>
                              <!-- Text -->
                              <p>
                                <ul id="web_service">
                                  <li>Personal Wbsites</li>
                                  <li>E-commerce Websites</li>
                                  <li>Business Website</li>
                                  <li>Blogs</li>
                                  <li>Membership Systems</li>
                                  <li>Web Application</li>
                                </ul>
                              </p>
                          </div>
                      </div>
                  </div><!--services col-->

                  <div class="col-md-3 col-sm-6 margin-b-20">
                      <div class="s-feature-box text-center wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="300ms">
                          <div class="mask-top">
                              <!-- Icon -->
                              <i class="ti-mobile"></i>
                              <!-- Title -->
                              <h4>Responsive design</h4>
                          </div>
                          <div class="mask-bottom">
                              <!-- Icon -->
                              <i class="ti-mobile"></i>
                              <!-- Title -->
                              <h4>Responsive design</h4>
                              <!-- Text -->
                              <p>Your site on desktops, tablets and smartphones. We develop websites that work, and look great, across every platform.</p>
                          </div>
                      </div>
                  </div><!--services col-->

                    <div class="col-md-3 col-sm-6 margin-b-20">
                        <div class="s-feature-box text-center wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="200ms">
                            <div class="mask-top">
                                <!-- Icon -->
                                <i class="ti-image"></i>
                                <!-- Title -->
                                <h4>Graphic Design</h4>
                            </div>
                            <div class="mask-bottom">
                                <!-- Icon -->
                                <i class="ti-image"></i>
                                <!-- Title -->
                                <h4>Graphic Design</h4>
                                <!-- Text -->
                                <p>
                                  <ul id="web_service">
                                    <li>Logo Design</li>
                                    <li>Brand Identity</li>
                                    <li>Letterhead Design</li>
                                    <li>Business Card</li>
                                    <li>Print Design</li>
                                  </ul>
                                </p>
                            </div>
                        </div>

                    </div><!--services col-->

                    <div class="col-md-3 col-sm-6 margin-b-20">
                        <div class="s-feature-box text-center wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="mask-top">
                                <!-- Icon -->
                                <i class="ti-stats-up"></i>
                                <!-- Title -->
                                <h4>Seo</h4>
                            </div>
                            <div class="mask-bottom">
                                <!-- Icon -->
                                <i class="ti-stats-up"></i>
                                <!-- Title -->
                                <h4>Seo</h4>
                                <!-- Text -->
                                <p>SEO is focused on growing visibility in organic (non-paid) search engine results.
                                  It encompasses both the technical and creative elements required to improve rankings, drive traffic, and increase awareness.</p>
                            </div>
                        </div>
                    </div><!--services col-->
                </div>
                <!--service row end-->
            </div>
        </section>
        <!--end services section-->

        <!--work section-->
        <section id="work">
            <div class="container">
                <div class="center-title">
                    <span class="center-line"></span>
                    <p>Recent works.</p>
                    <h3>Portfolio</h3>
                </div>

                <!--cube portfolio-->
                <div class="portfolio-cube">

                    <div id="grid-container" class="cbp">

                        <div class="cbp-item graphic">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/work-1.png" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="http://www.techbola.com/scholarsfee/" class="cbp-l-caption-buttonLeft" target="_blank">Visit Site</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">School Fees Online Payment</div>
                            <div class="cbp-l-grid-projects-desc">Web Development</div>
                        </div>

                        <div class="cbp-item web-design">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/book-work.png" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="http://globalreligiouspeace.com/" class="cbp-l-caption-buttonLeft" target="_blank">Visit Site</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Online Book Store</div>
                            <div class="cbp-l-grid-projects-desc">Web Development</div>
                        </div>

                        <div class="cbp-item web-design">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/work-4.png" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="http://beamercourier.com/" class="cbp-l-caption-buttonLeft" target="_blank">Visit Site</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Beamer Courier Service</div>
                            <div class="cbp-l-grid-projects-desc">Web Development</div>
                        </div>

                        <div class="cbp-item graphic logos">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/work-3.png" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="http://kolaqalagbo.com" class="cbp-l-caption-buttonLeft" target="_blank">Visit Site</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Herbal Product Online Store</div>
                            <div class="cbp-l-grid-projects-desc">Web Development</div>
                        </div>

                        <div class="cbp-item web-design graphic">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/w2.png" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="http://www.techbola.com/okavango/" class="cbp-l-caption-buttonLeft" target="_blank">Visit Site</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Digital Firm</div>
                            <div class="cbp-l-grid-projects-desc">Web Development</div>
                        </div>

                        <div class="cbp-item web-design logos">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/work-2.png" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="http://aycee.com.ng" class="cbp-l-caption-buttonLeft" target="_blank">Visit Site</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">AYCEE Limited - Online Store</div>
                            <div class="cbp-l-grid-projects-desc">Web Development</div>
                        </div>

                    </div>

                </div>
                <!--end cube portfolio-->

            </div>
        </section>
        <!--end work section-->

        <!--testimonials start-->
        <div class="testimonials wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="center-title">
                            <span class="center-line"></span>
                            <p>What people say?</p>
                            <h3>Some of our happy clients</h3>
                        </div>

                    </div>
                </div><!--center heading end-->

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="testi-slide">
                            <ul class="slides">
                                <li>
                                    <img src="img/customer-1.png" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        " This guys delivered the goods in a timely fashion, and when I say timely,
                                        I mean like the next day kind of work. They listen to you as a customer and tailor
                                        their code correctly, and have the patience to make any corrections that you might need done.
                                        I definitely recommend them!!.
                                    </p>
                                    <h4 class="test-author">
                                        - Morgan
                                    </h4>
                                </li><!--testi item-->
                                <li>
                                    <img src="img/customer-2.png" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        " Prompt response & quality delivery and very cooperative.
                                        Will work with them again for other projects too. And I recommend to all.</p>
                                    <h4 class="test-author">
                                        - Bhupathy Reddy
                                    </h4>
                                </li><!--testi item-->
                                <li>
                                    <img src="img/customer-3.png" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        " This was the first time I used Fiverr ( <a href="http://fiverr.com" target="_blank">fiverr.com</a>) to request
                                        some custom work. At first I was a bit skeptical,
                                        but techbola has proved me wrong. From the start, they understood my needs clearly, and ensured that
                                        my work was delivered to the exact specifications and earlier than the due date.</p>
                                    <h4 class="test-author">
                                        - Eddie
                                    </h4>
                                </li><!--testi item-->
                            </ul>
                        </div><!--flex slider testimonials end here-->
                    </div>
                </div><!--testi slider row end-->
                <div class="divide30"></div>

            </div>
        </div><!--testimonials v-2 end-->
        <!--testimonials end-->

        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 wow animated bounceIn" data-wow-delay="0.4s">
                        <h1>Have a web design or graphic design project ?</h1>

                    </div>
                    <div class="col-lg-2">
                        <a href="#contact" class="btn btn-lg btn-primary btn-border-color" style="font-size: 30px;"> Contact us</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog">
            <div class="container">
                <div class="center-title">
                    <span class="center-line"></span>
                    <p>latest from the blog</p>
                </div>

                <div class="row">
                    <div id="owl-news">

                      <?php

                        $sql = "SELECT * FROM blog_post ORDER BY post_id DESC LIMIT 4";
                        $query = $conn->query($sql) or die ('No table found');

                        $i=0;

                        while($row = $query->fetch(PDO::FETCH_ASSOC)){

                          $category = $row['category'];

                          $post_title = $row['post_title'];
                          $post_title_url = implode('-',explode(" ",$post_title));

                          $post_content = $row['post_content'];
                          $post_picture = $row['post_picture'];

                          $post_date = $row['post_date'];
                          $post_date2 = strtotime($post_date);
                          $post_date3 = date("jS F Y", $post_date2);

                          $id = $row['post_id'];
                          $views = $row['views'];
                          $likes = $row['likes'];

                          $post_content2 = substr($post_content, 0, 50);
                          $string = substr($post_content2, 0, strrpos($post_content2, ' ')).'...';

                       ?>

                        <div class="item">
                            <div class='news-col'>
                                <a href="blog/blog-details?id=<?php echo $id; ?>&title=<?php echo urlencode($post_title_url); ?>" target="_blank">
                                    <img src="admin/<?php echo $post_picture; ?>" class="img-responsive" alt="" style="height:250px;max-height:250px;">
                                </a>
                                <h3><a href="blog/blog-details?id=<?php echo $id; ?>&title=<?php echo urlencode($post_title_url); ?>" target="_blank"><?php echo $post_title; ?></a></h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="ti-user"></i> By Admin</a></li>
                                    <li><a href="#"><i class="ti-eye"></i> <?php echo $views; ?></a></li>
                                    <li><i class="ti-calendar"></i> <?php echo $post_date3; ?></li>

                                </ul>

                                <a href="blog/blog-details?id=<?php echo $id; ?>&title=<?php echo urlencode($post_title_url); ?>" class="btn btn-default" target="_blank"> READ <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <?php } $i++;

                          ?>

                    </div>
                </div>
            </div>
        </section>

        <!--contact section-->
        <section id="contact">
            <div class="container">
                <div class="center-title">
                    <span class="center-line"></span>
                    <p>Love to hear from you.</p>
                    <h3>Contact Us</h3>
                </div>

                <div class="row">
                    <div class="col-md-6 margin30">
                        <h3>Waiting to hear from you.</h3>
                        <div class="divide30"></div>
                        <div class="form-contact">
                            <form name="sentMessage" id="contactForm" class="contact-form" method="post" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>Name<span>*</span></label>
                                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>Email Address<span>*</span></label>
                                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12  controls">
                                        <label>Telephone</label>
                                        <input type="tel" class="form-control" placeholder="Subject" id="phone">

                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Message<span>*</span></label>
                                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12 text-right">
                                        <button type="submit" name="button" class="btn btn-primary btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </form>

                        </div><!--contact form-->
                    </div>
                    <div class="col-md-3 col-md-offset-1 contact-info">
                        <h3>Contact info</h3>
                        <div class="media">
                            <div class="media-left">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mobile:</h4>
                                <p>
                                    (234) 806-846-9071 <br>
                                    (234) 812-486-9856
                                </p>
                            </div>
                        </div><!--media-->
                        <div class="media">
                            <div class="media-left">
                                <i class="ti-email"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mail:</h4>
                                <p>
                                  support@techbola.com
                                </p>
                            </div>
                        </div><!--media-->
                    </div>
                </div>
            </div>
        </section>
        <!--end contact section-->

        <!--footer-->
        <footer  class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <span>&copy;2017. Techbola</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--footer 2 end-->

        <!--footer end-->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

        <!-- jQuery-->
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/jquery-migrate.min.js') !!}
        {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('js/jquery.easing.1.3.min.js') !!}
        {!! Html::script('js/wow.min.js') !!}
        {!! Html::script('js/jquery.sticky.js') !!}
        {!! Html::script('js/waypoints.min.js') !!}
        {!! Html::script('js/jquery.counterup.min.js') !!}
        {!! Html::script('js/modernizr.custom.97074.js') !!}
        {!! Html::script('js/parallax.min.js') !!}
        {!! Html::script('js/jquery.flexslider-min.js') !!}
        {!! Html::script('js/owl.carousel.min.js') !!}
        {!! Html::script('js/one-page.js') !!}
        <!--cube portfolio plugin-->
        {!! Html::script('cubeportfolio/js/jquery.cubeportfolio.min.js') !!}
        {!! Html::script('js/cube-portfolio.js') !!}

        <!--cantact form script-->
        {!! Html::script('js/contact_me.js') !!}
        {!! Html::script('js/jqBootstrapValidation.js') !!}
        {!! Html::script('js/jasny-bootstrap.min.js') !!}
        {!! Html::script('js/pace.min.js') !!}

        <!--revolution slider plugins-->
        {!! Html::script('rs-plugin/js/jquery.themepunch.tools.min.js') !!}
        {!! Html::script('rs-plugin/js/jquery.themepunch.revolution.min.js') !!}      
        {!! Html::script('js/revolution-custom.js') !!}

        <!--gmap js-->

    </body>
</html>
