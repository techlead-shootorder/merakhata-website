<?php
session_start();
if (empty($_SESSION['form_token'])) {
    $token = bin2hex(random_bytes(32));
    $_SESSION['form_token'] = $token;
}
else
{
    $token = bin2hex(random_bytes(32));
}

if($_GET['utm_source'])
{
    $source=$_GET['utm_source'];
    
}
else
{
    $source="null";
    
}

if($_GET['utm_campaign'])
{
    $campaign=$_GET['utm_campaign'];
    
}
else
{
    $campaign="null";
    
}
if($_GET['utm_medium'])
{
    $medium=$_GET['utm_medium'];
    
}
else
{
    $medium="null";
    
}
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    //echo "The current page name is: ".$curPageName;  
    
    //echo "</br>";  
    if($curPageName == "account-outsourcing.php"){
        $service= "Account Outsourcing";
    }
    else if($curPageName == "hr-outsourcing.php"){
        $service= "HR Outsourcing";
    }
    else if($curPageName == "tax.php"){
        $service= "Tax";
    }
    else if($curPageName == "income-tax-return-filing-online.php"){
        $service= "ITR";
    }
    else{
        $service= "Accounting Services";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="icon" type="image/png" sizes="32x32" href="images/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="canonical" href="https://www.merakhata.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NCZN7DV');</script>
        <!-- End Google Tag Manager -->   