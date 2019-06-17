<?php
    $phone = $_POST['telephone-number'];
    $comment = $_POST['message'];

    $token = "618080383:AAFEAEwfVs9iq3NuefXJPCAOjUl6EXIKimo";
    $chat_id = "-313691712";

    $arr = array(
        'Телефон:' => $phone,
        'Комментарий:' => $comment
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>
