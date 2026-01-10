<?php
/**
 * セクション1 テスト 1-18：クロージャでカウンタを作る
 *
 * やること
 *  - 関数 makeCounter(int $start=0, int $step=1): callable を作る
 *  - 返された関数を 呼ぶたび に start, start+step, ... を返す
 *  - グローバル禁止。use (&$x) や static で内部状態を保持
 *
 * テスト例
 *  $c = makeCounter(10, 2);
 *  echo $c(), "\n"; // 10
 *  echo $c(), "\n"; // 12
 *  echo $c(), "\n"; // 14
 *
 * 実行方法
 *  - php 1-18.php
 */
// ここから実装してください

function makeCounter(int $start = 0, int $step = 1): callable {
  // 現在の値を保持する変数
  $current = $start;

  // 関数を返す。use (&$current) で外部の変数を参照（かつ書き換え可能に）する
  return function() use (&$current, $step) {
      $val = $current;    // 現在の値を保存
      $current += $step;  // 次回のために値を増やす
      return $val;        // 保存しておいた値を返す
  };
}

// テスト例
$c = makeCounter(10, 2);
echo $c(), "\n"; // 10
echo $c(), "\n"; // 12
echo $c(), "\n"; // 14
