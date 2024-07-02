<?php
if ($_POST) {
    // Log to the console
    error_log("PHP script reached");

    // Retrieve data from the POST request
    $condition = $_POST['conditionn'];
    $product_genre = $_POST['genre'];
    $price = $_POST['price'];
    $name = $_POST['name'];

    include_once 'connection.php';
    global $conn;

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO games (conditionn, genre, price, name) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssds", $condition, $product_genre, $price, $name);

    if ($stmt->execute()) {
        echo '<script>
            alert("Data created successfully.");
            window.location.href="galaxy.html";
        </script>';
        exit; // Stop further execution
    } else {
        echo '<script>
            alert("Error: ' . $sql . '<br>' . $stmt->error . '");
            window.location.href="galaxy.html";
        </script>';
        exit; // Stop further execution
    }
}
?>
