<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_POST['order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {
    error_reporting(0);
    $con = mysqli_connect('localhost', 'staging_merakhata', 'merakhata@321#', 'staging_merakhata');

    $emailid = $_POST['eml'];
    $number = $_POST['number'];
    $price = $_POST['price'];
    $place = $_POST['supply'];
    $ordeid = $_POST['order_id'];
    $payid = $_POST['razorpay_payment_id'];

    $sql = "INSERT INTO `payment_details` (`id`, `date`, `email`, `number`, `orderid`, `paymentid`, `price`, `place_of_supply`, `response`) VALUES (NULL, CURRENT_TIMESTAMP, '$emailid', '$number', '$ordeid', '$payid', '$price', '$place', '$_POST')";
    $query = mysqli_query($con, $sql);
    // <p>Payment ID: {$_POST['razorpay_payment_id']}</p>      
    $html = "
    <!DOCTYPE html>
    <html lang='en'>
    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <title>ITR for Salaried Individuals</title>
        
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/w3.css'>
        <script type='text/javascript' src='https://checkout.razorpay.com/v1/razorpay.js'></script>
    </head>
    <body>
    <p>Your payment was successful</p>
            
            <table class='table table-bordered'>
                <tr>
                    <th>Order Id</th>
                    <th>Payment Id</th>
                    <th>Email Id</th>
                    <th>Number</th>
                    <th>Place Of Supply</th>
                    <th>Price</th>
                </tr>
                <tr>
                        <td>{$ordeid}</td>
                        <td>{$payid}</td>
                        <td>{$emailid}</td>
                        <td>{$number}</td>
                        <td>{$place}</td>
                        <td>{$price}</td>
                    
                </tr>
            </table>
            <center>
            <button class='text-center btn btn-success text-white'><a href='http://188.166.235.142/~staging/merakhata'>Go Back</a></button>
            </center>
            </body>
            </html>";
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}
// print_r($_POST);
echo $html;

?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>ITR for Salaried Individuals</title>-->

<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="style.css">-->
<!--    <link rel="stylesheet" type="text/css" href="assets/css/w3.css">-->
<!--    <script type="text/javascript" src="https://checkout.razorpay.com/v1/razorpay.js"></script>-->
<!--</head>-->
<!--<body>-->
<!--    <div class="container">-->
<!--        <div>-->
<!--            <h2>Payment Success</h2>-->
<!--        </div>-->
<!--            <table class="table">-->
<!--                <thead>-->
<!--                    <tr>-->
<!--                        <th>Date</th>-->
<!--                        <th>Email Id</th>-->
<!--                        <th>Phone Number</th>-->
<!--                        <th>Order Id</th>-->
<!--                        <th>Price</th>-->
<!--                    </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                    <tr>-->
<!--                        <td>John</td>-->
<!--                        <td>Doe</td>-->
<!--                        <td>john@example.com</td>-->
<!--                    </tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--    </div>-->

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!--</html>-->