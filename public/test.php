<?php
require("../includes/config.php");

$id = $_SESSION["id"];
$isbn_array = CS50::query("SELECT isbn FROM books_owned WHERE id = $id");

$test_isbn = "9780980200447";

$url = "https://openlibrary.org/api/books?bibkeys=ISBN:" . $test_isbn . "&jscmd=data&format=json";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
$json = curl_exec($curl);
curl_close($curl);

$data = json_decode($json);

//dump($data);

$title = $data["ISBN:" . $test_isbn]["authors"];

dump($title);


?>