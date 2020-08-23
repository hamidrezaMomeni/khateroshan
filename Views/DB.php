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
                    اطلاعات پایگاه داده
                </h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                      <div class="card-header">Topic Number</div>
                      <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">
                            <?php echo $result[0][0]; ?>
                        </p>
                      </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- js files -->
    <script src="../src/js/jquery.min.js" charset="utf-8"></script>
    <script src="../src/js/bootstrap.bundle.min.js" charset="utf-8"></script>
    <script src="../src/js/bootstrap.min.js" charset="utf-8"></script>
    </body>
</html>
