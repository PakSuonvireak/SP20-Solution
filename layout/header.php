<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SP20 | Solution</title>
    <!-- Theme icon -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/owl-carousel/css/animate.css">
    <link rel="stylesheet" href="assets/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="top-bar bg-main">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><i class="fas fa-phone-alt"></i> 1-800-555-1234</li>
                <li class="nav-item"><i class="far fa-envelope"></i> info@example.com</li>
                <li class="nav-item"><i class="fas fa-map-marker-alt"></i> York Blvd, Los Angeles, US</li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="position:sticky; top:0; z-index:999;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo3.png" class="w-100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item <?php if($page=='home'):?>active<?php endif;?>">
                        <a class="nav-link" href="/sp20_solution">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if($page=='news'):?>active<?php endif;?>">
                        <a class="nav-link" href="news">News</a>
                    </li>
                    <li class="nav-item <?php if($page=='about'):?>active<?php endif;?>">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item <?php if($page=='contact'):?>active<?php endif;?>">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>