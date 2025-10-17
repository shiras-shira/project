<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //scalar types = contains one value
    $hi = "Hello World!";
    $adjective = "AWESOME";
    //array types = contains multiple values
    $fruits = array("Apple", "Banana", "Cherry");
    $fruits2 = ["Apple", "Banana", "Cherry"];
    ?>
    <?php //embedding php in html code ?>
    <p> This is an <?php echo $adjective; ?> paragraph!</p>
    <?php
        /* multiple
        line
        comment! */
        //outputting hello world to browser
        echo "This is ALSO a paragraph! <br>";
        //var with $
        $initials = "SNK <br>";
        echo $initials;

        //pre-defined variables
        echo "Document Root: ";
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo "Current Page: ";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo "Server Name: ";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_GET["name"];
        //request method grabs everything
        echo $_REQUEST["name"];
    ?>
</body>
</html>