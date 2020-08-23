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
            <hr>
            <div class="DbInfo">
                <form method="post" action="Data/DB.php">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Topic Number</label>
                    <input type="text" name="topicNumber" class="form-control" id="topicNumber" aria-describedby="topicNumber" placeholder="Enter Topic Number">
                    <small id="topicNumber" class="form-text text-muted">
                        here you must enter a topic number you want
                    </small>
                  </div>
                  <button type="submit" class="btn btn-primary">دریافت اطلاعات</button>
                  <a href="Data/ConfigDB.php" class="btn btn-info">initialization</a>
                  <small class="form-text text-muted">
                      The first time you run this project, just click the initialization
                       button once and never click on it again
                       as you may create duplicate data in the database.
                  </small>
                </form>
            </div>
        </div>
    </body>
</html>
