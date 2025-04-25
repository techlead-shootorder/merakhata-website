<?php include("main-header.php");?>
<title>Merakhata</title>
<meta name="robots" content="noindex, nofollow">
</head>
<?php include("header.php");?>
       <section class="login-register">
           <div class="container">
               <div class="row">
                   <div class="col-md-5 row-left">
                       <div class="log-content p-2">
                           <div class="login-content">
                               <h3 class="text-white">Login/Register</h3>
                           <p class="text-white">Looking for tax preparation help?<br>Login Now to online file your tax return. Its Easy, Fast, Convenient & Secure.</p>
                           </div>
                           <div class="call text-center text-white">
                               <img src="images/call.png" width="20%">
                               <p> <a href="tel:+91-9347501292" class="text-white">+919347501292</a></p>
                           </div>
                           <hr class="hr2">
                           <div class="mail text-center text-white">
                               <img src="images/mail.png" width="20%">
                               <p> <a href="mailto:hello@merakhata.com" class="text-white">hello@merakhata.com</a></p>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-7 row-right">
                       <div class="login-form shadow-lg bg-white">
                        <form  method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" name="email"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="pswd" name="pswd"  required>
                                    </div>
                                    <div class="form-group form-check">
                                      <div class="form-group form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember"> By clicking Register, you agree both Terms&Conditions and Privacy Policy
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success text-white">Register </button>
                        </form>
                        <div class="row mt-3">
                            <div class="col-md-6 text-center"><img src="images/google-sign-up.png" class="img-fluid"></div>
                             <div class="col-md-6 text-center"><img src="images/fb-sign-up.png" class="img-fluid"></div>
                        </div>
                    </div>
                    
                   </div>
               </div>
           </div>
       </section> 
       
      <?php include("footer.php");?>