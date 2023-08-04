<?php

session_start();
session_unset();
session_destroy();
header("Location: http://localhost/Login-Form/Login_Page_Php/kosong/");
    
?>