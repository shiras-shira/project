<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //embedding php in html code ?>
    <p> This is an <?php echo "AWESOME" ?> paragraph!</p>
    <?php
        /* multiple
        line
        comment! */
        //outputting hello world to browser
        echo "This is ALSO a paragraph!";
        //var with $
        $initials = "SNK";
        echo $initials;
    ?>
</body>
</html>