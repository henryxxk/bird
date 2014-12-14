<?php
require "../lib/common.php";
$token = new Token($_Globals['Appid'], $_Globals['Secret']);

$openid = $token->getTokenOpenId();
?>