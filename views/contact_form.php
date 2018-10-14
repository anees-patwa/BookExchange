<!-- file name: contact_form      view that is displayed when sending a message to another user-->
<form action = "contact.php" method = "post">
    <div class="form-group" >
        <input class = "form-control" type="text" name="to_username" <?php if($to_username != null){echo "value=" . "'" . $to_username . "'";}else{echo "placeholder='Username to Contact'";}?> >
    </div>
    <div class="form-group" >
         <?php if($isbn == null || $btitle == null || $author == null)
         {
            
            echo "<textarea class ='form-control' name='message'>Type your message here</textarea>";
         }
         else
         {
            echo "<textarea class ='form-control' name='message'>ISBN: " . $isbn . "            Title: " .  $btitle .  "            Author: " .  $author .  "</textarea>";
          }?>
        
    </div>
    <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Send
            </button>
        </div>
</form>
<!-- End of file-->
