<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UTS Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-light bg-light px-3">
    <span class="navbar-brand mb-0 h1">UTS Laravel</span>
    <button class="btn btn-outline-success" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
        ☰ Menu
    </button>
</nav>

{{-- SIDEBAR --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">UTS Laravel</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="/produk" class="nav-link">Produk</a>
            </li>
        </ul>

        <form class="d-flex mt-4">
            <input class="form-control me-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>

<div class="container text-center mt-5">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    