<?php
session_start();

?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login as a Vaccinator - Vaccine Registration System</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="vaccinator_login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "WebSite1108400",
		"logo": "images/nha.jpeg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="vaccinator_login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">   

    <!-- Header part -->
    <header class="u-clearfix u-header u-header" id="sec-6b89"><div class="u-clearfix u-sheet u-sheet-1">
		<a href="/index.php" class="u-image u-logo u-image-1" data-image-width="866" data-image-height="650">
          <img src="images/nha.jpeg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#">
              <svg viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/vaccinator_login.php">For Vaccinators</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/admin_login.php">For Admin</a>
            </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/vaccinator_login.php">For Vaccinators</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/admin_login.php">For Admin</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <!-- End of Header part -->


    <section class="u-clearfix u-section-1" id="sec-5035">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-form u-form-1">
        <form action="/vaccinator_loginDetails.php" method="POST" style="padding: 10px;">
                      <div>
                        <input type="text" placeholder="Enter your registration ID" id="wrid" name="wrid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                      </div><br>
                      <div>
                        <input type="text" placeholder="Enter the valid unique ID" id="wuid" name="wuid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                      </div>
                      <div class="u-align-center">
                      <button type="submit" class="u-btn u-btn-submit u-button-style">Submit</button>
                      </div>
                    </form>
        </div>
      </div>
    </section>
    
    <!-- footer section -->
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1c6e"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-small-text u-text u-text-variant u-text-1">
          <span style="font-weight: 700;"> Urban Primary Health Center, Kulai </span>
          <br>Address: Corporation Building, Hosabettu Kulai Rd, opp. Venkatramana School, Honnakatte, Surathkal, Mangalore, Karnataka 575019<br>
          <br>Phone: <a href="tel:+918242408304" title="0824-2408304">0824-2408304</a><br>
          <br>
        </p>
        <p class="u-align-left u-small-text u-text u-text-variant u-text-2">
          <span style="font-weight: 700;">Medical Officer:</span>
          <br>Dr. Nishcitha<br><a href="tel:+919900102793" title="9900102793">9900102793</a><br>
          <br>External Links:<br>
          <a href="https://www.dkhfw.in/" target="_blank" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">District Health and Family Welfare Society, Dakshina Kannada</a>
          <br>
          <a href="https://nha.gov.in/" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" target="_blank">National Health Authority</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->
    
  </body>
</html>