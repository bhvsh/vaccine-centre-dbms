<?php
session_start();
?>
<html>
    <body>
    <?php
        # Bad practice to hardcode the password, preferably store it in a database
        if($_POST['adminpass']=='ADMINPASSWORDHERE'){
            $_SESSION["adminpass"]=$_POST['adminpass'];
            echo "<script> window.location.href = 'admin_main.php';alert('Logged in to the system!')</script>";
        }
        else{
            echo '<script>alert("Wrong password!\nRedirecting you to the home page.\n\nPlease report it to the higher authorities if you have forgot the password to the system.")</script>';
            session_unset();
            session_destroy();
            echo "<script> window.location.href = 'index.php';</script>";
        }
    ?>
    </body>
</html>