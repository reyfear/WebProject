<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: http://localhost/MDT419/WebProject/index.php");
?>
