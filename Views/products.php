<?php //include "../Controllers/scrapController.php";?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products List</title>
        <link rel="stylesheet" href="../src/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="../src/css/bootstrap.min.css">
        <link rel="stylesheet" href="../src/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="../src/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h4 class="title-page">
                    <?php echo $scrapObj->getElementValue("//*[@class='c-product__title']"); ?>
                </h4>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-4 col-one">
                    <img src="<?php echo $scrapObj->getElementImg("//*[@class='js-gallery-img']"); ?>" alt="Product image" class="product-img">
                </div>
                <div class="col-md-6 col-xs-3 col-two">
                    <div class="product-price">
                        <?php echo $scrapObj->getElementValue("//*[@class='c-product__seller-price-real']");?>
                    </div>
                        <a class="btn btn-primary btn-buy" href="../index.php">برو به صفحه اصلی</a>
                </div>
            </div>
        </div>
    <!-- js files -->
    <script src="../src/js/jquery.min.js" charset="utf-8"></script>
    <script src="../src/js/bootstrap.bundle.min.js" charset="utf-8"></script>
    <script src="../src/js/bootstrap.min.js" charset="utf-8"></script>
    </body>
</html>
