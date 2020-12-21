<?php
$url = 'https://mdgateway.easynvest.com.br/iwg/snapshot/?t=webgateway&c=8841484&q=PETR4,29,0,10|IBOV,1,0,10|VALE3,1,0,10';
//$url = API . TOKEN . '&q=' . ACTIONS;

xdebug_break();
$result = getConsult($url);

function getConsult($url)
{
    return json_decode(file_get_contents($url));
}
var_dump($result);