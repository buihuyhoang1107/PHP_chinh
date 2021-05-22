<!-- catagories -->
<div class="aside-widget">
    <div class="section-title">
        <h2>Catagories</h2>
    </div>
    <div class="category-widget">
        <ul>
            <li style=" float:right"><b>Number</b> </li>
            <br>
            <br>

            <?php
            $i = 1;
            $j = 100;

            foreach ($categories as $categorie) {
            ?>

                <li><a href="category.php?id=<?php echo $categorie['id']; ?>&cate=<?php echo $categorie['title'] ?>" class="cat-<?= $i ?>"><?php echo $categorie['title']; ?><span><?= $j ?></span></a>
                </li>
            <?php
                $i++;
                $j += 2;
                if ($i == 6) {
                    $i = 1;
                }
            } ?>
        </ul>
    </div>
</div>