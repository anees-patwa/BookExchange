<!-- file name: search_results.php      view that displays the book search results-->
<table class="table table-striped table-bordered">
    <tr>
        <th style="text-align:center;">Title</th>
        <th style="text-align:center;">Author</th>
        <th style="text-align:center;">ISBN</th>
        <th style="text-align:center;">Username</th>
        <th style="text-align:center;">Price</th>
        <th style="text-align:center;">Quantity</th>
    </tr>
    <?php foreach($matching_books as $matching_book)
    {
        $matching_book["price"] = "$" . $matching_book["price"];
        echo
            "<tr>
                <td>  {$matching_book["btitle"]} </td>
                <td>  {$matching_book["author"]} </td>
                <td>  {$matching_book["isbn"]} </td>
                <td>  {$matching_book["username"]} </td>
                <td>  {$matching_book["price"]}</td>
                <td>  {$matching_book["quantity"]}</td>
            </tr>";
    }
    ?>
</table>
<form action="contact.php" method="get" class="form-inline">
        <div id="usersearch" class="form-group" >
            <input class = "form-control" type="text" name="contact" placeholder="Username to Search" >
        </div>
        <div class="form-group" >
            <input class = "form-control" type="text" name="btitle" <?php if($matching_books[0]["btitle"] == "n/a") {echo "placeholder='Title'";} else{echo "value='{$matching_books[0]["btitle"]}'";}?> >
        </div>
        <div class="form-group" >
            <input class = "form-control" type="text" name="author" <?php if($matching_books[0]["author"] == "n/a") {echo "placeholder='Author'";} else{echo "value='{$matching_books[0]["author"]}'";}?> >
        </div>
        <div class="form-group" >
            <input class = "form-control" type="text" name="isbn" <?php if($matching_books[0]["isbn"] == 0) {echo "placeholder='ISBN'";} else{echo "value={$matching_books[0]["isbn"]}";}?> >
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Contact
            </button>
        </div>
</form>
<!-- End of file-->