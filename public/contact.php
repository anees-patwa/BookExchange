<?php
//File name: contact.php
//controller for sending messages to other users

require("../includes/config.php");


if($_SERVER["REQUEST_METHOD"] != "POST")
{
    $to_username = null;
    $btitle = null;
    $author = null;
    $isbn = null;
    if(isset($_GET["contact"])){
        $to_username = $_GET["contact"];
    }
    if(isset($_GET["btitle"])){
        $btitle = $_GET["btitle"];
    }
    if(isset($_GET["author"])){
        $author = $_GET["author"];
    }
    if(isset($_GET["isbn"])){
        $isbn = $_GET["isbn"];
    }
    
    render("contact_form.php", ["title" => "Send Message", "to_username" => $to_username, "btitle" => $btitle, "author" => $author, "isbn" => $isbn ]);
}

$to_username = "'" . $_POST["to_username"] . "'";
$to_id_array = CS50::query("SELECT id FROM users WHERE username = $to_username");
if($to_id_array != null)
{
    $to_id = $to_id_array[0]["id"];
}
else
{
    apologize("Invalid username");
}

$message = $_POST["message"];
$from_id = $_SESSION["id"];

if(CS50::query("INSERT IGNORE INTO Messages (from_id, to_id, time_sent, message) VALUES(?,?,NOW(),?)", $from_id, $to_id, $message) != 0)
{
    render("message_sent.php", ["title" => "Sent"]);
}
else
{
    apologize("Message not sent");
}
//End of file
?>