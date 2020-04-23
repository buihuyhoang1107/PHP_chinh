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

    <header id="header">
        <?php require_once('mainNav.php'); ?>
    </header>
    <!-- The App Section -->
    <div>



    </div>
    <div class="container" class="test">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="margin-top: 100px;">Shipping & Returns</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-6">

                <div>
                    <h3><b>SHIPPING</b></h3>
                    <p>Your order will normally be processed within two business days. </p>
                    <p>Orders received before 1:00 pm PST Monday – Friday should be processed and shipped that day,
                        excluding
                        holidays of course. Weekend orders will be processed the following Monday or the next business
                        day if
                        it’s a
                        holiday. </p>
                    <p>Once it is ready, it will be on its way to you. Orders can be tracked here if you’re like us and
                        like to
                        count the minutes.</p>
                    <p>Our shipping terms and conditions are as follows:
                        <br>
                        - FREE SHIPPING on orders of $50 or more (after discounts, before tax). Standard shipping
                        <b>(estimated 3-5
                            business days).</b>
                        <br>
                        - For orders under $50 in the Continental US: $7.95 Shipping Fee. Standard shipping
                        <b>(estimated
                            3-5
                            business
                            days)</b>
                        <br>
                        - For orders under $50 in Hawaii, Alaska, and Puerto Rico: $9.95 Shipping Fee. Standard shipping
                        <b>(estimated
                            3-5 business days)</b>
                        <br>
                        - International or expedited shipping is also not available at this time. <b>(Sorry!!)</b>
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div>
                    <h3><b>RETURNS</b></h3>
                    <p>If for whatever reason you are not satisfied with your order, we are here to assist you. </p>
                    <p><b>Our return policy is very skin (and customer!) friendly:</b></p>
                    <p>1. Full refund on unused and unopened product within 60 days of the date of purchase. It must be
                        in the
                        original packaging
                        <br>
                        2. Online credit on any opened product within 30 days of the date of purchase <br>
                        3. Any defective or damaged products will be replaced or refunded</p>
                    <p>We would be remiss if we did not highlight two things. First, customers are responsible for any
                        return
                        shipping charges. Second, online purchases cannot be returned and/or exchanged at offline
                        stores. Sorry
                        for any inconvenience this may cause.</p>
                    <p>Regarding refunds (if applicable), gift cards are exempt from returns or refunds. Shipping costs
                        are also
                        non-refundable.</p>
                    <p>For returns, please email us at <a href="needHelp.php"><b><i>help@theskinfood.com</i></b></a>
                        with your order
                        and we’ll
                        take it from
                        there.</p>
                </div>
            </div>

        </div>
    </div>

</body>

<!-- -----Footer --------------------------------------->
<?php
            include($level . Footer_part . "footer.php");
        ?>

</html>