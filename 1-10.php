<?php
/**
 * セクション1 テスト 1-10：注文合計のランキング
 *
 * やること
 *  1) 関数 topByTotal(array $orders, int $topN): string を作る
 *     - $orders は ['user'=>string,'total'=>number] の配列
 *     - total が数値に変換できるものだけ合算（それ以外は無視）
 *     - ユーザーごとの合計を求め、合計の降順で上位 $topN を "名前: 合計" のカンマ区切りで返す
 *  2) テストデータで上位3位を呼び出して結果を表示
 *     - $orders = [
 *         ['user'=>'Taro','total'=>100],
 *         ['user'=>'Mika','total'=>'120'],
 *         ['user'=>'Taro','total'=>50],
 *         ['user'=>'Ken','total'=>'x'],
 *         ['user'=>'Yuki','total'=>200],
 *         ['user'=>'Mika','total'=>'30'],
 *         ['user'=>'Ken','total'=>70],
 *         ['user'=>'Taro','total'=>'20'],
 *         ['user'=>'Yuki','total'=>'abc'],
 *         ['user'=>'Hana','total'=>150]
 *     ];
 *     - 期待: "Yuki: 200,Taro: 170,Hana: 150"
 *
 * 実行方法
 *  - php 1-10.php
 */
// ここから関数を定義してください
function topByTotal(array $orders, int $topN): string {
  $userTotals = [];

  // 1. ユーザーごとの合計を計算
  foreach ($orders as $order) {
      $user = $order['user'];
      $total = $order['total'];

      // 数値に変換できる場合のみ加算
      if (is_numeric($total)) {
          if (!isset($userTotals[$user])) {
              $userTotals[$user] = 0;
          }
          $userTotals[$user] += (float)$total;
      }
  }

  // 2. 合計の降順（大きい順）にソート
  arsort($userTotals);

  // 3. 上位 $topN を抽出してフォーマット
  $topList = array_slice($userTotals, 0, $topN, true);
  $results = [];
  foreach ($topList as $name => $sum) {
      $results[] = "{$name}: {$sum}";
  }

  // 4. カンマ区切りで返す
  return implode(",", $results);
}

// ここから表示処理を実装してください（テスト呼び出し）
$orders = [
  ['user' => 'Taro', 'total' => 100],
  ['user' => 'Mika', 'total' => '120'],
  ['user' => 'Taro', 'total' => 50],
  ['user' => 'Ken', 'total' => 'x'],
  ['user' => 'Yuki', 'total' => 200],
  ['user' => 'Mika', 'total' => '30'],
  ['user' => 'Ken', 'total' => 70],
  ['user' => 'Taro', 'total' => '20'],
  ['user' => 'Yuki', 'total' => 'abc'],
  ['user' => 'Hana', 'total' => 150]
];

echo topByTotal($orders, 3) . PHP_EOL;
