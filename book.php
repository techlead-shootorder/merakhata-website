<?php

setlocale(LC_MONETARY, 'en_IN');
include('payment/razorpay-php/Razorpay.php');
$root = "https://www.merakhata.com/";

if ($_GET['slug']) {
    $slug = $_GET['slug'];
} else {
    $slug = "itr-salaried-employees";
}
if ($_GET["amount"]) {
    $amount = preg_replace('/[^0-9]/', '', $_GET["amount"]);
} else {
    $amount = "3000";
}

$keyId = 'rzp_live_A3J4pFhDMuGLdY';
$keySecret = '1BFEL9UoKKWOM0lwqI0TZ06I';
$displayCurrency = 'INR';


$servername = "localhost";
$username = "merakhata_new";
$password = "Khata@321#";
$dbname = "merakhata_new";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $form = $_POST['form'];
    $date = date('y-m-d');
    $sql = "INSERT INTO users(name, email, phone, date, course) VALUES ('$name', '$email', '$phone', '$date', '$form')";
    if (mysqli_query($conn, $sql)) {
        $success = "";
        $message = "The lead details are:<br>Fist Name - " . $fname . "<br><br>Last Name - " . $lname . "<br><br>Company Name - " . $cname . "<br><br>Email - " . $email . "<br><br>Phone - <a href=\"tel:" . $phone . "\">" . $phone . "</a><br><br>City - " . $city . "<br><br>Address - " . $address . "<br><br>PAN - " . $pan . "<br><br>Designation - " . $designation . "<br><br>Amount - " . $amount . "<br><br>--Admin";
        $subject = "New Account Created - " . $fname . " - Merakhata";
        $to = "rajat@itivent.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <noreply@merakhata.com>' . "\r\n";
        mail($to, $subject, $message, $headers);

        $success = "Thank you for Booking! Our representatives will call you shortly.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

$link = mysqli_connect("localhost", "merakhata_app", "!I4R5ZTUhmio", "merakhata_app");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM products where slug='" . $slug . "' AND status=1";
$total = "SELECT * FROM products where status=1";

if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $data["slug"] = $row['slug'];
            $data["name"] = $row['name'];
            $data["amount"] = $row['amount'];
            $data["price"] = $row['price'];
            $data["introduction"] = $row['introduction'];
            $data["documents"] = $row['documents'];
            $data["how"] = $row['how'];
            $data["buy"] = $row['buy'];
            $data["usp"] = $row['usp'];
            $data["terms"] = $row['terms'];
            $data["terms"] = $row['terms'];
        }
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
        exit(0);
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $data["name"] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>images/fav.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>images/fav.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $root; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $root; ?>css/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

    <?php
    // if(isset($_POST["pay"]))
