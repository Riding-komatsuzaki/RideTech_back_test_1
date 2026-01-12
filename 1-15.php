<?php
/**
 * セクション1 テスト 1-15：2次元配列を一次元にフラット化
 *
 * やること
 *  - 関数 flatten2(array $matrix): array を作る
 *  - 第2階層だけを一次元に平坦化（順序を維持）
 *
 * テスト例
 *  print_r(flatten2([[1,2],[3],[4,5]]));
 *  期待:
 *    Array (
 *       [0] => 1
 *       [1] => 2
 *       [2] => 3
 *       [3] => 4
 *       [4] => 5
 *    )
 *
 * 実行方法
 *  - php 1-15.php
 */
// ここから実装してください

function flatten2(array $matrix): array {
  $result = [];

  foreach ($matrix as $subArray) {
      // 内側の配列が配列でない（単一の値）場合も考慮するなら is_array チェックを入れますが、
      // 今回の要件（2次元配列を前提）ならそのままループできます。
      foreach ($subArray as $value) {
          $result[] = $value;
      }
  }

  return $result;
}

// テスト例
print_r(flatten2([[1, 2], [3], [4, 5]]));
