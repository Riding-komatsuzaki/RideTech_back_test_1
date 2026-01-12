<?php
/**
 * セクション1 テスト 1-6：関数とデフォルト引数
 *
 * やること
 *  1) 関数 greeting(string $name = "Guest"): string を作る
 *  2) greeting("Mika") と greeting() の戻り値をそれぞれ 1 行ずつ表示
 *
 * 実行方法
 *  - php 1-6.php
 */
// ここから関数を定義してください
function greeting(string $name = "Guest"): string {
  return "Hello, " . $name . "!";
}

// ここで関数を呼び出して表示してください
echo greeting("Mika") . PHP_EOL;
echo greeting() . PHP_EOL;
