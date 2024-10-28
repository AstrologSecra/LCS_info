<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your-email@example.com"; // Замените на ваш адрес электронной почты
    $subject = "Сообщение с формы связи";
    $body = "Имя: $name\nEmail: $email\nСообщение: $message";

    if (mail($to, $subject, $body)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>