<?php
/**
 * セクション1 テスト 1-17：usort で複合条件ソート
 *
 * やること
 *  - 関数 sortUsers(array $users): array を作る
 *  - 各要素は ['name'=>string,'score'=>int]
 *  - score の降順、同点は name の昇順 で並べ替える
 *  - usort と 比較関数 を使う（2回ソートは不可）
 *
 * テスト例
 *  $users = [
 *    ['name'=>'Ken','score'=>80],
 *    ['name'=>'Ann','score'=>80],
 *    ['name'=>'Bob','score'=>90],
 *  ];
 *  $sorted = sortUsers($users);
 *  foreach ($sorted as $u) {
 *    echo $u['name'] . '(' . $u['score'] . ')' . "\n";
 *  }
 *  期待:
 *    Bob(90)
 *    Ann(80)
 *    Ken(80)
 *
 * 実行方法
 *  - php 1-17.php
 */
// ここから実装してください

function sortUsers(array $users): array {
  // 元の配列を壊さないようにコピー
  $sorted = $users;

  usort($sorted, function ($a, $b) {
      // 1. score の比較（降順：大きい順）
      if ($a['score'] !== $b['score']) {
          // $b <=> $a にすることで降順になる
          return $b['score'] <=> $a['score'];
      }

      // 2. score が同じなら name の比較（昇順：辞書順）
      return $a['name'] <=> $b['name'];
  });

  return $sorted;
}

// テスト例
$users = [
  ['name' => 'Ken', 'score' => 80],
  ['name' => 'Ann', 'score' => 80],
  ['name' => 'Bob', 'score' => 90],
];

$sorted = sortUsers($users);
foreach ($sorted as $u) {
  echo $u['name'] . '(' . $u['score'] . ')' . "\n";
}
