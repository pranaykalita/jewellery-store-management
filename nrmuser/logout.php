
<?php
session_start();
session_unset();
session_destroy();
header("LOCATION: ../nrmuser/index.php");
?>