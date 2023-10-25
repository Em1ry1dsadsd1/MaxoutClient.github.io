<?php
// Veritabanı bağlantı bilgilerini ayarlayın
$servername = "localhost";
$username = "root";
$password = "5775emir";
$dbname = "users";

// Kullanıcı adı ve şifre parametrelerini alın
$username = $_POST['username'];
$password = $_POST['password'];

// Veritabanı bağlantısını oluşturun
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol edin
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}

// Kullanıcı adı ve şifreyi veritabanına ekle
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarılı";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapatın
$conn->close();
?>