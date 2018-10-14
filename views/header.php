<!DOCTYPE html>
<!-- file name: header.php      used by render function in helpers.php-->
<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="/img/favicon.ico" />
        

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Hop Book XChange</title>
        <?php endif ?>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class = "container">

            <div id="top">
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class = "nav nav-pills">
                        <li><a href="index.php" title="display books that you own">Your Books</a></li>
                        <li><a href="search.php" title="search for used books to buy from other users">Search</a></li>
                        <li><a href="add.php" title="add a book to the ones that you own">Add Books</a></li>
                        <li><a href="update.php" title="record a transaction">Sell Books</a></li>
                        <li><a href="messages.php" title="see your messages">Messages</a></li>
                        <li><a href="contact.php" title="contact another user">Contact a User</a></li>
                        <li><a href="transactions.php" title="see the history of your transactions">Transactions</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div>
<!-- End of file-->