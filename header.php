<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  
  <!-- <title>About Dog</title> -->
  <?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <header>
      
      <nav class="menu">
        
          <?php wp_nav_menu( array(
              'theme_location'=>'mainmenu', 
              'container'     =>'', 
              'menu_class'    =>'',
              'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
          ?> 
        
        
      </nav>
    </header>