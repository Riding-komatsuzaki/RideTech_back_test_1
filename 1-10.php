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

// ここから表示処理を実装してください（テスト呼び出し）

