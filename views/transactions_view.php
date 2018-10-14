<!-- file name: transactions_view.php      view that displays a user's transaction history-->
<table class="table table-striped">
    <tr>
        <th style="text-align:center;">Book Title</th>
        <th style="text-align:center;">Author</th>
        <th style="text-align:center;">ISBN</th>
        <th style="text-align:center;">Price</th>
        <th style="text-align:center;">Quantity Sold</th>
        <th style="text-align:center;">Transaction Partner</th>
    </tr>
    <?php foreach($history as $transaction)
    {
        $transaction["price"] = "$" . $transaction["price"];
            echo
            "<tr>
                <td>  {$transaction["btitle"]}</td>
                <td>  {$transaction["author"]}</td>
                <td>  {$transaction["isbn"]}</td>
                <td>  {$transaction["price"]}</td>
                <td>  {$transaction["quantity"]}</td>
                <td>  {$transaction["partner"]}</td>
            </tr>";
    }
    ?>
</table>
<!-- End of file-->