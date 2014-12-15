<?php
require_once dirname(__FILE__)."/lib/common.php";
require_once dirname(__FILE__)."/class/token.php";


$token = new Token($_Globals['Appid'], $_Globals['Secret']);

$openid = $token->getTokenOpenId();
?>