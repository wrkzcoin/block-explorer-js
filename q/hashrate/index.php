<?php
require dirname(__FILE__) . '/../util.php';
$config = (require dirname(__FILE__) . '/../../config.php');

$info = fetch_getinfo($config['api']);

$difficulty = $info['difficulty'];
$hashrate = round($difficulty / $config['blockTargetInterval']);

print_r($hashrate);
?>