<?php
$utf8 = header ("Content-Type: text/html; charset=utf-8");
$link = new mysqli ('localhost','root','','cadcli');
$link->set_charset('utf8');