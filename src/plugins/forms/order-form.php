<?php
    $phone = $_POST['telephone-number'];
    $model = $_POST['product-name'];
    $material = $_POST['product-material'];
    $color = $_POST['product-color'];


    $token = "618080383:AAFEAEwfVs9iq3NuefXJPCAOjUl6EXIKimo";
    $chat_id = "-313691712";

    $arr = array(
        'Телефон:' => $phone,
        'Модель:' => $model,
        'Материал дивана:' => $material,
        'Цвет:' => $color
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if ($sendToTelegram) {
        header('Location: ../../index.html');
    } else {
        echo "Error";
    }

    return true;
?>
