<main class="main_container">
    <img class="home_banner" src="assets/home_banner2_1.png" alt="home banner">
    <?php if (!empty($_SESSION['info'])) { ?>
        <p class="succes"><?php echo $_SESSION['info'];?></p>
    <?php };?>  
    <section class="home_conntainer">
        <h2 class="hidden">home page</h2>
        <article class="home_textcontent">
            <h3 class="textcontent_title">Plant your seed</h3>
            <strong class="textcontent_line">-----</strong>
            <p class="textcontent_par">
                Limited supply. Unlimited potential. 
                we invite you to take advantage of discounts of up to 50% on some of your favorite VN products. 
                Get yours before it’s gone!
            </p>
        </article>
        <article>
            <h3 class="items_title">Season items</h3>
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