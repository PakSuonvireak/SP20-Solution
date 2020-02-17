<?php
    $page = "home";
    require_once('layout/header.php');
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/sliders/slide1.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/sliders/slide2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="assets/images/sliders/slide3.jpg" class="d-block w-100" alt="..." />
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="service" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <p>dicover</p>
                    <h2 class="second-title">Our Service</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item">
                    <div class="icon">
                        <i class="fab fa-codepen"></i>
                    </div>
                    <div class="services-content">
                        <h3>Letest Interior Design</h3>
                        <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item">
                    <div class="icon">
                        <i class="fab fa-codepen"></i>
                    </div>
                    <div class="services-content">
                        <h3>Letest Interior Design</h3>
                        <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item">
                    <div class="icon">
                        <i class="fab fa-codepen"></i>
                    </div>
                    <div class="services-content">
                        <h3>Letest Interior Design</h3>
                        <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item">
                    <div class="icon">
                        <i class="fab fa-codepen"></i>
                    </div>
                    <div class="services-content">
                        <h3>Letest Interior Design</h3>
                        <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item">
                    <div class="icon">
                        <i class="fab fa-codepen"></i>
                    </div>
                    <div class="services-content">
                        <h3>Letest Interior Design</h3>
                        <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item">
                    <div class="icon">
                        <i class="fab fa-codepen"></i>
                    </div>
                    <div class="services-content">
                        <h3>Letest Interior Design</h3>
                        <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="news" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <p>Lates News</p>
                    <h2 class="second-title">Be The First To Read</h2>
                </div>
            </div>
        </div>
        <div style="width: 100%; overflow: hidden;">
            <div id="blog-slider" class="owl-carousel owl-theme">
                <div class="my-3 px-3">
                    <div class="blog-item text-center">
                        <div class="blog-image">
                            <a href="news-details">
                                <img src="assets/images/news/img1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="date">12 April, 2018</div>
                        <div class="descr">
                            <h3 class="title">
                                <a href="news-details">
                                    Visual Design Concept
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
                        </div>
                        <div class="blog-footer hide-on-list">
                            <div class="float-left">
                                <p class="prop-user"><a href="#"><i class="far fa-user"></i> Admin</a></p>
                            </div>
                            <div class="float-right">
                                <span><i class="far fa-heart"></i> 350</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 px-3">
                    <div class="blog-item text-center">
                        <div class="blog-image">
                            <a href="news-details">
                                <img src="assets/images/news/img2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="date">12 April, 2018</div>
                        <div class="descr">
                            <h3 class="title">
                                <a href="news-details">
                                    Visual Design Concept
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
                        </div>
                        <div class="blog-footer hide-on-list">
                            <div class="float-left">
                                <p class="prop-user"><a href="#"><i class="far fa-user"></i> Admin</a></p>
                            </div>
                            <div class="float-right">
                                <span><i class="far fa-heart"></i> 350</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 px-3">
                    <div class="blog-item text-center">
                        <div class="blog-image">
                            <a href="news-details">
                                <img src="assets/images/news/img3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="date">12 April, 2018</div>
                        <div class="descr">
                            <h3 class="title">
                                <a href="news-details">
                                    Visual Design Concept
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
                        </div>
                        <div class="blog-footer hide-on-list">
                            <div class="float-left">
                                <p class="prop-user"><a href="#"><i class="far fa-user"></i> Admin</a></p>
                            </div>
                            <div class="float-right">
                                <span><i class="far fa-heart"></i> 350</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 px-3">
                    <div class="blog-item text-center">
                        <div class="blog-image">
                            <a href="news-details">
                                <img src="assets/images/news/img2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="date">12 April, 2018</div>
                        <div class="descr">
                            <h3 class="title">
                                <a href="news-details">
                                    Visual Design Concept
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium fugiat, eius sint.</p>
                        </div>
                        <div class="blog-footer hide-on-list">
                            <div class="float-left">
                                <p class="prop-user"><a href="#"><i class="far fa-user"></i> Admin</a></p>
                            </div>
                            <div class="float-right">
                                <span><i class="far fa-heart"></i> 350</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once('layout/footer.php');
?>