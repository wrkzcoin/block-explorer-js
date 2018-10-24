<?php
require dirname(__FILE__) . '/../util.php';
$config = (require dirname(__FILE__) . '/../../config.php');

$blockHeader = url_get_contents_post($config['api'], 'getlastblockheader', '" "');
$rewardRaw = $blockHeader['result']['block_header']['reward'];
$reward = number_format($rewardRaw / 100, 2, ".", "");

print_r($reward);

?>