<?php
$page = "contact";
    require_once('layout/header.php');
?>

<div class="body">
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-right-area">
                        <h2 class="title-">Get In Touch</h2>
                        <p>If you are interested in working with us, <br> please get in touch.</p>
                        <div class="contact-right">
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p>63130 St. York Blvd, Los Angeles, US</p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <p><a href="#">info@example.com</a></p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p><a href="#">+1-234-567-478</a></p>
                            </div>
                        </div>
                        <div class="social-icon">
                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 form-line">
                    <h2 class="title-">Leave Message Here</h2>
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Your Name" required>
                                <div class="invalid-feedback">
                                    Please input Name.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" id="validationCustom01" placeholder="Email Address" required>
                                <div class="invalid-feedback">
                                    Please input Email.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Subject">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea class="form-control" id="validationCustom01" rows="5" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-common" type="submit">Send</button>
                    </form>

                    <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                    </script>
                </div>
            </div>
        </div>
    </section>

    <section id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15637.1073596482!2d104.92720480000001!3d11.53198785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skh!4v1580637398496!5m2!1sen!2skh"
            width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>

</div>


<?php
    require_once('layout/footer.php');
?>