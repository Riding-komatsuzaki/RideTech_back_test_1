<?php
/**
 * セクション1 テスト 1-19：価格配列に税をかけて合計（filter→map→sum）
 *
 * やること
 *  - 関数 sumWithTax(array $prices, float $tax): int を作る
 *  - 数値変換できるものだけ対象
 *  - 各要素に (1+$tax) を掛けて 四捨五入 → 合計 を int で返す
 *  - 丸めは 各要素ごと に行う
 *
 * テスト例
 *  echo sumWithTax([100, "200", "x", 50], 0.1);
 *  期待: 385 （110 + 220 + 55）
 *
 * 実行方法
 *  - php 1-19.php
 */
// ここから実装してください

function sumWithTax(array $prices, float $tax): int {
  $total = 0;

  foreach ($prices as $price) {
      // 1. 数値に変換できるものだけを対象にする
      if (is_numeric($price)) {
          // 2. 税率を掛けて計算
          $withTax = (float)$price * (1 + $tax);
          
          // 3. 各要素ごとに四捨五入して合計に足す
          $total += (int)round($withTax);
      }
  }

  return $total;
}

// テスト例
echo sumWithTax([100, "200", "x", 50], 0.1) . PHP_EOL;
