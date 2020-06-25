<?php

//このテーマでサポートする機能の設定
//投稿のアイキャッチ画像サポート
add_theme_support('post-thumbnails');

//カスタムヘッダ―の読み込み
add_theme_support( 'custom-header' );

add_theme_support( 'title-tag' );

register_nav_menu('mainmenu', 'メインメニュー');

function the_pagination() {
    // 一覧ページのクエリ
    global $wp_query;
    // ありそうもない数字をセット
    $big = 999999999;
    // １ページ以下なら非表示
    if ( $wp_query->max_num_pages <= 1 ) return;
    return paginate_links( array(
      'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format'       => '?paged=%#%',
      'current'      => max( 1, get_query_var('paged') ),
      'total'        => $wp_query->max_num_pages,
      'type'         => 'array',  // arrayに変更
      'end_size'     => 2,
      'mid_size'     => 2
    ) );
}

add_filter( 'show_admin_bar', 'set_adminbar' );

function set_adminbar( $adminbar ) {
 $adminbar  = true; /* true:表示 false:非表示 */
 return $adminbar;
}