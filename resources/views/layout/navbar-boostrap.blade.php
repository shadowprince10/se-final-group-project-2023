<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> {{-- Bootstrap Icons --}}
</head>
<body>
    <nav class = "navbar navbar-expand-lg navbar-dark bg-danger">
        <div class = "container">
            <a class = "navbar-app-brand" href = "/"><img src = ""></a> {{-- web icon --}}
            <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navbarNav">
                aria-controls = "navbarNav" aria-expanded = "false" aria-label = "toggle navigation"><span class = "navbar-toggler-icon"></span>
            </button>
        </div>
        <div class = "collapse-navbar-collapse" id = "navbarNav">
            <ul class = "navbar-part">
                <li class = "nav-item"><a class = "nav-link {{ ($active === "home") ? 'active' : '' }}" id = "home" href = "/">Home</a></li>
                <li class = "nav-item"><a class = "nav-link {{ ($active === "catalog") ? 'active' : '' }}" id = "catalog" href = "/product/catalog">Catalog</a></li>
                <li class = "nav-item"><a class = "nav-link {{ ($active === "about-us") ? 'active' : '' }}" id = "about-us" href = "/about-us">About Us</a></li>
                <li class = "nav-item"><a class = "nav-link {{ ($active === "chat") ? 'active' : '' }}" id = "chat" href = "/chat">Chat</a></li>
                <li class = "nav-item"><a class = "nav-link {{ ($active === "cart") ? 'active' : '' }}" id = "cart" href = "/{productID}/cart">Cart</a></li>
            </ul>
            <ul class = "navbar-nav ms-auto">
                <li class = "nav-item"><a href = "/auth/register" class = "nav-link">Register/Login</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
