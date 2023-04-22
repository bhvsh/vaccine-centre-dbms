<?php
session_start();
$connectionInfo = array("UID" => "UIDHERE", "pwd" => "PASSWORDHERE", "Database" => "CovidVaccinationDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cs502-project-4048.database.windows.net,1433"; # Server discarded for security reasons
$conn = sqlsrv_connect($serverName, $connectionInfo);

$brid=$_SESSION["brid"];

error_reporting(E_ALL ^ E_WARNING);

if(isset($_SESSION["brid"])){
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome User!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Beneficiary Console - Vaccine Registration System</title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="/css/beneficiary_main.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "WebSite1108400",
		"logo": "images/nha.jpeg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="beneficiary_main">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">

           <!-- Header part -->
    <header class="u-clearfix u-header u-header" id="sec-6b89">
	<div class="u-clearfix u-sheet u-sheet-1">
      <a href="/index.php" class="u-image u-logo u-image-1" data-image-width="866" data-image-height="650">
            <img src="images/nha.jpeg" class="u-logo-image u-logo-image-1">
          </a>
        </div></header>
        <!-- End of Header part -->

    <section class="u-clearfix u-section-1" id="sec-8f32">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Welcome User!<br>
        </h2>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-dc83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
          
          <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-9d3a" href="#tab-9d3a" role="tab" aria-controls="tab-9d3a" aria-selected="true">Your info</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="false">Status</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3" id="link-tab-c4b7" href="#tab-c4b7" role="tab" aria-controls="tab-c4b7" aria-selected="false">Sessions</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4" id="link-tab-4aaf" href="#tab-4aaf" role="tab" aria-controls="tab-4aaf" aria-selected="false">Logout</a>
            </li>
          </ul>

          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-9d3a" role="tabpanel" aria-labelledby="link-tab-9d3a">
              <div class="u-container-layout u-container-layout-1">
                <h4 class="u-text u-text-1">Your personal information<br>
                </h4>
                <div class="u-expanded-width u-table u-table-responsive u-table-1">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="50%">
                      <col width="50%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                    <?php
                      $sql = "SELECT * FROM vDB_userData.Beneficiary WHERE brid=".$brid;
                      $stmt = sqlsrv_query($conn, $sql);
                      if ($stmt === false) {
                          die(print_r(sqlsrv_errors(), true));
                      }
                      $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)
                    ?>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Name</td>
                        <?php echo ' <td class="u-table-cell"> ' . $row["bname"] . "</td>"; ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Registration No<br>
                        </td>
                        <?php echo ' <td class="u-table-cell"> ' . $row["brid"] . "</td>"; ?>
                      </tr>
                      <tr style="height: 52px;">
                        <td class="u-table-cell">Photo ID Type<br>
                        </td>
                        <?php 
                        if($row["bidtype"]==1)
                          echo ' <td class="u-table-cell">Aadhar</td>'; 
                        else if($row["bidtype"]==2)
                        echo ' <td class="u-table-cell">Voter ID (EPIC)</td>';
                        else if($row["bidtype"]==3)
                        echo ' <td class="u-table-cell">State DL</td>';
                        else if($row["bidtype"]==4)
                        echo ' <td class="u-table-cell">PAN ID</td>';
                        else if($row["bidtype"]==5)
                        echo ' <td class="u-table-cell">NPR ID</td>';
                        else if($row["bidtype"]==6)
                        echo ' <td class="u-table-cell">Pension Card</td>'; 
                        else
                        echo ' <td class="u-table-cell">NA</td>';
                        ?>
                      </tr>
                      <tr style="height: 52px;">
                        <td class="u-table-cell">Reference No<br>
                        </td>
                        <?php echo ' <td class="u-table-cell"> ' . $row["biid"] . "</td>"; ?>
                      </tr>
                      <tr style="height: 52px;">
                        <td class="u-table-cell">Gender</td>
                        <?php echo ' <td class="u-table-cell"> ' . $row["bgender"] . "</td>"; ?>
                      </tr>
                      <tr style="height: 52px;">
                        <td class="u-table-cell">Date of Birth<br>
                        </td>
                        <?php echo ' <td class="u-table-cell"> ' . $row["bdob"]->format("d/m/Y") . "</td>"; ?>
                      </tr>
                      <tr style="height: 52px;">
                        <td class="u-table-cell">Phone number<br>
                        </td>
                        <?php echo ' <td class="u-table-cell"> ' . $row["bphone"] . "</td>"; ?>
                      </tr>
                      <tr style="height: 52px;">
                        <td class="u-table-cell">Address</td>
                        <?php echo ' <td class="u-table-cell"> ' . $row["baddress"] . "</td>"; ?>
                      </tr>
                    <?php
                      sqlsrv_free_stmt($stmt);
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-2">
                <h4 class="u-text u-text-2">Current Status of your vaccination<br>
                </h4>
                <div class="u-expanded-width u-table u-table-responsive u-table-2">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="50%">
                      <col width="50%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                    <?php
                        $sql = "SELECT * FROM vDB_centreData.viewBenDose1 WHERE brid=".$brid;
                        $stmt = sqlsrv_query($conn, $sql);
                        if ($stmt === false) {
                            die(print_r(sqlsrv_errors(), true));
                        }
                        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)
                      ?>
                      <tr style="height: 72px;">
                        <td class="u-table-cell u-table-cell-19">Dose 1<br>
                        </td>
                        <td class="u-table-cell">
                          <br>
                        </td>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Name</td>
                        <?php
                        if(!$row["vname"]){
                          echo '<td class="u-table-cell">  Not taken yet </td>'; 
                        }else{
                          echo ' <td class="u-table-cell"> ' . $row["vname"]. "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Brand</td>
                        <?php
                        if(!$row["vbrand"]){
                          echo '<td class="u-table-cell">  Not taken yet </td>'; 
                        }else{
                          echo ' <td class="u-table-cell"> ' . $row["vbrand"]. "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Detail<br>
                        </td>
                        <?php
                        if(!$row["vdetail"]){
                          echo '<td class="u-table-cell">  Not taken yet </td>'; 
                        }else{
                          echo ' <td class="u-table-cell"> ' . $row["vdetail"]. "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Taken on<br>
                        </td>
                        <?php
                        if(!$row["dateDose1"]){
                          echo '<td class="u-table-cell">  Not taken yet </td>'; 
                        }else{
                        echo ' <td class="u-table-cell"> ' . $row["dateDose1"]->format("d/m/Y") . "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Given by<br>
                        </td>
                        <?php
                         if(!$row["wrid"]){
                          echo '<td class="u-table-cell">  Not taken yet </td>'; 
                        }else{
                         echo ' <td class="u-table-cell"> ' . $row["wnameDose1"]." (Vaccinator ID: ". $row["wrid"]. ")</td>";} ?>	
                      </tr>
                      <?php
                      sqlsrv_free_stmt($stmt);
                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="u-expanded-width u-table u-table-responsive u-table-3">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="50%">
                      <col width="50%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                    <?php
                        $sql = "SELECT * FROM vDB_centreData.viewBenDose2 WHERE brid=".$brid;
                        $stmt = sqlsrv_query($conn, $sql);
                        if ($stmt === false) {
                            die(print_r(sqlsrv_errors(), true));
                        }
                        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)
                      ?>
                      <tr style="height: 72px;">
                        <td class="u-table-cell u-table-cell-19">Dose 2<br>
                        </td>
                        <td class="u-table-cell">
                          <br>
                        </td>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Name</td>
                        <?php 
                          if(!$row["vname"]){
                            echo '<td class="u-table-cell">  Not taken yet </td>'; 
                          }else{
                          echo ' <td class="u-table-cell"> ' . $row["vname"]. "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Brand</td>
                        <?php
                          if(!$row["vbrand"]){
                            echo '<td class="u-table-cell">  Not taken yet </td>'; 
                          }else{
                          echo ' <td class="u-table-cell"> ' . $row["vbrand"]. "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Detail<br>
                        </td>
                        <?php 
                          if(!$row["vdetail"]){
                            echo '<td class="u-table-cell">  Not taken yet </td>'; 
                          }else{
                          echo ' <td class="u-table-cell"> ' . $row["vdetail"]. "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Taken on<br>
                        </td>
                        <?php
                          if(!$row["dateDose2"]){
                            echo '<td class="u-table-cell">  Not taken yet </td>'; 
                          }else{
                          echo ' <td class="u-table-cell"> ' . $row["dateDose2"]->format("d/m/Y") . "</td>";} ?>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Given by<br>
                        </td>
                        <?php 
                          if(!$row["wrid"]){
                            echo '<td class="u-table-cell">  Not taken yet </td>'; 
                          }else{
                          echo ' <td class="u-table-cell"> ' . $row["wnameDose2"]." (Vaccinator ID:". $row["wrid"]. ")</td>";} ?>	
                      </tr>
                      <?php
                      sqlsrv_free_stmt($stmt);
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-c4b7" role="tabpanel" aria-labelledby="link-tab-c4b7">
              <div class="u-container-layout u-container-layout-3">
                <h4 class="u-text u-text-3">Your appointments<br>
                </h4>
                <div class="u-expanded-width u-table u-table-responsive u-table-4">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                      <tr style="height: 36px;">
                        <td class="u-table-cell u-table-cell-58">Appointment ID<br>
                        </td>
                        <td class="u-table-cell">Start time<br>
                        </td>
                        <td class="u-table-cell">End time<br>
                        </td>
                        <td class="u-table-cell">Vaccine used<br>
                      </tr>
                      <?php
                                $sql = "SELECT * FROM vDB_centreData.ViewBookedSchedule WHERE brid=".$brid;
                                $stmt = sqlsrv_query($conn, $sql);
                                if ($stmt === false) {
                                    die(print_r(sqlsrv_errors(), true));
                                }

                                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                    echo ' <tr style="height: 51px;"> ';
                                    echo ' <td class="u-table-cell"> ' . $row["appointmentid"] . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["start_dt_time"]->format("d/m/Y h:i A") . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["end_dt_time"]->format("d/m/Y h:i A") . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["vname"] . "</td>";
                                    echo "</tr>";
                                }
                                sqlsrv_free_stmt($stmt);
                              ?>
                    </tbody>
                  </table>
                </div>
                <h4 class="u-text u-text-4">Available sessions<br>
                </h4>
                <div class="u-expanded-width u-table u-table-responsive u-table-5">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="20.4%">
                      <col width="19.9%">
                      <col width="19.9%">
                      <col width="19.9%">
                      <col width="19.9%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                      <tr style="height: 36px;">
                        <td class="u-table-cell u-table-cell-58">Session ID<br>
                        </td>
                        <td class="u-table-cell">Start time<br>
                        </td>
                        <td class="u-table-cell">End time<br>
                        </td>
                        <td class="u-table-cell">Vaccinator</td>
                        <td class="u-table-cell">Vaccine used<br>
                        </td>
                      </tr>
                      <?php
                                $sql = "SELECT * FROM vDB_centreData.ViewSchedule";
                                $stmt = sqlsrv_query($conn, $sql);
                                if ($stmt === false) {
                                    die(print_r(sqlsrv_errors(), true));
                                }

                                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                    echo ' <tr style="height: 51px;"> ';
                                    echo ' <td class="u-table-cell"> ' . $row["sessionid"] . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["start_dt_time"]->format("d/m/Y h:i A") . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["end_dt_time"]->format("d/m/Y h:i A") . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["wname"] . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["vname"] . "</td>";
                                    echo "</tr>";
                                }
                                sqlsrv_free_stmt($stmt);
                              ?>
                    </tbody>
                  </table>
                </div>
                <div class="u-align-right">
                <form method="POST" style="padding: 10px;">
                <?php
                        if (isset($_POST['submit']))
                        {
                            if (isset($error))
                            {
                                echo "<p style='color:red;'>" 
                                . $error . "</p>";
                            }
                        }
                        ?>
                            <div>
                              <input type="text" placeholder="Enter the Session ID that you want to book" id="reqsid" name="reqsid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div>
                            <div class="u-align-right">
                              <button type="submit" id='submit' name='submit' class="u-btn u-button-style">Submit</button>
                            </div>
                          </form>
                          <?php
                          if(isset($_POST['submit']))
                          {
                            if(!isset($error))
                            {
                              $sql = "EXEC vDB_centreData.bookSession ?,?";
                              $params = array($brid,$_POST['reqsid']);
                                                $stmt = sqlsrv_query($conn, $sql, $params);
                                                if ($stmt === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }
                              echo '<script>alert("Session has been booked!/nPlease refresh your page to view your changes.");</script>';
                            }
                          }
                  ?>
                </div>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-4" id="tab-4aaf" role="tabpanel" aria-labelledby="link-tab-4aaf">
              <div class="u-container-layout u-container-layout-4">
                <p class="u-text u-text-default u-text-5">You will be re-directed to the main page.<br>
                </p>
                <a href="/beneficiary_logout.php" class="u-btn u-button-style u-btn-2">LOGOUT</a>
              </div>
            </div>
          </div>
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
<?php
}
else
{
echo "<script>window.location.href='beneficiary_logout.php';</script>";
}
?>