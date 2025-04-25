<script>

  document.addEventListener('DOMContentLoaded', function () {

    // find every dropdown in the nav

    document.querySelectorAll('.nav-item.dropdown').forEach(function (item) {

      // the mobile-only toggle link

      var toggle = item.querySelector('.nav-link.dropdown-toggle.d-lg-none');

      // the actual menu

      var menu = item.querySelector('.dropdown-menu');

      if (!toggle || !menu) return;



      toggle.addEventListener('click', function (e) {

        e.preventDefault();           // don’t navigate

        menu.classList.toggle('show');

      });

    });

  });

</script>







<body>

  <!-- Google Tag Manager (noscript) -->

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCZN7DV" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>

  <!-- End Google Tag Manager (noscript) -->

  <section class="sticky-top bg-white">

    <div class="container">

      <header>

        <!--<nav class="navbar navbar-light bg-light navbar-expand-sm" id="banner">-->

        <!--  <a href="index.php" class="navbar-brand"><img src="images/logo.jpg" class="img-fluid"></a>-->

        <!--  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">-->

        <!--    <span class="navbar-toggler-icon"></span>-->

        <!--  </button>-->

        <!--  <div class="collapse navbar-collapse" id="navbarCollapse">-->

        <!--    <ul class="navbar-nav ml-auto">-->

        <!--                <li clas="navbar-item">-->

        <!--                    <a href="index.php" class="nav-link active">Home</a>-->

        <!--                </li>-->

        <!--                <li class="nav-item">-->

        <!--                    <a class="nav-link" href="account-outsourcing.php">Account Outsourcing</a>-->

        <!--                </li>-->

        <!--                <li class="nav-item">-->

        <!--                    <a class="nav-link" href="hr-outsourcing.php">HR Outsourcing</a>-->

        <!--                </li>-->

        <!--                <li class="nav-item">-->

        <!--                    <a class="nav-link" href="tax.php">Tax Practice</a>-->

        <!--                </li>-->

        <!--                <li class="nav-item">-->

        <!--                    <a class="nav-link" href="itr.php">ITR <span class="badge badge-secondary" style="background-color:#aad9ad; color:white;">NEW</span></a>-->

        <!--                </li>-->

        <!--                <li class="nav-item">-->

        <!--                    <a class="nav-link" href="about.php">About</a>-->

        <!--                </li>-->

        <!--                <li class="nav-item">-->

        <!--                    <a class="nav-link" href="contact.php">Contact</a>-->

        <!--                </li>-->

        <!--                <a href="login.php" class="btn btn-blue text-white" type="button">LOGIN/SIGNUP</a>-->

        <!--            </ul>-->

        <!--  </div>-->

        <!--</nav>-->

        <nav class="navbar navbar-light navbar-expand-lg" id="banner">

          <a href="/index.php" class="navbar-brand"><img src="/images/logo.png" class="img-fluid"></a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

          </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav ml-auto" id="borderimg1">

              <li clas="navbar-item">

                <a href="/index.php" class="nav-link active">Home</a>

              </li>

              <li class="nav-item dropdown">

                <input type="checkbox" id="toggle-account" class="mobile-toggle" hidden />

                <a class="nav-link dropdown-toggle d-none d-lg-block" href="/account-outsourcing.php" id="navbardrop">

                  Account OutSourcing

                </a>

                <a class="nav-link dropdown-toggle  d-lg-none" href="#" id="navbardrop">

                  Account OutSourcing

                </a>

                <div class="dropdown-menu">

                  <a class="dropdown-item d-lg-none" href="https://www.merakhata.com/account-outsourcing.php">Account
                    Outsourcing</a>

                  <a class="dropdown-item" onclick="mClick('#book')"
                    href="https://www.merakhata.com/account-outsourcing.php#book">Bookkeeping</a>

                  <a class="dropdown-item" onclick="mClick('#report')"
                    href="https://www.merakhata.com/account-outsourcing.php#report">Reporting</a>

                  <a class="dropdown-item" onclick="mClick('#consultancy')"
                    href="https://www.merakhata.com/account-outsourcing.php#consultancy">Consultancy</a>

                  <a class="dropdown-item" onclick="mClick('#co')"
                    href="https://www.merakhata.com/account-outsourcing.php#co">Co-Ordination</a>

                  <a class="dropdown-item" onclick="mClick('#mis')"
                    href="https://www.merakhata.com/account-outsourcing.php#mis">Mis Reports</a>

                  <a class="dropdown-item" onclick="mClick('#tax')"
                    href="https://www.merakhata.com/account-outsourcing.php#tax">Tax Calculation</a>

                </div>

              </li>

              <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle d-none d-lg-block" href="/hr-outsourcing.php" id="navbardrop">

                  Hr OutSourcing

                </a>

                <a class="nav-link dropdown-toggle  d-lg-none" href="#" id="navbardrop">

                  Hr OutSourcing

                </a>

                <div class="dropdown-menu">

                  <a class="dropdown-item d-lg-none" href="https://www.merakhata.com/hr-outsourcing.php">Hr
                    OutSourcing</a>

                  <a class="dropdown-item" onclick="mClick('#human')"
                    href="https://www.merakhata.com/hr-outsourcing.php#human">HUMAN RESOURCES</a>

                  <a class="dropdown-item" onclick="mClick('#payroll')"
                    href="https://www.merakhata.com/hr-outsourcing.php#payroll">PAYROLL PROCESSING</a>

                  <a class="dropdown-item" onclick="mClick('#stat')"
                    href="https://www.merakhata.com/hr-outsourcing.php#stat">STATUTORY COMPLIANCES</a>

                  <a class="dropdown-item" onclick="mClick('#mis')"
                    href="https://www.merakhata.com/hr-outsourcing.php#mis">MIS REPORTING</a>

                </div>

              </li>

              <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle d-none d-lg-block" href="/tax.php" id="navbardrop">

                  Tax Practice

                </a>

                <a class="nav-link dropdown-toggle  d-lg-none" href="#" id="navbardrop">

                  Tax Practice

                </a>

                <div class="dropdown-menu">

                  <a class="dropdown-item d-lg-none" href="https://www.merakhata.com/tax.php">Tax Practice</a>

                  <a class="dropdown-item" onclick="mClick('#gst')" href="https://www.merakhata.com/tax.php#gst">GST
                    COMPLIANCES</a>

                  <a class="dropdown-item" onclick="mClick('#tds')" href="https://www.merakhata.com/tax.php#tds">TDS
                    COMPLIANCES</a>

                </div>

              </li>



              <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle d-none d-lg-block" href="#" id="navbardrop" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  ITR <span class="badge badge-danger" style="color:white;">NEW</span>

                </a>

                <a class="nav-link dropdown-toggle d-lg-none" href="#" id="navbardrop" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  ITR <span class="badge badge-danger" style="color:white;">NEW</span>

                </a>

                <div class="dropdown-menu" aria-labelledby="navbardrop">



                  <!-- Direct Link -->

                  <a class="dropdown-item" href="https://www.merakhata.com/income-tax-return-filing-online.php">ITR
                    Filing Online</a>



                  <!-- Salary Submenu -->

                  <div class="dropdown-submenu">

                    <a class="dropdown-item dropdown-toggle" href="#">Salary</a>

                    <div class="dropdown-menu">

                      <a class="dropdown-item" href="https://www.merakhata.com/book/itr-salaried-employees/">Salary</a>

                      <a class="dropdown-item" href="https://www.merakhata.com/book/complex-salary/">Salary -
                        Complex</a>

                      <a class="dropdown-item" href="https://www.merakhata.com/book/itr-salary-premium/">Salary -
                        Premium</a>

                    </div>

                  </div>



                  <!-- Business Submenu -->

                  <div class="dropdown-submenu">

                    <a class="dropdown-item dropdown-toggle" href="#">Business</a>

                    <div class="dropdown-menu">

                      <a class="dropdown-item"
                        href="https://www.merakhata.com/book/itr-freelancer-consultant/">Freelancer / Influencer</a>

                      <a class="dropdown-item"
                        href="https://www.merakhata.com/book/itr-professionals/">Professionals</a>

                      <a class="dropdown-item" href="https://www.merakhata.com/book/itr-business/">Business Income
                        (Small Business)</a>

                      <a class="dropdown-item" href="https://www.merakhata.com/book/itr-business-income/">Business
                        Income (Complex)</a>

                    </div>

                  </div>



                  <!-- Direct Items -->

                  <a class="dropdown-item"
                    href="https://www.merakhata.com/book/itr-share-trading-derivatives-commodities/">Share Trading &
                    F&O</a>

                  <a class="dropdown-item" href="https://www.merakhata.com/book/itr-capital-gain-salary/">Salary &
                    Capital Gain</a>

                  <a class="dropdown-item" href="https://www.merakhata.com/book/itr-housewives/">Housewives & NRI</a>

                </div>

              </li>

              <li clas="navbar-item">

                <a href="qa" class="nav-link">Q&A</a>

              </li>

              <li clas="navbar-item">

                <a href="contact.php" class="nav-link">Contact</a>

              </li>

              <a href="tel:+919030815060" class="btn btn-blue text-white" type="button">+91-9030815060</a>

            </ul>

          </div>

        </nav>



      </header>

    </div>

  </section>