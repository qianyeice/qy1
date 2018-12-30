<?php

$http = new swoole_http_server("0.0.0.0", 9501);
$http->on('request', function ($request,$response)  {
    $response->end('123.56.217.62的liveServices服务');
});
$res=$http->start();

