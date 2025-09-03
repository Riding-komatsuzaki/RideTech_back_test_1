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
 *    Array ( [x.com] => 3 [y.com] => 1 [z.com] => 1 )
 *
 * 実行方法
 *  - php 1-13.php
 */
// ここから実装してください

