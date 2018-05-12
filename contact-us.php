<?php
    $pagetitle='Contact Us | IARA-HR Services';
    $pagedescription='';
    $keyword= '';
    include('include/header.php');
?>

<main>
    <section class="contact">
        <div class="container">
            <h1 class="text-center"><span class="color_blue">Contact</span> Us</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="contact-category">
                        <h4>Corporate Office</h4>
                        <p><i class="fa fa-map-marker"></i> S-13 , GF, SS PLAZA OPP HILTON HOTEL SECTOR 47 GURGAON 122001</p>
                    </div>    
                    <div class="contact-category">
                        <h4>Recruitment</h4>
                        <p><i class="fa fa-mobile"></i> +91-8287000500</p>
                        <p><i class="fa fa-envelope"></i> <a href="#">info@iarahrs.com</a></p>
                    </div>
                    <div class="contact-category">
                        <h4>Admin Solutions</h4>
                        <p><i class="fa fa-mobile"></i> +91-8287000500</p>
                        <p><i class="fa fa-envelope"></i> <a href="#">admin@iarahrs.com</a></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3 class="text-center"><i class="fa fa-envelope"></i> Drop Us a Message</h3>
                    <p class="text-center"><i class="fa fa-heart"></i> We would love to hear from you</p>
                    <form class="form-vertical">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Type your name here" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Type your email id here" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact No.</label>
                            <input type="tel" class="form-control" name="contact" id="contact" placeholder="Your Contact No." required >
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows="4" class="form-control" id="message" name="message" placeholder="Type your message here"></textarea>
                        </div>
                        <button class="btn btn-primary center-block">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    
                </div>
            </div>
        </div>
    </section>
</main>


<?php
    include('include/footer.php');
?>