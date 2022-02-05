<?php
session_start();

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome User!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Beneficiary Registration - Vaccine Registration System</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="beneficiary_reg.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="beneficiary_reg">
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

    <section class="u-align-center u-clearfix u-section-1" id="sec-1265">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-image-1" src="" data-image-width="150" data-image-height="114">
                <div class="u-container-layout u-valign-middle u-container-layout-1" src=""></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-palette-1-base u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-text u-text-default u-text-1">Register yourself!<br>
                  </h2>
                  <p class="u-text u-text-2">Use your valid personal information to register yourself into our system so that you can avail our services.<br>
                  </p>
                  <div class="u-form u-form-1">


<form action="/beneficiary_signup.php" method="POST" style="padding: 10px;">
                      <div>
                        <input type="text" placeholder="Enter your name" id="bname" name="bname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                      </div><br>
                      <div>
                        <div class="u-form-select-wrapper">
                          <select type="number" id="bidtype" name="bidtype" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            <option value="">Enter the photo ID type</option>
                            <option value="1">Aadhar Card</option>
                            <option value="2">Voter ID (EPIC)</option>
                            <option value="3">Driver's License</option>
                            <option value="4">PAN Card</option>
                            <option value="5">NPR Card</option>
                            <option value="6">Pension Certificate</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div><br>
                      <div>
                        <input type="text" placeholder="Enter the reference no. of the photo ID" id="biid" name="biid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                      </div><br>
                      <div>
                        <input type="date" placeholder="Enter your Date of Birth (DoB)" id="bdob" name="bdob" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div><br>
                      <div>
                        <div class="u-form-select-wrapper">
                          <select id="bgender" name="bgender" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            <option value="NA">Enter your sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div><br>
                      <div>
                        <input type="text" placeholder="Enter your phone number" id="bphone" name="bphone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" pattern="\+?\d{0,2}[\s\(\-]?([0-9]{3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})">
                      </div><br>
                      <div>
                        <textarea rows="4" cols="50" id="textarea-cea1" name="baddress" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" placeholder="Enter your address"></textarea>
                      </div><br>
                      <div class="u-align-center u-form-group u-form-submit">
                      <button type="submit" class="u-btn u-btn-submit u-button-style">Submit</button>
                      </div>              
                    </form>
                    <?php
                      if(isset($_POST['submit']))
                      {
                        if(!isset($error))
                        {
                          $sql = "EXEC vDB_userData.addBeneficiary ?,?,?,?,?,?,?";
                          $params = array($_POST['bname'],$_POST['bidtype'],$_POST['biid'],$_POST['bgender'],$_POST['bdob'],$_POST['baddress'],$_POST['bphone']);
                          $stmt = sqlsrv_query($conn, $sql, $params);
                            if ($stmt === false) {
                            die(print_r(sqlsrv_errors(), true));
                            }

                          $stmt = sqlsrv_query($conn, "SELECT TOP 1 brid,buid FROM vDB_authData.BeneficiaryAuthID ORDER BY brid DESC");
                          $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
                          echo '<script>alert("Your info has been into the system.\nReg. ID: '.$row['brid'].'\nUniqueID: '.$row['buid'].'");</script>';
                        }
                      }
                      if (isset($_POST['submit'])){
                        if (isset($error))
                        {
                            echo "<p style='color:red;'>"
                            . $error . "</p>";
                        }
                      }
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- footer section -->
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1c6e">
      <div class="u-clearfix u-sheet u-sheet-1">
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