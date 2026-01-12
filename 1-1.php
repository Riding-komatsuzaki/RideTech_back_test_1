<?php
/**
 * セクション1 テスト 1-1：文字の表示と型の確認
 *
 * やること
 *  1) 変数 $name = "Taro" を作る
 *  2) 画面に "Hello, Taro!" と表示する（echo）
 *  3) 変数 $age = 20 を作り、var_dump($age) を表示する
 *
 * テスト例（期待出力）
 *  Hello, Taro!
 *  int(20)
 *
 * 実行方法
 *  - php 1-1.php
 */
// ここから実装してください
$name = "Taro";

echo "Hello, " . $name . "!" ;

echo "\n";


$age = 20;
var_dump($age);