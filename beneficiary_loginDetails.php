<?php
session_start();
?>
<html>
    <body>
    <?php
        $connectionInfo = array("UID" => "cs502main", "pwd" => "CSDB502_@Azure!", "Database" => "CovidVaccinationDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:cs502-project-4048.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if( $conn ) {
            echo "Connection established.<br />";
        }else{
            echo "Connection could not be established.<br />";
            die( print_r(sqlsrv_errors(), true));
        }

        $sql = "SELECT buid FROM vDB_authData.BeneficiaryAuthID WHERE brid=".$_POST['brid'];
        $stmt = sqlsrv_query( $conn, $sql );

        if( $stmt == false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
        if(!$row['buid']){
            echo "<script>".'alert("Account not found! Redirecting back to the home page. or you have entered an invalid register ID/unique ID")'."</script>";
            session_unset();
            session_destroy();
            echo "<script> window.location.href = 'index.php';</script>";
        }

        if(strtolower($row['buid'])!=$_POST['buid']){
            echo "<script>".'alert("You have entered an invalid register ID/unique ID. Please try again.\nRedirecting back to the home page.")'."</script>";
            session_unset();
            session_destroy();
            echo "<script> window.location.href = 'index.php';</script>";
        }
        
        sqlsrv_free_stmt( $stmt);

        if(sqlsrv_close( $conn )){
            echo "Connection closed successfully.<br />";
        }else{
            echo "Connection could not be closed.<br />";
            die( print_r(sqlsrv_errors(), true));
        }

        $_SESSION["brid"]=$_POST['brid'];
        echo "<script> window.location.href = 'beneficiary_main.php';alert('Logged in to the system!')</script>";

    ?>
    </body>
</html>