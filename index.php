<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My web-site</title>
    <link href="front/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"/>
    <link href="front/css/style.css" rel="stylesheet"/>
</head>
<body>
    <header class="container-fluid bg-dark-subtle">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark-subtle gap-4">
            <a class="navbar-brand" href="#">Logo</a>
            <div class="btn-group gap-3">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Frontend
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learn HTML</a></li>
                    <li><a class="dropdown-item" href="#">Learn CSS</a></li>
                    <li><a class="dropdown-item" href="#">Learn Bootstrap</a></li>
                </ul>
            </div>
            <div class="btn-group gap-3">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Backend
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Learn PHP</a></li>
                    <li><a class="dropdown-item" href="#">Learn Java</a></li>
                    <li><a class="dropdown-item" href="#">Learn Golang</a></li>
                </ul>
            </div>
            <div class="btn-group gap-3">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Services
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Login in / Sing Up</a></li>
                    <li><a class="dropdown-item" href="#">Templates</a></li>
                    <li><a class="dropdown-item" href="#">How to create</a></li>
                </ul>
            </div>
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-lg-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary custom-button-style" type="submit">Search</button>
            </form>
            <a class="btn btn-secondary custom-button-style" href="front/sign-login/register.php">
                Sign Up / Login in
            </a>
        </nav>
    </header>
    <main class="container-fluid">

    </main>
    <script src="front/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="front/scripts/js/script.js"></script>
</body>
</html>