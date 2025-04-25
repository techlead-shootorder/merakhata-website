<style>
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:60px;
	right:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    font-size:30px;
	box-shadow: 2px 2px 3px #999;
    z-index:100;
}
.callFloat{
	position:fixed;
	width:100%;
	height:50px;
	bottom:0px;
	right:0px;
	background-color:#ff7a59;
	color:#FFF !important;
	text-align:center;
    font-size:18px;
    font-weight:bold;
    line-height:50px;
    z-index:100;
}

.floating-btn {
    position: fixed;
    bottom: 60px;
    left: 25px;
    width: 65px;
    height: 65px;
    background-color: #1354a3; /* Bootstrap success green */
    color: white !important;
    text-align: center;
    border-radius: 50%;
    font-size: 12px;
    line-height: 1.2;
    text-decoration: none;
    font-weight: 600;
    padding: 10px 5px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    z-index: 999;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .floating-btn:hover {
    transform: scale(1.05);
    background-color: #218838;
    text-decoration: none;
    color: #fff;
  }
@media (min-width:768px)
{
    .callFloat
    {
        display:none;
    }
}
.my-float{
	margin-top:16px;
}
.grecaptcha-badge { 
    visibility: hidden;
}
</style>
  <footer class="footer padding-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="white-text"><span class="line">SERVICES</span></h4>
                        <div class="grey pt-4">
                            <p><a href="account-outsourcing.php">Account Outsourcing</a></p>
                            <p><a href="hr-outsourcing.php">HR Outsourcing</a></p>
                            <p><a href="tax.php">Optimize Tax</a></p>
                            <p><a href="income-tax-return-filing-online.php">Income Tax Return Filing</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="white-text"><span class="line">ABOUT US</span></h4>
                        <div class="grey pt-4">
                            <p><a href="about.php">About</a></p>
                            <p><a href="faq.php">FAQs</a></p>
                            <p><a href="contact.php">Contact</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="white-text"><span class="line">QUICK LINKS</span></h4>
                        <div class="grey pt-4">
                            <p><a href="terms.php">Terms</a></p>
                            <p><a href="privacy.php">Privacy Policies</a></p>
                            <p><a href="disclaimer.php">Disclaimers</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="white-text"><span class="line">CONNECT WITH US</span></h4>
                        <div class="social-icons pt-4">
                            <a href="https://www.facebook.com/merakhataofficial/"><i class="fa fa-facebook" style="font-size: 26px;"></i></a>
                            <a href="https://www.linkedin.com/company/merakhata/"><i class="fa fa-linkedin" style="font-size: 26px;"></i></a>
                            <a href="https://twitter.com/merakhata"><i class="fa fa-twitter" style="font-size: 26px;"></i></a>      
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://www.merakhata.com/income-tax-return-filing-online.php#check-itr-price" class="floating-btn" aria-label="Check ITR Price">
          💰<br>
          ITR Filing Price
        </a>
        </footer>
        <div id="phone" class="callFloat">
            <a href="tel:+919030815060" class="text-white">
                <i class="fa fa-phone"></i> +91-9030815060
            </a>
        </div>
        <div id="whatsapp" class="text-white">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=919030815060&text=Hello+Team+Merakhata%2C+I+would+like+to+enquire+about+your+services.&oq=Hello+Team+Merakhata%2C+I+would+like+to+enquire+about+your+services" class="float" target="_blank">
<i class="fa fa-whatsapp my-float text-white"></i>
</a>
        </div>
        <div class="copyrights text-center">
                    Copyright © 2021. All rights reserved by Merakhata
                </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js?render=6LfDLKEUAAAAAGPdKoICkTk_TYMVaPyS9sJjWSI7'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--<script src="js/custom.js"></script>-->
  <script src="https://use.fontawesome.com/1744f3f671.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<!--<script src="https://gist.github.com/milon/6ae8115219e0589b3fd2599c7a11dd5a.js"></script>-->
<script>
          grecaptcha.ready(function() {
           grecaptcha.execute('6LfDLKEUAAAAAGPdKoICkTk_TYMVaPyS9sJjWSI7', {action: 'MyForm'})
           .then(function(token) {
            console.log(token)
            document.getElementById('g-recaptcha-response').value =    token;
            if(document.getElementById('g-recaptcha-response-1'))
            {
            document.getElementById('g-recaptcha-response-1').value =    token;
            }
           }); 
          }); 
        </script>
<script>
    var url = document.URL;
     console.log('One '+url);
     var hash = url.substring(url.indexOf('#'));
     console.log('Two '+hash);
   
     if(hash.length >0){
            $(".nav-pills").find("li a").each(function(key, val) {
             if (hash == $(val).attr('href')) {
                 console.log("bindu1234");
                 //check
                 $( hash ).addClass( "active show" );
                 $(this).addClass('active');
              
                 //check
                 
                 $(val).click();
             }
             else{
            //      $( hash ).removeClass( "active show" );
                  $(this).removeClass('active');
              }
             $(val).click(function(ky, vl) {
                 console.log($(this).attr('href'));
                 location.hash = $(this).attr('href');
                  
                 //window.location.href = url+$(this).attr('href');
                // window.location.replace = url+$(this).attr('href');
                
             });
             
         }); 
     }else{
        $( '#book' ).addClass( "active show" );
        $('#one').addClass('active');
     }
     
     
      
 </script>
 <script>
  function mClick(hash){
    //  var url = document.URL;
    //  console.log('One123 '+url);
    //  var hash = url.substring(url.indexOf('#'));
     console.log('Two123 '+hash);
   
    
            $(".nav-pills").find("li a").each(function(key, val) {
             if (hash == $(val).attr('href')) {
                 console.log("bindu5678");
                 //check
                 $( hash ).addClass( "active show" );
                 $(this).addClass('active');
              
                 //check
                 
                 $(val).click();
             }
             else{
                  $( $(val).attr('href') ).removeClass( "active show" );
                  $(this).removeClass('active');
              }
             $(val).click(function(ky, vl) {
                 console.log($(this).attr('href'));
                 location.hash = $(this).attr('href');
                  
                 //window.location.href = url+$(this).attr('href');
                // window.location.replace = url+$(this).attr('href');
                
             });
             
         }); 
     
 }
   </script>

    </body>
</html>