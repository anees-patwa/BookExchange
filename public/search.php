<?php
//File name: search.php
//controller for searching for books

//configuration
require("../includes/config.php");

//render search form
if($_SERVER["REQUEST_METHOD"] != "POST")
{
    render("search_form.php", ["Title" => "Search"]);
}

$isbn = $_POST["isbn"];
$btitle = $_POST["btitle"];
$author = $_POST["author"];

if($isbn != null)
{
    if($isbn < 1000000000000)
    {
        apologize("Only accept 13-digit ISBN's");
    }
    
    $matching_books = CS50::query("SELECT * FROM books_owned WHERE isbn = $isbn");
}
else if ($btitle != null && $author != null)
{
    $matching_books = CS50::query("SELECT * FROM books_owned WHERE btitle = ? AND author = ?", $btitle, $author);
}
else if($isbn == null && ($btitle == null || $author == null))
{
    apologize("Need both author and the title of the book, or the isbn of the book");
}

if($matching_books == null)
{
    apologize("Sorry, no one owns that book");
}
$i = 0;
foreach($matching_books as $matching_book)
{
    $id = $matching_book["user_id"];
    $username_array = CS50::query("SELECT username FROM users WHERE id = $id");
    $matching_books[$i]["username"] = $username_array[0]["username"];
    $i++;
    
}


render("search_results.php", ["title" => "Results", "matching_books" => $matching_books]);
//End of file
?>