<?php

// start session to destroy it
session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
die();