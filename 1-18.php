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

