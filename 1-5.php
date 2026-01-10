<?php
/**
 * セクション1 テスト 1-5：for と foreach を比べて表示
 *
 * やること
 *  1) $fruits = ['apple','banana','orange']
 *  2) for で "index:value" 形式（例: 0:apple）で全部表示
 *  3) foreach で 値だけ を 1 行ずつ表示
 *
 * 実行方法
 *  - php 1-5.php
 */
// ここから実装してください

$fruits = [
  'apple',
  'banana',
  'orange'
];

for ($i =0;
$i < count($fruits);
$i++
){
  echo $i . "i" . $fruits[$i] . PHP_EOL;
}

foreach (
  $fruits as $fruit){
    echo $fruit . PHP_EOL;
  }
