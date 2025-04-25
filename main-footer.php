 <section class="rate">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 text-center mb-4">
                    <img src="/images/accu.png" alt="accurate" class="img-fluid" width="50%">
                    <h2 class="white-text">100%</h2>
                    <p class="white-text">Accurate and <br/>Timely Reporting</p>
                </div>
                <div class="col-6 col-md-3 text-center mb-4">
                    <img src="/images/real.png" alt="real" class="img-fluid" width="50%">
                    <h2 class="white-text">Realtime</h2>
                    <p class="white-text">Professional <br/>Consultancy</p>
                </div>
                <div class="col-6 col-md-3 text-center mb-4">
                    <img src="/images/growth.png" alt="growth" class="img-fluid" width="50%">
                    <h2 class="white-text">100%</h2>
                    <p class="white-text">Partner in <br/>your growth</p>
                </div>
                <div class="col-6 col-md-3 text-center mb-4">
                    <img src="/images/mis.png" alt="mis" class="img-fluid" width="50%">
                    <h2 class="white-text">Guaranteed</h2>
                    <p class="white-text">Monthly <br/>MIS reporting</p>
                </div>
            </div>
        </div>
        </section>
        <section class="contact padding-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>CONTACT US</h2>
                        <div class="contact-icons pt-5">
                        <p><i class="fa fa-map-marker"></i> 1st Floor, Krishe Sapphire MSR Block, SY, 88, <br>Hitech City Main Rd, Vittal Rao Nagar, <br>Madhapur, Hyderabad, Telangana 500081</span></p>
                        <p><i class="fa fa-phone"></i> <a href="tel:+919030815060">+919030815060</a></p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:hello@merakhata.com">hello@merakhata.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 contact-form-bg">
                        <form  method="post" action="thank-you.php">
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="name" name="fullname" placeholder="Name" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="tel" class="form-control" id="name" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="form-group mb-4">
                                <textarea class="form-control" rows="3" placeholder="Message" required></textarea>
                            </div>
                            <input type="hidden" id="g-recaptcha-response-1" name="g-recaptcha-response">
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_SESSION['form_token']; ?>" />
                                <input type="hidden" name="source" value="<?php echo $source;?>"/>
                                <input type="hidden" name="medium" value="<?php echo $medium;?>"/>
                                <input type="hidden" name="service" value="<?php echo $service;?>"/>
                                <input type="hidden" name="city" value="<?php echo  $campaign;?>"/>
                               
                            </div>
                            <button type="submit" name="submit" class="btn btn-blue-sub">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
       <?php 
       include("footer.php");?>
       