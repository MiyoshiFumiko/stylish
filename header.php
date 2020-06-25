<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- <title>About Dog</title> -->
  <?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <header>
      
      <nav class="menu">
        <div id="nav-drawer">
          <input id="nav-input" type="checkbox" class="nav-unshown">
          <label id="nav-open" for="nav-input"><span></span></label>
          <label class="nav-unshown" id="nav-close" for="nav-input"></label>
          <div id="nav-content">
            <div id="category">
              <h2>Category</h2>
              <div id="home-div">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="home">Home</a>
              </div>
              
              <?php wp_nav_menu( array(
                  'theme_location'=>'mainmenu', 
                  'container'     =>'', 
                  'menu_class'    =>'',
                  'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
              ?> 
            </div>
            
          </div>          
        </div>               
      </nav>


      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2 id="blog-title">不自由な体で自由に生きる</h2></a>

      <div id="nav-drawer2">
          <input id="nav-input2" type="checkbox" class="nav-unshown2">
          <label id="nav-open2" for="nav-input2"><i class="fas fa-user-circle fa-2x"></i></label>
          <label class="nav-unshown2" id="nav-close2" for="nav-input2"></label>
          <div id="nav-content2">
            <div id="category2">
              <h2>About me</h2>
              <p>ふー</p>
              <p>SMA(脊髄性筋萎縮症)2型。<br>
              一人暮らしをしながら、分身ロボットOriHimeを使って様々な実験に参加。</p>
              <p>Follow me</p>
              <div id="icons">
                <a href="https://twitter.com/fukomalu" ><i class="fab fa-twitter fa-2x"></i></a>
                <a href="https://www.facebook.com/fumiko.miyoshi.9"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://www.instagram.com/hana42193/"><i class="fab fa-facebook-square fa-2x"></i></a>
              </div>
              
              
            </div>
            
          </div>          
      </div>     

      
    </header>