<?php

setlocale(LC_MONETARY, 'en_IN');
include('payment/razorpay-php/Razorpay.php');
$root="https://www.merakhata.com/";

if($_GET['slug'])
{
$slug=$_GET['slug'];
}
else
{
$slug="itr-salaried-employees";
}
if($_GET["amount"])
{
    $amount=preg_replace('/[^0-9]/', '', $_GET["amount"]);
}
else
{
    $amount="3000";
}

$keyId = 'rzp_live_A3J4pFhDMuGLdY';
$keySecret = '1BFEL9UoKKWOM0lwqI0TZ06I';
$displayCurrency = 'INR';


$servername = "localhost";
$username = "rachit_merakhata_new";
$password = "Shootorder@123#";
$dbname = "rachit_merakhata_new";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $form = $_POST['form'];
    $date = date('y-m-d');
    $sql = "INSERT INTO users(name, email, phone, date, course) VALUES ('$name', '$email', '$phone', '$date', '$form')";
    if(mysqli_query($conn, $sql))
    {
        $success="";
        $message = "The lead details are:<br>Fist Name - " .$fname . "<br><br>Last Name - " .$lname . "<br><br>Company Name - " .$cname . "<br><br>Email - ". $email . "<br><br>Phone - <a href=\"tel:". $phone . "\">". $phone . "</a><br><br>City - ". $city . "<br><br>Address - ". $address . "<br><br>PAN - ". $pan . "<br><br>Designation - ". $designation .  "<br><br>Amount - " . $amount. "<br><br>--Admin";
        $subject = "New Account Created - " .$fname . " - Merakhata";
        $to = "rajat@itivent.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <noreply@merakhata.com>' . "\r\n";
        mail($to,$subject,$message,$headers);
        
        $success="";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}




$link = mysqli_connect("localhost", "rachit_shootorder", "Shootorder@123#", "rachit_merakhata_app");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM tools where slug='".$slug."'";
$total = "SELECT * FROM tools";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $data["slug"]=$row['slug'];
            $data["name"]=$row['name'];
            $data["description"]=$row['description'];
            $data["q1_label"]=$row['q1_label'];
            $data["q1_type"]=$row['q1_type'];
            $data["q1_options"]=$row['q1_options'];
            $data["q2_label"]=$row['q2_label'];
            $data["q2_type"]=$row['q2_type'];
            $data["q2_options"]=$row['q2_options'];
            $data["q3_label"]=$row['q3_label'];
            $data["q3_type"]=$row['q3_type'];
            $data["q3_options"]=$row['q3_options'];
            $data["q4_label"]=$row['q4_label'];
            $data["q4_type"]=$row['q4_type'];
            $data["q4_options"]=$row['q4_options'];
            $data["q5_label"]=$row['q5_label'];
            $data["q5_type"]=$row['q5_type'];
            $data["q5_options"]=$row['q5_options'];
            $data["q6_label"]=$row['q6_label'];
            $data["q6_type"]=$row['q6_type'];
            $data["q6_options"]=$row['q6_options'];
            $data["q7_label"]=$row['q7_label'];
            $data["q7_type"]=$row['q7_type'];
            $data["q7_options"]=$row['q7_options'];
            $data["q8_label"]=$row['q8_label'];
            $data["q8_type"]=$row['q8_type'];
            $data["q8_options"]=$row['q8_options'];
            $data["command"]=$row['command'];
        }
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
        exit(0);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $data["name"]?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root;?>img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root;?>img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root;?>img/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/style.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NCZN7DV');</script>
        <!-- End Google Tag Manager -->
<script>
    
    
    $(document).ready(function () {
        
        
        const command = '<?php echo $data["command"];?>';
        $("#calculate").click(function () {
            $(".answer-box").text("");
            const variables = [
              { name: '{$q1}', value: $("#q1").val() },
              { name: '{$q2}', value: $("#q2").val() },
              { name: '{$q3}', value: $("#q3").val() },
              { name: '{$q4}', value: $("#q4").val() },
              { name: '{$q5}', value: $("#q5").val() },
              { name: '{$q6}', value: $("#q6").val() },
              { name: '{$q7}', value: $("#q7").val() },
              { name: '{$q8}', value: $("#q8").val() },
            ];
            
            var message = doMagic(variables, command);
            
            var settings = {
              "url": "https://api.openai.com/v1/completions",
              "method": "POST",
              "timeout": 0,
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer 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"
              },
              "data": JSON.stringify({
                "model": "text-davinci-003",
                "prompt": message,
                "temperature": 0.7,
                "max_tokens": 256,
                "top_p": 1,
                "frequency_penalty": 0,
                "presence_penalty": 0
              }),
              beforeSend: function() {
                  $("#answer").show();
                  $("#loading-image").show();
                },
            };
            console.log(message);
            $.ajax(settings).done(function (response) {
              
              const obj = response;
              $("#loading-image").hide();
              $(".answer-box").html(obj["choices"][0].text);
              console.log(obj);
            });
        });
        function doMagic(variables, inputString) {
          let output = inputString;
          variables.slice().reverse().forEach(variable => {
            output = output.replaceAll(variable.name, variable.value);
          })
          
          return output;  
        }

        
    });
