<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <style>
      body {
        background-image: url("https://themes.muffingroup.com/be/icecream2/wp-content/uploads/2019/09/icecream2-sectionbg3.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-family: "Titan One", -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      }
      .carousel {
        border-radius: 55px 55px 55px 55px;
        overflow: hidden;
      }
      h1 {
        color: rgba(141, 12, 12, 0.973);
        
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
    </style>
    <!--  -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <img
              src="ice-cream-cone.png"
              style="height: 40px; width: 40px; margin-top: -10px"
            />
          </a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="About.php">About Us</a></li>
          <li><a href="Treats.php">Treats</a></li>
          <li><a href="Hours-Locations.php">Hours & Locations</a></li>
          <li><a href="ContactUs.php" >Contact Us</a></li>
          <li><a href="Customers/Customers.php">Customers</a></li>

        </ul>
      </div>
    </nav>

    <div class="container carousel-container">
      <h1 style="text-align: center; font-family: Luckiest Guy;">Some of our creations</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img
              src="https://cdn.pixabay.com/photo/2017/04/18/15/10/strawberry-ice-cream-2239377_1280.jpg"
              style="width: 100%; height: 600px"
            />
          </div>

          <div class="item">
            <img
              src="https://cdn.pixabay.com/photo/2018/08/16/22/59/ice-cream-3611698_1280.jpg"
              style="width: 100%; height: 600px"
            />
          </div>

          <div class="item">
            <img
              src="https://cdn.pixabay.com/photo/2017/04/03/18/41/dessert-2199271_1280.jpg"
              style="width: 100%; height: 600px"
            />
          </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <script></script>
  </body>
</html>
