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
        $mail->Username   = 'stevanlim123@gmail.com';
        $mail->Password   = 'jeef bldc hrbm bfwa';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & Recipient
        $mail->setFrom('stevanlim123@gmail.com', 'Waroeng Console');
        $mail->addAddress('stevanlim123@gmail.com'); // Email tujuan tetap ke kamu
        $mail->addReplyTo($email, $nama); // Email balasan diarahkan ke pengisi form

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
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='hubungikami.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Pesan gagal dikirim. Error: {$mail->ErrorInfo}'); window.location.href='hubungikami.php';</script>";
    }
}
?>
