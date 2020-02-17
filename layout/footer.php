<section id="footer" class="bg-footer section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <img src="assets/images/logo3.png" alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <h3 class="footer-title">Usefull <span>Links</span></h3>
                <ul class="footer-link">
                    <li><a href="/sp20_solution">Home</a></li>
                    <li><a href="news">News</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <h3 class="footer-title">Contact <span>Info</span></h3>
                <ul class="address">
                    <li>
                        <a href="#"><i class="fas fa-map-marker-alt"></i> York Blvd, Los Angeles, US<br> View, CA 94041USA</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-phone-alt"></i> (518) 2014-040 43</a>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-envelope"></i> hello@example.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <h3 class="footer-title">Follow <span>Our Social Media</span></h3>
                <div class="social-icon">
                    <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright © <?php echo date('Y');?> SP20 All Right Reserved</p>
            </div>
        </div>
    </div>
</section>

<a href="#" class="back-to-top" style="display: inline;">
    <i class="fas fa-chevron-up"></i>
</a>


<!-- jQuery -->
<script src="admin/assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/owl-carousel/owl.carousel.min.js"></script>
<script src="admin/assets/js/popper.min.js"></script>
<script src="admin/assets/js/bootstrap.min.js"></script>
<script src="assets/fontawesome/js/all.min.js"></script>
<script>
$(document).ready(function() {
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            $('a.back-to-top svg').css('display', 'block');
        } else {
            $('a.back-to-top svg').css('display', 'none');
        }
    }

    $("#blog-slider").owlCarousel({
        items: 3,
        loop: true,
        nav: false,
        dots: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        },
        autoplayTimeout: 10000,
        autoplay: true
    });

    $("#team-slider").owlCarousel({
        items: 4,
        loop: true,
        nav: false,
        dots: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            }
        },
        autoplayTimeout: 10000,
        autoplay: true
    });

});
</script>

</body>

</html>