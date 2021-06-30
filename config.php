<?php

$mysql = new mysqli('localhost', 'root', '***', 'crud');
$mysql->set_charset('utf8');

if($mysql == false) {
    echo 'Erro na conexão';
}
