<?php get_header(); ?>

<div id="main-div">

  <main class="main-box">

  <?php if (have_posts()): ?>

  <?php while (have_posts()): the_post(); ?>

  <h2 class="main-title"><?php the_title(); ?></h2>

  <div class="main-content"><?php the_content(); ?></div>

  <?php endwhile; ?>

  <?php endif; ?>

  </main>

  <aside>

    <ul id="present">
      <p>最近の投稿</p>
      <?php
      $args = array(
        'posts_per_page' => 5 // 表示件数の指定
      );
      $posts = get_posts( $args );
      foreach ( $posts as $post ): // ループの開始
      setup_postdata( $post ); // 記事データの取得
      ?>
      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
      <?php
      endforeach; // ループの終了
      wp_reset_postdata(); // 直前のクエリを復元する
      ?>
    </ul>

    <div id="aside-category">
        <p>カテゴリー</p>
        <?php wp_nav_menu( array(
                    'theme_location'=>'mainmenu', 
                    'container'     =>'', 
                    'menu_class'    =>'',
                    'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
        ?> 
    </div>
   

    <div id="category2">
      <h2>About me</h2>
      <img src="https://pbs.twimg.com/profile_images/1285137262154375168/_pETwtsz_400x400.jpg" alt="">
      <p>ふー</p>
      <p>SMA(脊髄性筋萎縮症)2型。<br>
      一人暮らしをしながら、分身ロボットOriHimeを使って様々な実験に参加。</p>
      <p>Follow me</p>
      <div id="icons">
        <a href="https://twitter.com/fukomalu" ><i class="fab fa-twitter fa-2x"></i></a>
        <a href="https://www.instagram.com/hana42193/"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://www.facebook.com/fumiko.miyoshi.9"><i class="fab fa-facebook-square fa-2x"></i></a>
        <a href="https://github.com/MiyoshiFumiko"><i class="fab fa-github fa-2x"></i></a>
      </div>     
    </div>  

  </aside>

  

</div>



<footer>
    <?php if (get_previous_post()):?>
    <?php previous_post_link('&laquo; %link', '前の記事へ'); ?>
    <?php endif; ?>

    <?php if (get_next_post()):?>
    <?php next_post_link('%link &raquo;', '次の記事へ'); ?>
    <?php endif; ?>
  </footer>

  </div>
<?php get_footer(); ?>