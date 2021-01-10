<?php
//Получаем домены и приводим к перечислению через запятую.
if(isset($_POST['domains']) && $_POST['domains']) {
    $rows = $_POST['domains'];
    $domains = preg_replace('/[\n\r]+/', ', ', $rows);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $_POST['keitaroDomain'] . '/admin_api/v1/domains');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"name":"' . $domains . '","redirect":"https","is_ssl":true,"default_campaign_id":0,"wildcard":true,"catch_not_found":true}');

    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Api-Key: ' . $_POST['inputApi'];
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);

    //$json = json_decode(($result), true); // преобразовываем строку в Ассоциативный JSON массив

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}

