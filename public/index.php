<?php
//File name: index.php
//controller for homepage

//gets config info
require("../includes/config.php");
$id = $_SESSION["id"];

$books_owned_array = CS50::query("SELECT * FROM books_owned WHERE user_id = $id");

render("books_owned.php", ["title" => "Home", "books_owned_array" => $books_owned_array]);
//End of file
?>