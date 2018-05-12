<!-- footer-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <h5>Quick Links</h5>    
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="current-opportunities.php">Current Openings</a></li>
                        <li><a href="industry-practices.php">Industry Practices</a></li>
                        <li><a href="iara-mantra.php">IARA Mantra</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <h5>About Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="who-we-are.php">Who We Are?</a></li>
                        <li><a href="core-values.php">Core Values</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <h5>Follow Us</h5>
                    <ul class="list-inline social-media">
                        <li><a href="#"><img src="assets/images/google-plus.svg" alt="Google Plus" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="assets/images/facebook.svg" alt="Facebook" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="assets/images/linkedin.svg" alt="LinkedIn" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="assets/images/twitter.svg" alt="Twitter" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="assets/images/skype.svg" alt="Skype" class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <h5>Group Businesses</h5>
                    <ul class="list-unstyled">
                        <li><a href="recruitment.php">Recruitment</a></li>
                        <li><a href="admin-solutions.php">Admin Solutions</a></li>
                        <li><a href="#">Discovery Platform</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end-of-footer-->
    <!-- footer-bottom-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src="assets/images/logo.png" alt="" class="img-responsive" />
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 useful_links text-center">
                    <ul class="list-inline">
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Terms &amp; Policies</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Jobs Packages</a></li>
                        <li><a href="#">CV Packages</a></li>
                    </ul>
                    <p>&copy; 2016 IARA HR Services. All rights reserved</p>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <p>Designed by <a href="#" target="_blank">www.expertwebsolutions.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end-of-footer-bottom-->
    
    <!-- back-to-top-->
        <a href="#" id="back-to-top" title="Back to top" class="show"><i class="fa fa-chevron-up"></i></a>
    <!-- end-of-back-to-top-->    

<!-- JS --> 
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.js"> </script>

<script src="assets/js/back-to-top.js"></script>    
<script src="//cdnjs.cloudflare.com/ajax/libs/picturefill/2.3.1/picturefill.min.js"></script>

<script src="assets/js/wow.min.js"></script>    
<script>
    new WOW().init();
</script>

<script>
    document.oncontextmenu = function(e){
        var target = (typeof e !="undefined")? e.target: event.srcElement
        if (target.tagName == "IMG" || (target.tagName == 'A' && target.firstChild.tagName == 'IMG'))
            return false
    }
</script>

<script src="assets/js/owl.carousel.js"></script>    
<script>
    var owl = $('.owl-carousel-quotes');
    owl.owlCarousel({
    items:1,
    animateOut: 'slideOutUp',
    animateIn: 'jello',
    loop:true,
    margin:10,
        lazyload: true,
    autoplay:true,
    autoplayTimeout:10000
    });

</script>    
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    items:1,
    animateOut: 'slideOutUp',
    animateIn: 'bounceInUp',
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:10000
    });
</script>

    
</body>
</html>
