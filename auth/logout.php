<?php
session_start();
session_destroy();
header("Location: login.php");
//header("Location: ../index.php");

exit();