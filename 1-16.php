<?php
/**
 * セクション1 テスト 1-16：ドット区切りパスで安全に取り出す
 *
 * やること
 *  - 関数 getIn(array $arr, string $path, $default=null) を作る
 *  - 例: "user.profile.name" のようにドット区切りで深い値へアクセス
 *  - 途中でキーが無い／配列でない場合は $default を返す
 *  - 数値キー（"0" など）にも対応
 *
 * テスト例
 *  $data = ['user'=>['profile'=>['name'=>'Mika']]];
 *  echo getIn($data, 'user.profile.name', 'NA'), "\n";
 *  echo getIn($data, 'user.address.city', 'NA'), "\n";
 *  期待:
 *    Mika
 *    NA
 *
 * 実行方法
 *  - php 1-16.php
 */
// ここから実装してください

