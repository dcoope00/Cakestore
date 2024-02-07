<!DOCTYPE html>
<html lang="en">
<head>
    <title>Treats</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />
</head>
<body>
<style>
    body {
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        background-attachment: fixed;
        background-image: url("https://themes.muffingroup.com/be/icecream2/wp-content/uploads/2019/09/icecream2-sectionbg3.jpg");
        background-size: cover;
        font-family: "Titan One", -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif,
          "LuckiesGuy";
    }

    .carousel {
        border-radius: 55px 55px 55px 55px;
        overflow: hidden;
    }
    .luckiest-guy-regular {
        font-family: "Luckiest Guy", cursive;
        font-weight: 400;
        font-style: normal;
    }

    h2 {
        color: #d41442;
        font-family: "Luckiest Guy";
    }
    h3 {
        font-family: "Luckiest Guy";
        color: rgba(141, 12, 12, 0.973);
        line-height: 1px;
        margin-bottom: 30px;
    }
    .navbar-default .navbar-nav > li > a:hover {
        color: white;
        text-decoration: underline;
    }

    .navbar-default .navbar-nav > li > a {
        color: white;
        font-weight: bold;
    }

    .navbar-default {
        background-color: rgba(141, 12, 12, 0.973);
        border: none;
        border-radius: 0;
    }

    .navbar-default .navbar-nav > li.active > a,
    .navbar-default .navbar-nav > li.active > a:focus,
    .navbar-default .navbar-nav > li.active > a:hover {
        background-color: rgba(141, 12, 12, 0.973);
        color: white;
        text-decoration: underline;
    }

    .card {
        border: 2px solid #d41442;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        border-bottom: 2px solid #d41442;
    }

    .card-body {
        padding: 15px;
        background-color: white;
    }

    .btn-primary {
        background-color: #d41442;
        border-color: #d41442;
    }
</style>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="ice-cream-cone.png" style="height: 40px; width: 40px; margin-top: -10px" />
            </a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
            <li class="active"><a href="Treats.php">Treats</a></li>
            <li><a href="Hours-Locations.php">Hours & Locations</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="Customers/Customers.php">Customers</a></li>

        </ul>
    </div>
</nav>

<h2 style="margin: 20px;">Rizzy Creamery Menu</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img class="card-img-top" style="height: 500px; width: 100%" src="https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aWNlY3JlYW18ZW58MHx8MHx8fDA%3D" alt="" />
                <div class="card-body">
                    <h3 class="card-title">Strawberry Vanilla Cone</h3>
                    <p class="card-text" style="font-size:small">
                        Enjoy the best of both worlds with our Strawberry and Vanilla
                        Ice Cream Cone! Creamy vanilla and ripe strawberries come
                        together in a delicious swirl, creating a sweet and refreshing
                        treat.
                    </p>
                    <a href="#" style="background-color: #d41442; border-color: #d41442" class="btn btn-primary btn-sm">Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img class="card-img-top" style="height: 500px; width: 100%" src="https://images.unsplash.com/photo-1598268121084-c8f7126e0cef?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGljZWNyZWFtfGVufDB8fDB8fHww" alt="" />
                <div class="card-body">
                    <h3 class="card-title">Vanilla Frostaccino</h3>
                    <p class="card-text" style="font-size:small">
                        Indulge in the perfect blend of rich iced coffee and creamy vanilla ice cream with our refreshing Vanilla Frostaccino. A delightful harmony of bold coffee and sweet vanilla for a cool, satisfying treat!
                    </p>
                    <a href="#" class="btn btn-primary btn-sm" style="background-color: #d41442; border-color: #d41442">Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img class="card-img-top" style="height: 500px; width: 100%" src="https://images.unsplash.com/photo-1627222295124-f8b3fc09e47f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGljZWNyZWFtfGVufDB8fDB8fHww" alt="" />
                <div class="card-body">
                    <h3 class="card-title">Berry Bliss Parfait</h3>
                    <p class="card-text" style="font-size:small">
                        A blend of blueberries, blackberries, and creamy yogurt, creating a harmonious symphony of sweetness. Dive into layers of fruity delight with each spoonful. Pure bliss in a parfait!
                    </p>
                    <a href="#" style="background-color: #d41442; border-color: #d41442" class="btn btn-primary btn-sm">Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
