<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);
$sum = 0;
foreach ($menus as $menu) {
    echo $menu["name"] . "は" . $menu["price"] . "円です" . PHP_EOL;
    $sum += $menu["price"];
}

echo "合計金額は" . $sum . "円です";
