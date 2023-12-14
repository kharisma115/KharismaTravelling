<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir pemesanan
    $name = $_POST["name"];
    $email = $_POST["email"];
    $destination = $_POST["destination"];
    $departureDate = $_POST["departure-date"];
    $returnDate = $_POST["return-date"];
    $passengers = $_POST["passengers"];

    // Proses data sesuai kebutuhan Anda
    // Misalnya, simpan data dalam database, kirim email konfirmasi, dll.

    // Contoh pengiriman email konfirmasi
    $to = "YOUR_EMAIL@example.com";
    $subject = "Pemesanan Perjalanan";
    $message = "Nama: $name\n"
        . "Email: $email\n"
        . "Tujuan: $destination\n"
        . "Tanggal Keberangkatan: $departureDate\n"
        . "Tanggal Kembali: $returnDate\n"
        . "Jumlah Penumpang: $passengers\n";

    // Untuk pengiriman email, Anda mungkin perlu mengonfigurasi server email
    // atau menggunakan pustaka PHPMailer atau fungsi mail() yang disediakan PHP
    // Misalnya, jika menggunakan fungsi mail():
    mail($to, $subject, $message);

    // Redirect pengguna setelah pemesanan selesai
    header("Location: confirmation_page.php");
    exit();
} else {
    // Jika bukan metode POST, arahkan pengguna ke halaman pemesanan
    header("Location: booking_page.php");
    exit();
}
