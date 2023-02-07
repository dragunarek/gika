<?php
$errorMessage = null;
$successMessage = null;

if ($_POST) {
    $name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $message = htmlspecialchars($_POST['tresc']);

    if (empty($name) || empty($email) || empty($tresc)) {
        $errorMessage = 'Wypełnij wszystkie pola!';
    }

    if (is_null($errorMessage)) {
        mail(
            'dragunarek13@gmail.com',
            'Formularz kontaktowy',
            "Treść wiadomości: $tresc \n\n Imię: $name \n\n Adres e-mail: $email",
            "From: $name <$email>"
        );

        $successMessage = 'Wiadomość została wysłana';
    }
}
?>

