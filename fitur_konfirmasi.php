$to = $email;
$subject = "Konfirmasi Pendaftaran Poliklinik";
$message = "Terima kasih $name, pendaftaran Anda telah diterima. Nomor antrean Anda akan diinformasikan segera.";
$headers = "From: no-reply@poliklinik.com";

mail($to, $subject, $message, $headers);
