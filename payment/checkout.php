<?php
require('config.php');
require('razorpay-php/Razorpay.php');
//session_start();

// Create the Razorpay Order
if (isset($_POST['submit'])) {
  $emailid = $_POST['eml'];
  $number = $_POST['num'];
  $price = $_POST['price'];
  $place = $_POST['supply'];
}
use Razorpay\Api\Api;

$client = new Api($keyId, $keySecret);

$order = $client->order->create([
  'receipt' => 'order_rcptid_11',
  'amount' => $price, // amount in the smallest currency unit
  'currency' => 'INR',// <a href="https://razorpay.freshdesk.com/support/solutions/articles/11000065530-what-currencies-does-razorpay-support" target="_blank">See the list of supported currencies</a>.)
  'payment_capture' => '0'
]);

// echo "<pre>";print_r($order);echo "</pre>";

?>


<form action="verify.php" method="POST">

  <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_FbWNTsY0rdaznJ" // Enter the Test API
    Key ID generated from Dashboard → Settings → API Keys data-amount="20000" // Amount is in currency subunits. Default
    currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35. data-currency="INR" //You can accept
    international payments by changing the currency code. Contact our Support Team to enable International for your
    account data-order_id="<?php echo $order['id']; ?>" //Replace with the order_id generated by you in the backend.
    data-buttontext="Pay Now" data-name="ITR for Salaried Individuals" data-description="Welcome"
    data-image="http://188.166.235.142/~staging/merakhata/assets/images/logo.png"
    data-prefill.number="<?php echo $number; ?>" data-prefill.email="<?php echo $emailid; ?>"
    data-theme.color="#F37254">
    </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->

  <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
  <input type="hidden" name="eml" value="<?php echo $emailid; ?>">
  <input type="hidden" name="number" value="<?php echo $number; ?>">
  <input type="hidden" name="price" value="<?php echo $price; ?>">
  <input type="hidden" name="supply" value="<?php echo $place; ?>">

</form>