<?php
/**
 * セクション1 テスト 1-14：行列を転置する（m×n → n×m）
 *
 * やること
 *  - 関数 transpose(array $matrix): array を作る
 *  - 空配列 または 各行の長さが不一致（長方形でない）なら 空配列 を返す
 *  - 正常時は m×n を n×m に転置
 *
 * テスト例
 *  $mat = [[1,2,3],[4,5,6]];
 *  print_r(transpose($mat));
 *  期待:
 *    Array
 *      ( 
 *        [0] => Array (
 *          [0] => 1
 *          [1] => 4
 *        )
 *        [1] => Array (
 *          [0] => 2
 *          [1] => 5
 *        )
 *        [2] => Array (
 *          [0] => 3
 *          [1] => 6
 *        )
 *      )
 *    )
 *
 * 実行方法
 *  - php 1-14.php
 */

// ここから実装してください

function transpose(array $matrix): array {
  // 1. 空配列のチェック
  if (empty($matrix)) {
      return [];
  }

  // 2. 各行の長さが一致するかチェック
  $rowCount = count($matrix);
  $colCount = count($matrix[0]);

  foreach ($matrix as $row) {
      if (count($row) !== $colCount) {
          return [];
      }
  }

  // 3. 転置処理
  $transposed = [];
  for ($j = 0; $j < $colCount; $j++) {
      $newRow = [];
      for ($i = 0; $i < $rowCount; $i++) {
          $newRow[] = $matrix[$i][$j];
      }
      $transposed[] = $newRow;
  }

  return $transposed;
}

// テスト
echo "--- 正常系 ---\n";
$mat1 = [[1, 2, 3], [4, 5, 6]];
print_r(transpose($mat1));

echo "\n--- 空配列 ---\n";
$mat2 = [];
print_r(transpose($mat2));

echo "\n--- 長さ不一致 ---\n";
$mat3 = [[1, 2, 3], [4, 5]];
print_r(transpose($mat3));
