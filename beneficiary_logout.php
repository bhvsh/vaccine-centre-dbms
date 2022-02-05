<?php
session_start();
if(isset($_SESSION["brid"])){
session_unset();
session_destroy();
echo "<script>alert('Logged Out Successfully!!!');window.location.href='index.php'</script>";
}
if(!isset($_SESSION["brid"])){
echo "<script>alert('Cannot access without authentication! Login first!!!');window.location.href='beneficiary_login.php'</script>";
}
?>