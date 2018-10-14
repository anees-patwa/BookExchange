<?php
//File name: update.php
//controller for removing books from the set of books owned

require("../includes/config.php");

if($_SERVER["REQUEST_METHOD"] != "POST")
{
    render("update_form.php", ["title" => "Update"]);
}

$id = $_SESSION["id"];
$isbn = $_POST["isbn"];
$btitle = "'" . $_POST["btitle"] . "'";
$author = "'" . $_POST["author"] . "'";
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$partner = $_POST["partner"];

if($isbn == null || ($btitle == null && $author == null))
{
    apologize("Either an isbn or author and book title are required");
}
else if($quantity == null || $price == null || $quantity == 0)
{
    apologize("Both a quantity and price are required");
}



CS50::query("UPDATE books_owned SET quantity = quantity - $quantity WHERE user_id = $id AND (price = $price AND (isbn = $isbn OR (btitle = $btitle AND author = $author)))");

if($isbn == null)
{
    $isbn = 0;
}
else if($btitle == "''"){
    $btitle = "n/a";
}

if($author == "''"){
    $author = "n/a";
}

if($partner == null)
{
    $partner = "n/a";
}
CS50::query("INSERT INTO transactions (user_id, isbn, btitle, author, quantity, price, partner) VALUES(?, ?, ?, ?, ?, ?, ?)", $id, $isbn, $btitle, $author, $quantity, $price, $partner);
redirect("index.php");
//End of file
?>