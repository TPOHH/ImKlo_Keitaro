<?php
//Проверка введены ли данные

$option = isset($_POST['IMKlo_domain']) ? $_POST['IMKlo_domain'] : false;
if ($option) {
    //echo htmlentities($_POST['IMKlo_domain'], ENT_QUOTES, "UTF-8").'<br>';
} else {
    echo "Не указан домен на котором стоит кло <br>";
    return;
}

$option = isset($_POST['IMKlo_token']) ? $_POST['IMKlo_token'] : false;
if ($option) {
    //echo htmlentities($_POST['IMKlo_token'], ENT_QUOTES, "UTF-8").'<br>';
} else {
    echo "Не указан API ключ IM Klo <br>";
    return;
}

$option = isset($_POST['ImKlo_country']) ? $_POST['ImKlo_country'] : false;
if ($option) {
   // echo htmlentities($_POST['ImKlo_country'], ENT_QUOTES, "UTF-8").'<br>';
} else {
    echo "Не указаны страна(ы) для добавления в IM Klo <br>";
    return;
}


$option = isset($_POST['IMKlo_trf']) ? $_POST['IMKlo_trf'] : false;
if ($option) {
   // echo htmlentities($_POST['IMKlo_trf'], ENT_QUOTES, "UTF-8").'<br>';
} else {
    echo "Не выбран тип принимаемого трафика <br>";
    return;
}

//Получаем домены и переводим в массив
if(isset($_POST['domains']) && $_POST['domains']){
    $rows = $_POST['domains'];
    $domains_array = preg_split('/[\n\r]+/', $rows);
}
//Перебираем данные из массива
foreach ($domains_array as $domain) {
//$domain = $_POST['domains'];
//Добавляем домен в кло
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $_POST['IMKlo_domain'] . '/api/nadd_domain');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_token=' . $_POST['IMKlo_token'] . '&domain=' . $domain . '&geo=' . $_POST['ImKlo_country'] . '&type=' . $_POST['IMKlo_trf']);

    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);

    $IMKlo_domainStatus = $result;
    echo 'IM Klo: [' . $domain . '] – Статус добавления: ' . $IMKlo_domainStatus . '<br><br>';

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);



}