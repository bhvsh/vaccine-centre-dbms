<?php
session_start();
if(isset($_SESSION["adminpass"])){
session_unset();
session_destroy();
echo "<script>alert('Logged Out Successfully!!!');window.location.href='index.php'</script>";
}
if(!isset($_SESSION["adminpass"])){
echo "<script>alert('Cannot access without authentication! Login first!!!');window.location.href='admin_login.php'</script>";
}
?>