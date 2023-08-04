
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodKurt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="tertiary-color-2 py-0 my-0">
    <nav class="navbar navbar-expand-lg primary-color position-sticky top-0" style="z-index: 99">
        <div class="container py-3">
            <a class="navbar-brand text-white fw-bold" href="/">FOODKURT</a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">

            <ul class="navbar-nav justify-content-center align-items-center gap-3 mt-lg-0 mt-5">
                <li class="nav-item w-100">
                    <a class="nav-link text-white" href="/products">Products</a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link text-white" href="/drinks">Drinks</a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link text-white" href="/snacks">Snacks</a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link text-white" href="/sweets">Sweets</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0 d-lg-flex d-none gap-2" action="/products" method="GET">
                <input class="form-control mr-sm-2 tertiary-color-2 text-dark border-0" value="{{ request()->query('search') !== '' ? request()->query('search') : '' }}" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn text-white my-2 my-sm-0 secondary-color-1 border-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav justify-content-center align-items-lg-center align-items-start gap-3 mt-lg-0 mt-3">
                 <!-- check if user already logged in -->
                 <x-nav :cart="$cart"/>
            </ul>

            <form class="form-inline my-2 my-lg-0 d-lg-none d-flex gap-2" action="/products" method="GET">
                <input class="form-control mr-sm-2 tertiary-color-2 text-dark border-0" value="{{ request()->query('search') !== '' ? request()->query('search') : '' }}" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn text-white my-2 my-sm-0 secondary-color-1 border-0" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>