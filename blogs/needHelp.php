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
</head>

<body>
    <!-- Header -->
    <header id="header">
        <?php require_once('mainNav.php'); ?>
    </header>
    <!-- /Header -->
    <div id="questions">
        <div class="question closed" data-collapse-summary="">
            <a href="https://theskinfood.us/pages/faqs#">Help! Where do I start from a regimen standpoint?</a>
        </div>
        <div class="answer" aria-hidden="true" style="display: none;">
            Every person’s skin is unique and reacts differently to
            certain products. The best way to figure out which
            products are going to work well for you is by selecting
            the ones that fit your skin type/concerns. The process may
            involve some trial and error but it is definitely worth it
            once you find a regimen that makes your skin look and feel
            amazing. <br /><br />
            Learn how to determine your
            <a href="https://theskinfood.us/blogs/skin-101/skin-types-lt-gt-how-to-determine-my-skin-type">skin type</a>
            and
            <a href="https://theskinfood.us/blogs/skin-101/skin-concerns">skin concern</a>. <br /><br />
            Learn how to layer your skin care products in our
            <a href="https://theskinfood.us/blogs/skin-101/demystifying-routine">demystifying routine</a>
            blog post. <br /><br />
            Confused about this or that type of product? &nbsp;Check
            out our post on
            <a href="https://theskinfood.us/blogs/skin-101/demystifying-products">demystifying products</a>.
        </div>
        <div class="question closed" data-collapse-summary="">
            <a href="https://theskinfood.us/pages/faqs#">Did I receive an expired product?</a>
        </div>
    </div>


    <!-- Footer -->
    <?php
         include($level . Footer_part . "footer.php");
    ?>
</body>

</html>