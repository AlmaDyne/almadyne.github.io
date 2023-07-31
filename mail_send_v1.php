<?php
/*
//Отключение предупреждений и нотайсов (warning и notice) на сайте
error_reporting( E_ERROR );
*/
// проверка и создание переменных из полей формы		
if (isset($_POST['name']))	{$name = $_POST['name'];
if ($name == '') {unset($name);}}
if (isset($_POST['mail'])) {$mail = $_POST['mail'];
if ($mail == '') {unset($mail);}}
if (isset($_POST['subject'])) {$subject = $_POST['subject'];
if ($subject == '') {unset($subject);}}
if (isset($_POST['message'])) {$message	= $_POST['message'];
if ($message == '') {unset($message);}}
if (isset($_POST['submit'])) {$submit = $_POST['submit'];
if ($submit == '') {unset($submit);}}
/*
//стирание треугольных скобок из полей формы
if (isset($name) ) {
    $name=stripslashes($name);
    $name=htmlspecialchars($name);
}
if (isset($mail) ) {
    $mail=stripslashes($mail);
    $mail=htmlspecialchars($mail);
}
if (isset($subject) ) {
    $subject=stripslashes($subject);
    $subject=htmlspecialchars($subject);
}
if (isset($message) ) {
    $message=stripslashes($message);
    $message=htmlspecialchars($message);
}
*/
// адрес почты куда придет письмо
$address="almadyne.music@gmail.com";

// текст письма 
$note_message="Тема : $subject \r\n Имя : $name \r\n Email : $mail \r\n 
    Сообщение : $message";

if (isset($name)  &&  isset($submit)) {
    mail($address, $note_message, "Content-type:text/plain; windows-1251");

    // сообщение после отправки формы
    echo "<p style='color:green;'>Уважаемый(ая) <b style='color:red;'>$name</b> 
        Ваше письмо отправленно успешно.<br>
        Спасибо.<br>
        Вам скоро ответят на почту <b style='color:red;'> $mail</b>.</p>";
}

?>
