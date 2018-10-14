<?php
//file name: transactions.php
//controller for obtaining transaction history from database

    //Config
    require("../includes/config.php");
    
    //get user id
    $id = $_SESSION["id"];
    
    $history = CS50::query("SELECT btitle, author, isbn, price, quantity, partner FROM transactions WHERE user_id = $id");
    
    
    //dump($history);

    render("transactions_view.php", ["title" => "Transactions", "history" => $history]);
    //End of file
?>