<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrera Roberts</title>
  <?php wp_head();?>
</head>
<body>

<header>
  <div class="container">
    <?php 
      wp_nav_menu(
        array(
          'theme_location' => 'main_nav',
          'menu_class' => 'top_bar',
        )
      );
    ?>
  </div>
</header>