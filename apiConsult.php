<?php
$url = API . TOKEN . '&q=' . ACTIONS;

xdebug_break();
$result = getConsult($url);

function getConsult($url)
{
    return json_decode(file_get_contents($url));
}
var_dump($result);