<?php

$request_method = $_SERVER['REQUEST_METHOD'];

if($request_method === 'GET'){
    $message = '一回だけ投稿できます';
    $subMessage = '';
}

if($request_method === 'POST'){
    $message = $_POST['user'] . 'さんの投稿';
    $subMessage = $_POST['message'];
}

include_once 'index.php';

?>