<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "alonh5750@gmail.com"; // כתובת המייל שלך
    $subject = "פנייה חדשה מהאתר";
    $body = "שם: $name\nטלפון: $phone\n\nתוכן הפנייה:\n$message";
    $headers = "From: no-reply@yourdomain.com\r\n"; // עדיף לשנות לדומיין שלך אם יש לך

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('ההודעה נשלחה בהצלחה!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('שגיאה בשליחת ההודעה.'); window.history.back();</script>";
    }
}
?>