// {
    ?>
    <script>
        // $(function () {
        // makePayment();
        //  });
    </script>
    <?php

    // }
    ?>

    <script>
        function makePayment() {
            var rzp_Amt = parseInt(document.getElementById('razorPay_Amt').value) * 100;
            var rzp_Name = document.getElementById('razorPay_Name').value;
            var rzp_Email = document.getElementById('razorPay_Email').value;
            var rzp_Phone = document.getElementById('razorPay_Phone').value;

            var options = {
                "key": "rzp_live_A3J4pFhDMuGLdY",
                "amount": rzp_Amt, // 2000 paise = INR 20
                "name": "Merakhata",
                "description": "Pay",

                "image": "https://www.merakhata.com/images/logo.png",

                "handler": function (response) {

                    if (typeof response.razorpay_payment_id == 'undefined' || response.razorpay_payment_id < 1) {
                        redirect_url = '<?php echo $root; ?>book/<?php echo $slug; ?>';
                    } else {
                        redirect_url = '<?php echo $root; ?>book/<?php echo $slug; ?>?page=success';
                    }
                    location.href = redirect_url;

                },

                "prefill": {

                    "name": '<?php echo $_POST['name']; ?>',

                    "contact": '<?php echo $_POST['phone']; ?>',

                    "email": '<?php echo $_POST['email']; ?>'

                },

                "notes": {

                    "address": "Address..."

                },

                "theme": {

                    "color": "#9e3f7c"

                }

            };



            var rzp1 = new Razorpay(options);

            rzp1.open();

            //    e.preventDefault();

        }

    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCZN7DV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include("header.php"); ?>
    <section class="one primary-font  pt-5">
        <div class="container">
            <?php if ($success) { ?>
                <div class="alert alert-success">
                    <p><?php echo $success; ?> </p>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-md-7">
                    <div class="information">
                        <div>
                            <!--<img src="<?php echo $root; ?>images/logo.png" class="img-fluid">-->
                        </div>
                        <div class="mt-5 mb-5">
                            <h1><?php echo $data["name"] ?></h1>
                            <hr class="hr bg-danger">
                        </div>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>
                        <div class="p-3">
                            <?php echo $data["introduction"] ?>


                        </div>
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#documents">Documents
                                        Required</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#buy">Who should buy?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#work">How it works</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#usps">USPs</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="documents" class="container tab-pane active"><br>
                                    <h3>Documents Required</h3>
                                    <?php echo $data["documents"] ?>
                                </div>
                                <div id="buy" class="container tab-pane fade"><br>
                                    <h3>Who should buy?</h3>
                                    <?php echo $data["buy"] ?>
                                </div>
                                <div id="work" class="container tab-pane fade"><br>
                                    <h3>How it works</h3>
                                    <?php echo $data["how"] ?>
                                </div>
                                <div id="usps" class="container tab-pane fade"><br>
                                    <h3>USPs</h3>
                                    <?php echo $data["usp"] ?>
                                </div>

                            </div>
                        </div>
                        <!--
                        <div>
                            <img src="<?php echo $root; ?>img/images/download.png" class="img-fluid">
                        </div>
                        -->

                        <div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header">
                                    <h2>Terms & Conditions</h2>
                                    <?php echo $data["terms"] ?>
                                </div>
                                <hr>
                                <div class="page-header">
                                    <h2>Other Plans</h2>
                                </div>
                                <ul>
                                    <?php
                                    if ($result = mysqli_query($link, $total)) {
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {

                                                echo "<li><a href='https://www.merakhata.com/book/" . $row['slug'] . "' target='_blank'>" . $row['name'] . "</a></li>";
                                            }

                                            mysqli_free_result($result);
                                        } else {
                                            echo "No records matching your query were found.";
                                            exit(0);
                                        }
                                    } else {
                                        echo "ERROR: Could not able to execute $total. " . mysqli_error($link);
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <hr>
                        <!--<div class="row">-->

                        <!--    <div>-->
                        <!--        <img src="<?php echo $root; ?>img/images/logo.png" class="img-fluid">-->
                        <!--    </div>-->

                        <!--    <div class="p-3">-->
                        <!--        <p>Copyright © 2024. All rights reserved by Merakhata</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>

                </div>

                <div class="col-md-5">
                    <div class="shadow-lg rounded-0 p-5 w3-hide-small descform">
                        <div>
                            <h3>Payment Details</h3>
                            <hr class="hr bg-danger">
                        </div>
                        <div class="pt-5" style="min-width:350px;">
                            <form id="updateForm" method="post"
                                action="<?php echo $root; ?>book/<?php echo $slug; ?>?page=online&pay=1&amount=<?php echo $data["price"]; ?>">
                                <div id="demo" class="btn-block">
                                    <h5><span class="text-left">Price</span><span class="float-right">&#8377;
                                            <?php echo $data["amount"]; ?> INR</span></h5>
                                    <h5><span class="text-left">Discount</span><span
                                            class="float-right"><?php echo round(100 - (($data["price"] * 100) / $data["amount"])); ?>
                                            %</span></h5>
                                </div>
                                <hr>
                                <div>
                                    <h4><span class="text-left">Payable Amount</span><span class="float-right">&#8377;
                                            <?php echo $data["price"]; ?> INR</span></h4>
                                </div>
                                <br>

                                <div class="form-group">
                                    <input id="razorPay_Name" type="text" placeholder="Enter Full Name"
                                        class="border-1 form-control  rounded-0 p-2 frm" name="name"
                                        value="<?php echo $_POST['name']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input id="razorPay_Email" type="email" placeholder="Enter Email"
                                        class="border-1 form-control  rounded-0 p-2 frm" name="email"
                                        value="<?php echo $_POST['email']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input id="razorPay_Phone" type="tel" placeholder="Enter Number"
                                        pattern="[1-9]{1}[0-9]{9}" class="border-1 form-control  rounded-0 p-2 frm"
                                        name="phone" value="<?php echo $_POST['phone']; ?>" required>
                                </div>
                                <input type="hidden" name="form" value="<?php echo $name; ?>" />
                                <input type="hidden" name="pay" value="1" />
                                <input id="razorPay_Amt" type="hidden" name="amount"
                                    value="<?php echo $data["price"]; ?>" />
                                <button class="btn btn-block btn-danger" type="submit" name="submit">Book Now</button>
                            </form>
                        </div>
                        <div class="pt-5">
                            <a href="tel:+919030815060" class="btn btn-success text-white btn-block"><i
                                    class="fa fa-phone"></i> CALL NOW : +91 9030815060</a>
                        </div>
                    </div>
                    <div class="w3-hide-medium w3-hide-large">
                        <button type="button" class="btn btn-block btn-danger fixed-bottom" data-toggle="modal"
                            data-target="#myModal">
                            File ITR (Pay Online)
                        </button>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">

                                        <div>
                                            <h3>Payment Details</h3>
                                            <hr class="hr bg-danger">
                                            <div class="pt-5">
                                                <form id="updateForm" method="post"
                                                    action="<?php echo $root; ?>book/<?php echo $slug; ?>?page=online&pay=1&amount="
                                                    .$data["price"]."">
                                                    <div id="demo" class="btn-block">
                                                        <h5><span class="text-left">Price</span><span
                                                                class="float-right">&#8377;
                                                                <?php echo $data["amount"]; ?> INR</span></h5>
                                                        <h5><span class="text-left">Discount</span><span
                                                                class="float-right"><?php echo round(100 - (($data["price"] * 100) / $data["amount"])); ?>
                                                                %</span></h5>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                        <h4><span class="text-left">Payable Amount</span><span
                                                                class="float-right">&#8377; <?php echo $data["price"]; ?>
                                                                INR</span></h4>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <input id="razorPay_Name" type="text"
                                                            placeholder="Enter Full Name"
                                                            class="border-1 form-control  rounded-0 p-2 frm" name="name"
                                                            value="<?php echo $_POST['name']; ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="razorPay_Email" type="email"
                                                            placeholder="Enter Email"
                                                            class="border-1 form-control  rounded-0 p-2 frm"
                                                            name="email" value="<?php echo $_POST['email']; ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="razorPay_Phone" type="tel" placeholder="Enter Number"
                                                            pattern="[1-9]{1}[0-9]{9}"
                                                            class="border-1 form-control  rounded-0 p-2 frm"
                                                            name="phone" value="<?php echo $_POST['phone']; ?>" required>
                                                    </div>
                                                    <input type="hidden" name="form" value="<?php echo $name; ?>" />
                                                    <input type="hidden" name="pay" value="1" />
                                                    <input id="razorPay_Amt" type="hidden" name="amount"
                                                        value="<?php echo $data["price"]; ?>" />
                                                    <button class="btn btn-block btn-danger" type="submit"
                                                        name="submit">Pay &nbsp;&#8377; <?php echo $data["price"]; ?>
                                                        INR</button>
                                                </form>
                                            </div>
                                            <div class="pt-5">
                                                <a href="tel:+919030815060"
                                                    class="btn btn-success text-white btn-block"><i
                                                        class="fa fa-phone"></i> CALL NOW : +91 9030815060</a>
                                            </div>
                                        </div>

                                    </div>


                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("main-footer.php"); ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e346f155a03a476"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php
mysqli_close($link);
?>