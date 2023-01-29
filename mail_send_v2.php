?php
if ((isset($_POST['name']) && $_POST['name'] != "") && 
   (isset($_POST['mail']) && $_POST['mail'] != "")) && 
   (isset($_POST['subject']) && $_POST['subject'] != "")) && 
   (isset($_POST['message']) && $_POST['message'] != "")) {
	$to = 'almadyne.music@gmail.com';
	function clearing($str)
	{
		$str = strip_tags($str);
		$str = htmlspecialchars($str);
		return $str;
	}
	$name = clearing($_POST['name']);
	$mail = clearing($_POST['mail']);
	$subject = clearing($_POST['subject']);
	$message = clearing($_POST['message']);
	$allmessage = '<html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Имя: ' . $_POST['name'] . '</p>                        
                        <p>Эл.почта: ' . $_POST['mail'] . '</p>                        
                        <p>Тема сообщения: ' . $_POST['subject'] . '</p>
                        <p>Сообщение: ' . $_POST['message'] . '</p>
                    </body>
                    </html>';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	mail($to, $subject, $allmessage, $headers);
	$answer['success'] = true;
} else {
	$answer['error'] = "Пожалуйста, введите все требуемые данные";
}
echo json_encode($answer);
?>
