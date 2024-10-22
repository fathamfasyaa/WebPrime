<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $mail = new PHPMailer(true);

        try {
            // Konfigurasi server
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Ganti dengan SMTP server Anda
            $mail->SMTPAuth   = true;
            $mail->Username   = 'reyniotaa@gmail.com'; // Ganti dengan username SMTP Anda
            $mail->Password   = 'brpbyqsuvetwfikt'; // Ganti dengan password SMTP Anda
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Penerima
            $mail->setFrom($request->email, $request->name);
            $mail->addAddress('hafidz.5099@gmail.com'); // Ganti dengan alamat email penerima

            // Konten
            $mail->isHTML(true);
            $mail->Subject = 'Pesan baru dari form kontak';
            $mail->Body    = "Pak ini Email dari netizen
            Email: {$request->email}";

            $mail->send();
            return back()->with('success', 'Pesan berhasil dikirim!');
        } catch (Exception $e) {
            return back()->with('error', "Pesan tidak dapat dikirim. Error: {$mail->ErrorInfo}");
        }
    }
}
