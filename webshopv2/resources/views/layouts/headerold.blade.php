
<html>
<head>
    <link href="../webshopv2/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <style type="text/css">
        img {
            width: 100px;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/workspace/webshop/view/home.php"> <img
                src="/images/kaaslogotjeee.png" class="img-responsive"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link"
                                    href="/workspace/webshop/view/home.php">Home</a></li>

            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                             href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                             aria-haspopup="true" aria-expanded="false"> Categories </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!--                    --><?php
                    //                    include '../database.php';
                    //                    $database = new Database('tljverku_db');
                    //                    $database->doSQL("SELECT * FROM category");
                    //                    $counter = 0;
                    //                    while ($row = $database->getRecord()) {
                    //                        echo "<a class='dropdown-item' href='#'>" . $row['category'] . "</a>";
                    //
                    //                        $counter ++;
                    //                        if ($counter < $database->getAmountOfResults()) {
                    //                            echo "<div class=\"dropdown-divider\"></div>";
                    //                        }
                    //                    }
                    //
                    //                    ?>
                </div>
            </li>

            <li class="nav-item"><a class="nav-link"
                                    href="/workspace/webshop/view/about.php">About</a></li>

            <li class="nav-item"><a class="nav-link"
                                    href="/workspace/webshop/view/product.php">Product</a></li>
        </ul>

        <a href="/login" class="btn btn-primary">
            {{ __('Login') }}
        </a>

        <a href="/workspace/webshop/view/register.php"
           class="btn btn-outline-success my-2 my-sm-0 mr-2" role="button">Register</a>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search"
                   placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
</body>

</html>