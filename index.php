<?php

    // // 文字コード設定
    header('Content-Type: application/json; charset=UTF-8');
    header("Access-Control-Allow-Origin: *");
    // numが存在するかつnumが数字のみで構成されているか
    if(isset($_GET["code"]) ) {
        // numをエスケープ(xss対策)
        $param = htmlspecialchars($_GET["code"]);
        // メイン処理
        $arr["status"] = "yes";
        $arr["code"] = $param;
        $arr['body']['company'] = "SES株式会社";
        $arr['body']['mail'] = "chiba@se-sendai.co.jp";
        $arr['body']['company_address'][0]['name'] = "東京オフィス";
        $arr['body']['company_address'][0]['post'] = "〒 150-0002";
        $arr['body']['company_address'][0]['address'] = "東京都渋谷区渋谷3-26-16 第五叶ビル5F";
        $arr['body']['company_address'][1]['name'] = "仙台オフィス";
        $arr['body']['company_address'][1]['post'] = "〒 984-0051";
        $arr['body']['company_address'][1]['address'] = "宮城県仙台市若林区新寺2丁目1−6 3階";
        $arr['body']['company_link'] = "https://www.se-sendai.co.jp/";
        $arr['body']['profImage'] = "https://paper.rash.jp/paper_api/images/chiba.fd970c0c.jpg";
        $arr['body']['profposition'] = "開発部";
        $arr['body']['profname'] = "チバたかひろ";
        $arr['body']['profkana'] = "(TAKAHIRO CHIBA)";
        $arr['body']['phone'] = "090-1234-1234";
        $arr['body']['email'] = "chiba@se-sendai.co.jp";
        $arr['body']['from'] = "宮城県";
        $arr['body']['birth'] = "1981.8.7";
        $arr['body']['skill'] = "基本情報技術者試験 ／ 20xx年xx月合格
応用情報技術者試験 ／ 20xx年xx月合格";

        $arr['body']['pr'] = "＜円滑にプロジェクトを進行させるマネジメント力＞
自社のプロジェクトメンバーだけでなく顧客先の関係者など、約xx名～xx名規模のプロジェクトを進めた経験があります。
関係者が多くなるためスケジュールの遅延や認識齟齬が発生しないように、定期的に打ち合わせの機会を設けて進捗を管理。
メンバーと顧客先との間に立ち、仕様や価格についても細かく調整、管理することで、大規模なプロジェクトも当初のスケジュールどおりに進めることができ、期日に遅れず納品することができました。";
        $arr['body']['history'][0]['note'] = "20xx年xx月～現在
営業支援システム開発
【言語】php / java
【OS】windows
【DB】SQL Server
【担当】要件定義、基本設計、詳細設計、結合テスト、運用保守
【実績・取り組み】導入後も顧客へのヒアリングを継続し、随時システムを改善。また、改修を想定し、ソースコードを書き換えやすいように設計。";
        $arr['body']['history'][1]['note'] = "20xx年xx月～現在
保険業界　契約書管理システム開発
【言語】
Java、C#
JavaScript
【OS】
AIX、Windows
Linux
【DB】
SQL Server
Oracle
【担当フェーズ】
詳細設計、開発、テスト、運用保守
【業務内容】
・ユーザーインターフェース設計
・プログラムコーディング
・単体テスト、結合テスト
・保守メンテナンス

【実績・取り組み】
・本番環境でのトラブル発生防止のため、詳細にテスト設計し、エラーの解消を徹底。";

    } else {
        // paramの値が不適ならstatusをnoにしてプログラム終了
        $arr["status"] = "no";
    }
    
    header('Content-type: application/json');
    // 配列をjson形式にデコードして出力, 第二引数は、整形するためのオプション
    echo  json_encode($arr);
    
?>
