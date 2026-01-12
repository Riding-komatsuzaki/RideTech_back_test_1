<?php
/**
 * セクション1 テスト 1-13：メールのドメイン別に件数を数える
 *
 * やること
 *  - 関数 countByDomain(array $emails): array を作る
 *  - "user@domain" 形式から ドメイン を取り出して件数をカウント
 *  - 返す配列は 件数の降順、同数は ドメイン名の昇順 に並べ替え
 *  - 不正形式（"@" が1つでない等）は無視
 *
 * テスト例
 *  $emails = ['a@x.com','b@y.com','c@x.com','bad','d@z.com','e@x.com'];
 *  print_r(countByDomain($emails));
 *  期待:
 *    Array ( 
 *      [x.com] => 3 
 *      [y.com] => 1 
 *      [z.com] => 1 
 *    )
 *
 * 実行方法
 *  - php 1-13.php
 */
// ここから実装してください

function countByDomain(array $emails): array {
  $counts = [];

  foreach ($emails as $email) {
      // "@" で分割
      $parts = explode("@", $email);

      // "@" が1つだけで、分割後の要素が2つある場合のみ処理
      if (count($parts) === 2) {
          $domain = $parts[1];
          
          if (!isset($counts[$domain])) {
              $counts[$domain] = 0;
          }
          $counts[$domain]++;
      }
  }

  // 並べ替えのルール：
  // 1. 件数（値）の降順 (desc)
  // 2. ドメイン名（キー）の昇順 (asc)
  uksort($counts, function($a, $b) use ($counts) {
      // まず件数で比較
      if ($counts[$a] !== $counts[$b]) {
          // 件数が多い方を前にする（降順）
          return $counts[$b] <=> $counts[$a];
      }
      // 件数が同じなら、ドメイン名で比較（昇順）
      return $a <=> $b;
  });

  return $counts;
}

// テスト
$emails = ['a@x.com', 'b@y.com', 'c@x.com', 'bad', 'd@z.com', 'e@x.com'];
print_r(countByDomain($emails));
