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
              <?php wp_nav_menu( array(
                  'theme_location'=>'mainmenu', 
                  'container'     =>'', 
                  'menu_class'    =>'',
                  'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
              ?> 
            </div>
            
          </div>

          <i class="fas fa-user-circle"></i>
        </div>

        
         
        
        
      </nav>
    </header>