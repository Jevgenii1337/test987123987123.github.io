<?

if ($_POST['who'] == 'robot') {
    header('Refresh: 5; URL=localhost/new-project');
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1 style="color:red">Ошибка!</h1>
    <p><b>Не отправлено,</b> так как вы являетесь роботом!<br>
    Через 5 секунд вы вернетесь на главную страницу.</body></p>');
} elseif ($_POST['mail'] == true) {
    $mail = $_POST['mail'];
    if ($_POST['name'] == true) {
        $name = $_POST['name'];
    } else {
        $name = 'Отправитель';
    };

    if ($_POST['phone'] == true) {
        $phone = $_POST['phone'];
    } else {
        $phone = 'Телефон';
    };

    // if ($_POST['company'] == true) {
    //     $company = $_POST['company'];
    // } else {
    //     $company = 'Компания';
    // };

    // if ($_POST['site'] == 'http://') {
    //     $site = $_POST['website'];
    // } else {
    //     $site = 'Сайт отправителя';
    // };

    // if ($_POST['product'] !== true) {
    //     $product = $_POST['product'];
    // } else {
    //     $product = 'Продукт';
    // };

    if ($_POST['service'] == none) {
        $ser = 'Услуга не выбрана';
    } elseif ($_POST['service'] == 1) {
        $ser = 'Услуга_';
    } elseif ($_POST['service'] == 2) {
        $ser = 'Услуга_';
    } elseif ($_POST['service'] == 3) {
        $ser = 'Услуга_';
    } elseif ($_POST['service'] == 4) {
        $ser = 'Услуга_';
    } elseif ($_POST['service'] == 5) {
        $ser = 'Услуга_';
    // } elseif ($_POST['service'] == 6) {
    //     $ser = 'Услуга_';
    // } elseif ($_POST['service'] == 7) {
    //     $ser = 'Услуга_';
    } else {
        $ser = 'Услуга_последняя';
    }

    // if ($_POST['message'] == true) {
    //     $question = $_POST['message'];
    // } else {
    //     $message = 'Доп. информация';
    };

    $mess = '
    Отправитель: ' . $name . '
    E-mail:' . $mail . '
    Телефон:' . $phone . '
    Необходимые услуги: ' . $ser . '

    $email = 'lehamega2@yandex.ru';
    $headers = "From: $email\r\nReply-To: $email" . "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8";

    mail('адрес_доставки_писем', 'Форма обратной связи', $mess, $headers);
    header('Refresh: 5; URL=web.html');
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1>Ваше сообщение отправлено!</h1>
    <p>Наши специалисты свяжутся с вами в ближайшее время.<br>
    Через 5 секунд вы вернетесь на главную страницу.</body>');
    $title = 'Сообщение отправелно';
} else {
    header('Refresh: 5; URL=index.html');
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1 class="red">Ошибка отправки сообщения!</h1><p>Проверьте правильность заполненных данных.<br>
    Через 5 секунд вы вернетесь на главную страницу.');
    $title = 'Ошибка!';

};

echo ('<br/><br/>');

?>

<?
include $_SERVER['DOCUMENT_ROOT'] . '/inc/inter';
include $_SERVER['DOCUMENT_ROOT'] . '/inc/footer'; ?>