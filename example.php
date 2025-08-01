<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
    <style>
        h1 {
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>PHP with HTML🐤</h1>
    <?php

        echo "flook 555+😎<br>";
        echo "<b>studio</b>";
        echo "<h1>teach basic php</h1>";

        print('flook print 😎 🐤');

    ?>

    <form action="/submit-form.php" method="post">
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first-name" value="<?php echo "flook🐥"; ?>">

    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last-name" value="<?php echo "Tantiwong"; ?>">

    <button type="submit">Submit</button>
</form>

</body>
</html>