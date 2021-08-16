<?php
function init_func()
{
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
  // ポストタイプを新規作成(投稿、写真)
  // この後にパーマリンク設定の変更、保存をする必要がある
  // 引数がurlになる(item)
  register_post_type("item", [
    "labels" => [
      "name" => "商品",
      "singular_name" => "商品",
      "add_new" => "商品を追加",
      "add_new_item" => "商品を追加",
      "edit_item" => "商品を編集",
      "new_item" => "新しい商品",
      "all_items" => "全ての商品",
      "view_item" => "商品を見る",
      "search_items" => "商品を探す",
      "not_found" => "商品は見つかりませんでした",
      "not_found_in_trash" => "ゴミ箱は空です",
      "parent_item_colon" => "商品",
      "menu_name" => "商品",
    ],
    "public" => true,
    "has_archive" => true, //一覧画面が生成される
    "hierarchical" => true,
    "supports" => [
      "title",
      "editor",
      "page-attributes"
    ],
    "menu_position" => 5,
    "menu_icon" => "dashicons-cart", //dashiconで設定。管理画面のアイコンを設定
  ]);
  // カテゴリー追加(item=商品なので商品の中に商品カテゴリーというカテゴリーが追加されている)
  register_taxonomy("item_category", "item", [
    "labels" => [
      "name" => "商品カテゴリー",
    ],
    "hierarchical" => true, //カテゴリーかタグか。(trueだとカテゴリー。falseはタグ)
    // "show_in_rest" => true, //グーテンブルグにも表示されるように設定
  ]);
}
add_action("init", "init_func");
