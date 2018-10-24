<?php
require dirname(__FILE__) . '/../util.php';
$config = (require dirname(__FILE__) . '/../../config.php');

$info = fetch_getinfo($config['api']);

print_r($info['last_known_block_index']);

?>