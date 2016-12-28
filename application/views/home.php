<!DOCTYPE html>
<html>
<head>
  <title>Braincode Solution</title>
</head>
<link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
<script src="<?php echo base_url()?>assets/jquery-1.12.1.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap.min.js"></script>

<style type="text/css">
*{
    font-family: 'ABeeZee', sans-serif;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'ABeeZee';
}
    html,
body {
    height: 100%;
}

.carousel,
.item,
.active {
    height: 100%;
}

.carousel-inner {
    height: 100%;
}

/* Background images are set within the HTML using inline CSS, not here */

.fill {
    width: 100%;
    height: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

footer {
    margin: 50px 0;
}
    #back-to-top {
        position: fixed;
        bottom: 40px;
        right: 40px;
        z-index: 9999;
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 30px;
        background: #000000;
        color: #ffffff;
        cursor: pointer;
        border: 0;
        border-radius: 2px;
        text-decoration: none;
        transition: opacity 0.2s ease-out;
        opacity: 0;
    }
    #back-to-top:hover {
        background: #474f4d;
        color: #ffffff;
    }
    #back-to-top.show {
        opacity: 1;
    }
    #content {
        height: 2000px;
    }
    .navbar {
        border: none !important;
        /*margin: 10px 0px;*/
        padding: 10px 0px;
        /*background-color: #ffffff !important;*/
    }
	#section2 {
        /*margin-top: -60px;*/
        padding-top:100px;
		/*padding-bottom:100px;*/
        color: #fff;
        /*background-color: #2ecc71;*/
        /*height:100%;
        background-color: #ffffff;*/
	}
    .sectionKotak{
        /*padding: 60px 10px 10px 10px;*/
        /*position: absolute;*/
        /*background-color: #2ecc71;*/
        /*height: 420px;*/
        width: 100%;
        /*margin-top: 65px;*/
    }
    .sectionKotak2{
        padding: 60px 10px 10px 10px;
        /*position: absolute;*/
        background-color: #00bcd4;
        height: 420px;
        width: 100%;
        margin-top: 65px;
    }
	#section3 {
        padding-top:100px;
        /*color: #fff; */
		/*padding-top:70px;*/
        /*height:1020px;*/
        /*color: #fff; */
        /*background-color: #ff9800;*/
	}
	#section4 {
		padding-top:70px;
        height:1020px;
        color: #fff; 
        background-color: #009688;
	}
	#section42 {
		padding-top:70px;
        height:500px;
        color: #fff; 
        background-color: #009688;
	}
/*    .kotakDalam{
        width: 100px;
        height: 50px;
        background-color: red;
    }*/
</style>

<?php
  $this->load->view('_construct/css');
