<?php
$arSymbols = [];
$validSymbols = '';

for ($i = 'A'; $i != 'AA'; $i++) {
    $arSymbols[] = $i;
}

foreach ($arSymbols as $key => $value) {
    if (($key % 2) == 0 && $value != 'X') {
        $validSymbols = $validSymbols . $value;
    }
}

function sendToApi(string $data)
{
    $param = ['key' => md5($data)];

    $myCurl = curl_init();
    curl_setopt_array($myCurl, array(
        CURLOPT_URL => 'https://back-tr.dev.southmedia.ru/api/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($param)
    ));
    $response = curl_exec($myCurl);
    curl_close($myCurl);

    echo $response;
}

sendToApi($validSymbols);
