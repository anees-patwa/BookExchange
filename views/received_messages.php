<!-- file name: recieved_message.php          view that is displayed when navigating to messages tab of website that displays the messages that a user has recieved-->
<div class="container-fluid">
    <form action="contact.php" method="get" class="form-inline">
        <div id="usersearch" class="form-group" >
            <input class = "form-control" type="text" name="contact" placeholder="Username to Search" >
        </div>
    
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Reply
            </button>
        </div>
    </form>
    <form action = "messages.php" method="post" class ="form-inline">
        <div class="form-group" >
            <input class = "form-control" name="mnumber" type="number" placeholder="Number of Message">
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Delete
            </button>
        </div>
        <br>
        <br>
    </form>
    <div class="row">
        <?php
        foreach($messages_array as $message_row)
        {
            echo "
            <div class='col-md-12' style='border-style:outset;'>
                <h3>{$message_row["from_username"]}</h3>
                <h5>{$message_row["first"]} {$message_row["last"]}</h5>
                <p>{$message_row["time_sent"]}</p>
                <p>Message #: {$message_row["id"]}</p>
                <p style='text-align:left'>{$message_row["message"]}</p>
                
            </div>
            
            
            ";
        }
        ?>
    </div>
    
    
</div>
<!-- End of file-->