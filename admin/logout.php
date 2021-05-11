<?php

unset($_SESSION["admin_username"]);
unset($_SESSION["admin_password"]);
header("Location:../login.php");
?>