<?php
    // print_r($_POST);
    $email = $_POST['email']; //почта отправителя
    $message = $_POST['message']; //сообщение отправителя

    $error = ''; //постоянная переменная для вывода ошибок

    if (trim($email) == ''){ //если отправитель не ввел свою почту
        $error = 'Введите ваш email';
    } else if(trim($message) == ''){ //если отправитель не ввел сообщение
        $error = 'Введите ваше сообщение';
    }

    if($error != ''){ //если переменная error не пустая то
        echo $error; //выводится на экран
        exit; //весь код после этой команды не будет выполняться
    }

    $subject = "=?utf-8?B?".base64_encode("Сообщение от сайта")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    
    if(mail('matveylazarev516@gmail.com', $subject, $message, $headers))
        echo"message send";
    else
        echo"message not send;
    
    //header('Location: index.php');
?>
