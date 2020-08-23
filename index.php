<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="src/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="src/css/bootstrap.min.css">
        <link rel="stylesheet" href="src/css/bootstrap-grid.min.css">
    </head>
    <body>
        <div class="container">
            <br>
            <form method="post" action="Controllers/scrapController.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Digikala Product Link</label>
                <input type="text" name="productLink" class="form-control" id="productLink" aria-describedby="productLinkHelp" placeholder="Enter Link">
                <small id="productLinkHelp" class="form-text text-muted">
                    here you must enter a link from digikala products like : https://www.digikala.com/product/dkp-90825
                </small>
              </div>
              <button type="submit" class="btn btn-primary">دریافت اطلاعات</button>
            </form>
        </div>
    </body>
</html>
