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

// 記事IDを指定して抜粋文を取得
function ltl_get_the_excerpt($post_id){
  global $post;
  $post_bu = $post;
  $post = get_post($post_id);
  setup_postdata($post_id);
  $output = get_post_meta($post_id,'_aioseop_description',true);//AllinOneSEOから
  $post = $post_bu;
  return $output;
  }
  
  //ショートコード
  function nlink_scode($atts) {
  extract(shortcode_atts(array(
  'url'=>"",
  'title'=>"",
  'excerpt'=>""
  ),$atts));
  
  $id = url_to_postid($url);//URLから投稿IDを取得
  
  $no_image = 'noimageに指定したい画像があればここにパス';//アイキャッチ画像がない場合の画像を指定
  
  //タイトルを取得
  if(empty($title)){
  $title = esc_html(get_the_title($id));
  }
  //抜粋文を取得
  if(empty($excerpt)){
  $excerpt = esc_html(ltl_get_the_excerpt($id));
  }
  
  //アイキャッチ画像を取得
  if(has_post_thumbnail($id)) {
  $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),'medium');
  $img_tag = "<img src='" . $img[0] . "' alt='{$title}'/>";
  }else{
  $img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
  }
  
  $nlink .='
  <div class="blog-card">
  <a href="'. $url .'">
  <div class="blog-card-thumbnail">'. $img_tag .'</div>
  <div class="blog-card-content">
  <div class="blog-card-title">'. $title .' </div>
  <div class="blog-card-excerpt">'. $excerpt .'</div>
  </div>
  <div class="clear"></div>
  </a>
  </div>';
  
  return $nlink;
  }
  
  add_shortcode("nlink", "nlink_scode");