<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from form submission
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // Add data to the file or database (you can replace this with your preferred storage method)
    $file = 'data.json';
    $data = json_decode(file_get_contents($file), true);
    $data[] = array("name" => $name, "age" => $age, "gender" => $gender);
    file_put_contents($file, json_encode($data));
}

// Redirect back to the main page
header("Location: index.php");
exit();
?>