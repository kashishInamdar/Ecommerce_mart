<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ecommerce</title>
    <!-- -- -- -- -- --  Bootstrap Link -- -- -- -- -- -- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- -- -- -- -- -- Fontossom Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ---------------CSS Link ---------- -->
    <link rel="stylesheet" href="index.css" />



</head>

<body>
    <div class="container-fluid p-0">
        <!-- ----------------- NavBar ------------------------ -->

        <nav class="navbar navbar-expand-lg navbar-light  bg-info">
            <div class="container-fluid">
                <img src="images/logo.png" alt="logo" class="logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <i class="fa-solid fa-cart-shopping" style="color: #1f2251;"></i><sup>1</sup>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Total Price</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- ------ Second Child --------- -->
        <nav class="navbar navbar-expand-lg navbar-dark  bg-secondary ">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Welcome Guest</a>
                </li>

            </ul>
        </nav>

        <!-- ------ Third Child --------- -->
        <div class="bg-light">
            <h3 class="text-center">Hidden Stor</h3>
            <p class="text-center">Each day is a page in your fashion story.</p>

        </div>


        <!-- ------ Forth Child --------- -->

        <div class="row">
            <div class="col  md-10">
                <!-- Products -->

                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card ">
                            <img src="./images/jeans/jeans1.jpeg" class="card-img-top card-images" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fashion Jeans </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Card</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card ">
                            <img src="./images/shoes/shoes1.jpeg" class="card-img-top card-images" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Card</a>
                                    <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/sunglass/sunglass4.jpeg" class="card-img-top card-images" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Card</a>
                                    <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/shirt/shirt2.jpeg" class="card-img-top card-images " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Card</a>
                                    <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/shirt/shirt3.jpeg" class="card-img-top card-images " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Card</a>
                                    <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./images/shirt/shirt1.jpeg" class="card-img-top card-images " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Card</a>
                                    <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------Side Navbar ------------- -->
            <div class="col-md-2 bg-secondary  p-0">
                <!-- ----- Brands To Display -------- -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info ">
                        <a href="#" class="nav-link text-light "><h4>Delevry Brands</h4></a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-light ">Brands1</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link text-light ">Brands2</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link text-light ">Brands3</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-light ">Brands4</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link text-light ">Brands5</a>
                    </li>

                </ul>

                <!-- ----- Categories To Display -------- -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info ">
                        <a href="#" class="nav-link text-light "><h4> Categories</h4></a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-light ">Categories1</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link text-light ">Categories2</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link text-light ">Categories3</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-light ">Categories4</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link text-light ">Categories5</a>
                    </li>

                </ul>

            </div>
        </div>





        <!-- ------ Last Child --------- -->

        <div class="bg-info p-3 text-center">
            <p>All Thinks Made from 💖 By Kashish </p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>