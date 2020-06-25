<main class="main_container">
    <img class="home_banner" src="assets/home_banner1_1.png" alt="home banner">
    <p class="error">
        <?php if (!empty($_SESSION['error'])) { ?>
        <?php echo $_SESSION['error'];?>
        <?php };?>
    </p>
    <section class="home_conntainer">
        <h2 class="hidden">Shop</h2>
        <article>
            <h3 class="items_title">Shop</h3>
            <ul class="items">
                <?php foreach($items as $item): ?>
                    <div class="item" id="<?php echo $item['id']?>" data-index-number="<?php echo $item['numItem'] ?>">
                        <p class="item_num"><?php echo $item["numItem"] ?></p>
                        <a href="index.php?page=details&amp;id=<?php echo $item['id'];?>">
                            <img class="item_img" src="<?php echo $item['url'] ?>" alt="item plant">
                        </a>
                        <p class="item_name" ><?php echo $item['name'] ?></p>
                        <p class="item_price"><?php echo '&euro;' . $item['price'] ?></p>
                    </div>
                <?php endforeach;?>
            </ul>
        </article>
    </section>
</main>