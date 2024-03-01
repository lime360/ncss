<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        header("Location: https://github.com/lime360/ncss");
        break;

    case '/n.css':
        header("Content-Type: text/css; charset=utf-8");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://raw.githubusercontent.com/lime360/ncss/main/n.css");
        $result = curl_exec($ch);
        echo substr($result, 0, strlen($result) - 1);
        break;

    case '/n.min.css':
        header("Content-Type: text/css; charset=utf-8");
        echo file_get_contents("n.min.css");
        break;

    default:
        http_response_code(404);
        echo "Not found.";
}
?>