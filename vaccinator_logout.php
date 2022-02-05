<?php
session_start();
if(isset($_SESSION["wrid"])){
session_unset();
session_destroy();
echo "<script>alert('Logged Out Successfully!!!');window.location.href='index.php'</script>";
}
if(!isset($_SESSION["wrid"])){
echo "<script>alert('Cannot access without authentication! Login first!!!');window.location.href='vaccinator_login.php'</script>";
}
?>