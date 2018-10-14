<!-- file name: update_form.php      view that is displayed when attempting to update the quantity owned of a particular book-->
<form action = "update.php" method = "post">
    <div class="form-group" >
        <input class = "form-control" type="text" name="isbn" placeholder="ISBN">
    </div>
    <div class="form-group" >
        <input class = "form-control" type="text" name="btitle" placeholder="Book Title">
    </div>
    <div class="form-group" >
        <input class = "form-control" type="text" name="author" placeholder="Author">
    </div>
    <div class="form-group" >
        <input class = "form-control" type="text" name="quantity" placeholder="Quantity">
    </div>
    <div class="form-group" >
        <input class = "form-control" type="text" name="price" placeholder="Price">
    </div>
    <div class="form-group" >
        <input class = "form-control" type="text" name="partner" placeholder="Transaction Partner's Username">
    </div>
    <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Sell
            </button>
        </div>
</form>
<!-- End of file-->