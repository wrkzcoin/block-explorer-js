<?php
function build_rpc_body(string $method, string $params) {
        return '{"jsonrpc":"2.0","id":"blockexplorer","method":"'.$method.'","params":'.$params.'}';
};

function fetch_getinfo(string $api) {
        $_url = $api . '/getinfo';
        $response = url_get_contents($_url);
        return json_decode($response, true);
};

function url_get_contents ($Url) {
    if (!function_exists('curl_init')){
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function url_get_contents_post (string $api, string $method, string $params) {
    if (!function_exists('curl_init')){
        die('CURL is not installed!');
    }
    $url = $api . '/json_rpc';
    $rendered_rpc = build_rpc_body($method, $params);
    
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $url);
    curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $rendered_rpc);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch2, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($rendered_rpc))
        );
    $output = curl_exec($ch2);
    curl_close($ch2);
    return json_decode($output, true);
}

?>