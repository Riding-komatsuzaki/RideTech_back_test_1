<?php
/**
 * セクション1 テスト 1-2：数値にできるものだけ合計する
 *
 * やること
 *  1) $a="10", $b="3.5", $c="foo" を用意
 *  2) 数値に変換できるものだけを合計して表示（期待: 13.5）
 *  3) それぞれの型名を gettype() で1行ずつ表示
 *
 * ヒント: is_numeric(), (float)$a, trim() など
 *
 * 実行方法
 *  - php 1-2.php
 */
// ここから実装してください

$a = "10";
$b = "3.5";
$c = "foo";
$total = 0;

if (is_numeric($a)) {
  $total += (float)$a;
}
if (is_numeric($b)) {
  $total += (float)$b;
}
if (is_numeric($c)) {
  $total += (float)$c;
}

echo $total . PHP_EOL;

echo gettype($a) . PHP_EOL;
echo gettype($b) . PHP_EOL;
echo gettype($c) . PHP_EOL;
