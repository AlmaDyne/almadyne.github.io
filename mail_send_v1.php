<!DOCTYPE html>
<html lang="en ru">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Cinematic music of different kinds">
        <meta name="keywords" content="AlmaDyne, music, cinematic">
        <title>AlmaDyne Music</title>
        <link rel="icon" href="img/favicon.jpg">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="MainHeader">
                <a href="index.html">
                    <h1>AlmaDyne</h1>
                    <p>Cinematic music of different kinds</p>
                </a>
            </div>
            <div class="HeaderEmblem1"></div>
            <div class="HeaderEmblem2"></div>
        </header>
        <nav>
            <div class="Navigation">
                <a href="index.html" title="Главная страница">MAIN</a>
                <a href="news.html" title="Новости проекта">NEWS</a>
                <a href="music.html" title="Музыкальный контент">MUSIC</a>
                <a href="info.html" title="О проекте">ABOUT</a>
                <a href="info.html#ContactInfo" title="Контактная информация">CONTACT</a>
            </div>
        </nav>
        <main>
            <aside>
                <div class="Empty"></div>
                <div class="AsideContainer">
                    <img class="AsideImg" src="img/sideset/Synthesizer.png" alt="Synthesizer">
                </div>
                <div class="Empty HiddenMediaForm"></div>
                <div class="AsideContainer HiddenMediaForm">
                    <img class="AsideImg" src="img/sideset/Horn.png" alt="Horn">
                </div>
                <div class="Empty HiddenMediaLevel3"></div>
                <div class="AsideContainer HiddenMediaLevel3">
                    <img class="AsideImg" src="img/sideset/ElectricBass.png" alt="Electric Bass">
                </div>
            </aside>
            <article class="MainArticle">
                <section class="CenterSection">
                    <div class="AboutProject">
                        <a href="img/AuthorPhoto.JPG" target="_blank" title="Увеличить в новом окне">
                            <img class="AuthorPhoto" src="img/AuthorPhoto.JPG" alt="Author Photo"></a>
                        <p>AlmaDyne &ndash; "синематический" проект композитора из Донецка Антона 
                            Тихоновича, известного под творческим псевдонимом Anthony Driverson 
                            ("Gamma" и др.), а также метал-проектом "Fatal Crisis". Музыка 
                            AlmaDyne весьма разноплановая, что соответствует современным 
                            запросам к универсальным композиторам, однако имеет определённые 
                            базисные стержни, которые могут проявляться как вместе, так и по 
                            отдельности в некоторых произведениях, &ndash; выразительный язык 
                            симфонического оркестра, плотная и насыщенная перкуссия, понятные 
                            мелодизм и настроение, мощная "стена звука". Различные комбинации и 
                            гибридные сочетания лишь подчёркивают индивидуальные формы авторских 
                            работ. Большинство произведений написаны как своеобразный рассказ в 
                            группах треков, объединённых какой-либо общей идеей, потому их с 
                            натяжкой можно отнести к трейлерной продакшн-музыке.</p>
                    </div>
                    <img class="ImgTextOrnament" src="img/TextOrnament.png" alt="Ornament">
                    <div id="ContactInfo">
                        <p>Связаться с автором проекта можно по электронной почте:</p>
                        <p  class="ContactMail"title="Щёлкните, чтобы скопировать e-mail">
                            almadyne.music@gmail.com</p>
                        <span class="CopyMessage"></span>
                    </div>
                    <img class="ImgTextOrnament" src="img/TextOrnament.png" alt="Ornament">
                    <div>
                        <spin id="MailFormAnchor"></spin>
                        <p>Вы можете написать сообщение <a class="FormTrigger" 
                            href="info.html#MailFormAnchor">прямо на сайте &#8680;</a></p>
                    </div>
                    <p></p>
                    <p></p>
                    <p></p>
                    <form id="MailFormObject" action="mail_send.php" method="post">
                        <table class="MailFormTable">
                            <col width="48%">
                            <col width="4%">
                            <col width="48%">
                            <tbody>
                                <tr>
                                    <td><label>Имя<span><sup>*</sup></span>:<br><input 
                                        class="TextField1" type="text" name="name" required /></label></td>
                                    <td></td>
                                    <td><label>Адрес почты<span><sup>*</sup></span>:<br><input 
                                        class="TextField2" type="email" name="mail" required /></label></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><label>Тема сообщения<span><sup>*</sup></span>:<br><input 
                                        class="TextField3" type="text" name="subject" required /></label></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><label>Сообщение<span><sup>*</sup></span>:<br><textarea 
                                        class="TextField4" type="text" name="message" maxlength="1000" 
                                        required></textarea></label></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="LimitNote">Максимум 1000 знаков</td>
                                    <td colspan="2">
                                        <div></div>
                                        <button type="submit" name="submit" class="SubmitButton">Отправить</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                    <div class="ArrowTopPageWrapper">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p>
                            <a class="ArrowTopPageBig" href="javascript:scroll(0,0)"><img src="img/IconArrowUpBig.png" 
                                alt="Arrow Up" title="Наверх"></a>
                            <a class="ArrowTopPageSmall" href="javascript:scroll(0,0)"><img src="img/IconArrowUpSmall.png" 
                                alt="Arrow Up" title="Наверх"></a>
                        </p>
                    </div>
                </section>
                <section class="RightSection">
                    <div class="Empty"></div>
                    <div class="RightImgContainer">
                        <img class="RightImg" src="img/sideset/Fiddle.png" alt="Fiddle">
                    </div>
                    <div class="Empty HiddenMediaForm"></div>
                    <div class="RightImgContainer HiddenMediaForm">
                        <img class="RightImg" src="img/sideset/Drums.png" alt="Drums">
                    </div>
                    <div class="Empty HiddenMediaLevel3"></div>
                    <div class="RightImgContainer HiddenMediaLevel3">
                        <img class="RightImg" src="img/sideset/Trumpet.png" alt="Trumpet">
                    </div>
                </section>
            </article>
        </main>
        <footer>
            <p>All rights reserved<br>@ 2023</p>
        </footer>
        <script src="mail_copy.js"></script>
        <script src="mailform_open.js"></script>

