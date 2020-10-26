<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="login page aplikasi keuangan pt annisah">
    <meta name="author" content="Zaq Ocaryst">
    <link rel="icon" href="<?php echo base_url('images/logo.png')?>">
    <title><?php echo APP ." | ". PT.NAME?></title>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/LineIcons.css')?>">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/magnific-popup.css')?>">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/default.css')?>">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.cs')?>s">


</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
		<div class="header-hero bg_cover" style="background-image: url(<?php echo base_url('images/header2.jpg')?>)">			
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
							<div class="call-action-content text-center">
							<?= $this->session->flashdata('message'); ?>
								<form action="login" method="POST" name="login">
								<h2 class="call-title"><img src="<?php echo base_url('images/i1.png')?>"></h2>
								<p class="text"></p>
								<div class="call-newsletter">
									<i class="lni-user"></i>
									<input type="username" name="user" placeholder="Kode user" oninvalid="this.setCustomValidity('Kode user tidak boleh kosong!')" oninput="setCustomValidity('')" required autofocus>
								</div>
								<div class="call-newsletter">
									<i class="lni-key"></i>
									<input type="password" name="pass" placeholder="Password" oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')" required>
									<button type="submit" name="login">Login</button>
								</div>
								</form>
								<div class="call-newsletter">
                                    <p>-</p>
								</div>
								<div class="call-newsletter">
									<a href="<?php echo site_url('')?>"><i class="lni-reply"></i></a>
								</div>
							</div> <!-- slider-content -->
                        </div>
					</div> <!-- row -->
				</div>
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="<?php echo base_url('asset/js/vendor/modernizr-3.6.0.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/vendor/jquery-1.12.4.min.js')?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/popper.min.js')?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url('asset/js/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/scrolling-nav.js')?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url('asset/js/jquery.magnific-popup.min.js')?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo base_url('asset/js/main.js')?>"></script>

</body>

</html>