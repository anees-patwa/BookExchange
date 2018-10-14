<?php
//File name: messages.php
//controller for messages tab of website

require("../includes/config.php");

$id = $_SESSION["id"];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $delete_number = $_POST["mnumber"];
    CS50::query("DELETE FROM Messages WHERE id = $delete_number");
}

$messages_array = CS50::query("SELECT * FROM Messages WHERE to_id = $id ORDER BY time_sent DESC");
$i = 0;
foreach ($messages_array as $message)
{
    $from_id = $message["from_id"];
    $user_array = CS50::query("SELECT username, first, last FROM users WHERE id = $from_id");
    $username = $user_array[0]["username"];
    $first = $user_array[0]["first"];
    $last = $user_array[0]["last"];
    $messages_array[$i]["from_username"] = $username;
    $messages_array[$i]["first"] = $first;
    $messages_array[$i]["last"] = $last;
    $i++;
}

render("received_messages.php", ["title" => "Messages", "messages_array" => $messages_array]);
//End of file
?>