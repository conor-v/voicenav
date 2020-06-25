<main>
  <section class="details_container">
    <h2 class="details_title"><?php echo $item['name'] ?></h2>
    <article class="details_info">
      <img class="details_img" src="<?php echo $item['url'] ?>" alt="photo plant">
      <div class="details_info_container">
        <p class="details_info_name"><?php echo $item['name'] . ' - number ' .$item['numItem'] ?></p>
        <p class="details_info_description"><?php echo $item['description'] ?></p>
        <p class="details_info_price"><?php echo '&euro;' . $item['price'] ?></p>

        <form action="index.php?page=details&amp;id=<?php echo $item['id'];?>" method="post">
          <input type="hidden" name="action" value="shopItem">
          <input class="details_form" type="submit" value="get item">
        </form>
      </div>
    </article>
    <article>
      <h3 class="details_title">Maybe this items you like to:</h3>
      <ul class="items">
        <?php foreach($rands as $rand): ?>
          <div class="item" id="<?php echo $rand['id']?>" data-index-number="<?php echo $rand['numItem'] ?>">
            <p class="item_num"><?php echo $rand["numItem"] ?></p>
            <a href="index.php?page=details&amp;id=<?php echo $rand['id'];?>">
                <img class="item_img" src="<?php echo $rand['url'] ?>" alt="item plant">
            </a>
            <p class="item_name" ><?php echo $rand['name'] ?></p>
            <p class="item_price"><?php echo '&euro;' . $rand['price'] ?></p>
          </div>
        <?php endforeach;?>
      </ul>
    </article>
  </section>
</main>
