<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'stevanlim123@gmail.com'; // Ganti dengan email kamu
        $mail->Password   = 'jeef bldc hrbm bfwa'; // Gunakan App Password, bukan password biasa
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $nama);
        $mail->addAddress('stevanlim123@gmail.com'); // Tujuan (bisa sama seperti di atas)

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Pesan dari $nama";
        $mail->Body    = "
            <h4>Pesan dari Hubungi Kami:</h4>
            <p><strong>Nama:</strong> $nama</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Pesan:</strong><br>$pesan</p>
        ";

        $mail->send();
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Pesan gagal dikirim. Error: {$mail->ErrorInfo}'); window.location.href='index.php';</script>";
    }
}
?>