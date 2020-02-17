<?php
$page = "news";
    require_once('layout/header.php');
?>

<div class="body">
    <section id="news" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="blog-post">
                        <a href="news-details" class="post-img">
                            <img class="img-fluid" src="assets/images/news/blog-post1.jpg" alt="">
                        </a>

                        <div class="content">
                            <h2>
                                <a href="news-details">
                                    Great House on The Hills
                                </a>
                            </h2>
                            <ul class="post-meta">
                                <li>Novemer 12, 2018</li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Class aptent taciti sociosqu ad litora torquent…
                            </p>
                            <a href="news-details" class="btn btn-common read-more">
                                Read More <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-post">
                        <a href="news-details" class="post-img">
                            <img class="img-fluid" src="assets/images/news/blog-post1.jpg" alt="">
                        </a>

                        <div class="content">
                            <h2>
                                <a href="news-details">
                                    Great House on The Hills
                                </a>
                            </h2>
                            <ul class="post-meta">
                                <li>Novemer 12, 2018</li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Class aptent taciti sociosqu ad litora torquent…
                            </p>
                            <a href="news-details" class="btn btn-common read-more">
                                Read More <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="sidebar right">
                        <div class="widget">
                            <h3 class="sidebar-title">Search Blog</h3>
                            <div class="search-blog-input">
                                <div class="input">
                                    <input class="form-control" type="text" placeholder="Type and hit enter" value="">
                                    <button Type="submit" class="search" id="btn"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="sidebar-title">Lates Posts</h3>
                            <ul class="widget-tabs">
                                <li>
                                    <div class="widget-content">
                                        <div class="widget-thumb">
                                            <a href="news-details"><img src="assets/images/news/blog-post1.jpg" alt=""></a>
                                        </div>
                                        <div class="widget-text">
                                            <h5><a href="news-details">What to Do a Year Before Buying Apartment </a></h5>
                                            <span>October 26, 2018</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="widget-content">
                                        <div class="widget-thumb">
                                            <a href="news-details"><img src="assets/images/news/blog-post1.jpg" alt=""></a>
                                        </div>
                                        <div class="widget-text">
                                            <h5><a href="news-details">What to Do a Year Before Buying Apartment </a></h5>
                                            <span>October 26, 2018</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
    require_once('layout/footer.php');
?>