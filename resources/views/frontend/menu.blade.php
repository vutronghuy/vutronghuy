<!DOCTYPE html>
<html lang="en">

<head>
    <title>menu</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="image/lo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <header>
        <a href="/" class="logo"><img src="image/logo.png" alt=""></a>
        <a href="/home" class="lote"><img src="image/lo.png" alt=""></a>
        <a href="/home" class="buger"><img src="image/king.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="/home">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>

        <div class="nav-icon">
            {{-- <a href="#"><i class='bx bx-search'></i></a> --}}
            <form action="{{ route('search') }}" method="get">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <a href="/cart"><i class='bx bx-cart'></i></a>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <a href="/login"><i class='bx bx-user'></i></a>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    <li><a class="dropdown-item" href="{{ route('index') }}">Admin</a></li>
                </ul>
            </div>

        </div>
    </header>


    <section class="main-menu">
        <div class="down-arrow">
            <a href="#bestseller" class="down"><i class='bx bxs-down-arrow-alt'></i></a>
        </div>
    </section>
    <section class="bestseller-product" id="bestseller">
        <div class="center-text">
            <h1>BestSeller <span>Products</span></h1>
        </div>

        {{-- Filter --}}
        <section class="container-fluid">

                <form method="GET" action="{{ route('menu') }}">
                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select name="category_id" class="form-control">
                            <option value="">All</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request()->input('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price_range">Price Range:</label>
                        <select name="price_range" class="form-control">
                            <option value="">All</option>
                            <option value="0-10" {{ request()->input('price_range') === '0-10' ? 'selected' : '' }}>0 - 10
                            </option>
                            <option value="10-50" {{ request()->input('price_range') === '10-50' ? 'selected' : '' }}>10 -
                                50</option>
                            <option value="50-100" {{ request()->input('price_range') === '50-100' ? 'selected' : '' }}>50 -
                                100</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sort_by">Sort By:</label>
                        <select name="sort_by" class="form-control">
                            <option value="name_asc" {{ request()->input('sort_by') === 'name_asc' ? 'selected' : '' }}>Name
                                (A - Z)</option>
                            <option value="name_desc" {{ request()->input('sort_by') === 'name_desc' ? 'selected' : '' }}>
                                Name (Z - A)</option>
                            <option value="price_asc" {{ request()->input('sort_by') === 'price_asc' ? 'selected' : '' }}>
                                Price (Low to High)</option>
                            <option value="price_desc"
                                {{ request()->input('sort_by') === 'price_desc' ? 'selected' : '' }}>Price (High to Low)
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>

                </form>

                <div class="row" style="border: none;">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card" style="border: none; box-shadow: 0 0 15px 0 rgba(0,0,0,0.2);">
                                <div class="image">
                                    <img class="card-img-top" src="/images/{{ $product->image }}" width="200px">

                                </div>
                                <div class="heart-icon">
                                    <i class='bx bx-heart'></i>
                                </div>
                                <div class="ratting1">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-category">Product ID: {{ $product->category_id }}</p>
                                    <h6 class="card-price">Price: ${{ $product->price }}</h6>
                                    <div class="menu-footer">
                                        <a href="{{ route('show', $product->id) }}" class="btn ">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


        </section>
    </section>


    <section class="contact">
        <div class="contact-info">
            <div class="second">
                <img src="image/king.png" alt="">
            </div>
            <div class="second">
                <img src="image/lo.png" alt="">
            </div>
            <div class="first-info">
                <img src="image/logo.png" alt="">

                <p>136 Ho Tung Mau Street, <br>KFC Americans 76 fantom Street</p>
                <p>024667477663</p>
                <p>fastfood24@gmail.com</p>

                <div class="social-icon">
                    <a href="/"><i class='bx bxl-facebook'></i></a>
                    <a href="/"><i class='bx bxl-twitter'></i></a>
                    <a href="/"><i class='bx bxl-instagram'></i></a>
                    <a href="/"><i class='bx bxl-youtube'></i></a>
                    <a href="/"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
            <div class="second-info">
                <h4>Support</h4>
                <p>Contact us</p>
                <p>About page</p>
                <p>Privacy</p>
                <p>Question</p>
                <p>Policy</p>

            </div>
            <div class="five">
                <h4>Subcribe</h4>
                <p>Recive updates, hot pick, bestseller</p>
                <p>See you agains</p>
            </div>
        </div>
    </section>

    <div class="end-text">
        <p>Copyright by KFC @2023 VietNam</p>
    </div>

    <script src="js/java.js"></script>
</body>

</html>