?>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
	  	<div class="container">
            <div class="row">
                <!-- <div class="col-md-4">
                    <div class="kotakDalam">
                        
                    </div>
                </div> -->
                <div class="col-md-12">
        	    	<div class="navbar-header">
        		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		          <span class="icon-bar"></span>
        		          <span class="icon-bar"></span>
        		          <span class="icon-bar"></span>                        
        		      	</button>
        		      	<a class="navbar-brand" href="#" id="back-to-top2" 
                            style="background-color: #c1361b; height: 65px; line-height: 38px; margin: -10px 0px -10px 0px; color: #ffffff; border-radius: 0px 0px 20px 20px;"
                        >Braincode Solution</a>
        	    	</div>
        	      	<div class="collapse navbar-collapse" id="myNavbar">
        		        <ul class="nav navbar-nav navbar-right">
        			        <li><a href="#section2">About Us</a></li>
        			        <li><a href="#section3">Our Services</a></li>
                            <li><a href="#section4">Portfolio</a></li>
                            <li><a href="#section5">Testimonial</a></li>
                            <li><a href="#section6">Blog</a></li>
        			        <li><a href="#section7">Contact Us</a></li>
        			        <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
        			            <ul class="dropdown-menu">
        			              	<li><a href="#section4">Section 4-1</a></li>
        			              	<li><a href="#section42">Section 4-2</a></li>
        			            </ul>
        			        </li> -->
        		        </ul>
        	      	</div>
                </div>
            </div>
	  	</div>
	</nav>

    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <img src="<?php echo base_url('assets/img/wb1.jpg')?>" style="background-size: cover;width: 100%; height: 100%;">
                <div class="container">
                    <div class="carousel-caption animated fadeInDown">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <img src="<?php echo base_url('assets/img/b1.jpg')?>" style="background-size: cover;width: 100%; height: 100%;">
                <div class="container">
                    <div class="carousel-caption animated fadeInUp">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <img src="<?php echo base_url('assets/img/w1.jpg')?>" style="background-size: cover; width: 100%; height: 100%; position: fixed;">
                <div class="container">
                    <div class="carousel-caption animated fadeInDown">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
        </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>



    <section id="section2">
        <div class="container" style="background-color: #fff; padding-bottom: 50px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div data-wow-delay="0.5s" class="span3 wow fadeInDown">
                        <h1>Tentang Kami</h1>
                        <p style="color: #000000;">Siapakah Team Dibalik Braincode Solutions ?</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #2ecc71; padding-top:70px; padding-bottom: 52px;  padding-left: 50px; padding-right: 45px;">
            <div class="row">
                <div class="sectionKotak">
                    <div class="col-md-12">
                        <!-- <div class="col-md-1">
                        </div> -->
                        <div class="col-md-6">
                            <h1 style="">Braincode Solution</h1>
                            <p>Kami adalah Perusahaan Jasa Pembuatan Aplikasi Desktop, Website dan Pengembangan Brand perusahaan secara online dan profesional. Kami juga menawarkan Jasa Desain Banner, Spanduk, Kartu Nama, Kartu Undangan, Logo, Video <em>&amp;</em> Audio Editing. Jika anda memerlukan Service Hardware seperti Perbaikan Komputer, Laptop, Printer, juga Installasi Jaringan <em>&amp;</em> Backup Data, Kami bisa membantu anda dengan penanganan dari TIM kami yang bisa dipanggil atau langsung dikerjakan ditempat anda.</p><br />
                        </div>
                        <p>
                        <div class="col-md-6" style=""></p>
                            <section style="margin-top: 58px"></section>
                            <p>Anda bisa menghubungi kami atau langsung datang ke kantor kami.</p>
                            <p>Kantor Utama : Jl. Raya Cilegon Km 03 Serang Trade Center Blok CC 15 Taktakan &#8211; Serang 42162 Banten<br />
                            Kantor Cabang : Jl. Raya Takari Km 07 Tibasurak Taktakan &#8211; Serang 42162 Banten<br />
                            E-mail : admin@banten-it.com<br />
                            Hp : 081 9678 048 / Nurul Imam<br />
                            BBM : 79AB2B80<br />
                        </div>
                        <!-- <div class="col-md-4">
                            <button class="btn btn-primary btn-group visible-xs">
                                Baca Selengkapnya...
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #2ecc71;padding-bottom: 110px; padding-left: 50px; padding-right: 45px;">
            <div class="row">
                <div class="sectionKotak">
                    <div class="col-md-12">
                        <div class="col-md-6">
                        <h1 style="">Staf IT Braincode Solution</h1></br></br>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="team-member">
                                <img src="https://www.banten-it.com/wp-content/uploads/2013/09/nurulimam1.png" class="img-circle img-thumbnail" alt="">
                                <h4 style="text-align: center;">Kay Garland</h4>
                                <p class="text-muted"><center>Lead Designer</center></p>
                                <ul class="list-inline social-buttons">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 animated lightSpeedIn">
                        
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="sectionKotak2">
                    <div class="col-md-12">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-5" style="border-radius: 0px 0px 0px 2px solid #fff">
                            <h1 style="color: #ffffff;">Braincode Solutions</h1>
                            <p>Kami adalah Perusahaan Jasa Pembuatan Aplikasi Desktop, Website dan Pengembangan Brand perusahaan secara online dan profesional. Kami juga menawarkan Jasa Desain Banner, Spanduk, Kartu Nama, Kartu Undangan, Logo, Video <em>&amp;</em> Audio Editing. Jika anda memerlukan Service Hardware seperti Perbaikan Komputer, Laptop, Printer, juga Installasi Jaringan <em>&amp;</em> Backup Data, Kami bisa membantu anda dengan penanganan dari TIM kami yang bisa dipanggil atau langsung dikerjakan ditempat anda.<br />
                        </div>
                        <p>
                        <div class="hidden-xs col-md-5" style="color: #000"></p>
                            <section style="margin-top: 58px"></section>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3962.7134476995952!2d106.86940001436571!3d-6.682376295168563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-6.6826107!2d106.87085909999999!4m5!1s0x2e69c9a3f8135a7f%3A0x3e00e80de27be368!2sJl.+Veteran+III+Tapos+No.49%2C+Banjar+Sari%2C+Ciawi%2C+Bogor%2C+Jawa+Barat+16720!3m2!1d-6.6823763!2d106.87158869999999!5e0!3m2!1sid!2sid!4v1482209420191" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-group visible-xs">
                                Baca Selengkapnya...
                            </button>
                        </div>

