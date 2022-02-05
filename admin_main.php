<?php
session_start();
$connectionInfo = array("UID" => "cs502main", "pwd" => "CSDB502_@Azure!", "Database" => "CovidVaccinationDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cs502-project-4048.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

error_reporting(E_ALL ^ E_WARNING);

if(isset($_SESSION["adminpass"])){

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome Admin!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Admin Console - Vaccine Registration System</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="admin_main.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="admin_main">
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

    <section class="u-clearfix u-section-1" id="sec-530a">
      <div class="u-clearfix u-sheet u-sheet-1">
	  <br>
        <h2 class="u-text u-text-default u-text-1">Welcome Admin!<br>
        </h2>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-section-2" id="sec-9c89">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
          <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Vaccinators</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="false">Vaccines</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4" id="link-tab-ccd4" href="#tab-ccd4" role="tab" aria-controls="tab-ccd4" aria-selected="false">Sessions</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5" id="link-tab-e10a" href="#tab-e10a" role="tab" aria-controls="tab-e10a" aria-selected="false">Records</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-6" id="link-tab-7c8c" href="#tab-7c8c" role="tab" aria-controls="tab-7c8c" aria-selected="false">Logout</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-2">
                  <ul class="u-spacing-5 u-tab-list u-unstyled" role="tablist">
                    <li class="u-tab-item" role="presentation">
                      <a class="active u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-7" id="link-tab-337a" href="#tab-337a" role="tab" aria-controls="tab-337a" aria-selected="true">List</a>
                    </li>
                    <li class="u-tab-item" role="presentation">
                      <a class="u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-8" id="link-tab-7f4a" href="#tab-7f4a" role="tab" aria-controls="tab-7f4a" aria-selected="false">Delete</a>
                    </li>
                    <li class="u-tab-item u-tab-item-9" role="presentation">
                      <a class="u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-9" id="link-tab-fb52" href="#tab-fb52" role="tab" aria-controls="tab-fb52" aria-selected="false">Add New</a>
                    </li>
                  </ul>
                  <div class="u-tab-content">
                    <div class="u-container-style u-tab-active u-tab-pane" id="tab-337a" role="tabpanel" aria-labelledby="link-tab-337a">
                      <div class="u-container-layout u-container-layout-3">
                        <div class="u-expanded-width u-table u-table-responsive u-table-2">
                          <table class="u-table-entity">
                            <colgroup>
                              <col width="15.5%">
                              <col width="26.9%">
                              <col width="20.2%">
                              <col width="17.4%">
                              <col width="20%">
                            </colgroup>
                            <tbody class="u-table-alt-grey-5 u-table-body">
                              <tr style="height: 51px;">
                                <td class="u-table-cell">Registration ID<br>
                                </td>
                                <td class="u-table-cell">Name</td>
                                <td class="u-table-cell">Date of Birth (DoB)<br>
                                </td>
                                <td class="u-table-cell">Sex</td>
                                <td class="u-table-cell">Phone number<br>
                                </td>
                              </tr>
                              <?php
                                $sql = "SELECT wrid,wname,wdob,wgender,wphone FROM vDB_centreData.Vaccinator";
                                $stmt = sqlsrv_query( $conn, $sql );
                                if( $stmt === false) {
                                    die( print_r( sqlsrv_errors(), true) );
                                }

                                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                      echo ' <tr style="height: 51px;"> ';
                                      echo ' <td class="u-table-cell"> '.$row['wrid']."</td>";
                                      echo ' <td class="u-table-cell"> '.$row['wname']."</td>";
                                      echo ' <td class="u-table-cell"> '.$row['wdob']->format('d/m/Y')."</td>";
                                      echo ' <td class="u-table-cell"> '.$row['wgender']."</td>";
                                      echo ' <td class="u-table-cell"> '.$row['wphone']."</td>";
                                      echo "</tr>";
                                }
                                sqlsrv_free_stmt( $stmt);
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="u-container-style u-tab-pane u-tab-pane-4" id="tab-7f4a" role="tabpanel" aria-labelledby="link-tab-7f4a">
                      <div class="u-container-layout u-container-layout-4">
                        <p class="u-text u-text-default u-text-2">Specify the vaccinators' register ID in the box, whom you want to delete their information and access to this system.<br>
                          <br>
                          <span class="u-text-palette-2-base">Warning: This action cannot be undone</span>
                          <br>
                        </p>
                        <div class="u-form u-form-1">
                        <form method="POST" style="padding: 10px;">
                            <div>
                              <input type="text" placeholder="Enter the vaccinator ID that must be deleted" id="delwid" name="delwid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div>
                            <div class="u-align-right">
                              <button type="submit" id='submit_delvacc' name='submit_delvacc' class="u-btn u-button-style">Submit</button>
                            </div>
                          </form>
                          <?php
                          if(isset($_POST['submit_delvacc']))
                          {
                            if(!isset($error))
                            {
                              $sql = "EXEC vDB_centreData.deleteVaccinator ?";
                              $params = array($_POST['delwid']);
                              $stmt = sqlsrv_query($conn, $sql, $params);
                              if ($stmt === false) {
                                die(print_r(sqlsrv_errors(), true));
                              }
                              echo '<script>alert("Vaccinator\'s info has been deleted from the system.\nPlease refresh your page to view your changes."); </script>';
                              
                            }
                            if (isset($error))
                            {
                                echo "<p style='color:red;'>" . $error . "</p>";
                            }
                          }
                        ?>
                        </div>
                      </div>
                    </div>
                    <div class="u-container-style u-tab-pane" id="tab-fb52" role="tabpanel" aria-labelledby="link-tab-fb52">
                      <div class="u-container-layout u-container-layout-5">
                        <p class="u-text u-text-3">Enter the basic personal details of the vaccinator to register in the system.<br>(Info: vaccinators' name, sex, date of birth and phone no. from the order letter) <br>
                          <br>
                          <span class="u-text-palette-2-base">Warning: You cannot update the vaccinators' info after adding them. Make sure you write those info properly as mentioned by the order letter.</span>
                          <br>
                        </p>
                        <div class="u-form u-form-2">
                        <form method="POST" style="padding: 10px;">

                            <br><div>
                              <input type="text" placeholder="Enter the vaccinator's name" id="wnname" name="wnname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div><br>

                            <div>
                            <select id="wngender" name="wngender" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                  <option value="NA">Enter the vaccinator's sex</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </div><br>

                            <div class="u-form-date u-form-group u-form-group-5">
                              <input type="date" placeholder="Enter the vaccinator's date of birth (DoB)" id="wndob" name="wndob" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                            </div><br>

                            <div>
                              <input type="text" placeholder="Enter the vaccinator's phone number" id="wnphone" name="wnphone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div>

                            <div class="u-align-right">
                              <button type="submit" id='submit_newvacc' name='submit_newvacc' class="u-btn u-button-style">Submit</button>
                            </div>
                          </form>
                          <?php
                          if(isset($_POST['submit_newvacc']))
                          {
                            if(!isset($error))
                            {
                              $sql = "EXEC vDB_centreData.addVaccinator ?,?,?,?";
                              $params = array($_POST['wnname'],$_POST['wngender'],$_POST['wndob'],$_POST['wnphone']);
                              $stmt = sqlsrv_query($conn, $sql, $params);
                                if ($stmt === false) {
                                 die(print_r(sqlsrv_errors(), true));
                                }
                                echo '<script>alert("Vaccinator\'s info has been saved into the system.\nPlease refresh your page to view your changes.");</script>';
                            }
                          }
                          if (isset($_POST['submit_newvacc'])){
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
            <div class="u-container-style u-tab-pane u-white u-tab-pane-6" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-6">
                <h4 class="u-text u-text-default u-text-4">List of Vaccines<br>
                </h4>
                <div class="u-expanded-width u-table u-table-responsive u-table-3">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="11.7%">
                      <col width="14.8%">
                      <col width="30.3%">
                      <col width="43.2%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Vaccine ID<br>
                        </td>
                        <td class="u-table-cell">Name</td>
                        <td class="u-table-cell">Brand</td>
                        <td class="u-table-cell">Detail</td>
                      </tr>
                      <?php
                          $sql = "SELECT * FROM vDB_centreData.Vaccine";
                          $stmt = sqlsrv_query( $conn, $sql );
                          if( $stmt === false) {
                            die( print_r( sqlsrv_errors(), true) );
                          }

                          while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            if($row['vid']==0){}
                            else{
                            echo ' <tr style="height: 51px;"> ';
                              echo ' <td class="u-table-cell"> '.$row['vid']."</td>";
                              echo ' <td class="u-table-cell"> '.$row['vname']."</td>";
                              echo ' <td class="u-table-cell"> '.$row['vbrand']."</td>";
                              echo ' <td class="u-table-cell"> '.$row['vdetail']."</td>";
                            }
                            echo "</tr>";
                          }
                            sqlsrv_free_stmt( $stmt);
                          ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-7" id="tab-ccd4" role="tabpanel" aria-labelledby="link-tab-ccd4">
              <div class="u-container-layout u-container-layout-7">
                <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-3">
                  <ul class="u-spacing-5 u-tab-list u-unstyled" role="tablist">
                    <li class="u-tab-item" role="presentation">
                      <a class="active u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-10" id="link-tab-bf28" href="#tab-bf28" role="tab" aria-controls="tab-bf28" aria-selected="true">List</a>
                    </li>
                    <li class="u-tab-item" role="presentation">
                      <a class="u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-11" id="link-tab-e287" href="#tab-e287" role="tab" aria-controls="tab-e287" aria-selected="false">Delete</a>
                    </li>
                    <li class="u-tab-item u-tab-item-12" role="presentation">
                      <a class="u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-12" id="link-tab-7811" href="#tab-7811" role="tab" aria-controls="tab-7811" aria-selected="false">Add New</a>
                    </li>
                  </ul>
                  <div class="u-tab-content">
                    <div class="u-container-style u-tab-active u-tab-pane" id="tab-bf28" role="tabpanel" aria-labelledby="link-tab-bf28">
                      <div class="u-container-layout u-valign-top u-container-layout-8">
                        <h3 class="u-text u-text-default u-text-5">Current Sessions<br>
                        </h3>
                        <div class="u-table u-table-responsive u-table-4">
                          <table class="u-table-entity">
                            <colgroup>
                              <col width="20%">
                              <col width="20%">
                              <col width="20%">
                              <col width="20%">
                              <col width="20%">
                            </colgroup>
                            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
                              <tr style="height: 65px;">
                                <td class="u-table-cell">Session ID<br>
                                </td>
                                <td class="u-table-cell">Start time<br>
                                </td>
                                <td class="u-table-cell">End time<br>
                                </td>
                                <td class="u-table-cell">Worker ID<br>
                                </td>
                                <td class="u-table-cell">Vaccine ID<br>
                                </td>
                              </tr>
                              <?php
                                $sql = "SELECT * FROM vDB_centreData.Schedule";
                                $stmt = sqlsrv_query($conn, $sql);
                                if ($stmt === false) {
                                    die(print_r(sqlsrv_errors(), true));
                                }

                                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                    echo ' <tr style="height: 51px;"> ';
                                    echo ' <td class="u-table-cell"> ' . $row["sessionid"] . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["start_dt_time"]->format("d/m/Y h:i A") . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["end_dt_time"]->format("d/m/Y h:i A") . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["wrid"] . "</td>";
                                    echo ' <td class="u-table-cell"> ' . $row["vid"] . "</td>";
                                    echo "</tr>";
                                }
                                sqlsrv_free_stmt($stmt);
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="u-container-style u-tab-pane u-tab-pane-9" id="tab-e287" role="tabpanel" aria-labelledby="link-tab-e287">
                      <div class="u-container-layout u-container-layout-9">
                        <p class="u-text u-text-default u-text-6">Specify the session ID in the box, which you want to delete it from the system.<br>
                          <br>
                          <span class="u-text-palette-2-base">Warning: This action cannot be undone</span>
                          <br>
                        </p>
                        <div class="u-form u-form-3">
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
                            <br><div>
                              <input type="text" placeholder="Enter the session ID here" id="reqsess" name="reqsess" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div>
                            <div class="u-align-right">
                              <button type="submit" id='submit_delsess' name='submit_delsess' class="u-btn u-button-style">Submit</button>
                            </div>
                          </form>
                          <?php
                          if(isset($_POST['submit_delsess']))
                          {
                            if(!isset($error))
                            {
                              $sql = "EXEC vDB_centreData.deleteBeneficiary ?";
                              $params = array($_POST['reqsess']);
                                                $stmt = sqlsrv_query($conn, $sql, $params);
                                                if ($stmt === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }
                              echo '<script>alert("Session has been deleted from the system.\nPlease refresh your page to view your changes.");</script>';
                            }
                          }
                  ?>
                        </div>
                      </div>
                    </div>
                    <div class="u-container-style u-tab-pane" id="tab-7811" role="tabpanel" aria-labelledby="link-tab-7811">
                      <div class="u-container-layout u-container-layout-10">
                        <p class="u-text u-text-7">Enter the details of the session which you want to register in the system.<br>Include session starting and ending date and time along with the vaccine used during the session and the vaccinator administering the vaccine.<br>
                          <br>
                          <span class="u-text-palette-2-base">Warning: You cannot update the session info after adding them. Make sure you write those info properly as mentioned by the order letter.</span>
                          <br>
                        </p>
                        <div class="u-form u-form-4">
                        <form method="POST" style="padding: 10px;">
                            <br><div>
                              <input type="datetime-local" placeholder="Enter the starting time" id="startdt" name="startdt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div>

                            <br><div>
                              <input type="datetime-local" placeholder="Enter the ending time" id="enddt" name="enddt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div><br>

                            <div>
                            <select id="rvid" name="rvid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                  <option value="0">Select the vaccine</option>
                                  <option value="801">Covaxin</option>
                                  <option value="802">Covishield</option>
                                  <option value="821">Sputnik V</option>
                                </select>
                            </div><br>

                            <div>
                              <input type="text" placeholder="Enter the vaccinator's ID" id="rwid" name="rwid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            </div>

                            <div class="u-align-right">
                              <button type="submit" id='submit_addsess' name='submit_addsess' class="u-btn u-button-style">Submit</button>
                            </div>
                            </form>
                            <?php
                            if(isset($_POST['submit_addsess']))
                            {
                            if(!isset($error))
                            {
                                $sql = "EXEC vDB_centreData.addVaccinator ?,?,?,?";
                                $params = array($_POST['startdt'],$_POST['enddt'],$_POST['rwid'],$_POST['rvid']);
                                $stmt = sqlsrv_query($conn, $sql, $params);
                                  if ($stmt === false) {
                                  die(print_r(sqlsrv_errors(), true));
                                  }
                                  echo '<script>alert("Session has been saved into the system.\nPlease refresh your page to view your changes.");</script>';
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
            <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-11" id="tab-e10a" role="tabpanel" aria-labelledby="link-tab-e10a">
              <div class="u-container-layout u-container-layout-11">
                <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-4">
                  <ul class="u-spacing-5 u-tab-list u-unstyled" role="tablist">
                    <li class="u-tab-item" role="presentation">
                      <a class="active u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-13" id="link-tab-9399" href="#tab-9399" role="tab" aria-controls="tab-9399" aria-selected="true">Beneficiary</a>
                    </li>
                    <li class="u-tab-item u-tab-item-14" role="presentation">
                      <a class="u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-14" id="link-tab-fd93" href="#tab-fd93" role="tab" aria-controls="tab-fd93" aria-selected="false">Update record</a>
                    </li>
                    <li class="u-tab-item" role="presentation">
                      <a class="u-active-palette-1-light-1 u-button-style u-grey-10 u-tab-link u-tab-link-15" id="link-tab-50b3" href="#tab-50b3" role="tab" aria-controls="tab-50b3" aria-selected="false">Delete record</a>
                    </li>
                  </ul>
                  <div class="u-tab-content">
                    <div class="u-container-style u-tab-active u-tab-pane" id="tab-9399" role="tabpanel" aria-labelledby="link-tab-9399">
                      <div class="u-container-layout u-container-layout-12">
                        <h3 class="u-text u-text-default u-text-8">Registered beneficiaries in the system<br>
                        </h3>
                        <div class="u-expanded-width u-table u-table-responsive u-table-5">
                          <table class="u-table-entity">
                            <colgroup>
                              <col width="7.8%">
                              <col width="25.3%">
                              <col width="16.3%">
                              <col width="11.1%">
                              <col width="17.099999999999994%">
                              <col width="22.499999999999993%">
                            </colgroup>
                            <tbody class="u-table-alt-grey-5 u-table-body">
                              <tr style="height: 51px;">
                                <td class="u-table-cell">Reg. ID<br>
                                </td>
                                <td class="u-table-cell">Name</td>
                                <td class="u-table-cell">Date of Birth (DoB)<br>
                                </td>
                                <td class="u-table-cell">Sex</td>
                                <td class="u-table-cell">Phone number<br>
                                </td>
                                <td class="u-table-cell">Vaccination Status<br>
                                </td>
                              </tr>
                              <?php
                                  $sql = "SELECT * FROM vDB_centreData.AdminView_Beneficiary";
                                  $stmt = sqlsrv_query($conn, $sql);
                                  if ($stmt === false) {
                                      die(print_r(sqlsrv_errors(), true));
                                  }

                                  while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                      echo ' <tr style="height: 51px;"> ';
                                      echo ' <td class="u-table-cell"> ' . $row["brid"] . "</td>";
                                      echo ' <td class="u-table-cell"> ' . $row["bname"] . "</td>";
                                      echo ' <td class="u-table-cell"> ' . $row["bdob"]->format("d/m/Y") . "</td>";
                                      echo ' <td class="u-table-cell"> ' . $row["bgender"] . "</td>";
                                      echo ' <td class="u-table-cell"> ' . $row["bphone"] . "</td>";
                                      echo ' <td class="u-table-cell"> ' . $row["vsdescription"] . "</td>";
                                      echo "</tr>";
                                  }
                                  sqlsrv_free_stmt($stmt);
                                ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="u-container-style u-tab-pane" id="tab-fd93" role="tabpanel" aria-labelledby="link-tab-fd93">
                      <div class="u-container-layout u-container-layout-13">
                        <p class="u-text u-text-9">Enter the basic details of the beneficiary which you want to update in the system.<br>(Update Fields: Beneficiary's name, date of birth, phone no. and sex)<br>
                          <br>
                          <span class="u-text-palette-2-base">NOTE: You must add the same detail of the beneficiary if you don't want to update that particular field. Don't leave that fields empty.</span>
                          <br>
                        </p>
                        <div class="u-form u-form-5">
                        <form method="POST" style="padding: 10px;">

<br><div>
  <input type="text" placeholder="Enter the beneficiary's register ID" id="buprid" name="buprid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
</div>


<br><div>
  <input type="text" placeholder="Enter the beneficiary's name (new)" id="buprname" name="buprname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
</div>

<br><div>
  <input type="date" placeholder="Enter the date of birth (new)" id="buprdob" name="buprdob" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
</div>

<br><div>
  <input type="text" placeholder="Enter the beneficiary's phone number (new)" id="buprphone" name="buprphone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
</div><br>

<div>
                            <select id="buprsex" name="buprsex" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                  <option value="NA">Enter the beneficiary's sex (new)</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </div><br>

<div class="u-align-right">
  <button type="submit" id='submit_updateben' name='submit_updateben' class="u-btn u-button-style">Submit</button>
</div>
</form>
<?php
  if(isset($_POST['submit_updateben']))
  {
    if(!isset($error))
    {
      $sql = "EXEC vDB_userData.updateBeneficiary ?,?,?,?,?";
      $params = array($_POST['buprid'],$_POST['buprname'],$_POST['buprdob'],$_POST['buprsex'],$_POST['buprphone']);
      $stmt = sqlsrv_query($conn, $sql, $params);
        if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
        }
        echo '<script>alert("Beneficiary\'s info has been updated into the system.\nPlease refresh your page to view your changes.");</script>';
    }
  }
  if (isset($_POST['submit_updateben'])){
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
                    <div class="u-container-style u-tab-pane u-tab-pane-14" id="tab-50b3" role="tabpanel" aria-labelledby="link-tab-50b3">
                      <div class="u-container-layout u-container-layout-14">
                        <p class="u-text u-text-default u-text-10">Specify the beneficiary ID in the box, whose record you want to delete it from the system.<br>
                          <br>
                          <span class="u-text-palette-2-base">Warning: This action cannot be undone</span>
                          <br>
                        </p>
                        <div class="u-form u-form-6">
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
                            <br><div>
                              <input type="text" placeholder="Enter the beneficiary's registration ID" id="reqaid" name="reqaid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
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
                              $sql = "EXEC vDB_centreData.deleteBeneficiary ?";
                              $params = array($_POST['reqaid']);
                                                $stmt = sqlsrv_query($conn, $sql, $params);
                                                if ($stmt === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }
                              echo '<script>alert("Beneficiary\'s info has been deleted from the system.\nPlease refresh your page to view your changes.");</script>';
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
            <div class="u-container-style u-tab-pane u-white u-tab-pane-15" id="tab-7c8c" role="tabpanel" aria-labelledby="link-tab-7c8c">
              <div class="u-container-layout u-container-layout-15">
                <p class="u-text u-text-default u-text-11"> You will be re-directed to the main page.<br>
                </p>
                <a href="/admin_logout.php" class="u-btn u-button-style u-btn-7">LOGOUT</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-5672">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-section-4" id="sec-d6a1">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"></div>
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
echo "<script>window.location.href='admin_logout.php';</script>";
}
?>
