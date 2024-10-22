<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController2 extends Controller
{
    public function sendEmail2(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nameTerakhir' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $mail = new PHPMailer(true);

        try {
            // Pengaturan server
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
            $mail->addAddress('acilsebleker@gmail.com'); // Ganti dengan alamat email penerima

            // Konten
            $mail->isHTML(true);
            $mail->Subject = 'Pesan baru dari form kontak';
            $mail->Body    = "Pak ini kontak dari netizen
            nama awal: {$request->name} <br>nama akhri: {$request->nameTerakhir} <br>email: {$request->email} <br>nomber telfon: {$request->phone} ";
            // = "Nama: {$request->name}<br>Email: {$request->email}<br>Pesan: {$request->message}";
            $mail->send();
            return back()->with('success', 'Pesan berhasil dikirim!');
        } catch (Exception $e) {
            return back()->with('error', "Pesan tidak dapat dikirim. Error: {$mail->ErrorInfo}");
        }
    }
}