<?php

//Отключение предупреждений и нотайсов (warning и notice) на сайте
error_reporting( E_ERROR );

// проверка и создание переменных из полей формы		
if (isset($_POST['name']))	{$name = $_POST['name'];
if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email'];
if ($email == '') {unset($email);}}
if (isset($_POST['subject'])) {$subject = $_POST['subject'];
if ($subject == '') {unset($subject);}}
if (isset($_POST['message'])) {$message	= $_POST['message'];
if ($message == '') {unset($message);}}
if (isset($_POST['submit'])) {$submit = $_POST['submit'];
if ($submit == '') {unset($submit);}}

//стирание треугольных скобок из полей формы
if (isset($name) ) {
    $name=stripslashes($name);
    $name=htmlspecialchars($name);
}
if (isset($email) ) {
    $email=stripslashes($email);
    $email=htmlspecialchars($email);
}
if (isset($subject) ) {
    $subject=stripslashes($subject);
    $subject=htmlspecialchars($subject);
}
if (isset($message) ) {
    $message=stripslashes($message);
    $message=htmlspecialchars($message);
}

// адрес почты куда придет письмо
$address="almadyne.music@gmail.com";

// текст письма 
$note_message="Тема : $subject \r\n Имя : $name \r\n Email : $email \r\n 
    Сообщение : $message";

if (isset($name)  &&  isset($submit)) {
    mail($address, $note_message, "Content-type:text/plain; windows-1251");

    // сообщение после отправки формы
    echo "<p style='color:green;'>Уважаемый(ая) <b style='color:red;'>$name</b> 
        Ваше письмо отправленно успешно.<br>
        Спасибо.<br>
        Вам скоро ответят на почту <b style='color:red;'> $email</b>.</p>";
}

?>

    </body>
</html>
