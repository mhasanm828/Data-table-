<?php
// Read data from file or database (you can replace this with your preferred storage method)
$file = 'data.json';
$data = json_decode(file_get_contents($file), true);

// Render table rows
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['age']}</td>";
    echo "<td>{$row['gender']}</td>";
    echo "</tr>";
}
?>