</script>



<?php
if(isset($_POST["pay"]))
{
?>
<script>
$(function () {
makePayment();
 });
</script>
<?php }?>

<script>
function makePayment(){
var rzp_Amt = parseInt(document.getElementById('razorPay_Amt').value)*100;
var rzp_Name = document.getElementById('razorPay_Name').value;
var rzp_Email = document.getElementById('razorPay_Email').value;
var rzp_Phone = document.getElementById('razorPay_Phone').value;

var options = {

    "key": "rzp_live_A3J4pFhDMuGLdY",

    "amount": rzp_Amt, // 2000 paise = INR 20

    "name": "Merakhata",

    "description": "Pay",

    "image": "https://www.merakhata.com/images/logo.png",

    "handler": function (response){

if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
  redirect_url = '<?php echo $root;?>book/<?php echo $slug;?>';
} else {
  redirect_url = '<?php echo $root;?>book/<?php echo $slug;?>?page=success';
}
location.href = redirect_url;

    },

    "prefill": {

        "name": '<?php echo $_POST['name'];?>',

        "contact": '<?php echo $_POST['phone'];?>',

        "email": '<?php echo $_POST['email'];?>'

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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCZN7DV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <section class="one primary-font  pt-5">
        <div class="container">
            <div class="information">
                <div>
                    <img src="<?php echo $root;?>images/logo.png" class="img-fluid">
                </div>
                <div class="mt-5 mb-5">
                    <h1><?php echo $data["name"]?></h1>
                    <hr class="hr bg-danger">
                </div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
                <div class="p-3">
                    <?php echo $data["description"]?>
                </div>
            </div>
            <hr>
            <div class="row">
                
                <div class="col-md-6">
                        <div>
                            <form method="post">
                                <h2>Calculate <?php echo $data["name"]?></h2>
                                <?php if($data["q1_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q1_label"]?></label>
                                    <?php if($data["q1_type"]=="text") {?>
                                    <input type ="text" class="form-control input-xs" id="q1" name="q1_input"/>
                                    <?php 
                                        }elseif($data["q1_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control input-xs" id="q1" name="q1_input"/>
                                    <?php 
                                        }elseif($data["q1_type"]=="dropdown") {
                                            $options = explode(',', $data["q1_options"]);
                                    ?>
                                    <select name="q1_input" id="q1" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q1_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control input-xs" id="q1" name="q1_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control input-xs" id="q1" name="q1_input"/>
                                    <?php }?>
                                </div>
                                <?php } ?>
                                <?php if($data["q2_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q2_label"]?></label>
                                    <?php if($data["q2_type"]=="text") {?>
                                    <input type ="text" class="form-control" id="q2" name="q2_input"/>
                                    <?php 
                                        }elseif($data["q2_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control" id="q2" name="q2_input"/>
                                    <?php 
                                        }elseif($data["q2_type"]=="dropdown") {
                                            $options = explode(',', $data["q2_options"]);
                                    ?>
                                    <select name="q2_input" id="q2" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q2_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control" id="q2" name="q2_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control" id="q2" name="q2_input"/>
                                    <?php }?>
                                </div>
                                <?php } ?>
                                <?php if($data["q3_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q3_label"]?></label>
                                    <?php if($data["q3_type"]=="text") {?>
                                    <input type ="text" class="form-control" id="q3" name="q3_input"/>
                                    <?php 
                                        }elseif($data["q3_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control" id="q3" name="q3_input"/>
                                    <?php 
                                        }elseif($data["q3_type"]=="dropdown") {
                                            $options = explode(',', $data["q3_options"]);
                                    ?>
                                    <select name="q3_input" id="q3" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q3_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control" id="q3" name="q3_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control" id="q3" name="q3_input"/>
                                    <?php }?>
                                </div>
                                <?php } ?>
                                <?php if($data["q4_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q4_label"]?></label>
                                    <?php if($data["q4_type"]=="text") {?>
                                    <input type ="text" class="form-control" id="q4" name="q4_input"/>
                                    <?php 
                                        }elseif($data["q4_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control" id="q4" name="q4_input"/>
                                    <?php 
                                        }elseif($data["q4_type"]=="dropdown") {
                                            $options = explode(',', $data["q4_options"]);
                                    ?>
                                    <select name="q4_input" id="q4" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q4_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control" id="q4" name="q4_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control" id="q4" name="q4_input"/>
                                    <?php }?>
                                </div>
                                <?php } ?>
                                <?php if($data["q5_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q5_label"]?></label>
                                    <?php if($data["q5_type"]=="text") {?>
                                    <input type ="text" class="form-control" id="q5" name="q5_input"/>
                                    <?php 
                                        }elseif($data["q5_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control" id="q5" name="q5_input"/>
                                    <?php 
                                        }elseif($data["q5_type"]=="dropdown") {
                                            $options = explode(',', $data["q5_options"]);
                                    ?>
                                    <select name="q5_input" id="q5" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q5_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control" id="q5" name="q5_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control" id="q5" name="q5_input"/>
                                    <?php }?>
                                </div>
                                <?php } ?>
                                <?php if($data["q6_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q6_label"]?></label>
                                    <?php if($data["q6_type"]=="text") {?>
                                    <input type ="text" class="form-control" id="q6" name="q6_input"/>
                                    <?php 
                                        }elseif($data["q6_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control" id="q6" name="q6_input"/>
                                    <?php 
                                        }elseif($data["q6_type"]=="dropdown") {
                                            $options = explode(',', $data["q6_options"]);
                                    ?>
                                    <select name="q6_input" id="q6" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q6_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control" id="q6" name="q6_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control" id="q6" name="q6_input"/>
                                    <?php }?>
                                </div>
                                <?php } ?>
                                <?php if($data["q7_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q7_label"]?></label>
                                    <?php if($data["q7_type"]=="text") {?>
                                    <input type ="text" class="form-control" id="q7" name="q7_input"/>
                                    <?php 
                                        }elseif($data["q7_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control" id="q7" name="q7_input"/>
                                    <?php 
                                        }elseif($data["q7_type"]=="dropdown") {
                                            $options = explode(',', $data["q7_options"]);
                                    ?>
                                    <select name="q7_input" id="q7" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q7_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control" id="q7" name="q7_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control" id="q7" name="q7_input"/>
                                    <?php }?>
                                </div>
                                <?php if($data["q8_label"]) {?>
                                <div class="mb-3">
                                    <label class="form-label"><?php echo $data["q8_label"]?></label>
                                    <?php if($data["q8_type"]=="text") {?>
                                    <input type ="text" class="form-control" id="q8" name="q8_input"/>
                                    <?php 
                                        }elseif($data["q8_type"]=="number") {
                                    ?>
                                    <input type ="number" class="form-control" id="q8" name="q8_input"/>
                                    <?php 
                                        }elseif($data["q8_type"]=="dropdown") {
                                            $options = explode(',', $data["q8_options"]);
                                    ?>
                                    <select name="q8_input" id="q8" class="form-control">
                                        <?php
                                            foreach ($options as $value) {
                                              echo "<option>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                    <?php 
                                        }elseif($data["q8_type"]=="date") {
                                    ?>
                                    <input type="date" class="form-control" id="q8" name="q8_input"/>
                                    <?php 
                                        }else {
                                    ?>
                                    <input type ="text" class="form-control" id="q8" name="q8_input"/>
                                    <?php }?>
                                </div>
                                <?php } ?>
                                <?php } ?>
                                <a href="#" id="calculate" class="btn btn-success btn-lg">Calculate</a>
                            </form>
                          
                        </div>
                    <!--
                    <div class="shadow-lg rounded-0 p-5 w3-hide-small descform">
                       <div>
                            <h3>Payment Details</h3>
                            <hr class="hr bg-danger">
                       </div>
                       <div class="pt-5" style="min-width:350px;">
                            <form id="updateForm" method="post" action="<?php echo $root;?>book/<?php echo $slug;?>?page=online&pay=1&amount=<?php echo $data["price"];?>">
                                <div id="demo" class="btn-block">
                                    <h5><span class="text-left">Price</span><span class="float-right">&#8377; <?php echo money_format('%!i', $data["amount"]);?> INR</span></h5>
                                    <h5><span class="text-left">Discount</span><span class="float-right"><?php echo round(100-(($data["price"]*100)/$data["amount"]));?> %</span></h5>
                                </div>
                                <hr>
                                <div>
                                    <h4><span class="text-left">Payable Amount</span><span class="float-right">&#8377; <?php echo money_format('%!i', $data["price"]);?> INR</span></h4>
                                </div>
                                <br>
                                
                                <div class="form-group">
                                    <input id="razorPay_Name" type="text" placeholder="Enter Full Name" class="border-1 form-control  rounded-0 p-2 frm" name="name" value="<?php echo $_POST['name'];?>" required>
                                </div>
                                <div class="form-group">
                                    <input id="razorPay_Email" type="email" placeholder="Enter Email" class="border-1 form-control  rounded-0 p-2 frm" name="email" value="<?php echo $_POST['email'];?>" required>
                                </div>
                                <div class="form-group">
                                    <input id="razorPay_Phone" type="tel" placeholder="Enter Number" pattern="[1-9]{1}[0-9]{9}" class="border-1 form-control  rounded-0 p-2 frm" name="phone" value="<?php echo $_POST['phone'];?>" required>
                                </div>
                                <input type="hidden" name="form" value="<?php echo $name;?>"/>
                                <input type="hidden" name="pay" value="1"/>
                                <input id="razorPay_Amt" type="hidden" name="amount" value="<?php echo $data["price"];?>"/>
                                <button class="btn btn-block btn-danger" type="submit" name="submit">Pay &nbsp;&#8377; <?php echo money_format('%!i', $data["price"]);?> INR</button>
                            </form>
                        </div>
                        <div class="pt-5">
                            <a href="tel:+919030815060" class="btn btn-success text-white btn-block"><i class="fa fa-phone"></i> CALL NOW : +91 9030815060</a>
                        </div>
                    </div>
                    <div class="w3-hide-medium w3-hide-large">
                        <button type="button" class="btn btn-block btn-danger fixed-bottom" data-toggle="modal" data-target="#myModal">
                            File ITR (Pay Online)
                          </button>
                        <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <div class="modal-header">
                            
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <div class="modal-body">
                             
                                   <div>
                                        <h3>Payment Details</h3>
                                        <hr class="hr bg-danger">
                                        <div class="pt-5">
                                        <form id="updateForm" method="post" action="<?php echo $root;?>book/<?php echo $slug;?>?page=online&pay=1&amount=".$data["price"]."">
                                            <div id="demo" class="btn-block">
                                                <h5><span class="text-left">Price</span><span class="float-right">&#8377; <?php echo money_format('%!i', $data["amount"]);?> INR</span></h5>
                                                <h5><span class="text-left">Discount</span><span class="float-right"><?php echo round(100-(($data["price"]*100)/$data["amount"]));?> %</span></h5>
                                            </div>
                                            <hr>
                                            <div>
                                                <h4><span class="text-left">Payable Amount</span><span class="float-right">&#8377; <?php echo money_format('%!i', $data["price"]);?> INR</span></h4>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input id="razorPay_Name" type="text" placeholder="Enter Full Name" class="border-1 form-control  rounded-0 p-2 frm" name="name" value="<?php echo $_POST['name'];?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="razorPay_Email" type="email" placeholder="Enter Email" class="border-1 form-control  rounded-0 p-2 frm" name="email" value="<?php echo $_POST['email'];?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="razorPay_Phone" type="tel" placeholder="Enter Number" pattern="[1-9]{1}[0-9]{9}" class="border-1 form-control  rounded-0 p-2 frm" name="phone" value="<?php echo $_POST['phone'];?>" required>
                                            </div>
                                            <input type="hidden" name="form" value="<?php echo $name;?>"/>
                                            <input type="hidden" name="pay" value="1"/>
                                            <input id="razorPay_Amt" type="hidden" name="amount" value="<?php echo $data["price"];?>"/>
                                            <button class="btn btn-block btn-danger" type="submit" name="submit">Pay &nbsp;&#8377; <?php echo money_format('%!i', $data["price"]);?> INR</button>
                                        </form>
                                    </div>
                                    <div class="pt-5">
                                        <a href="tel:+919030815060" class="btn btn-success text-white btn-block"><i class="fa fa-phone"></i> CALL NOW : +91 9030815060</a>
                                    </div>
                                   </div>
                                   
                            </div>
                            
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    -->
                </div>
                <div class="col-md-6">
                    
                    <div id="answer" style="display:none;">
                        <div class="card">
                          <div class="card-body bg-light">
                            <h5 class="card-title">Calculation</h5>
                            <img src="../images/loading.gif" height="200" style="display:none;" id="loading-image"/>
                            <p class="card-text answer-box line-1 anim-typewriter"></p>
                          </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="">
                    <div class="row">
                        <!--
                        <div>
                            <img src="<?php echo $root;?>img/images/logo.png" class="img-fluid">
                        </div>
                        -->
                        <div class="p-3">
                            <p>Copyright © 2021. All rights reserved by Merakhata</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e346f155a03a476"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
mysqli_close($link);
?>
