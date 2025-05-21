<?php

$conn = mysqli_connect("localhost", "root", "", "todolistdb_rodhy");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Tidak perlu require "koneksi.php" jika sudah ada $conn di atas

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"] ?? '');
    $status = htmlspecialchars($_POST["status"] ?? '');

    $stmt = mysqli_prepare($conn, "INSERT INTO todos (title, status) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $title, $status);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Data berhasil ditambahkan.";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
