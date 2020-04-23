<!-- Linh query ---------------------------------------------->

<?php
    $level = "";
    include("config.php");
    include($level . Querry_part . "query_index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include($level . Header_part . "link_header.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <style>
    body {
        font-family: "Montserrat", sans-serif
    }

    .w3-bar,
    h1,
    button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
        font-size: 200px
    }
    </style>
    <!-- Header -->
    <header id="header">
        <?php require_once('mainNav.php'); ?>
    </header>
    <!-- /Header -->


    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-twothird">
                <h1>Help! Where do I start from a regimen standpoint?</h1>
                <h5 class="w3-padding-32">Any additional questions? Email us at help@theskinfood.com</h5>

                <p class="w3-text-grey">Every person’s skin is unique and reacts differently to certain products. The
                    best way to figure out which products are going to work well for you is by selecting the ones that
                    fit your skin type/concerns. The process may involve some trial and error but it is definitely worth
                    it once you find a regimen that makes your skin look and feel amazing. </p>
            </div>

            <div class="w3-third w3-center">
                <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
            </div>
        </div>
    </div>
    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-third w3-center">
                <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
            </div>

            <div class="w3-twothird">
                <h1>Did I receive an expired product?</h1>
                <h5 class="w3-padding-32">Any additional questions? Email us at help@theskinfood.com</h5>
                <p class="w3-text-grey">You are not the first and won’t be the last to think that. Our products have a
                    printed manufacture and expiration date. Some may be difficult to find (under label or due to the
                    color of the packaging). The first date will be the manufacture date; this is the date the product
                    was produced. The second date located normally directly underneath the manufacture date is the
                    expiration date. Some products only have the manufactured date printed. If you have any questions
                    about the expiration of a product, please email us at help@theskinfood.com and we can double check
                    these dates for you! Now you can exhale.</p>
            </div>
        </div>
    </div>
</body>

<!-- -----Footer --------------------------------------->
<?php
            include($level . Footer_part . "footer.php");
        ?>

</html>