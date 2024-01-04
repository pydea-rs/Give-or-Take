<?php require_once 'config.php'; ?>

<?php
// CHECK ISSET['id'] BEFORE*************************************
//WRITE METHOD FOR CATEGORY LIST
    $pid = $_GET['id'];
    $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $query = mysqli_query($connection, "SELECT * FROM " . TABLE_PRODUCTS . " WHERE " . PRODUCT_ID . "='$pid'");
    $product = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $product[PRODUCT_NAME]; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src=<?php echo DIR_PICTURES . '/' . $product[PRODUCT_IMAGE]; ?> alt="">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $product[PRODUCT_NAME]; ?></h3>
                        <h4> <?php echo $product[PRODUCT_PRICE] ?> تومان </h4>
                        <p class="card-text"> <?php echo $product[PRODUCT_DESCRIPTION]; ?> </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">افزودن به سبد</a>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        information
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci incidunt numquam nesciunt eum culpa, vel est quis. Minus at doloribus alias quae, assumenda odit asperiores minima, vero eos quod illum reiciendis, sint ad architecto necessitatibus aperiam! Fuga enim voluptates eveniet, inventore quam, esse iusto eaque hic officia eligendi, aperiam quasi unde explicabo

                        debitis doloribus maxime deserunt magni autem repellat. Nemo eum perspiciatis recusandae labore consectetur omnis impedit rem inventore, tenetur fugit maxime. Assumenda sequi animi, itaque ipsam quisquam recusandae nostrum at architecto pariatur obcaecat
                        <br>
                        <br>
                        i consequatur alias et deserunt dolorem, cumque nobis beatae? Minus molestias facilis autem commodi placeat voluptatibus dolore omnis consequuntur cupiditate totam molestiae explicabo officiis harum expedita assumenda accusamus ipsum amet impedit odit quia, culpa ipsam illo sint. Aperiam ad ullam nesciunt reprehenderit voluptatem, reiciendis beatae quidem enim minus quo deleniti, officiis repudiandae.
                        Perspiciatis corporis odit nulla asperiores laborum inventore incidunt, debitis enim ut dolorem officia consequuntur ratione, quis temporibus! Laboriosam excepturi deserunt quos iusto accusantium voluptatem quam minima iure qui aspernatur. Lauda
                        <br>
                        <br>
                        ntium voluptate necessitatibus corporis? Sit sapiente quas in tenetur accusamus harum totam, ad quidem, minus quos earum adipisci quo molestiae culpa voluptates. Recusandae dolore impedit repudiandae sapiente nobis ut dolores, quidem perspiciatis? Eius obcaecati commodi reprehenderit cumque, eaque minima laudantium dolorem quas possimus eum repellendus odit cor
                        <br>
                        <br>
                        poris earum tempora, nobis. Laudantium error porro ratione quis sit veniam aliquam quibusdam facere earum consequatur pariatur reprehenderit deserunt, inventore mollitia a,
                        aperiam. Dolore veritatis rem nisi et neque tempore voluptatum perspiciatis tempora. A eveniet quae eum quos dolorem molestiae quas minima suscipit possimus, maiores eius rem libero, iure vero at! Pariatur beatae nulla iusto atque officia repellat voluptas eligendi

                        <br>
                        <br>
                        corporis eveniet consectetur vel exercitationem, tenetur ab? Velit libero harum ea aliquam, totam, est repellat temporibus facilis praesentium accusantium atque sunt qui esse corporis officia tempore eos optio tempora cupiditate.
                    </div>
                </div>
                <!-- /.card -->
                
                     <div class="comments">
                <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" type="text" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text"placeholder="email">
                        </div>



                        <div class="form-group">
                            <label for="commentarea">Comment</label>
                            <textarea class="form-control" name="comment"></textarea>

                        </div>


                        <input class="btn btn-primary" type="Submit" name="submit" value="send">
                    <br>
                </form>
            </div>
            </div>
            <!-- /.col-lg-9 -->
        
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
