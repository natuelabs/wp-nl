<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mailman.php');

$message = 'Email em branco. Por favor preencha o email corretamente.';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];

    try {
        $newsletterService = new Mailman();
        if ($newsletterService->subscribe($email, $name)) {
            $message = 'Registro feito com sucesso!';
        } else {
            $message = 'Não foi possível registrar esse email, por favor tente outro endereço.';
        }
    } catch (Exception $e) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        $message = 'Desculpe, houve um erro. Tente novamente mais tarde.';
    }
}

echo $message;
