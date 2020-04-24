<!-- Nav -->
<div id="nav">
    <!-- Main Nav -->
    <div id="nav-fixed">
        <div class="container">
            <!-- logo -->
            <div class="nav-logo">
                <a href="index.php" class="logo"><img src=" ./img/images_skinfood_logo.png" alt=""></a>
            </div>
            <!-- /logo -->
            <!-- nav -->
            <ul class="nav-menu nav navbar-nav">
                <?php
						$i = 1;
						foreach ($categories as $categorie) {
						?>
                <li class="cat-<?= $i ?>"><a
                        href="category.php?id=<?php echo $categorie['id']; ?>&cate=<?php echo $categorie['title'] ?> "><?php echo $categorie['title']; ?></a>
                </li>
                <?php
							$i++;
							if ($i == 6)
								$i = 1;
						} ?>
            </ul>
            <!-- /nav -->

            <!-- search & aside toggle -->
            <style>
            #dropdown {
                display: block;
                background-color: #ffff;
                text-decoration: none;
            }
            </style>
            <div class="nav-btns">

                <button>
                    <div class="cart">
                        <ion-icon size="small" name="cart-outline"></ion-icon>
                        <span>0</span>
                    </div>
                </button>
                <button style="padding:15px" class="aside-btn"><i class="fa fa-bars"></i></button>
                <button style="padding:15px" class="search-btn"><i class="fa fa-search"></i></button>
                <button style="padding:15px"><a href="admin/customer/login_customer.php">Log in</a></button>


                <div class="search-form" id="myDropdown">
                    <input class="search-input" type="text" name="search" placeholder="Enter Your Search ..."
                        id="myInput" onkeyup="filterFunction()">
                    <!-- <a href="#about">About</a><br> -->
                    <?php
						$i = 1;
						foreach ($categories as $categorie) {
						?>
                    <a id="dropdown" class=" cat-<?= $i ?>"
                        href="category.php?id=<?php echo $categorie['id']; ?>&cate=<?php echo $categorie['title'] ?> "><?php echo $categorie['title']; ?></a>

                    <?php
							$i++;
							if ($i == 6)
								$i = 1;
						} ?>
                    <button class="search-close"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /search & aside toggle -->
        </div>
    </div>
    <!-- /Main Nav -->

    <!-- Aside Nav -->
    <div id="nav-aside">
        <!-- nav -->
        <div class="section-row">
            <ul class="nav-aside-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="needHelp.php">Need Help?</a></li>
            </ul>
        </div>
        <!-- /nav -->

        <!-- --Most_Read----------------------------------------- -->
        <?php
                    include($level . Post_part . "Most_Read.php");
                   ?>

        <!-- social links -->
        <div class="section-row">
            <h3>Follow us</h3>
            <ul class="nav-aside-social">
                <li><a href=" https://www.facebook.com/theskinfood.us"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/skinfood_us"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/skinfood_us/"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <!-- /social links -->

        <!-- aside nav close -->
        <button class="nav-aside-close"><i class="fa fa-times"></i></button>
        <!-- /aside nav close -->
    </div>
    <!-- Aside Nav -->
</div>
<!-- /Nav -->