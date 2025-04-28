<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/png" sizes="32x32" href="images/fav.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Merakhata</title>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <!-- Google Tag Manager -->

    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':

                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =

                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-NCZN7DV');</script>

    <!-- End Google Tag Manager -->







</head>

<body>

    <header>

        <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top" style="background-color: #f7f7f7;">

            <div class="container">

                <a href="index.php" class="navbar-brand"><img src="images/logo.jpg" class="img-fluid"></a>

            </div>

        </nav>

    </header>



    <section class="pay-section padding-50">

        <div class="container">

            <div class="row">

                <div class="col-md-7">

                    <h2 class="text-white">ITR for Salaried Individuals</h2>

                    <p class="text-white">CA Assisted Income Tax Return filing for individuals having salary, one house
                        property & income from other sources.</p>

                    <h5 class="text-white">Plan Includes</h5>

                    <ul class="text-white">

                        <li>Form 16 from a single employer</li>

                        <li>Rental Income from House Property</li>

                        <li>Income from other sources including: FD, PPF, Savings, tuition, dividend, Family Pension,
                            Agricultural Income</li>

                        <li>Tax credit from Form 26AS</li>

                        <li>Chapter VI-A deductions including: LIC, EPF, PPF, ELSS & other MFs, Medical, Principal on
                            House property, etc</li>

                    </ul>

                </div>

                <div class="col-md-5">

                    <div class="shadow-lg rounded-0 p-4 w3-hide-small descform bg-white">

                        <div>

                            <h3>Payment Details</h3>

                            <hr class="hr bg-danger">

                        </div>

                        <div class="pt-5">

                            <form id="updateForm" method="post"
                                action="https://www.merakhata.com/book/itr-salaried-employees?page=online&amp;pay=1&amp;amount="
                                .$data["price"].""="">

                                <div id="demo" class="btn-block">

                                    <h5><span class="text-left">Price</span><span class="float-right">₹ 500.00
                                            INR</span></h5>

                                    <h5><span class="text-left">Discount</span><span class="float-right">20 %</span>
                                    </h5>

                                </div>

                                <hr>

                                <div>

                                    <h4><span class="text-left">Payable Amount</span><span class="float-right">₹ 400.00
                                            INR</span></h4>

                                </div>

                                <br>



                                <div class="form-group">

                                    <input id="razorPay_Name" type="text" placeholder="Enter Full Name"
                                        class="border-1 form-control  rounded-0 p-2 frm" name="name" value=""
                                        required="">

                                </div>

                                <div class="form-group">

                                    <input id="razorPay_Email" type="email" placeholder="Enter Email"
                                        class="border-1 form-control  rounded-0 p-2 frm" name="email" value=""
                                        required="">

                                </div>

                                <div class="form-group">

                                    <input id="razorPay_Phone" type="tel" placeholder="Enter Number"
                                        pattern="[1-9]{1}[0-9]{9}" class="border-1 form-control  rounded-0 p-2 frm"
                                        name="phone" value="" required="">

                                </div>

                                <input type="hidden" name="form" value="">

                                <input id="razorPay_Amt" type="hidden" name="amount" value="400">

                                <button class="btn btn-block btn-success" type="submit" name="submit">Pay &nbsp;₹ 400.00
                                    INR</button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </section>

    <section class="">

        <div class="container py-4 features-tabs shadow-lg">

            <div class="row">

                <div class="col-md-4">



                    <ul id="tabsJustified" class="nav nav-pills flex-column">

                        <li class="nav-item"><a href="#book" data-target="#book" data-toggle="tab"
                                class="nav-link small text-uppercase active"><span><img
                                        src="images/icons/documents-required-black.png"></span>Documents Required</a>
                        </li>

                        <li class="nav-item"><a href="#report" data-target="#report" data-toggle="tab"
                                class="nav-link small text-uppercase "><span><img
                                        src="images/icons/who-should-buy-black.png"></span>Who should buy?</a></li>

                        <li class="nav-item"><a href="#consultancy" data-target="#consultancy" data-toggle="tab"
                                class="nav-link small text-uppercase"><span><img
                                        src="images/icons/how-it-works-black.png"></span>How it works</a></li>

                        <li class="nav-item"><a href="#co" data-target="#co" data-toggle="tab"
                                class="nav-link small text-uppercase"><span><img
                                        src="images/icons/ups-black.png"></span>USPs</a></li>



                    </ul>

                </div>

                <div class="col-md-8">

                    <div class="tab-content p-3 w-100">

                        <div id="book" class="tab-pane fade active show">

                            <div class="row">

                                <div class="col-md-1"></div>

                                <div class="col-md-5">

                                    <img src="images/documents-required.png" class="img-fluid">

                                </div>

                                <div class="col-md-6">

                                    <ul class="ul">

                                        <li>PAN</li>

                                        <li>Form 16</li>

                                        <li>Aadhaar</li>

                                        <li>Form 26AS</li>

                                        <li>Investment proofs</li>

                                        <li>Bank Statements</li>

                                        <li>Other supporting documents</li>





                                    </ul>

                                </div>



                            </div>

                        </div>

                        <div id="report" class="tab-pane fade">



                            <div class="row">

                                <div class="col-md-1"></div>

                                <div class="col-md-5">

                                    <img src="images/who-should-buy.png" class="img-fluid">

                                </div>

                                <div class="col-md-6">

                                    <ul class="ul">

                                        <li>Salaried Individuals</li>

                                        <li>Rental Income from house/property</li>

                                        <li>Individuals with income from other sources</li>

                                        <li>Not for individuals with multiple house properties</li>

                                        <li>Not for salaried individuals who sold mutual funds, shares & securities
                                            during the year</li>



                                    </ul>

                                </div>



                            </div>



                        </div>

                        <div id="consultancy" class="tab-pane fade">



                            <div class="row">

                                <div class="col-md-1"></div>

                                <div class="col-md-5">

                                    <img src="images/How-it-works.png" class="img-fluid">

                                </div>

                                <div class="col-md-6">

                                    <ul class="ul">

                                        <li>You purchase plan & provide supporting documents</li>

                                        <li>CA prepares, reviews & files ITR</li>

                                        <li>Expert assists to e-verify ITR</li>

                                        <li>Free Consultation</li>



                                    </ul>

                                </div>



                            </div>



                        </div>

                        <div id="co" class="tab-pane fade">



                            <div class="row">

                                <div class="col-md-1"></div>

                                <div class="col-md-5">

                                    <img src="images/ups.png" class="img-fluid">

                                </div>

                                <div class="col-md-6">

                                    <ul class="ul">

                                        <li>CA assistance</li>

                                        <li>Support via chat, whatsapp, email & call</li>

                                        <li>Paperless</li>

                                        <li>Error free ITR</li>

                                    </ul>

                                </div>

                            </div>

                        </div>



                    </div>



                </div>

            </div>

        </div>

    </section>

    <section class="terms-plans padding-50">

        <div class="container">

            <div class="row">

                <div class="col-md-6 p-4">

                    <h3><span class="line1">Terms & Conditions</span></h3>



                    <ul class="ul p-4">

                        <li>An expert will be allotted after you provide all the required documents.</li>

                        <li>The order will be cancelled if documents are not provided within 72 hours.</li>

                        <li>Additional charges may apply if Form 16 is not available</li>

                        <li>Any changes to data after review will incur additional charges.</li>

                        <li>Expert Assistance available during business hours</li>

                    </ul>

                </div>

                <div class="col-md-6 services p-4">

                    <h3><span class="line1">Other Plans</span></h3>

                    <ul class="ul p-4">

                        <li>ITR for Salaried Individuals</li>

                        <li>ITR for Freelances/ Consultant</li>

                        <li>ITR for Professionals</li>

                        <li>ITR for Business</li>

                        <li>ITR for Share Trading, Derivatives and commodities</li>

                        <li>ITR for Individual with Salary Income and/or Capital Gain Income</li>

                        <li>ITR for Housewives</li>

                        <li>Tax Planning - FY 2019-20 & 2020-21</li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <div class="copyrights text-center">

        Copyright © 2018. All rights reserved by Merakhata

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js?render=6LfDLKEUAAAAAGPdKoICkTk_TYMVaPyS9sJjWSI7'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--<script src="js/custom.js"></script>-->

    <script src="https://use.fontawesome.com/1744f3f671.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>



</body>

</html>