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
    <style>
    .question {
        background-color: #f7f7f7;
        font-family: 'Gidole-Regular', sans-serif;
        font-size: 19px;
        -webkit-font-smoothing: antialiased;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-osx-font-smoothing: grayscale;
        font-weight: 400;
        font-style: normal;
        line-height: 21px;
        margin-top: 5px;
        position: relative;
        z-index: 0;
    }
    </style>
    <!-- Header -->
    <header id="header">
        <?php require_once('mainNav.php'); ?>
    </header>
    <!-- /Header -->

</body>

</html>