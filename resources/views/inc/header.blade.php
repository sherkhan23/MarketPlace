<head>
    <link rel="stylesheet" href="css/header.css">
    <!-- Bootstrap 5 -->
    <!-- Только CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap 5 end -->
    <!-- Пакет JavaScript с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row">

        <div class="col-md-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="sidebar" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">Все котегории</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="nav-link-sidebar" aria-current="page">
                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-receipt mr-3"></i>Товары
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">Action</button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white" id="nav-link-sidebar">

                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Для машины
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">Action</button>
                                </div>
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white" id="nav-link-sidebar">

                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Техника
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">Action</button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white" id="nav-link-sidebar">

                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Строительство
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Action</button>

                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white" id="nav-link-sidebar">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                            Customers
                        </a>
                    </li>
                </ul>
                <hr>

                <div class="btn-group dropright" id="nav-link-sidebar">
                    <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Еще
                    </button>
                    <div class="dropdown-menu">
                        <button class="dropdown-item" type="button">Action</button>
                    </div>
                </div>
            </div>
        </div>

{{--        2 part--}}
        <div class="col-md-9">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://blog.modalku.co.id/wp-content/uploads/2021/12/7-Ide-Jualan-Online-Paling-Laris-untuk-2022.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://i0.wp.com/blog.modalku.co.id/wp-content/uploads/2021/12/Jastip-Adalah-Bisnis-Mengasyikkan-Minim-Modal.jpg?fit=5000%2C2500&ssl=1" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img style="height: 480px" src="https://i1.wp.com/blog.modalku.co.id/wp-content/uploads/2021/10/X-Cara-Jualan-Online-Tanpa-Modal-yang-Menguntungkan.jpg?fit=5000%2C2626&ssl=1" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <header class="d-flex justify-content-start py-3">
        <ul class="nav nav-pills" id="header-2">
            <li class="nav-item"><a href="#" class="nav-link border border-warning" aria-current="page">Новые</a></li>
            <li class="nav-item"><a href="#" class="nav-link border border-warning">Популярные</a></li>
            <li class="nav-item"><a href="#" class="nav-link border border-warning">Техники</a></li>
            <li class="nav-item"><a href="#" class="nav-link border border-warning">Топ продажи</a></li>
            <li class="nav-item"><a href="#" class="nav-link border border-warning">Все для школ</a></li>
            <li class="nav-item"><a href="#" class="nav-link border border-warning">Старые товары</a></li>
            <li class="nav-item"><a href="#" class="nav-link border border-warning">Товары с высоким рейтингом</a></li>
        </ul>
    </header>
</div>

</body>
