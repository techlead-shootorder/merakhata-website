<?php include("main-header.php"); ?>
<title>Contact Us - Merakhata</title>
<meta name="description"
    content="Contact your trusted partner for Accounts, HR & TAX related services. Get in touch with us now for an in-person meet.">
<meta name="keywords" content="Contact us, merakhata">
</head>
<?php include("header.php"); ?>
<section class="contact-form padding-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <form method="post" action="thank-you.php">
                        <h3 class="text-center"><span class="line1">Contact Us </span></h3>
                        <span class="heading-underline"></span>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group pt-4 mb-4">
                                            <input type="text" name="fullname" id="name" required="required"
                                                class="form-control" placeholder="Name" />
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="tel" name="phone" id="phone" required="required"
                                                class="form-control" placeholder="Phone"
                                                pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10"
                                                oninvalid="setCustomValidity('Please enter a valid 10 digit phone number')"
                                                onchange="try{setCustomValidity('')}catch(e){}" />
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="email" name="email" id="mail" required="required"
                                                class="form-control" placeholder="Email"
                                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$"
                                                oninvalid="setCustomValidity('Please enter a valid email ID')"
                                                onchange="try{setCustomValidity('')}catch(e){}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group pt-4 mb-4">
                                            <textarea name="message" id="message" class="form-control textarea"
                                                placeholder="Message" rows="4" cols="40"></textarea>
                                        </div>
                                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                        <div class="relative fullwidth col-xs-12">
                                            <input type='hidden' name='token' value='<?php echo $token; ?>' />
                                            <input type="hidden" name="source" value="<?php echo $source; ?>" />
                                            <input type="hidden" name="medium" value="<?php echo $medium; ?>" />
                                            <input type="hidden" name="service" value="<?php echo $service; ?>" />
                                            <input type="hidden" name="city" value="<?php echo $campaign; ?>" />
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-blue-sub">REQUEST CALL
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="contact-information padding-50">

    <div class="container">

        <h3 class="text-center text-white pb-5"><span class="line2">Contact Information</span></h3>

        <span class="heading-underline"></span>

        <div class="row">

            <div class="col-md-1"></div>

            <div class="col-md-10">

                <div class="row">

                    <div class="col-md-4">

                        <div class="text-center pb-2">

                            <img src="images/location.png" width="20%">

                        </div>

                        <p class="text-center text-white">

                            1st Floor, Krishe Sapphire MSR Block, SY, 88, Hitech City Main Rd, Vittal Rao Nagar,
                            Madhapur, Hyderabad, Telangana 500081

                        </p>

                    </div>

                    <div class="col-md-4">

                        <div class="text-center pb-2">

                            <img src="images/call.png" width="20%">

                        </div>

                        <p class="text-center"><a href="tel:+91-9347501292"><span
                                    class="text-white">+919347501292</span></a></p>

                    </div>

                    <div class="col-md-4">

                        <div class="text-center pb-2">

                            <img src="images/mail.png" width="20%">

                        </div>

                        <p class="text-center"><a href="mailto:hello@merakhata.com "><span
                                    class="text-white">hello@merakhata.com</span></a></p>

                    </div>

                </div>

            </div>

            <div class="col-md-1"></div>



        </div>

    </div>

</section>

<section>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15225.128789840157!2d78.3742678!3d17.4462023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x739c1c834af43c98!2sMerakhata%20-%20Accounting%2C%20Taxation%20Services%20and%20IT%20Return%20Filing!5e0!3m2!1sen!2sin!4v1630645615248!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</section>

<?php include("footer.php"); ?>