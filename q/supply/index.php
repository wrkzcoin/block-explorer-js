<?php
require dirname(__FILE__) . '/../util.php';
$config = (require dirname(__FILE__) . '/../../config.php');

$hashData = url_get_contents_post($config['api'], 'getlastblockheader', '""');
$hash = $hashData['result']['block_header']['hash'];

$blockData = url_get_contents_post($config['api'], 'f_block_json', '{"hash":"'.$hash.'"}');
$supplyRaw = $blockData['result']['block']['alreadyGeneratedCoins'];

$supply = number_format($supplyRaw / $config['coinUnits'], 2, ".", "");

print_r($supply);
?>