<!-- file name: search_form.php         view that is displayed when attempting to search for a book-->
<form action="search.php" method="post">
    <fieldset>
        <div class="form-group">
            <input class="form-control" type = "text" name = "isbn" placeholder="ISBN (no dashes please)">
        </div>
        <div class="form-group">
            <input class="form-control" type = "text" name = "btitle" placeholder="Book Title">
        </div>
        <div class="form-group">
            <input class="form-control" type = "text" name = "author" placeholder="Author's Last Name">
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Search
            </button>
        </div>
    </fieldset>
</form>
<!-- End of file-->