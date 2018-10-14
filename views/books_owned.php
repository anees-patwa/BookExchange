<!-- file name: books_owned.php      view that displays the books that a user owns-->
<table class = "table table-striped">
    <tr>
        <th style="text-align:center;">ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <?php foreach($books_owned_array as $book_owned) {
      echo "
      <tr>
        <td style='text-align:center;'>{$book_owned["isbn"]}</td>
        <td style='text-align:left;'>{$book_owned["btitle"]}</td>
        <td style='text-align:left;'>{$book_owned["author"]}</td>
        <td style='text-align:left;'>{$book_owned["price"]}</td>
        <td style='text-align:left;'>{$book_owned["quantity"]}</td>
      </tr>";    
    }
    ?>
</table>
<!-- End of file-->