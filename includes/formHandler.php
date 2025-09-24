<?php
// var_dump($_SERVER['REQUEST_METHOD']);

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $selectedPet = htmlspecialchars($_POST['selectPet']);

    if (empty($firstName)) {
        exit();
        header('Location: ../index.php');
    }

    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $selectedPet;

    header('Location: ../index.php');
}else {
    header('Location: ../index.php');
}