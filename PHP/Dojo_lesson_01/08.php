<?php
$menu = array('name' => 'CURRY', 'price' => 900);
echo '$menuの値' . PHP_EOL;
var_export($menu);
echo PHP_EOL;
echo '-----' . PHP_EOL;

echo $menu['name'] . "は" . $menu["price"] . "円です" . PHP_EOL;