<!-- <div class="btn-group hidden-xs" id="sortBtns" role="group">
    <button type="button" class="btn btn-default">First 1</button>
    <button type="button" class="btn btn-default">Second 1</button>
    <button type="button" class="btn btn-default">Third 1</button>
    <button type="button" class="btn btn-default">Fourth 1</button>
    <button type="button" class="btn btn-default">Fifth 1</button>
    <button type="button" class="btn btn-default">Sixth 1</button>
</div>

<div class="btn-group visible-xs" id="sortBtns2" role="group">
    <button type="button" class="btn btn-default">First 2</button>
    <button type="button" class="btn btn-default">Fifth 2</button>
    <button type="button" class="btn btn-default">Sixth 2</button>
</div> -->
                        <!-- <div class="col-md-1">
                            
                        </div> -->
                    </div>
                </div>
            </div>    
        </div>
    </section>
    
    <section id="section4">
        <div class="container-fluid">
            <div class="container">
 <div>Using hidden</div>
<div class="hidden-sm hidden-md">hidden-sm hidden-md</div>
<div class="hidden-sm hidden-lg">hidden-sm hidden-lg</div>
<div class="hidden-md hidden-lg">hidden-md hidden-lg</div>
<div>Theoretical equivalent using visible</div>
<div class="visible-lg">hidden-sm hidden-md</div>
<div class="visible-md">hidden-sm hidden-lg</div>
<div class="visible-sm">hidden-md hidden-lg</div>     <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
    <!-- /.container -->

    <!-- jQuery -->
    <!-- <script src="<?php echo base_url()?>assets/jquery-1.12.1.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/freelancer.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="<?php echo base_url()?>assets/bootstrap.min.js"></script> -->

    <!-- Script to Activate the Carousel -->
    <script src="<?php echo base_url()?>assets/wow.js"></script>
    <script>
       new WOW().init();
     </script>
    <script>
    $(document).ready(function(){
      // Add scrollspy to <body>
      $('body').scrollspy({target: ".navbar", offset: 50});   

      // Add smooth scrolling on all links inside the navbar
      $("#myNavbar a").on('click', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
       
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      });
    });
    </script>
    <script>
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    $('#back-to-top2').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });

    var a = $(".navbar").offset().top;

    $(document).scroll(function(){
        if($(this).scrollTop() > a)
        {   
           $('.navbar').css({"background-color":"#c1361b"});
           $('.a').css({"color":"#fff !important"});
        } else {
           $('.navbar').css({"background-color":"#fff"});
        }
    });
    $('.carousel').carousel({
         //changes the speed
    })
    </script>

</body>

</html>