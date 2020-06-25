<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/favcon.png" type="image/gif">
    <title><?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <div class="sidebar">
      <div class="toggle_btn">
        <button class="toggle_btn-btn">New feature!</button>
      </div>
      <div class="command_line">
        <h2 class="command_voice">Voice commands</h2>
        <p class="command_list-item-red">*Works only on google chrome</p>
        <p class="command_feature">We have an amazing new feature! Click on speak and just say what you want!</p>
        <div class="command_nav">
          <h3 class="command_title">Navigation</h3>
          <ul class="command_list">
            <li class="command_list-item">- "Home"</li>
            <li class="command_list-item">- "Shop"</li>
            <li class="command_list-item">- "About"</li>
            <li class="command_list-item">- "Contact"</li>
          </ul>
        </div>
        <div class="command_nav">
          <h3 class="command_title">Search</h3>
          <ul class="command_list">
            <li class="command_list-item">- "Check item <span class="command_list-item-span">number</span>"</li>
            <li class="command_list-item command_list-item-red">Only works in (home, shop and details of a item)</li>
          </ul>
        </div>
        <div class="command_nav">
          <h3 class="command_title">Music</h3>
          <ul class="command_list">
            <li class="command_list-item">- "Play"</li>
            <li class="command_list-item">- "Pause"</li>
          </ul>
        </div>
      </div>
    </div>

   <header>
      <div class="free_shipping">Free shipping on all orders. Always free returns.</div>
      <audio class="audio">
        <source src="assets/muziek/achtergrond_muziek.mp3" type="audio/mpeg">
      </audio>
      <h1 class="hidden">voiceNav</h1>

      <img class="logo" src="assets/logo_voiceNav.png" alt="logo van voiceNav">
      <nav class="nav">
        <ul class="nav_items">
          <li class="nav_items_item"><a class="items_item_link <?php if($currentPage == 'home') echo 'item__link--active' ?>" href="index.php">Home</a></li>
          <li class="nav_items_item"><a class="items_item_link <?php if($currentPage == 'shop') echo 'item__link--active' ?>" href="index.php?page=shop">Shop</a></li>
          <li class="nav_items_item"><a class="items_item_link <?php if($currentPage == 'about') echo 'item__link--active' ?>" href="index.php?page=about">About</a></li>
          <li class="nav_items_item"><a class="items_item_link <?php if($currentPage == 'contact') echo 'item__link--active' ?>" href="index.php?page=contact">Contact</a></li>
        </ul>
      </nav>
      <button class="btn">speak</button>
    </header>

    <?php echo $content;?>

    <footer>
      <ul class="footer_nav_items">
        <li><a class="footer_items_item_link items_item_link" href="index.php">Home</a></li>
        <li><a class="footer_items_item_link items_item_link" href="index.php?page=about">About</a></li>
        <li><a class="footer_items_item_link items_item_link" href="index.php?page=shop">Shop</a></li>
        <li><a class="footer_items_item_link items_item_link" href="index.php?page=contact">Contact</a></li>
      </ul>
      <div class="footer_social">
        <a href="https://twitter.com/" target="_blank"><img class="social" src="assets/social/twitter.png" alt="twitter voiceNav"></a>
        <a href="https://www.facebook.com/" target="_blank"><img class="social" src="assets/social/facebook.png" alt="facebook voiceNav"></a>
        <a href="https://www.instagram.com/" target="_blank"><img class="social" src="assets/social/instagram.png" alt="instagram voiceNav"></a>
      </div>
      <p class="footer_copy">&copy;2020 VoiceNav - All Rights Reserved</p>
      <p class="footer_made_by">made by: <a class="made_by" href="http://conorvanoystaeyen.be/" target="_blank">Conor Vanoystaeyen</a></p>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
