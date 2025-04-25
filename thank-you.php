<?php
session_start();

if (isset($_SESSION['last_submit_time'])) {
    $timeSinceLastSubmit = time() - $_SESSION['last_submit_time'];
    if ($timeSinceLastSubmit < 60) {
        die('Too many submissions. Please try again later.');

    }
}

$_SESSION['last_submit_time'] = time();

require("sendgrid-php/sendgrid-php.php");
require("php-uk/textlocal.class.php");

$servername = "localhost";
$username = "merakhata_app";
$password = "!I4R5ZTUhmio";

// $username = "staging-merakhata-new";

// $password = "merakhata@321#";
$dbname = "merakhata_app";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    if ($_POST['token'] !== $_SESSION['form_token']) {
        // echo $_POST['token']."- Token<br> Form -";
        // echo $_SESSION['form_token'];
        die('CSRF token validation failed.');
    }
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        //your site secret key
        $secret = '6LfDLKEUAAAAAE3gp4Zf1dk88Sk-9EBOQiIGiHVt';
        //get verify response data
        //$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        //This is the curl code to verify th recaptcha
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $responseData = json_decode($output);
        if ($responseData->success) {
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            if (!$email) {
                die('Invalid email.');

            }
            $to = "rachit@merakhata.com"; // this is your Email address
            $from = $email; // this is the sender's Email address
            $from1 = $email; // this is the sender's Email address
            $name = $_POST['fullname'];
            $medium = $_POST['medium'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $service = $_POST['service'];
            $source = $_POST['source'];
            $loc = $_POST['loc'];
            $date = date('y-m-d');
            $subject = $_POST['name'] . " - " . $service . " - Merakhata | ShootOrder";
            $subject1 = "Your request received - Merakhata";
            $message = "The lead details are:<br>Name: " . $name . "<br>Email: " . $from . "<br>Phone: <a href=\"tel:" . $phone . "\">" . $phone . "</a><br>Address: " . $city . "<br>Service: " . $service . "<br>Source: " . $_POST['source'] . "<br>Medium: " . $_POST['medium'] . "<br>Referring Page: " . $_SERVER['HTTP_REFERER'] . "<br>--<br><b><a href=\"https://www.shootorder.com\">ShootOrder | Digital Marketing Agency</a></b> <br>Ivent IT Solutions Pvt. Ltd.<br>https://www.shootorder.com";
            $message1 = "Dear " . $name . ",<br>Thank you for dropping by our website. We have received your interest. Our team will contact you shortly!<br><br>--<br>Thanks & Regards<br>Team Merakhata";
            $sql = "INSERT INTO forms(name, email, phone, city, service, date, source, medium, message) VALUES ('$name', '$from', '$phone', '$city', '$service','$date', '$source', '$medium', '$message')";
            if (mysqli_query($conn, $sql)) {
                $from = new SendGrid\Email("ShootOrder Enquiry", "hello@merakhata.com");
                $subject = $subject;
                $to = new SendGrid\Email($name, $to);
                $content = new SendGrid\Content("text/html", $message);
                $mail = new SendGrid\Mail($from, $subject, $to, $content);
                $apiKey = "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";
                $sg = new \SendGrid($apiKey);
                $response = $sg->client->mail()->send()->post($mail);
                $from = new SendGrid\Email("Merakhata", "hello@merakhata.com");
                $subject = $subject;
                $to = new SendGrid\Email($name, $from1);
                $content = new SendGrid\Content("text/html", $message1);
                $mail = new SendGrid\Mail($from, $subject1, $to, $content);
                $apiKey = "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";

                $sg = new \SendGrid($apiKey);

                $response = $sg->client->mail()->send()->post($mail);
                $apiKey = urlencode('TcmhqahSuqY-5NmO4UmM0ta8QOOu8cBs8vyeF2PVoz');
                $numbers = array($phone);
                $numbers1 = array(919030815060);
                $sender = urlencode('TXTLCL');
                $message = rawurlencode('Dear ' . $name . ', Thank you for dropping by our website. We have received your interest, our team will contact you shortly !!! - Merakhata');
                $pmessage = rawurlencode("The lead details are- Name: " . $name . ", Email: " . $_POST['email'] . ", Phone:" . $_POST['phone'] . ", City: " . $_POST['city'] . ", Service: " . $_POST['service'] . ", Source: " . $_POST['source'] . ", Medium: " . $_POST['medium']);
                $numbers = implode(',', $numbers);

                $numbers1 = implode(',', $numbers1);
                $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
                $data1 = array('apikey' => $apiKey, 'numbers' => $numbers1, "sender" => $sender, "message" => $pmessage);

                // Send the POST request with cURL

                $ch = curl_init('https://api.textlocal.in/send/');

                curl_setopt($ch, CURLOPT_POST, true);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($ch);

                // echo $response;



                curl_close($ch);

                $ch = curl_init('https://api.textlocal.in/send/');

                curl_setopt($ch, CURLOPT_POST, true);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($ch);

                // echo $response;



                curl_close($ch);

            } else {

                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

            }

        } else {

            print_r("No valid Key");
            exit;

        }

    } else {

        print_r("Not Working Captcha");
        exit;

    }

    mysqli_close($conn);

} ?>

<!doctype html>

<html lang="en">

<head>

    <?php include("main-header.php"); ?>

    <title>Merakhata</title>

</head>

<?php include("header.php"); ?>

<section class="thank-you padding-50">

    <div class="container">

        <h1>Thank You</h1>

        <hr class="hr">

        <br><br>

        <h6>Thank you for filling up the form, our team will contact you within 5-10 mins.</h6>

        <h5>You can further contact on <a href="tel:+919030815060">+91-9030815060</a></h5>

    </div>

</section>

<?php include("main-footer.php"); ?>
