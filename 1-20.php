<?php
/**
 * セクション1 テスト 1-20：{{name}} のような簡易テンプレート置換
 *
 * やること
 *  - 関数 render(string $tpl, array $vars): string を作る
 *  - テンプレート中の {{キー名}} を $vars の値で置換（未定義はそのまま残す）
 *  - 値は (string) で文字列化してよい
 *
 * テスト例
 *  echo render("Hello, {{name}} ({{age}}).", ['name'=>'Mika','age'=>22]), "\n";
 *  echo render("Hello, {{name}} ({{age}}).", ['name'=>'Ken']), "\n";
 *  期待:
 *    Hello, Mika (22).
 *    Hello, Ken ({{age}}).
 *
 * 実行方法
 *  - php 1-20.php
 */
// ここから実装してください

function render(string $tpl, array $vars): string {
  $search = [];
  $replace = [];

  foreach ($vars as $key => $value) {
      // 検索する文字列のパターンを作成: {{name}} など
      $search[] = '{{' . $key . '}}';
      // 置き換える値（文字列にキャスト）
      $replace[] = (string)$value;
  }

  // まとめて置換を実行
  // $vars にないキーは $search 配列に含まれないため、テンプレート内にそのまま残ります
  return str_replace($search, $replace, $tpl);
}

// テスト例
echo render("Hello, {{name}} ({{age}}).", ['name' => 'Mika', 'age' => 22]) . "\n";
echo render("Hello, {{name}} ({{age}}).", ['name' => 'Ken']) . "\n";

