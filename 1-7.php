<?php
/**
 * セクション1 テスト 1-7：平均値を計算する関数（非数は無視）
 *
 * やること
 *  1) 関数 avgOf(array $xs): float を作る
 *     - 数値に変換できる要素のみ対象に平均を計算
 *     - 対象 0 件のときは 0.0 を返す
 *  2) テスト: [1, "2", "x", 3.0] を渡し、小数第 1 位まで表示（例: 2.0 など）
 *
 * 実行方法
 *  - php 1-7.php
 */
// ここから関数を定義してください
function avgOf(array $xs): float {
  $sum = 0;
  $count = 0;

  foreach ($xs as $x) {
      // 数値に変換できるものだけを対象にする
      if (is_numeric($x)) {
          $sum += (float)$x;
          $count++;
      }
  }

  // 対象が0件なら 0.0 を返す（0で割るエラーを防ぐ）
  if ($count === 0) {
      return 0.0;
  }

  return $sum / $count;
}

// ここから表示処理を実装してください（テスト呼び出し）
$data = [1, "2", "x", 3.0];
$result = avgOf($data);

// 小数第1位まで表示
printf("%.1f" . PHP_EOL, $result);
