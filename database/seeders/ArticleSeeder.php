<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        // 1. VALORANT 記事
        $valorantBody = <<<'JSON'
[
  {
    "id": "1",
    "type": "heading",
    "props": {
      "level": 1,
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "【VALORANT】最新メタ解説！パッチ9.0環境で強いエージェント",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "2",
    "type": "paragraph",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "パッチ9.0のアップデートにより、エージェントのピック率が大きく変動しました。今回は現環境で特に強力なエージェントと、その立ち回りについて解説します。",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "3",
    "type": "heading",
    "props": {
      "level": 2,
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "Tier1 エージェント",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "4",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      { "type": "text", "text": "ジェット", "styles": { "bold": true } },
      { "type": "text", "text": " - ナーフ後も依然として強力。機動力は唯一無二。", "styles": {} }
    ],
    "children": []
  },
  {
    "id": "5",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      { "type": "text", "text": "オーメン", "styles": { "bold": true } },
      { "type": "text", "text": " - スモークの汎用性が高く、どのマップでも安定。", "styles": {} }
    ],
    "children": []
  },
  {
    "id": "6",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      { "type": "text", "text": "ソーヴァ", "styles": { "bold": true } },
      { "type": "text", "text": " - 情報収集能力は相変わらず最強クラス。", "styles": {} }
    ],
    "children": []
  }
]
JSON;

        Article::create([
            'title'        => '【VALORANT】パッチ9.0最新メタ解説 – ジェット/オーメン/ソーヴァが強い理由',
            'body'         => $valorantBody,
            'game'         => 'VALORANT',   // ★ 識別用
            'type'         => 'meta',
            'is_published' => true,
            'published_at' => now(),
        ]);

        // 2. APEX 記事
        $apexBody = <<<'JSON'
[
  {
    "id": "1",
    "type": "heading",
    "props": {
      "level": 1,
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "【APEX】シーズン24最新メタ解説！ランクで勝てるレジェンド3選",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "2",
    "type": "paragraph",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "シーズン24のアップデートにより、武器バランスやレジェンドの調整が入り、ランクマッチのメタが変化しました。この記事では、現環境で特にピック率・勝率ともに高いレジェンドと、その立ち回りのポイントを解説します。",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "3",
    "type": "heading",
    "props": {
      "level": 2,
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "Tier1 レジェンド",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "4",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "シア",
        "styles": { "bold": true }
      },
      {
        "type": "text",
        "text": " - 広範囲スキャンとウルトによる索敵性能が高く、ランク・大会ともに使用率が高い。",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "5",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "ジブラルタル",
        "styles": { "bold": true }
      },
      {
        "type": "text",
        "text": " - ドームとウルトで攻め・守りどちらにも対応可能。終盤の安定感が非常に高い。",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "6",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "レイス",
        "styles": { "bold": true }
      },
      {
        "type": "text",
        "text": " - ポータルと虚空での生存力が高く、まだまだエースポジションとして採用されている。",
        "styles": {}
      }
    ],
    "children": []
  }
]
JSON;

        Article::create([
            'title'        => '【APEX】シーズン24最新メタ解説 – ランクで勝てるレジェンド3選',
            'body'         => $apexBody,
            'game'         => 'APEX',   // ★ 識別用
            'type'         => 'meta',
            'is_published' => true,
            'published_at' => now(),
        ]);

        // 3. COD 記事（CODモバイルのニュース）
        $codBody = <<<'JSON'
[
  {
    "id": "1",
    "type": "heading",
    "props": {
      "level": 1,
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "【CODモバイル】シーズン19ランクマ環境！勝率を上げるおすすめ武器",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "2",
    "type": "paragraph",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "シーズン19のアップデートにより、アサルトライフルとSMGのバランス調整が行われ、ランクマッチの主流構成が変わりました。ここでは、現環境で特に強い武器とおすすめの立ち回りを紹介します。",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "3",
    "type": "heading",
    "props": {
      "level": 2,
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "Tier1 武器",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "4",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "AK-47",
        "styles": { "bold": true }
      },
      {
        "type": "text",
        "text": " - 高火力かつ中距離での安定感が抜群。反動制御に慣れればどのマップでも活躍できる。",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "5",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "PP19 Bizon",
        "styles": { "bold": true }
      },
      {
        "type": "text",
        "text": " - 連射性能と装弾数に優れ、近〜中距離の撃ち合いで非常に強力。制圧力が高い。",
        "styles": {}
      }
    ],
    "children": []
  },
  {
    "id": "6",
    "type": "bulletListItem",
    "props": {
      "textColor": "default",
      "backgroundColor": "default",
      "textAlignment": "left"
    },
    "content": [
      {
        "type": "text",
        "text": "Kilo 141",
        "styles": { "bold": true }
      },
      {
        "type": "text",
        "text": " - 反動が少なく初心者でも扱いやすい万能AR。安定したダメージでどのモードでも使いやすい。",
        "styles": {}
      }
    ],
    "children": []
  }
]
JSON;

        Article::create([
            'title'        => '【CODモバイル】シーズン19ランクマ環境 – 勝率を上げるおすすめ武器3選',
            'body'         => $codBody,
            'game'         => 'COD',   // ★ 識別用（ゲームコード）
            'type'         => 'update',
            'is_published' => true,
            'published_at' => now(),
        ]);
    }
}
