<?php
/**
 * セクション1 テスト 1-12：最初の出現だけ残す重複削除
 *
 * やること
 *  - 関数 uniqueStable(array $xs): array を作る
 *  - 厳密比較（===）で重複判定し、最初の出現だけ残す
 *
 * テスト例
 *  $xs = [1, "1", 1, 2, 2, "2"];
 *  // print_r だと型の違いが見えません。型も確認したい場合は var_dump を使ってください。
 *  var_dump(uniqueStable($xs));
 *  期待（型が区別されることに注意）:
 *    array(4) {
 *     [0]=>
 *     int(1)
 *     [1]=>
 *     string(1) "1"
 *     [2]=>
 *     int(2)
 *     [3]=>
 *     string(1) "2"
 *   }
 *
 * 実行方法
 *  - php 1-12.php
 */
// ここから実装してください

function uniqueStable(array $xs): array {
  $result = [];

  foreach ($xs as $x) {
      // すでに結果の配列の中に「厳密比較（true）」で同じ値が入っているかチェック
      if (!in_array($x, $result, true)) {
          // 入っていなければ追加
          $result[] = $x;
      }
  }

  return $result;
}

// テスト
$xs = [1, "1", 1, 2, 2, "2"];
var_dump(uniqueStable($xs));
