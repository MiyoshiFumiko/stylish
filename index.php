<?php get_header(); ?>
<div class="top_photo">
  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="top_logo" >
<div class="photo_box"> 
<div class="phpt_pc">
 <?php
 echo do_shortcode('[smartslider3 slider="3"]');
 ?>
</div>
<div class="phpt_sp">
<?php
echo do_shortcode('[smartslider3 slider="4"]');
?>
</div>
  <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="" class="top_right pc" >
  <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="" class="top_right sp" >
</div>
</div>

<!-- 
    <div class="top_photo">
      <?php if ( get_header_image() ) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="top_logo" >
        <div class="photo_box">
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="夜景" class="top-image pc" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="夜景" class="top-image sp" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="" class="top_right pc" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="" class="top_right sp" >
        </div>
      <?php endif; ?>
    </div>
     -->
    <!-- <p class="header-p">進化し続ける「街」アメリカンビレッジマガジン</p>

    <p class="header-p2">進化し続ける「街」<br>アメリカンビレッジマガジン</p> -->
    <div id="message">
      <p>歩くことも、<br>
      寝返りを打つことも、<br>
      一人ではできない。<br>
      でも誰かがいれば、<br>
      テクノロジーがあれば、<br>
      できることは無限大。<br>
      やりたいことを諦めずに、<br>
      挑み続けるブログ。</p>
    </div>

    <section>
    <?php if (have_posts ()): ?>
      <!-- <h2 class="sub-title">Latest Articles</h2> -->

      <ul class="articles">
        <?php while(have_posts()): the_post(); ?>
          <li class="article">
            <a href="<?php the_permalink(); ?>">
               <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full'); ?>
               <?php else: ?>
                <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>" alt="">
               <?php endif; ?>
            
               <p class="title"><?php the_title(); ?></p>
               <p class="date"><?php echo get_the_date('20y/m/d'); ?></p>
            
               
            <!-- <div class="read-more-div">
              <p class="read-more"> <a href="<?php the_permalink(); ?>">READ MORE</a></p>
              
            </div> -->
             
            </a>
          </li>
        <?php endwhile; ?>
      
        <?php else: ?>
          <p>最近の投稿はありません</p>
        <?php endif; ?>

      </ul>

      <?php 
      if( function_exists("the_pagination") ) {
        $pagination_array = the_pagination();
        // 配列じゃないなら非表示
        if ( !is_array($pagination_array) ) return;
        echo '<ul class="nav-pagination">';
        foreach($pagination_array as $key => $val) {
          echo '<li class="item">'.$pagination_array[$key].'</li>';
        }
        echo '</ul>';
      }

    ?> 

    </section>

    

    <?php get_footer(); ?>