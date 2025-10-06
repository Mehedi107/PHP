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

<!-- ++++++++++++++++++++++++++++++ -->
<!-- Class 4 (Handling form in PHP) -->
<!-- ++++++++++++++++++++++++++++++ -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Handling form in PHP</h1>

    <form action="includes/formHandler.php" method="post">
        <label for="firstName"></label>
        <input type="text" name="firstName" id="firstName">
        
        <label for="lastName"></label>
        <input type="text" name="lastName" id="lastName">
        
        <label for="selectPet"></label>
        <select name="selectPet" id="selectPet">
            <option value="none">none</option>
            <option value="cat">cat</option>
            <option value="dog">dog</option>
            <option value="bird">bird</option>
        </select>

        <input type="submit" value="submit">
    </form>
</body>

</html> -->


<!-- ++++++++++++++++++++++++++ -->
<!-- Class 5 (Operators in php) -->
<!-- ++++++++++++++++++++++++++ -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operators in php</h1>

    <?php
    $a = 'Hello';
    $b = 'world!';

    $c = $a . ' ' . $b;

    echo $c;
    echo "<br>";
    
    if (5 == 5 or 4 == 5) {
        echo "One condition is true";
    }
    
    echo "<br>";
    if (5 == 5 and 4 == 4) {
        echo "Both condition is true";
    }

    ?>
</body>
</html> -->


<!-- ++++++++++++++++++++++++++++++++++ -->
<!-- Class 6 (control structure in php) -->
<!-- ++++++++++++++++++++++++++++++++++ -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Control structure in php</h1>

    <?php
    $a = 3;

    $result = match($a) {
        1 => "Variable is one",
        2 => "Variable is two",

        default => "None is matched",
    };

    echo $result;
    ?>
</body>
</html> -->


<!-- ++++++++++++++++++++++++++++++++++++++++ -->
<!-- Class 7 (PHP expecise: Build calculator) -->
<!-- ++++++++++++++++++++++++++++++++++++++++ -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP expecise: Build calculator</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="number" name="num01" placeholder="number one" required>

        <select name="operator" id="">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>

        <input type="number" name="num02" placeholder="number one" required>

        <button>Calculate</button>
    </form>

    <?php
    $error = false;
    // get input data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST['operator']);

    }

    // if empty input field
    if (empty($num1) || empty($num2) || empty($operator)) {
        echo '<p style="color: red;">Please fill out the form!</p>';
        $error = true;
    }

    // if input not a number
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo '<p style="color: red;">Please enter a number!</p>';
        $error = true;
    }

    if (!$error) {
        $value = 0;

        switch ($operator) {
        case 'add':
            $value = $num1 + $num2;
            break;
        case 'subtract':
            $value = $num1 - $num2;
            break;
        case 'multiply':
            $value = $num1 * $num2;
            break;
        case 'divide':
            $value = $num1 / $num2;
            break;
        default: 
            echo '<p style="color: red;">Something went wrong!</p>';
        }

        echo "Result: " . $value . "</p>";
    }
    ?>
</body>
</html> -->


<!-- ++++++++++++++++++++++++++++++++++++++++ -->
<!-- Class 8 (Arrays in PHP) -->
<!-- ++++++++++++++++++++++++++++++++++++++++ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    <h1>Arrays in PHP</h1>

    <?php
    $arr = array("John", "Smith");
    $arr2 = ["Mehedi", "Hasan", "Habib"];

    var_dump($arr);

    echo "<br>";
    echo $arr2[1];

    // unset($arr2[1]);

    echo "<br>";
    echo $arr2[1];

    array_splice($arr2, 0, 1);

    echo "<br>";
    echo $arr2[1];

    // associative array
    $arr3 = [
        'cooking' => 'Mr. A',
        'security' => 'Mr. B',
        'cleaning' => 'Mr. C',
    ];
    
    echo "<br>";
    print_r($arr3);

    echo "<br>";
    echo $arr3['security'];

    // count content in array
    $arr4 = ['a', 'b', 'c', 'd'];

    echo "<br>";
    echo count($arr4);

    // sort array elements
    $arr5 = ['c', 'a', 'b','d'];

    sort($arr5);

    echo "<br>";
    print_r($arr5);

    // add element to the last
    $arr6 = ['a', 'b', 'c', 'd'];

    array_push($arr6, 'e');

    echo "<br>";
    print_r($arr6);

    // nested array
    $arr7 = ['a', [1, 2, 3], 'c'];
    echo "<br>";
    // print_r($arr7);
    echo $arr7[1][1];

    $arr8 = [
        'department1' => ['a', 'b', 'c'],
        'department2' => ['d', 'e', 'f'],
        'department3' => ['g', 'h', 'i'],
    ];

    echo "<br>";
    echo $arr8['department2'][1];


    ?>

</body>
</html>

<!-- ++++++++++++++++++++++++++++++++++++++++ -->
<!-- Class 9 (Bulit-in function in php) -->
<!-- ++++++++++++++++++++++++++++++++++++++++ -->