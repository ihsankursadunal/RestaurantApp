<html>

<head>
    <title>
        Restaurant App
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff9933;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/" style="color: #000000;">Restaurant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/" style="color: #000000;">Home</a>
                        <a class="nav-link" href="/categories" style="color: #000000;">Categories</a>
                        <a class="nav-link" href="/add" style="color: #000000;">Add</a>
                        <a class="nav-link" href="/search" style="color: #000000;">Search</a>
                        <a class="nav-link" href="/#" style="color: #000000;">Login</a>
                        <a class="nav-link" href="/#" style="color: #000000;">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <!-- <footer>
        Copy rights by Restaurant App
    </footer> -->
</body>
</html>