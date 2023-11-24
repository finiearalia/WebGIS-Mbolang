<?php
$email = $_POST['email'];
$nama_wisata = $_POST['nama_wisata'];
$lokasiwisata = $_POST['lokasiwisata'];

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mbolang";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO mbolang (email, nama_wisata, lokasiwisata)
VALUES ('$email', '$nama_wisata', '$lokasiwisata')";

if ($conn->query($sql) === TRUE) {
echo "Terima kasih atas rekomendasinya, data anda berhasil di tambahkan";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header("Location: index.html");
//exit;
?>
