<?php
//File name: logout.php
//controller for logging out of website

    // configuration
    require("../includes/config.php"); 

    // log out current user, if any
    logout();

    // redirect user
    redirect("/");
//End of file
?>
