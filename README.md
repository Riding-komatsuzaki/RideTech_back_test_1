# セクション1 テスト配布ファイル（20問＋Docker）

このフォルダには、セクション1（PHP基礎）のテスト問題 **1-1〜1-20** と、最小の `docker-compose.yml` が含まれます。
各ファイルはコメントの指示（やること／テスト例）に従ってコードを書いてください。

## 実行方法（例）

### 1) CLIで直接実行
```bash
php 1-1.php
```

### 2) Docker最小構成でブラウザ確認
このフォルダを丸ごと任意の作業ディレクトリに置き、以下を実行します。

```bash
docker compose up -d
```

ブラウザで以下にアクセスします。
- http://localhost:8080/1-1.php
- http://localhost:8080/1-2.php
- …（1-20.phpまで同様）

停止・片付け:
```bash
docker compose down
```

### メモ
- 8080 が使用中なら `docker-compose.yml` の `ports` を `"8081:80"` に変更してください。
- Windows で OneDrive 直下だとボリュームマウントが失敗することがあります。`C:\work\section1_20_problems` のようなローカル配下を推奨します。
