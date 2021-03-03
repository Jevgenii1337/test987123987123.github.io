<meta http-equiv='refresh' content='3; url=https://jevgenii1337.github.io/test987123987123.github.io/index.html'>
<meta charset="UTF-8" />
<?php

	if (isset($_POST['name']) &amp;&amp; $_POST['name'] != "")//если существует атрибут NAME и он не пустой то создаем переменную для отправки сообщения
		$name = $_POST['name'];
	else die ("Не заполнено поле \"Имя\"");//если же атрибут пустой или не существует то завершаем выполнение скрипта и выдаем ошибку пользователю.

	if (isset($_POST['email']) &amp;&amp; $_POST['email'] != "") //тут все точно так же как и в предыдущем случае
		$email = $_POST['email'];
	else die ("Не заполнено поле \"Email\"");

	if (isset($_POST['phone']) &amp;&amp; $_POST['phone'] != "") 
		$phone = $_POST['phone'];
	else die ("Не заполнено поле \"Тема\"");

	if (isset($_POST['service']) &amp;&amp; $_POST['service'] != "") 
		$service = $_POST['service'];
	else die ("Не заполнено поле \"Сообщение\"");
	 


	$address = "lehamega2@yandex.ru";//адрес куда будет отсылаться сообщение для администратора
	$mes  = "Имя: $name \n";	//в этих строчках мы заполняем текст сообщения. С помощью оператора .= мы просто дополняем текст в переменную
	$mes .= "E-mail: $email \n";
 	$mes .= "Номер телефона: $phone \n";
 	$mes .= "Услуга: $service"; 
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");//собственно сам вызов функции отправки сообщения на сервере

	if ($send) //проверяем, отправилось ли сообщение
		echo "Сообщение отправлено успешно! Перейти на <a href='https://https://jevgenii1337.github.io/test987123987123.github.io/index.html/'>you-hands.ru</a>, если вас не перенаправило вручную.";
	else 
		echo "Ошибка, сообщение не отправлено! Возможно, проблемы на сервере";
		 
?>