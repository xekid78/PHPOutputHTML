# PHPOutputHTML
HTML形式の出力

## 処理
HTML形式で関東の１都６県を表示するプログラムです。

## コード
```
<?php
$kanto = ["東京都", "茨木県", "栃木県", "群馬県", "埼玉県", "千葉県", "神奈川県"];
echo "<select name='area'>";
foreach ($area as $kanto) {
    echo "<option>".$area."</option>";
}
echo "</select>";
```
  
## 開発環境
| 開発ツール |  |
|:-|:-|
| OS | Windows10 |
| 仮想化ソフト | Oracle VM VirtualBox 5.2 |
| 構築ソフト | Vagrant 2.0.2 |
| 仮想化上OS | CentOS 6.9 |
| SSHクライアント | PuTTY 0.6.8 |
| FTPクライアント | Cyberduck 6.3.5 |
| エディタ | Atom 1.24.0 |
| 開発言語 | PHP 7.1.15 |
