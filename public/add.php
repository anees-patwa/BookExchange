<?php
//File name: add.php
//controller for adding books to the set of books one already owns

require("../includes/config.php");

if($_SERVER["REQUEST_METHOD"] != "POST")
{
    render("add_form.php", ["title" => "Add"]);
}

$id = $_SESSION["id"];
$isbn = $_POST["isbn"];
$btitle = $_POST["btitle"];
$author = $_POST["author"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

if($price == null)
{
    apologize("A book price is required");
}
else if ($quantity == null || $quantity < 1)
{
    apologize("A quantity is required");
}
else if($isbn == null && ($btitle == null || $author == null))
{
    apologize("Either an isbn or book title AND author is required");
}

if($author == null)
{
    $author = 'n/a';
}
if ($btitle == null)
{
    $btitle = 'n/a';
}
if ($isbn == null)
{
    $isbn == 'n/a';
}
//test isbn  9780323079334
CS50::query("INSERT IGNORE INTO books_owned (user_id, isbn, btitle, author, price, quantity) VALUES(?,?,?,?,?,?) ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)", $id, $isbn, $btitle, $author, $price, $quantity);
/*if( == 0) {
    CS50::query("UPDATE books_owned SET quantity = quantity + $quantity WHERE user_id = $id AND (isbn = $isbn OR (btitle = {$btitle} AND author = {$author} )) AND price = $price");
}*/

redirect("index.php");
//End of file
?>
