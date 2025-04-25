
<form method="post" action="thank-you.php">
    <h3 class="text-center">Get Connected Now!</h3>
    <div class="form-group">
        <input type="text" required class="form-control" name="fullname" placeholder="Enter your full name"/>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
		        <input type="tel" required class="form-control" name="phone" placeholder="Enter phone number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" oninvalid="setCustomValidity('Please enter a valid 10 digit phone number')" onchange="try{setCustomValidity('')}catch(e){}"/>
		    </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
		        <input type="email" required class="form-control" name="email" placeholder="Enter email address" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" oninvalid="setCustomValidity('Please enter a valid email ID')" onchange="try{setCustomValidity('')}catch(e){}"/>
		    </div>
        </div>
    </div>
    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
    <div class="form-group">
        <input type="hidden" name="token" value="<?php echo $_SESSION['form_token']; ?>" />
        <input type="hidden" name="source" value="<?php echo $source;?>"/>
        <input type="hidden" name="medium" value="<?php echo $medium;?>"/>
        <input type="hidden" name="service" value="<?php echo $service;?>"/>
        <input type="hidden" name="city" value="<?php echo  $campaign;?>"/>
        <input type="submit" name="submit" class="btn btn-success btn-block" value="REQUEST CALL"/>
    </div>
</form>