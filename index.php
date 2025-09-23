<!-- ++++++++++++++++++++++ -->
<!-- Class 1 -->
<!-- ++++++++++++++++++++++ -->

<!-- <?php if (true) { ?>
    <?php // this is how we write comment in php! 
    ?>
    <p>Some HTML text!</p>
<?php } ?> -->


<!-- ++++++++++++++++++++++ -->
<!-- Class 2 (Data Types) -->
<!-- ++++++++++++++++++++++ -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p>This is a paragraph text!</p>

    <?php echo 'This is also a paragraph text!' ?>

    <?php
    // scalar types (single value)
    $string = "Mehedi";
    $int = 123;
    $float = 20.36;
    $bool = true;

    // array type
    $arr1 = array('john', 'doe', 'smith');
    $arr2 = ['john', 'doe', 'smith'];

    // object types
    // $obj = new Car();
    ?>
</body>
</html> -->

<!-- +++++++++++++++++++++++++++++++++++++ -->
<!-- Class 3 (Pre-defined variable in php) -->
<!-- +++++++++++++++++++++++++++++++++++++ -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-defined variable in php</title>
</head>

<body>
    <h1>Pre-defined variable in php</h1>
    <?php
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];

    echo "<br>";
    echo $_GET["name"];
    echo "<br>";
    echo $_REQUEST["name"]; // not recomended
    echo "<br>";
    // echo $_FILES["name"];
    echo "<br>";
    // echo $_COOKIE["name"];
    echo "<br>";
    $_SESSION["myName"] = "Mehedi hasan";
    echo $_SESSION["myName"];
    echo "<br>";
    // echo $_ENV[""];

    ?>
</body>

</html> -->