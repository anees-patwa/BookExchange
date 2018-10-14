<?php foreach($contact_array as $contact):?>

<div class="row">
    <h1><?php echo "{$contact['first']} {$contact['last']}";?></h1>
</div>
<div class="row">
    <p>Lives in <?= $contact["town"]?></p>
</div>
<div class="row">
    <address>
        <abbr title="Phone"><strong>Phone:</strong></abbr> <?= $contact["phone"]?>
    </address>
</div>
<div class="row">
    <address>
        <strong>E-Mail:</strong><a href="mailto:#"><?= $contact["email"]?></a>
    </address>
</div>

<?php endforeach?>