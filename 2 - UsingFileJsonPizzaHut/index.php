<?php 
    $data = file_get_contents('data/pizza.json');
    $menu = json_decode($data, true);

    $menu = $menu['menu'];
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap-v5.0.css">
        <title>Rest API</title>
    </head>
    <body>
        <!-- navbar  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="index2.html">
                    <img src="img/logo.png" class="navbar-brand" alt="" width="120">
                </a>
                <!-- <a class="navbar-brand">Navbar</a> -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Menu</a>
                        <a class="nav-link" aria-current="page" href="#">Pizza</a>
                        <a class="nav-link" aria-current="page" href="#">Pasta</a>
                        <a class="nav-link" aria-current="page" href="#">Nasi</a>
                        <a class="nav-link" aria-current="page" href="#">Minuman</a>
                    </div>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- End navbar  -->

        <!-- Menu -->
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>All Menu</h1>
                </div>
            </div>
            <div class="row">
                <?php foreach ($menu as $menu) : ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="img/menu/<?php echo $menu['gambar']; ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $menu['nama'] ?></h5>
                                <p class="card-text"><?php echo $menu['deskripsi'] ?></p>
                                <h5 class="card-title">Rp. <?php echo $menu['harga'] ?></h5>
                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        
        <!-- Jquery -->
        <script src="jquery-v3x.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    </body>
</html>