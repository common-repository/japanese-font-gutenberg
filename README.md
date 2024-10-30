This project was bootstrapped with [Create Guten Block](https://github.com/ahmadawais/create-guten-block).

このディレクトリを編集する際の注意点:
今回Japanese Font for TinyMCEではGutenberg対応のためにcreate-guten-blockツールを使って作業時間の短縮を図ったのですがその弊害として注意点が出てきたので載せておきます。

本来このツールを使用した場合コンパイル等の作業を簡便化するためかnode_modulesディレクトリが作成されそこに様々なコンパイルツールがインストールされるようですがそのディレクトリが80MBと少し大きかったのでモジュールをzipとして同梱しています。

このため、このプラグインのGutenberg対応部分(gutenjpfontディレクトリ以下)を改変する場合は以下の作業が必要になる可能性があります。
1. zipの解凍

まずは改変するためにnode_module.zipを解凍してください。解凍したらnode_modulesディレクトリがあるはずなのでそれをそのままgutenjpfontフォルダ直下に置きます。
2.ビルド等

あとはcreate-guten-toolの公式ページ(https://github.com/ahmadawais/create-guten-block)の内容と基本的に変わらないのでそちらを参照してください。ちなみに簡単にまとめるとnpm startで開発ビルドしてくれます。

なおnode_module.zipは普通に使う場合は不要ですので容量が足りない等の理由で削除されたい場合は削除しても(たぶん)きちんと動きます。

何か問題があった場合はraspi0124[at]gmail.comにメールくださると幸いです。なおこの内容はこのままプラグインに同梱されています
