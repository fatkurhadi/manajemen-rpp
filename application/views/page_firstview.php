<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="landing page pt annisah">
    <meta name="author" content="Zaq Ocaryst">
    <link rel="icon" href="<?php echo base_url('images/logo.png')?>">
    <title><?php echo ATK?></title>

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
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?php echo site_url('')?>">
                                <img src="<?php echo base_url('')?>images/logo.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">SERVICE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#call-to-action">PROJECT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">CONTACT</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-social d-none d-sm-flex align-items-center">
                                <span>FOLLOW US</span>
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="https://instagram.com/"><i class="lni-instagram-original"></i></a></li>                               
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(<?php echo base_url('images/header1.jpg')?>)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">Annisah Teknik Karya</h3>
                            <p class="text">We are Professional Contractor</p>
                            <ul class="header-btn">
                                <li><a class="main-btn btn-one video-popup" href="https://www.youtube.com/watch?v=6nDpU4bACQg">WATCH US <i class="lni-play"></i></a></li>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="<?php echo base_url('')?>images/header-shape.svg" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                        <h4 class="title">Work Quality</h4>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-construction"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Construction</h4>
                                    <p class="text">Short description for the ones</br> who look for something new.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-brick"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Material</h4>
                                    <p class="text">Short description for the ones</br> who look for something new.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-brush"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Architecture</h4>
                                    <p class="text">Short description for the ones</br> who look for something new.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-helmet"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Safety</h4>
                                    <p class="text">Short description for the ones</br> who look for something new.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- row -->
            </div> <!-- row -->
        </div> <!-- conteiner -->
        <div class="services-image d-lg-flex align-items-center">
            <div class="image">
                <img src="<?php echo base_url('')?>images/sky-building.png" alt="Services">
            </div>
        </div> <!-- services image -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Portofolio</h4>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing mt-40" style="background-image: url(<?php echo base_url('images/big_building10.png')?>)">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Basic</h5>
                            <span class="price">$ 1999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building010.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-1{fill:#2bdbdc;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing pro mt-40" style="background-image: url(<?php echo base_url('images/big_building20.png')?>)">
                        <div class="pricing-baloon">
                            <img src="<?php echo base_url('')?>images/baloon.svg" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">Pro</h5>
                            <span class="price">$ 39999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building020.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing enterprise mt-40" style="background-image: url(<?php echo base_url('images/big_building30.png')?>)">
                        <div class="pricing-flower">
                            <img src="<?php echo base_url('')?>images/flower.svg" alt="flower">
                        </div>
                        <div class="pricing-header text-right">
                            <h5 class="sub-title">Enterprise</h5>
                            <span class="price">$ 799999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building030.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-3{fill:#4da422;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-3" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-3" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-3" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-3" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing mt-40" style="background-image: url(<?php echo base_url('images/big_building11.png')?>)">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Basic 2.0</h5>
                            <span class="price">$ 1599</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building011.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing pro mt-40" style="background-image: url(<?php echo base_url('images/big_building21.png')?>)">
                        <div class="pricing-baloon">
                            <img src="<?php echo base_url('')?>images/baloon.svg" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">Pro 2.0</h5>
                            <span class="price">$ 35999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building021.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-3{fill:#4da422;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-3" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-3" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-3" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-3" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing enterprise mt-40" style="background-image: url(<?php echo base_url('images/big_building31.png')?>)">
                        <div class="pricing-flower">
                            <img src="<?php echo base_url('')?>images/flower.svg" alt="flower">
                        </div>
                        <div class="pricing-header text-right">
                            <h5 class="sub-title">Enterprise 2.0</h5>
                            <span class="price">$ 759999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building031.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-1{fill:#2bdbdc;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing mt-40" style="background-image: url(<?php echo base_url('images/big_building12.png')?>)">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Basic 3.0</h5>
                            <span class="price">$ 999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building012.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-3{fill:#4da422;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-3" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-3" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-3" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-3" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing pro mt-40" style="background-image: url(<?php echo base_url('images/big_building22.png')?>)">
                        <div class="pricing-baloon">
                            <img src="<?php echo base_url('')?>images/baloon.svg" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">Pro 3.0</h5>
                            <span class="price">$ 29999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building022.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-1{fill:#2bdbdc;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing enterprise mt-40" style="background-image: url(<?php echo base_url('images/big_building32.png')?>)">
                        <div class="pricing-flower">
                            <img src="<?php echo base_url('')?>images/flower.svg" alt="flower">
                        </div>
                        <div class="pricing-header text-right">
                            <h5 class="sub-title">Enterprise 3.0</h5>
                            <span class="price">$ 699999</span>
                            <p class="year">per project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn video-popup" href="<?php echo base_url('images/big_building032.jpg')?>">GET IT</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== PRICING PART ENDS ======-->
    
     <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="call-to-action">
        <div class="call-action-image">
            <img src="<?php echo base_url('')?>images/worker.png" alt="call-to-action">
        </div>
        
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="call-action-content text-center">
                        <h2 class="call-title">Aplikasi Keuangan PT.Annisah</h2>
                        <p class="text">Silahkan klik masuk untuk akses aplikasi</p>
                        <div class="call-newsletter">
                            <i class="lni-rocket"></i>
                            <input type="text" placeholder="Aplikasi Keuangan" disabled>
                            <a href="<?php echo site_url('')?>/login"><button type="submit">Masuk</button></a>
                        </div>
                    </div> <!-- slider-content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Contact Us</h4>
                        <p class="text">Send your message via whatsapp</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="<?php echo site_url('')?>/contact" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="Pesan anda" name="pesan" data-error="Mohon, tinggalkan pesan." required="required" oninvalid="this.setCustomValidity('Silahkan tinggalkan pesan!')" oninput="setCustomValidity('')"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn"><i class="lni-whatsapp"></i> kirim</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                            <div class="footer-logo d-flex align-items-end">
                                <a class="mt-30" href="<?php echo site_url('')?>"><img src="<?php echo base_url('')?>images/logo.png" alt="Logo"></a>

                                <ul class="social mt-30">
                                    <li><a href="https://facebook.com/"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="https://instagram.com/"><i class="lni-instagram-original"></i></a></li>
                                </ul>
                            </div> <!-- footer logo -->
                            
                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Career</a></li>

                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <div class="footer-newsletter">
                            <h6 class="footer-title">Subscribe Newsletter</h6>
                            <div class="newsletter">
                                <form action="#">
                                    <input type="text" placeholder="Your Email">
                                    <button type="submit"><i class="lni-angle-double-right"></i></button>
                                </form>
                            </div>
                            <p class="text">Subscribe weekly newsletter to stay upto date. We don’t send spam.</p>
                        </div> <!-- footer newsletter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">© 2020 All Rights Reserved <a rel="nofollow" href="https://www.annisahpt.com/">Annisah Karya Teknik</a> - Build by <a el="nofollow" href="#">Fatkur Nur Hadi</a></p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->


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